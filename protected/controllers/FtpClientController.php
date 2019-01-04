<?php
/**
 *
 *   Copyright © 2010-2017 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/

class FtpClientController extends Controller
{
    public $layout='//layouts/column2';

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

    public function accessRules()
    {
        return array(
            array((Yii::app()->params['ftp_client_disabled'] === true) ? 'deny' : 'allow',
                'actions'=>array('index', 'login', 'browse', 'createAccount'),
                'users'=>array('@'),
            ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }

    public function actionIndex($id = 0)
    {
        $this->redirect(array('ftpClient/login', 'id'=>(int)$id));
    }

    public function getFtpServer($server)
    {
        $daemon = Daemon::model()->findByPk((int)$server->daemon_id);
        if (!$daemon)
            throw new CHttpException(404, Yii::t('mc', 'No daemon found for this server.'));
        if (!isset($daemon->ftp_ip) || !isset($daemon->ftp_port))
            throw new CHttpException(500, Yii::t('mc', 'Daemon database not up to date, please run the Multicraft installer.'));
        return array('ip'=>$daemon->ftp_ip, 'port'=>$daemon->ftp_port);
    }

    public function getUsername($server)
    {
        return Yii::app()->user->name.'.'.$server->id;
    }

    public function net2FtpDefines()
    {
        define("NET2FTP_APPLICATION_ROOTDIR", dirname(__FILE__).'/../extensions/net2ftp/');
        if     (isset($_SERVER["SCRIPT_NAME"]) == true) { define("NET2FTP_APPLICATION_ROOTDIR_URL", dirname($_SERVER["SCRIPT_NAME"])); }
        elseif (isset($_SERVER["PHP_SELF"]) == true)    { define("NET2FTP_APPLICATION_ROOTDIR_URL", dirname($_SERVER["PHP_SELF"])); }
    }

    public function actionLogin($id = 0)
    {
        $server = Server::model()->findByPk((int)$id);
        if (!$server)
            throw new CHttpException(404, Yii::t('mc', 'The requested page does not exist.'));
        if (isset($_POST['password']))
        {
            $pw = $_POST['password'];
            $this->net2FtpDefines();
            global $net2ftp_result, $net2ftp_settings, $net2ftp_globals;
            require_once(dirname(__FILE__).'/../extensions/net2ftp/includes/main.inc.php');
            require_once(dirname(__FILE__).'/../extensions/net2ftp/includes/authorizations.inc.php');
            $ftpSv = $this->getFtpServer($server);
            if (strlen($pw))
            {
                $_SESSION['net2ftp_password_encrypted'] = encryptPassword($pw);
                $sessKey = 'net2ftp_password_encrypted_'.$ftpSv['ip'].$this->getUsername($server);
                unset($_SESSION[$sessKey]);
            }
            Yii::log('Logging in to FTP server for server '.$server->id);
            $this->redirect(array('ftpClient/browse', 'id'=>$server->id));
        }

        $daemon = Daemon::model()->findByPk($server->daemon_id);
        $permissions = Yii::app()->bridgeDb->createCommand('select `perms` from `ftp_user_server` where `server_id`=?'
            .' and `user_id`=(select `id` from `ftp_user` where `name`=?)')->queryScalar(array($server->id, Yii::app()->user->name));

        $this->render('login',array(
            'server'=>$server,
            'havePw'=>isset($_SESSION['net2ftp_password_encrypted']),
            'daemon'=>$daemon,
            'permissions'=>$permissions,
        ));
    }

    public function actionCreateAccount($id)
    {
        if(!Yii::app()->request->isPostRequest)
            Yii::app()->user->deny();
        Yii::app()->user->can($id, 'manage_users', true);
        $server = Server::model()->findByPk((int)$id);
        if (!$server)
            throw new CHttpException(404, Yii::t('mc', 'The requested page does not exist.'));
        $cfg = ServerConfig::model()->findByPk($server->id);
        if (Yii::app()->user->isStaff() || (Yii::app()->user->can($id, 'manage_ftp') && $cfg->user_ftp))
            Yii::app()->user->model->setServerFtpAccess($server->id, 'rw');
        else
            Yii::app()->user->deny();
        $this->redirect(array('ftpClient/login', 'id'=>$server->id));
    }

    public function actionBrowse($id, $partial = false)
    {
        $server = Server::model()->findByPk((int)$id);
        if (!$server)
            throw new CHttpException(404, Yii::t('mc', 'The requested page does not exist.'));

        $this->net2FtpDefines();
        global $net2ftp_result, $net2ftp_settings, $net2ftp_globals;
        require_once(dirname(__FILE__).'/../extensions/net2ftp/includes/main.inc.php');
        require_once(dirname(__FILE__).'/../extensions/net2ftp/includes/errorhandling.inc.php');

        $ftpSv = $this->getFtpServer($server);
        $sessKey = 'net2ftp_password_encrypted_'.$ftpSv['ip'].$this->getUsername($server);
        if (!isset($_SESSION[$sessKey]))
        {
            if (!isset($_SESSION['net2ftp_password_encrypted']))
            {
                Yii::log('No valid FTP session found, redirecting to login form');
                $this->redirect(array('ftpClient/login', 'id'=>$server->id));
            }
            $_SESSION[$sessKey] = $_SESSION['net2ftp_password_encrypted'];
        }
        
        set_error_handler('net2ftpErrorHandler');

        if (!@$_REQUEST['state'])
        {
            $net2ftp_globals['state'] = 'browse';
            $net2ftp_globals['state2'] = 'main';
        }
        else
        {
            $net2ftp_globals['state'] = $_REQUEST['state'];
            $net2ftp_globals['state2'] = $_REQUEST['state2'];
        }

        $net2ftp_globals['ftpserver'] = $ftpSv['ip'];
        $net2ftp_globals['ftpserverport'] = $ftpSv['port'];
        $net2ftp_globals['language'] = Yii::app()->language;
        $net2ftp_globals['username'] = $this->getUsername($server);
        $net2ftp_globals['sslconnect'] = !!Yii::app()->params['ftp_client_ssl'];
        $net2ftp_globals['passivemode'] = Yii::app()->params['ftp_client_passive'] ? 'yes' : 'no';
        $net2ftp_globals['action_url'] = CHtml::normalizeUrl(array('browse', 'id'=>$server->id, 'partial'=>$partial));
        net2ftp("sendHttpHeaders");
        //print_r($net2ftp_globals);

        if ($net2ftp_result["success"] == false)
            throw new CHttpException(404, Yii::t('mc', 'Error in the FTP client module.'));

        ob_start();
        net2ftp("printJavascript");
        $js = ob_get_contents();
        ob_clean();
        net2ftp("printCss");
        $css = ob_get_contents();
        ob_clean();
        net2ftp("printBodyOnload");
        $onload = ob_get_contents();
        ob_clean();
        global $controller;
        $controller = $this;
        net2ftp("printBody");
        $body = ob_get_contents();
        ob_clean();

        if ($net2ftp_result["success"] == false)
        {
            require_once($net2ftp_globals["application_rootdir"]."/skins/"
                .$net2ftp_globals["skin"]."/error.template.php");
            $body = ob_get_contents();
            ob_clean();
        }
        
        $func = $partial ? 'renderPartial' : 'render';
        $this->$func('browse',array(
            'js'=>$js,
            'css'=>$css,
            'onload'=>$onload,
            'body'=>$body,
            'server'=>$server,
        ));
    }


}
