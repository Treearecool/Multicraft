<?php
/**
 *
 *   Copyright © 2010-2017 by xhost.ch GmbH
 *
 *   All rights reserved.
 *
 **/

Yii::import('zii.widgets.CMenu');

class Menu extends CMenu
{
    protected function renderMenuItem($item)
    {
        if (isset($item['icon']))
            $item['label'] .= Theme::img('icons/'.$item['icon'].'.png');
        return parent::renderMenuItem($item);
    }
}



