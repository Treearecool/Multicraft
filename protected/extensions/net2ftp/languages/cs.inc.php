<?php

//   -------------------------------------------------------------------------------
//  |                  net2ftp: a web based FTP client                              |
//  |              Copyright (c) 2003-2013 by David Gartner                         |
//  |                                                                               |
//  | This program is free software; you can redistribute it and/or                 |
//  | modify it under the terms of the GNU General Public License                   |
//  | as published by the Free Software Foundation; either version 2                |
//  | of the License, or (at your option) any later version.                        |
//  |                                                                               |
//   -------------------------------------------------------------------------------

//   -------------------------------------------------------------------------------
//  | For credits, see the credits.txt file                                         |
//   -------------------------------------------------------------------------------
//  |                                                                               |
//  |                              INSTRUCTIONS                                     |
//  |                                                                               |
//  |  The messages to translate are listed below.                                  |
//  |  The structure of each line is like this:                                     |
//  |     $message["Hello world!"] = "Hello world!";                                |
//  |                                                                               |
//  |  Keep the text between square brackets [] as it is.                           |
//  |  Translate the 2nd part, keeping the same punctuation and HTML tags.          |
//  |                                                                               |
//  |  The English message, for example                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is written in PHP!";    |
//  |  should become after translation:                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp est ecrit en PHP!";     |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is geschreven in PHP!"; |
//  |                                                                               |
//  |  Note that the variable starts with a dollar sign $, that the value is        |
//  |  enclosed in double quotes " and that the line ends with a semi-colon ;       |
//  |  Be careful when editing this file, do not erase those special characters.    |
//  |                                                                               |
//  |  Some messages also contain one or more variables which start with a percent  |
//  |  sign, for example %1\$s or %2\$s. The English message, for example           |
//  |     $messages[...] = ["The file %1\$s was copied to %2\$s "]                  |
//  |  should becomes after translation:                                            |
//  |     $messages[...] = ["Le fichier %1\$s a été copié vers %2\$s "]             |
//  |                                                                               |
//  |  When a real percent sign % is needed in the text it is entered as %%         |
//  |  otherwise it is interpreted as a variable. So no, it's not a mistake.        |
//  |                                                                               |
//  |  Between the messages to translate there is additional PHP code, for example: |
//  |      if ($net2ftp_globals["state2"] == "rename") {           // <-- PHP code  |
//  |          $net2ftp_messages["Rename file"] = "Rename file";   // <-- message   |
//  |      }                                                       // <-- PHP code  |
//  |  This code is needed to load the messages only when they are actually needed. |
//  |  There is no need to change or delete any of that PHP code; translate only    |
//  |  the message.                                                                 |
//  |                                                                               |
//  |  Thanks in advance to all the translators!                                    |
//  |  David.                                                                       |
//  |                                                                               |
//   -------------------------------------------------------------------------------


// -------------------------------------------------------------------------
// Language settings
// -------------------------------------------------------------------------

// HTML lang attribute
$net2ftp_messages["en"] = "cs";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "windows-1250";


// -------------------------------------------------------------------------
// Status messages
// -------------------------------------------------------------------------

// When translating these messages, keep in mind that the text should not be too long
// It should fit in the status textbox

$net2ftp_messages["Connecting to the FTP server"] = "Připojování k FTP serveru";
$net2ftp_messages["Logging into the FTP server"] = "Logging into the FTP server";
$net2ftp_messages["Setting the passive mode"] = "Setting the passive mode";
$net2ftp_messages["Getting the FTP system type"] = "Getting the FTP system type";
$net2ftp_messages["Changing the directory"] = "Changing the directory";
$net2ftp_messages["Getting the current directory"] = "Getting the current directory";
$net2ftp_messages["Getting the list of directories and files"] = "Získávání seznamu adresářů a souborů";
$net2ftp_messages["Parsing the list of directories and files"] = "Parsing the list of directories and files";
$net2ftp_messages["Logging out of the FTP server"] = "Logging out of the FTP server";
$net2ftp_messages["Getting the list of directories and files"] = "Získávání seznamu adresářů a souborů";
$net2ftp_messages["Printing the list of directories and files"] = "Vypisování seznamu adresářů a souborů";
$net2ftp_messages["Processing the entries"] = "Zpracovávání záznamů";
$net2ftp_messages["Processing entry %1\$s"] = "Processing entry %1\$s";
$net2ftp_messages["Checking files"] = "Kontrolování souborů";
$net2ftp_messages["Transferring files to the FTP server"] = "Přenášení souborů na FTP server";
$net2ftp_messages["Decompressing archives and transferring files"] = "Rozbalování archivů a přenášení souborů";
$net2ftp_messages["Searching the files..."] = "Prohledávání souborů...";
$net2ftp_messages["Uploading new file"] = "Přenášení nového souboru";
$net2ftp_messages["Reading the file"] = "Reading the file";
$net2ftp_messages["Parsing the file"] = "Parsing the file";
$net2ftp_messages["Reading the new file"] = "Čtení nového souboru";
$net2ftp_messages["Reading the old file"] = "Čtení starého souboru";
$net2ftp_messages["Comparing the 2 files"] = "Porovnávání dvou souborů";
$net2ftp_messages["Printing the comparison"] = "Vypisování porovnání";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Sending FTP command %1\$s of %2\$s";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Getting archive %1\$s of %2\$s from the FTP server";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Creating a temporary directory on the FTP server";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Setting the permissions of the temporary directory";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Copying the net2ftp installer script to the FTP server";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Skript skončil za %1\$s sekund";
$net2ftp_messages["Script halted"] = "Skript zastavil";

// Used on various screens
$net2ftp_messages["Please wait..."] = "Prosím čekejte...";


// -------------------------------------------------------------------------
// index.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Unexpected state string: %1\$s. Exiting.";
$net2ftp_messages["This beta function is not activated on this server."] = "This beta function is not activated on this server.";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "This function has been disabled by the Administrator of this website.";


// -------------------------------------------------------------------------
// /includes/browse.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Your root directory <b>%1\$s</b> does not exist or could not be selected.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist.";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted.";
$net2ftp_messages["Execute %1\$s in a new window"] = "Spustit %1\$s v novém okně";


// -------------------------------------------------------------------------
// /includes/main.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please select at least one directory or file!"] = "Vyberte prosím alespoň jeden adresář nebo soubor!";


// -------------------------------------------------------------------------
// /includes/authorizations.inc.php
// -------------------------------------------------------------------------

// checkAuthorization()
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP server <b>%1\$s</b> není na seznamu povolených serverů.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP server <b>%1\$s</b> je na seznamu zakázaných serverů.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "Port %1\$s FTP serveru nemůže být použit.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Vaše IP adresa (%1\$s) je na seznamu zakázaných adres.";

// isAuthorizedDirectory()
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Table net2ftp_users contains duplicate rows.";

// checkAdminUsernamePassword()
$net2ftp_messages["You did not enter your Administrator username or password."] = "You did not enter your Administrator username or password.";
$net2ftp_messages["Wrong username or password. Please try again."] = "Wrong username or password. Please try again.";

// -------------------------------------------------------------------------
// /includes/consumption.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to determine your IP address."] = "Nepodařilo se zjistit vaši IP adresu.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Tabulka net2ftp_log_consumption_ipaddress obsahuje duplicitní záznamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "Tabulka net2ftp_log_consumption_ftpserver obsahuje duplicitní záznamy.";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "Proměnná <b>consumption_ipaddress_datatransfer</b> není číselná.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "Tabulka net2ftp_log_consumption_ipaddress nemohla být aktualizována.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "Tabulka net2ftp_log_consumption_ipaddress obsahuje duplicitní záznamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "Tabulka net2ftp_log_consumption_ftpserver nemohla být aktualizována.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Tabulka net2ftp_log_consumption_ftpserver obsahuje duplicitní záznamy.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";


// -------------------------------------------------------------------------
// /includes/database.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";


// -------------------------------------------------------------------------
// /includes/errorhandling.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["An error has occured"] = "Došlo k chybě";
$net2ftp_messages["Go back"] = "Přejít zpět";
$net2ftp_messages["Go to the login page"] = "Přejít na přihlašovací stránku";


// -------------------------------------------------------------------------
// /includes/filesystem.inc.php
// -------------------------------------------------------------------------

// ftp_openconnection()
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nepodařilo se připojit k FTP serveru <b>%1\$s</b> na portu <b>%2\$s</b>.<br /><br />Víte jistě, že se jedná o adresu FTP serveru? Ta se často liší od adresy HTTP (webového) serveru. Pro získání pomoci prosím kontaktujte odbornou pomoc svého ISP nebo systémového administrátora.<br />";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nepodařilo se přihlásit k FTP serveru <b>%1\$s</b> pod uživatelským jménem <b>%2\$s</b>.<br /><br />Jste si jist, že je uživatelské jméno a heslo správné? Pro získání pomoci prosím kontaktujte odbornou pomoc svého ISP nebo systémového administrátora.<br />";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Nepodařilo se přepnout do pasivního režimu na FTP serveru <b>%1\$s</b>.";

// ftp_openconnection2()
$net2ftp_messages["Unable to connect to the second (target) FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the second (target) FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nepodařilo se připojit ke druhému (cílovému) FTP serveru <b>%1\$s</b> na portu <b>%2\$s</b>.<br /><br />.Víte určitě, že se jedná o adresu druhého (cílového) FTP serveru? Ta se často liší od adresy HTTP (webového) serveru. Pro získání pomoci prosím kontaktujte odbornou pomoc svého ISP nebo systémového administrátora.<br />";
$net2ftp_messages["Unable to login to the second (target) FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nepodařilo se přihlásit ke druhému (cílovému) FTP serveru <b>%1\$s</b> pod uživatelským jménem <b>%2\$s</b>.<br /><br />. Jste si jisti, že zadané uživatelské jméno a heslo jsou správně? Pro získání pomoci prosím kontaktujte odbornou pomoc svého ISP nebo systémového administrátora.<br />";
$net2ftp_messages["Unable to switch to the passive mode on the second (target) FTP server <b>%1\$s</b>."] = "Nepodařilo se přepnout do pasivního režimu na druhém (cílovém) FTP serveru <b>%1\$s</b>.";

// ftp_myrename()
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Nepodařilo se přejmenovat adresář nebo soubor <b>%1\$s</b> na <b>%2\$s</b>";

// ftp_mychmod()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Nepodařilo se vykonat serverový příkaz <b>%1\$s</b>. Vezměte prosím na vědomí, že příkaz CHMOD je k dispozici pouze na Unixových FTP serverech a ne na FTP serverech pod Windows.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Práva adresáře <b>%1\$s</b> byla v pořádku změněna na <b>%2\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Processing entries within directory <b>%1\$s</b>:";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Práva souboru <b>%1\$s</b> byla v pořádku změněna na <b>%2\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "Všechny označené adresáře a soubory byly zpracovány.";

// ftp_rmdir2()
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Nepodařilo se smazat adresář <b>%1\$s</b>";

// ftp_delete2()
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Nepodařilo se smazat soubor <b>%1\$s</b>";

// ftp_newdirectory()
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Nepodařilo se vytvořit adresář <b>%1\$s</b>";

// ftp_readfile()
$net2ftp_messages["Unable to create the temporary file"] = "Nepodařilo se vytvořit dočasný soubor";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Nepodařilo se získat soubor <b>%1\$s</b> z FTP serveru a uložit ho do dočasného souboru <b>%2\$s</b>.<br />Zkontrolujte oprávnění adresáře %3\$s.<br />";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Nepodařilo se otevřít dočasný soubor. Zkontrolujte oprávnění adresáře %1\$s.";
$net2ftp_messages["Unable to read the temporary file"] = "Nepodařilo se přečíst dočasný soubor";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Nepodařilo se uzavřít dočasný soubor";
$net2ftp_messages["Unable to delete the temporary file"] = "Nepodařilo se smazat dočasný soubor";

// ftp_writefile()
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Nepodařilo se vytvořit dočasný soubor. Zkontrolujte oprávnění adresáře %1\$s.";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Nepodařilo se otevřít dočasný soubor. Zkontrolujte oprávnění adresáře %1\$s.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Nepodařilo se zapsat řetězec do dočasného souboru <b>%1\$s</b>.<br />Zkontrolujte oprávnění adresáře %2\$s.";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Nepodařilo se uzavřít dočasný soubor";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Nepodařilo se nahrát soubor <b>%1\$s</b> na FTP server.<br />Možná nemáte práva zápisu do daného adresáře.";
$net2ftp_messages["Unable to delete the temporary file"] = "Nepodařilo se smazat dočasný soubor";

// ftp_copymovedelete()
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Zpracování adresáře <b>%1\$s</b>";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "Cílový adresář <b>%1\$s</b> je stejný jako zdrojový adresář <b>%2\$s</b> nebo je jeho podadresářem, tento adresář proto bude přeskočen";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Nepodařilo se vytvořit podadresář <b>%1\$s</b>. Možná už existuje. Pokračuje se v kopírování/přesouvání...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "The directory <b>%1\$s</b> could not be selected, so this directory will be skipped";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Nepodařilo se smazat podadresář <b>%1\$s</b> - možná není prázdný";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Podadresář <b>%1\$s</b> byl smazán";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Podadresář <b>%1\$s</b> byl smazán";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Zpracování adresáře <b>%1\$s</b> bylo dokončeno";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "Cílové umístění souboru <b>%1\$s</b> je stejné jako zdrojové, proto bude tento soubor přeskočen";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The file <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "The file <b>%1\$s</b> is too big to be copied, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "The file <b>%1\$s</b> is too big to be moved, aborting the move";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Nepodařilo se zkopírovat soubor <b>%1\$s</b>";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Unable to move the file <b>%1\$s</b>, aborting the move";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Soubor <b>%1\$s</b> byl přesunut";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Nepodařilo se smazat soubor <b>%1\$s</b>";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Soubor <b>%1\$s</b> byl smazán";
$net2ftp_messages["All the selected directories and files have been processed."] = "Všechny označené adresáře a soubory byly zpracovány.";

// ftp_processfiles()

// ftp_getfile()
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Nepodařilo se zkopírovat vzdálený soubor <b>%1\$s</b> do místního v FTP režimu <b>%2\$s</b>";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Nepodařilo se smazat soubor <b>%1\$s</b>";

// ftp_putfile()
$net2ftp_messages["The file is too big to be transferred"] = "The file is too big to be transferred";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Denní limit dosažen: soubor <b>%1\$s</b> nebude přenesen";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Nepodařilo se zkopírovat místní soubor do vzdáleného souboru <b>%1\$s</b> v FTP režimu <b>%2\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Nepodařilo se smazat místní soubor";

// ftp_downloadfile()
$net2ftp_messages["Unable to delete the temporary file"] = "Nepodařilo se smazat dočasný soubor";
$net2ftp_messages["Unable to send the file to the browser"] = "Nepodařilo se odeslat soubor prohlížeči";

// ftp_zip()
$net2ftp_messages["Unable to create the temporary file"] = "Nepodařilo se vytvořit dočasný soubor";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Soubor ZIP byl na FTP server uložen jako <b>%1\$s</b>";
$net2ftp_messages["Requested files"] = "Požadované soubory";

$net2ftp_messages["Dear,"] = "Vážení,";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Někdo požádal o poslání souborů v příloze na vaši e-mailovou adresu (%1\$s).";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Pokud o tom nic nevíte nebo dotyčné osobě nedůvěřujete, tak prosím tento e-mail smažte, aniž byste Zip soubor v příloze otevírali.";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Pokud Zip soubor neotevřete, nemohou soubory uvnitř poškodit váš počítač.";
$net2ftp_messages["Information about the sender: "] = "Informace o odesílateli: ";
$net2ftp_messages["IP address: "] = "IP adresa: ";
$net2ftp_messages["Time of sending: "] = "Čas odeslání: ";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Posláno aplikací net2ftp nainstalovanou na tomto webovém serveru: ";
$net2ftp_messages["Webmaster's email: "] = "E-mail webmastera: ";
$net2ftp_messages["Message of the sender: "] = "Zpráva odesílatele: ";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp je volný software, uvolněný pod licencí GNU/GPL. Pro více informací navštivte http://www.net2ftp.com.";

$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Soubor ZIP byl odeslán na adresu <b>%1\$s</b>.";

// acceptFiles()
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Soubor <b>%1\$s</b> je moc velký. Tento soubor nebude nahrán.";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded.";
$net2ftp_messages["Could not generate a temporary file."] = "Nepodařilo se vytvořit dočasný soubor.";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Soubor <b>%1\$s</b> nemůže být přesunut";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Soubor <b>%1\$s</b> je v pořádku";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Nepodařilo se přesunout nahraný soubor do dočasného adresáře.<br /><br />Administrátor tohoto webového serveru musí na adresář net2ftp /temp provést <b>chmod 777</b>.";
$net2ftp_messages["You did not provide any file to upload."] = "Neposkytl jste žádný soubor, který se má nahrát";

// ftp_transferfiles()
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Soubor <b>%1\$s</b> nemohl být přenesen na FTP server";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Soubor <b>%1\$s</b> byl na FTP server přenesen v režimu <b>%2\$s</b>";
$net2ftp_messages["Transferring files to the FTP server"] = "Přenášení souborů na FTP server";

// ftp_unziptransferfiles()
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Zpracování archivu č. %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "Archiv <b>%1\$s</b> nebyl zpracován, protože příponu jeho souboru se nepodařilo rozpoznat. Momentálně jsou podporovány pouze archivy zip, tar, tgz a gz.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Unable to extract the files and directories from the archive";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Created directory %1\$s"] = "Created directory %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Could not create directory %1\$s";
$net2ftp_messages["Copied file %1\$s"] = "Copied file %1\$s";
$net2ftp_messages["Could not copy file %1\$s"] = "Could not copy file %1\$s";
$net2ftp_messages["Unable to delete the temporary directory"] = "Unable to delete the temporary directory";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Unable to delete the temporary file %1\$s";

// ftp_mysite()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Nepodařilo se vykonat příkaz serveru <b>%1\$s</b>";

// shutdown()
$net2ftp_messages["Your task was stopped"] = "Vaše úloha byla zastavena";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "Úloha, kterou jste chtěli pomocí net2ftp provést, trvala více než povolených %1\$s sekund, a proto byla zastavena.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Tento časový limit zaručuje spravedlivé využití webového serveru všemi uživateli.";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Pokuste se vaše úlohy rozdělit na menší části: omezte výběr souborů a vynechejte ty největší.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Pokud opravdu potřebujete, aby net2ftp dokázalo zpracovat náročné dlouhotrvající úlohy, zvažte instalaci net2ftp na vlastním serveru.";

// SendMail()
$net2ftp_messages["You did not provide any text to send by email!"] = "Neuvedl jste žádný text, který by se měl poslat e-mailem!";
$net2ftp_messages["You did not supply a From address."] = "Neuvedl jste adresu odesílatele.";
$net2ftp_messages["You did not supply a To address."] = "Neuvedl jste adresu příjemce.";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "Kvůli technickým problémům nebylo možné odeslat e-mail na adresu <b>%1\$s</b>.";

// tempdir2()
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";

// -------------------------------------------------------------------------
// /includes/logging.inc.php
// -------------------------------------------------------------------------
// logAccess(), logLogin(), logError()
$net2ftp_messages["Unable to execute the SQL query."] = "Unable to execute the SQL query.";
$net2ftp_messages["Unable to open the system log."] = "Unable to open the system log.";
$net2ftp_messages["Unable to write a message to the system log."] = "Unable to write a message to the system log.";

// getLogStatus(), putLogStatus()
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Table net2ftp_log_status contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Table net2ftp_log_status could not be updated.";

// rotateLogs()
$net2ftp_messages["The log tables were renamed successfully."] = "The log tables were renamed successfully.";
$net2ftp_messages["The log tables could not be renamed."] = "The log tables could not be renamed.";
$net2ftp_messages["The log tables were copied successfully."] = "The log tables were copied successfully.";
$net2ftp_messages["The log tables could not be copied."] = "The log tables could not be copied.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "The oldest log table was dropped successfully.";
$net2ftp_messages["The oldest log table could not be dropped."] = "The oldest log table could not be dropped.";


// -------------------------------------------------------------------------
// /includes/registerglobals.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please enter your username and password for FTP server "] = "Prosím zadejte své přihlašovací jméno a heslo k FTP serveru ";
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "Nevyplnili jste přihlašovací informace do vyskakovacího okénka.<br />Níže klikněte na \"Přejít na přihlašovací stránku\".";
$net2ftp_messages["Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page."] = "Přístup k Administračnímu panelu net2ftp je zakázaný, protože v souboru settings.inc.php nebylo nastaveno žádné heslo. Vložte heslo do tohoto souboru a aktualizujte tuto stránku.";
$net2ftp_messages["Please enter your Admin username and password"] = "Zadejte prosím své administrátorské uživatelské jméno a heslo"; 
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "Nevyplnili jste přihlašovací informace do vyskakovacího okénka.<br />Níže klikněte na \"Přejít na přihlašovací stránku\".";
$net2ftp_messages["Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php."] = "Šptané uživatelské jméno nebo heslo pro Administrační panel net2ftp. Uživatelské jméno a heslo může být nastaveno v souboru settings.inc.php.";


// -------------------------------------------------------------------------
// /skins/skins.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Blue"] = "Modrá";
$net2ftp_messages["Grey"] = "Šedá";
$net2ftp_messages["Black"] = "Černá";
$net2ftp_messages["Yellow"] = "Žlutá";
$net2ftp_messages["Pastel"] = "Pastelová";

// getMime()
$net2ftp_messages["Directory"] = "Adresář";
$net2ftp_messages["Symlink"] = "Symlink" ;
$net2ftp_messages["ASP script"] = "ASP skript";
$net2ftp_messages["Cascading Style Sheet"] = "Kaskádový styl";
$net2ftp_messages["HTML file"] = "HTML soubor";
$net2ftp_messages["Java source file"] = "Zdrojový soubor Java";
$net2ftp_messages["JavaScript file"] = "soubor JavaScript";
$net2ftp_messages["PHP Source"] = "PHP zdrojový kód";
$net2ftp_messages["PHP script"] = "PHP skript";
$net2ftp_messages["Text file"] = "Textový soubor";
$net2ftp_messages["Bitmap file"] = "Bitmapa";
$net2ftp_messages["GIF file"] = "Obrázek GIF";
$net2ftp_messages["JPEG file"] = "Obrázek JPEG";
$net2ftp_messages["PNG file"] = "Obrázek PNG";
$net2ftp_messages["TIF file"] = "Obrázek TIF";
$net2ftp_messages["GIMP file"] = "Obrázek GIMP";
$net2ftp_messages["Executable"] = "Spustitelný soubor";
$net2ftp_messages["Shell script"] = "Shellovský skript";
$net2ftp_messages["MS Office - Word document"] = "MS Office - dokument Word";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - tabulka Excel";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - prezentace PowerPoint";
$net2ftp_messages["MS Office - Access database"] = "MS Office - databáze Access";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - kresba Visio";
$net2ftp_messages["MS Office - Project file"] = "MS Office - projekt aplikace Project";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - dokument Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - šablona Writer 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - tabulka Calc 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - šablona Calc 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - dokument Draw 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - šablona Draw 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - prezentace Impress 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - šablona Impress 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - globální dokument Writer 6.0";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - dokument Math 6.0";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - dokument StarWriter 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - globální dokument StarWriter 5.x";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - tabulka StarCalc 5.x";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - dokument StarDraw 5.x";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - prezentace StarImpress 5.x";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - soubor StarImpress Packed 5.x";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - dokument StarMath 5.x";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - dokument StarChart 5.x";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - soubor pošty StarMail 5.x";
$net2ftp_messages["Adobe Acrobat document"] = "dokument Adobe Acrobat";
$net2ftp_messages["ARC archive"] = "Archiv ARC";
$net2ftp_messages["ARJ archive"] = "Archiv ARJ";
$net2ftp_messages["RPM"] = "RPM" ;
$net2ftp_messages["GZ archive"] = "Archiv GZ";
$net2ftp_messages["TAR archive"] = "Archiv TAR";
$net2ftp_messages["Zip archive"] = "Archiv Zip";
$net2ftp_messages["MOV movie file"] = "Video MOV";
$net2ftp_messages["MPEG movie file"] = "Video MPEG";
$net2ftp_messages["Real movie file"] = "Video Real";
$net2ftp_messages["Quicktime movie file"] = "Video Quicktime";
$net2ftp_messages["Shockwave flash file"] = "Shockwave Flash";
$net2ftp_messages["Shockwave file"] = "Soubor Shockwave";
$net2ftp_messages["WAV sound file"] = "Zvuk WAV";
$net2ftp_messages["Font file"] = "Soubor fontu";
$net2ftp_messages["%1\$s File"] = "Soubor %1\$s";
$net2ftp_messages["File"] = "Soubor";

// getAction()
$net2ftp_messages["Back"] = "Zpět";
$net2ftp_messages["Submit"] = "Odeslat";
$net2ftp_messages["Refresh"] = "Obnovit";
$net2ftp_messages["Details"] = "Detaily";
$net2ftp_messages["Icons"] = "Ikony";
$net2ftp_messages["List"] = "Seznam";
$net2ftp_messages["Logout"] = "Odhlásit";
$net2ftp_messages["Help"] = "Nápověda";
$net2ftp_messages["Bookmark"] = "Oblíbené";
$net2ftp_messages["Save"] = "Uložit";
$net2ftp_messages["Default"] = "Výchozí";


// -------------------------------------------------------------------------
// /skins/[skin]/header.template.php and footer.template.php
// -------------------------------------------------------------------------
$net2ftp_messages["Help Guide"] = "Help Guide";
$net2ftp_messages["Forums"] = "Forums";
$net2ftp_messages["License"] = "Licence";
$net2ftp_messages["Powered by"] = "Běží díky";
$net2ftp_messages["You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions."] = "You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions.";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["Mobile"] = "Mobile";

// -------------------------------------------------------------------------
// Admin module
if ($net2ftp_globals["state"] == "admin") {
// -------------------------------------------------------------------------

// /modules/admin/admin.inc.php
$net2ftp_messages["Admin functions"] = "Administrátorské funkce";

// /skins/[skin]/admin1.template.php
$net2ftp_messages["Version information"] = "Informace o verzi";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "This version of net2ftp is up-to-date.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server.";
$net2ftp_messages["Logging"] = "Záznamy";
$net2ftp_messages["Date from:"] = "Datum od:";
$net2ftp_messages["to:"] = "do:";
$net2ftp_messages["Empty logs"] = "Vyprázdnit záznamy";
$net2ftp_messages["View logs"] = "Zobrazit záznamy";
$net2ftp_messages["Go"] = "OK";
$net2ftp_messages["Setup MySQL tables"] = "Nastavit MySQL tabulky";
$net2ftp_messages["Create the MySQL database tables"] = "Vytvořit databázové MySQL tabulky";

} // end admin

// -------------------------------------------------------------------------
// Admin_createtables module
if ($net2ftp_globals["state"] == "admin_createtables") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_createtables.inc.php
$net2ftp_messages["Admin functions"] = "Administrátorské funkce";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "The handle of file %1\$s could not be opened.";
$net2ftp_messages["The file %1\$s could not be opened."] = "The file %1\$s could not be opened.";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "The handle of file %1\$s could not be closed.";
$net2ftp_messages["The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered."] = "The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Unable to select the database <b>%1\$s</b>.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "The SQL query nr <b>%1\$s</b> could not be executed.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "The SQL query nr <b>%1\$s</b> was executed successfully.";

// /skins/[skin]/admin_createtables1.template.php
$net2ftp_messages["Please enter your MySQL settings:"] = "Please enter your MySQL settings:";
$net2ftp_messages["MySQL username"] = "MySQL uživatelské jméno";
$net2ftp_messages["MySQL password"] = "MySQL heslo";
$net2ftp_messages["MySQL database"] = "MySQL databáze";
$net2ftp_messages["MySQL server"] = "MySQL server" ;
$net2ftp_messages["This SQL query is going to be executed:"] = "Vykoná se tento SQL dotaz:";
$net2ftp_messages["Execute"] = "Spuštění";

// /skins/[skin]/admin_createtables2.template.php
$net2ftp_messages["Settings used:"] = "Použitá nastavení:";
$net2ftp_messages["MySQL password length"] = "Délka MySQL hesla";
$net2ftp_messages["Results:"] = "Výsledky:";

} // end admin_createtables


// -------------------------------------------------------------------------
// Admin_viewlogs module
if ($net2ftp_globals["state"] == "admin_viewlogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_viewlogs.inc.php
$net2ftp_messages["Admin functions"] = "Administrátorské funkce";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Unable to execute the SQL query <b>%1\$s</b>.";
$net2ftp_messages["No data"] = "Žádná data";

} // end admin_viewlogs


// -------------------------------------------------------------------------
// Admin_emptylogs module
if ($net2ftp_globals["state"] == "admin_emptylogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_emptylogs.inc.php
$net2ftp_messages["Admin functions"] = "Administrátorské funkce";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "Tabulka <b>%1\$s</b> byla úspěšně vyprázdněna.";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "Nepodařilo se vyprázdnit tabulku <b>%1\$s</b>.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "The table <b>%1\$s</b> was optimized successfully.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "The table <b>%1\$s</b> could not be optimized.";

} // end admin_emptylogs


// -------------------------------------------------------------------------
// Advanced module
if ($net2ftp_globals["state"] == "advanced") {
// -------------------------------------------------------------------------

// /modules/advanced/advanced.inc.php
$net2ftp_messages["Advanced functions"] = "Pokročilé funkce";

// /skins/[skin]/advanced1.template.php
$net2ftp_messages["Go"] = "OK";
$net2ftp_messages["Disabled"] = "Disabled";
$net2ftp_messages["Advanced FTP functions"] = "Advanced FTP functions";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Send arbitrary FTP commands to the FTP server";
$net2ftp_messages["This function is available on PHP 5 only"] = "This function is available on PHP 5 only";
$net2ftp_messages["Troubleshooting functions"] = "Funkce pro odstraňování problémů";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Řešení problémů net2ftp na tomto webovém serveru";
$net2ftp_messages["Troubleshoot an FTP server"] = "Řešení problémů FTP serveru";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Translation functions"] = "Překladatelské funkce";
$net2ftp_messages["Introduction to the translation functions"] = "Úvod k překladatelským funkcím";
$net2ftp_messages["Extract messages to translate from code files"] = "Získat zprávy k překlady ze zdrojových souborů";
$net2ftp_messages["Check if there are new or obsolete messages"] = "Zkontrolovat přítomnost nových nebo zastaralých zpráv";

$net2ftp_messages["Beta functions"] = "Beta funkce";
$net2ftp_messages["Send a site command to the FTP server"] = "Poslat serverový příkaz FTP serveru";
$net2ftp_messages["Apache: password-protect a directory, create custom error pages"] = "Apache: chránit adresář heslem, vytvořit vlastní chybové stránky";
$net2ftp_messages["MySQL: execute an SQL query"] = "MySQL: spustit SQL dotaz";


// advanced()
$net2ftp_messages["The site command functions are not available on this webserver."] = "Funkce ovládání serveru nejsou na tomto webovém serveru k dispozici.";
$net2ftp_messages["The Apache functions are not available on this webserver."] = "Funkce Apache nejsou na tomto webovém serveru k dispozici.";
$net2ftp_messages["The MySQL functions are not available on this webserver."] = "Funkce MySQL nejsou na tomto webovém serveru k dispozici.";
$net2ftp_messages["Unexpected state2 string. Exiting."] = "Neočekávaný stavový řetězec 2. Končím.";

} // end advanced


// -------------------------------------------------------------------------
// Advanced_ftpserver module
if ($net2ftp_globals["state"] == "advanced_ftpserver") {
// -------------------------------------------------------------------------

// /modules/advanced_ftpserver/advanced_ftpserver.inc.php
$net2ftp_messages["Troubleshoot an FTP server"] = "Řešení problémů FTP serveru";

// /skins/[skin]/advanced_ftpserver1.template.php
$net2ftp_messages["Connection settings:"] = "Nastavení připojení:";
$net2ftp_messages["FTP server"] = "FTP server" ;
$net2ftp_messages["FTP server port"] = "Port FTP serveru";
$net2ftp_messages["Username"] = "Uživatelské jméno";
$net2ftp_messages["Password"] = "Heslo";
$net2ftp_messages["Password length"] = "Délka hesla";
$net2ftp_messages["Passive mode"] = "Pasivní režim";
$net2ftp_messages["Directory"] = "Adresář";
$net2ftp_messages["Printing the result"] = "Printing the result";

// /skins/[skin]/advanced_ftpserver2.template.php
$net2ftp_messages["Connecting to the FTP server: "] = "Připojování k FTP serveru: ";
$net2ftp_messages["Logging into the FTP server: "] = "Logování na FTP server: ";
$net2ftp_messages["Setting the passive mode: "] = "Nastavování pasivního režimu: ";
$net2ftp_messages["Getting the FTP server system type: "] = "Získávání typu systému FTP serveru: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Změna adresáře na %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "Adresář z FTP serveru je: %1\$s";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Získávání syrového seznamu adresářů a souborů: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Druhý pokus získání syrového seznamu adresářů a souborů: ";
$net2ftp_messages["Closing the connection: "] = "Zavírání připojení: ";
$net2ftp_messages["Raw list of directories and files:"] = "Syrový seznam adresářů a souborů:";
$net2ftp_messages["Parsed list of directories and files:"] = "Zpracovaný seznam adresářů a souborů:";

$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "not OK";

} // end advanced_ftpserver


// -------------------------------------------------------------------------
// Advanced_parsing module
if ($net2ftp_globals["state"] == "advanced_parsing") {
// -------------------------------------------------------------------------

$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Sample input"] = "Sample input";
$net2ftp_messages["Parsed output"] = "Parsed output";

} // end advanced_parsing


// -------------------------------------------------------------------------
// Advanced_webserver module
if ($net2ftp_globals["state"] == "advanced_webserver") {
// -------------------------------------------------------------------------

$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Řešení problémů vaší instalace net2ftp";
$net2ftp_messages["Printing the result"] = "Printing the result";

$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Kontrolování přítomnosti FTP modulu PHP: ";
$net2ftp_messages["yes"] = "ano";
$net2ftp_messages["no - please install it!"] = "ne - prosím nainstalujte ho";

$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Kontrolování práv adresáře na webovém serveru: do /temp bude zapsán a následně smazán malý soubor.";
$net2ftp_messages["Creating filename: "] = "Vytváření souboru: ";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. Soubor: %1\$s";
$net2ftp_messages["not OK"] = "not OK";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "není OK. Zkontrolujte oprávnění adresáře %1\$s.";
$net2ftp_messages["Opening the file in write mode: "] = "Otevírání souboru v režimu zápisu: ";
$net2ftp_messages["Writing some text to the file: "] = "Zapisování nějakého textu do souboru: ";
$net2ftp_messages["Closing the file: "] = "Zavírání souboru: ";
$net2ftp_messages["Deleting the file: "] = "Mazání souboru: ";

$net2ftp_messages["Testing the FTP functions"] = "Testing the FTP functions";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connecting to a test FTP server: ";
$net2ftp_messages["Connecting to the FTP server: "] = "Připojování k FTP serveru: ";
$net2ftp_messages["Logging into the FTP server: "] = "Logování na FTP server: ";
$net2ftp_messages["Setting the passive mode: "] = "Nastavování pasivního režimu: ";
$net2ftp_messages["Getting the FTP server system type: "] = "Získávání typu systému FTP serveru: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Změna adresáře na %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "Adresář z FTP serveru je: %1\$s";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Získávání syrového seznamu adresářů a souborů: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Druhý pokus získání syrového seznamu adresářů a souborů: ";
$net2ftp_messages["Closing the connection: "] = "Zavírání připojení: ";
$net2ftp_messages["Raw list of directories and files:"] = "Syrový seznam adresářů a souborů:";
$net2ftp_messages["Parsed list of directories and files:"] = "Zpracovaný seznam adresářů a souborů:";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "not OK";

} // end advanced_webserver


// -------------------------------------------------------------------------
// Bookmark module
if ($net2ftp_globals["state"] == "bookmark") {
// -------------------------------------------------------------------------

$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Drag and drop one of the links below to the bookmarks bar";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Right-click on one of the links below and choose \"Add to Favorites...\"";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Right-click on one the links below and choose \"Add Link to Bookmarks...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Right-click on one of the links below and choose \"Bookmark link...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Right-click on one of the links below and choose \"Bookmark This Link...\"";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "One click access (net2ftp won't ask for a password - less safe)";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "Two click access (net2ftp will ask for a password - safer)";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Poznámka: Když použijete tento odkaz, zeptá se vás vyskakovací okénko na uživatelské jméno a heslo.";

} // end bookmark


// -------------------------------------------------------------------------
// Browse module
if ($net2ftp_globals["state"] == "browse") {
// -------------------------------------------------------------------------

// /modules/browse/browse.inc.php
$net2ftp_messages["Choose a directory"] = "Vyberte adresář";
$net2ftp_messages["Please wait..."] = "Prosím čekejte...";

// browse()
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Adresáře, jejichž jméno obsahuje \', nemohou být korektně zobrazeny. Mohou být pouze smazány. Prosím vraťte se zpět a vyberte jiný jiný podadresář.";

$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Denní limit byl dosažen: nebudete moci přenášet data";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Pro zajištění spravedlivého užívání webového serveru kýmkoliv je objem přenešených dat a času spuštění skriptů omezen pro každou dvojici uživatel - den. Jakmile je tento limit dosažen, můžete procházet FTP server, ale už na něj ani z něj nemůžete přenášet data.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Pokud potřebujete neomezené použití, tak prosím net2ftp nainstalujte na vlastní webový server.";

// printdirfilelist()
// Keep this short, it must fit in a small button!
$net2ftp_messages["New dir"] = "Nový adresář";
$net2ftp_messages["New file"] = "Nový soubor";
$net2ftp_messages["HTML templates"] = "HTML templates";
$net2ftp_messages["Upload"] = "Nahrát";
$net2ftp_messages["Java Upload"] = "Java Nahrát";
$net2ftp_messages["Flash Upload"] = "Flash Upload";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Advanced"] = "Pokročilé";
$net2ftp_messages["Copy"] = "Kopírovat";
$net2ftp_messages["Move"] = "Přesunout";
$net2ftp_messages["Delete"] = "Smazat";
$net2ftp_messages["Rename"] = "Přejmenovat";
$net2ftp_messages["Chmod"] = "Práva";
$net2ftp_messages["Download"] = "Stáhnout";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Zip"] = "Zip" ;
$net2ftp_messages["Size"] = "Velikost";
$net2ftp_messages["Search"] = "Vyhledat";
$net2ftp_messages["Go to the parent directory"] = "Přejít do nadřazeného adresáře";
$net2ftp_messages["Go"] = "OK";
$net2ftp_messages["Transform selected entries: "] = "Změnit vybrané položky: ";
$net2ftp_messages["Transform selected entry: "] = "Transform selected entry: ";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Vytvořit nový podadresář v adresáři %1\$s";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Vytvořit nový soubor v adresáři %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Create a website easily using ready-made templates";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Nahrát nové soubory do adresáře %1\$s";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
$net2ftp_messages["Upload files using a Flash applet"] = "Upload files using a Flash applet";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Install software packages (requires PHP on web server)";
$net2ftp_messages["Go to the advanced functions"] = "Přejít na pokročilé funkce";
$net2ftp_messages["Copy the selected entries"] = "Zkopírovat vybrané položky";
$net2ftp_messages["Move the selected entries"] = "Přesunout vybrané položky";
$net2ftp_messages["Delete the selected entries"] = "Smazat vybrané položky";
$net2ftp_messages["Rename the selected entries"] = "Přejmenovat vybrané položky";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Změnit práva u vybraných položek (funguje pouze na serverech Unix/Linux/BSD)";
$net2ftp_messages["Download a zip file containing all selected entries"] = "Stáhnout ZIP soubor obsahující všechny vybrané položky";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip the selected archives on the FTP server";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Zazipovat vybrané položky a uložit nebo poslat e-mailem";
$net2ftp_messages["Calculate the size of the selected entries"] = "Spočítat velikost vybraných položek";
$net2ftp_messages["Find files which contain a particular word"] = "Najít soubory obsahující zadané slovo";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Klikněte pro sestupné setřídění podle sloupce %1\$s.";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Klikněte pro vzestupné setřídění podle sloupce %1\$s.";
$net2ftp_messages["Ascending order"] = "Vzestupné třídění";
$net2ftp_messages["Descending order"] = "Sestupné třídění";
$net2ftp_messages["Upload files"] = "Upload files";
$net2ftp_messages["Up"] = "Výše";
$net2ftp_messages["Click to check or uncheck all rows"] = "Přepnout zaškrtnutí všech řádek";
$net2ftp_messages["All"] = "Vše";
$net2ftp_messages["Name"] = "Název";
$net2ftp_messages["Type"] = "Typ";
//$net2ftp_messages["Size"] = "Size";
$net2ftp_messages["Owner"] = "Vlastník";
$net2ftp_messages["Group"] = "Skupina";
$net2ftp_messages["Perms"] = "Práva";
$net2ftp_messages["Mod Time"] = "Čas změny";
$net2ftp_messages["Actions"] = "Akce";
$net2ftp_messages["Select the directory %1\$s"] = "Select the directory %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "Select the file %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Select the symlink %1\$s";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Go to the subdirectory %1\$s";
$net2ftp_messages["Download the file %1\$s"] = "Stáhnout soubor %1\$s";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["View"] = "Zobrazit";
$net2ftp_messages["Edit"] = "Upravit";
$net2ftp_messages["Update"] = "Aktualizovat";
$net2ftp_messages["Open"] = "Otevřít";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Zobrazit zvýrazněný zdrojový kód souboru %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Upravit zdrojový kód souboru %1\$s";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Nahrát novou verzi souboru %1\$s a sloučit změny";
$net2ftp_messages["View image %1\$s"] = "Zobrazit obrázek %1\$s";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Zobrazit soubor %1\$s z vašeho HTTP webového serveru";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Poznámka: tento odkaz nemusí fungovat, pokud nemáte vlastní doménu.)";
$net2ftp_messages["This folder is empty"] = "Tento adresář je prázdný";

// printSeparatorRow()
$net2ftp_messages["Directories"] = "Adresáře";
$net2ftp_messages["Files"] = "Soubory";
$net2ftp_messages["Symlinks"] = "Symlinky";
$net2ftp_messages["Unrecognized FTP output"] = "Nerozpoznaný FTP výstup";
$net2ftp_messages["Number"] = "Number";
$net2ftp_messages["Size"] = "Velikost";
$net2ftp_messages["Skipped"] = "Skipped";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";

// printLocationActions()
$net2ftp_messages["Language:"] = "Jazyk:";
$net2ftp_messages["Skin:"] = "Motiv:";
$net2ftp_messages["View mode:"] = "Režim zobrazení:";
$net2ftp_messages["Directory Tree"] = "Strom adresářů";

// ftp2http()
$net2ftp_messages["Execute %1\$s in a new window"] = "Spustit %1\$s v novém okně";
$net2ftp_messages["This file is not accessible from the web"] = "This file is not accessible from the web";

// printDirectorySelect()
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Poklepejte pro přechod do podadresáře:";
$net2ftp_messages["Choose"] = "Vybrat";
$net2ftp_messages["Up"] = "Výše";

} // end browse


// -------------------------------------------------------------------------
// Calculate size module
if ($net2ftp_globals["state"] == "calculatesize") {
// -------------------------------------------------------------------------
$net2ftp_messages["Size of selected directories and files"] = "Velikost vybraných adresářů a souborů";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "Celková velikost vybraných adresářů a souborů je:";
$net2ftp_messages["The number of files which were skipped is:"] = "The number of files which were skipped is:";

} // end calculatesize


// -------------------------------------------------------------------------
// Chmod module
if ($net2ftp_globals["state"] == "chmod") {
// -------------------------------------------------------------------------
$net2ftp_messages["Chmod directories and files"] = "Změnit práva adresářům a souborům";
$net2ftp_messages["Set all permissions"] = "Nastavit všechna práva";
$net2ftp_messages["Read"] = "Čtení";
$net2ftp_messages["Write"] = "Zápis";
$net2ftp_messages["Execute"] = "Spuštění";
$net2ftp_messages["Owner"] = "Vlastník";
$net2ftp_messages["Group"] = "Skupina";
$net2ftp_messages["Everyone"] = "Kdokoliv";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "Pokud chcete nastavit všechna práva na stejnou hodnotu, zadejte tato práva výše a stiskněte tlačítko \"Nastavit všechna práva\"";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Nastavit práva adresáře <b>%1\$s</b> na: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Nastavit práva souboru <b>%1\$s</b> na: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "Nastavit práva symlinku <b>%1\$s</b> na: ";
$net2ftp_messages["Chmod value"] = "Hodnota pro chmod";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Změnit práva také všem podadresářům v tomto adresáři";
$net2ftp_messages["Chmod also the files within this directory"] = "Změnit práva také všem souborům v tomto adresáři";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "Číslo pro chmod <b>%1\$s</b> je mimo rozsah 000-777. Zkuste to prosím znovu.";

} // end chmod


// -------------------------------------------------------------------------
// Clear cookies module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// Copy/Move/Delete module
if ($net2ftp_globals["state"] == "copymovedelete") {
// -------------------------------------------------------------------------
$net2ftp_messages["Choose a directory"] = "Vyberte adresář";
$net2ftp_messages["Copy directories and files"] = "Kopírovat adresáře a soubory";
$net2ftp_messages["Move directories and files"] = "Přesunout adresáře a soubory";
$net2ftp_messages["Delete directories and files"] = "Smazat adresáře a soubory";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "Jste si jist, že chcete smazat tyto adresáře a soubory?";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Ve vybraných adresářích budou smazány také všechny podadresáře a soubory!";
$net2ftp_messages["Set all targetdirectories"] = "Nastavit všechny cílové adresáře";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Pokud chcete nastavit obvyklý cílový adresář, zadejte ho do textového políčka výše a stiskněte tlačítko \"Nastavit všechny cílové adresáře\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Poznámka: cílový adresář musí existovat dříve, než do něj bude cokoliv zkopírováno.";
$net2ftp_messages["Different target FTP server:"] = "Jiný cílový FTP server:";
$net2ftp_messages["Username"] = "Uživatelské jméno";
$net2ftp_messages["Password"] = "Heslo";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Nechte prázdné, pokud chcete soubory zkopírovat na stejný FTP server.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Pokud chcete soubory zkopírovat na jiný FTP server, zadejte vaše přihlašovací údaje.";
$net2ftp_messages["Leave empty if you want to move the files to the same FTP server."] = "Nechte prázdné, pokud chcete soubory přesunout na stejný FTP server.";
$net2ftp_messages["If you want to move the files to another FTP server, enter your login data."] = "Pokud chcete soubory přesunout na jiný FTP server, zadejte vaše přihlašovací údaje.";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Zkopírovat adresář <b>%1\$s</b> do:";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Přesunout adresář <b>%1\$s</b> do:";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Adresář <b>%1\$s</b>";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Zkopírovat soubor <b>%1\$s</b> do:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Přesunout soubor <b>%1\$s</b> do:";
$net2ftp_messages["File <b>%1\$s</b>"] = "Soubor <b>%1\$s</b>";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Zkopírovat symlink <b>%1\$s</b> do:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "Přesunout symlink <b>%1\$s</b> do:";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Symlink <b>%1\$s</b>" ;
$net2ftp_messages["Target directory:"] = "Cílový adresář:";
$net2ftp_messages["Target name:"] = "Cílové jméno:";
$net2ftp_messages["Processing the entries:"] = "Zpracování položek:";

} // end copymovedelete


// -------------------------------------------------------------------------
// Download file module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// EasyWebsite module
if ($net2ftp_globals["state"] == "easyWebsite") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create a website in 4 easy steps"] = "Create a website in 4 easy steps";
$net2ftp_messages["Template overview"] = "Template overview";
$net2ftp_messages["Template details"] = "Template details";
$net2ftp_messages["Files are copied"] = "Files are copied";
$net2ftp_messages["Edit your pages"] = "Edit your pages";

// Screen 1 - printTemplateOverview
$net2ftp_messages["Click on the image to view the details of a template."] = "Click on the image to view the details of a template.";
$net2ftp_messages["Back to the Browse screen"] = "Back to the Browse screen";
$net2ftp_messages["Template"] = "Template";
$net2ftp_messages["Copyright"] = "Copyright";
$net2ftp_messages["Click on the image to view the details of this template"] = "Click on the image to view the details of this template";

// Screen 2 - printTemplateDetails
$net2ftp_messages["The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?"] = "The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?";
$net2ftp_messages["Install template to directory: "] = "Install template to directory: ";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Size"] = "Velikost";
$net2ftp_messages["Preview page"] = "Preview page";
$net2ftp_messages["opens in a new window"] = "opens in a new window";

// Screen 3
$net2ftp_messages["Please wait while the template files are being transferred to your server: "] = "Please wait while the template files are being transferred to your server: ";
$net2ftp_messages["Done."] = "Done.";
$net2ftp_messages["Continue"] = "Continue";

// Screen 4 - printEasyAdminPanel
$net2ftp_messages["Edit page"] = "Edit page";
$net2ftp_messages["Browse the FTP server"] = "Browse the FTP server";
$net2ftp_messages["Add this link to your favorites to return to this page later on!"] = "Add this link to your favorites to return to this page later on!";
$net2ftp_messages["Edit website at %1\$s"] = "Edit website at %1\$s";
$net2ftp_messages["Internet Explorer: right-click on the link and choose \"Add to Favorites...\""] = "Internet Explorer: klikněte na odkaz pravým tlačítkem myši a vyberte \"Přidat k oblíbeným položkám...\"";
$net2ftp_messages["Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\""] = "Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\"";

// ftp_copy_local2ftp
$net2ftp_messages["WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing..."] = "WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["WARNING: Unable to copy the file <b>%1\$s</b>. Continuing..."] = "WARNING: Unable to copy the file <b>%1\$s</b>. Continuing...";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
}


// -------------------------------------------------------------------------
// Edit module
if ($net2ftp_globals["state"] == "edit") {
// -------------------------------------------------------------------------

// /modules/edit/edit.inc.php
$net2ftp_messages["Unable to open the template file"] = "Nepodařilo se otevřít soubor se šablonami";
$net2ftp_messages["Unable to read the template file"] = "Nepodařilo se načíst soubor se šablonami";
$net2ftp_messages["Please specify a filename"] = "Vyberte prosím soubor";
$net2ftp_messages["Status: This file has not yet been saved"] = "Stav: Tento soubor ještě nebyl uložen";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Stav: Uložení <b>%1\$s</b> v módu %2\$s";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Stav: <b>Tento soubor nemůže být uložen</b>";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";

// /skins/[skin]/edit.template.php
$net2ftp_messages["Directory: "] = "Adresář: ";
$net2ftp_messages["File: "] = "Soubor: ";
$net2ftp_messages["New file name: "] = "Nový název souboru: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Note: changing the textarea type will save the changes"] = "Poznámka: změnění textového pole uloží změny";
$net2ftp_messages["Copy up"] = "Copy up";
$net2ftp_messages["Copy down"] = "Copy down";

} // end if edit


// -------------------------------------------------------------------------
// Find string module
if ($net2ftp_globals["state"] == "findstring") {
// -------------------------------------------------------------------------

// /modules/findstring/findstring.inc.php 
$net2ftp_messages["Search directories and files"] = "Prohledat adresáře a soubory";
$net2ftp_messages["Search again"] = "Hledat znovu";
$net2ftp_messages["Search results"] = "Výsledky vyhledávání";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Zadejte prosím platné slovo nebo slovní spojení pro vyhledávání.";
$net2ftp_messages["Please enter a valid filename."] = "Zadejte prosím platné jméno souboru.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Zadejte prosím platnou velikost souboru do textového pole \"od\", například 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Zadejte prosím platnou velikost souboru do textového pole \"do\", například 50000.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Zadejte prosím platné datum ve formátu Y-m-d do textového pole \"od\".";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Zadejte prosím platné datum ve formátu Y-m-d do textového pole \"do\".";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "Slovo <b>%1\$s</b> nebylo ve vybraných adresářích a souborech nalezeno.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "Slovo <b>%1\$s</b> bylo nalezeno v těchto souborech:";

// /skins/[skin]/findstring1.template.php
$net2ftp_messages["Search for a word or phrase"] = "Hledat slovo nebo slovní spojení";
$net2ftp_messages["Case sensitive search"] = "Rozlišovat velikost písmen";
$net2ftp_messages["Restrict the search to:"] = "Omezit vyhledávání na:";
$net2ftp_messages["files with a filename like"] = "soubory se jménem vyhovujícímu";
$net2ftp_messages["(wildcard character is *)"] = "(zástupný znak je *)";
$net2ftp_messages["files with a size"] = "soubory s velikostí";
$net2ftp_messages["files which were last modified"] = "soubory, které byly naposledy změněny";
$net2ftp_messages["from"] = "od";
$net2ftp_messages["to"] = "do";

$net2ftp_messages["Directory"] = "Adresář";
$net2ftp_messages["File"] = "Soubor";
$net2ftp_messages["Line"] = "Line";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["View"] = "Zobrazit";
$net2ftp_messages["Edit"] = "Upravit";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Zobrazit zvýrazněný zdrojový kód souboru %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Upravit zdrojový kód souboru %1\$s";

} // end findstring


// -------------------------------------------------------------------------
// Help module
// -------------------------------------------------------------------------
// No messages yet


// -------------------------------------------------------------------------
// Install size module
if ($net2ftp_globals["state"] == "install") {
// -------------------------------------------------------------------------

// /modules/install/install.inc.php
$net2ftp_messages["Install software packages"] = "Install software packages";
$net2ftp_messages["Unable to open the template file"] = "Nepodařilo se otevřít soubor se šablonami";
$net2ftp_messages["Unable to read the template file"] = "Nepodařilo se načíst soubor se šablonami";
$net2ftp_messages["Unable to get the list of packages"] = "Unable to get the list of packages";

// /skins/blue/install1.template.php
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "The net2ftp installer script has been copied to the FTP server.";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "This script runs on your web server and requires PHP to be installed.";
$net2ftp_messages["In order to run it, click on the link below."] = "In order to run it, click on the link below.";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp has tried to determine the directory mapping between the FTP server and the web server.";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Should this link not be correct, enter the URL manually in your web browser.";

} // end install


// -------------------------------------------------------------------------
// Java upload module
if ($net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";

} // end jupload



// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login") {
// -------------------------------------------------------------------------
$net2ftp_messages["Login!"] = "Login!";
$net2ftp_messages["Once you are logged in, you will be able to:"] = "Once you are logged in, you will be able to:";
$net2ftp_messages["Navigate the FTP server"] = "Navigate the FTP server";
$net2ftp_messages["Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."] = "Once you have logged in, you can browse from directory to directory and see all the subdirectories and files.";
$net2ftp_messages["Upload files"] = "Upload files";
$net2ftp_messages["There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."] = "There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet.";
$net2ftp_messages["Download files"] = "Download files";
$net2ftp_messages["Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."] = "Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive.";
$net2ftp_messages["Zip files"] = "Zip files";
$net2ftp_messages["... and save the zip archive on the FTP server, or email it to someone."] = "... and save the zip archive on the FTP server, or email it to someone.";
$net2ftp_messages["Unzip files"] = "Unzip files";
$net2ftp_messages["Different formats are supported: .zip, .tar, .tgz and .gz."] = "Different formats are supported: .zip, .tar, .tgz and .gz.";
$net2ftp_messages["Install software"] = "Install software";
$net2ftp_messages["Choose from a list of popular applications (PHP required)."] = "Choose from a list of popular applications (PHP required).";
$net2ftp_messages["Copy, move and delete"] = "Copy, move and delete";
$net2ftp_messages["Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."] = "Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted.";
$net2ftp_messages["Copy or move to a 2nd FTP server"] = "Copy or move to a 2nd FTP server";
$net2ftp_messages["Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."] = "Handy to import files to your FTP server, or to export files from your FTP server to another FTP server.";
$net2ftp_messages["Rename and chmod"] = "Rename and chmod";
$net2ftp_messages["Chmod handles directories recursively."] = "Chmod handles directories recursively.";
$net2ftp_messages["View code with syntax highlighting"] = "View code with syntax highlighting";
$net2ftp_messages["PHP functions are linked to the documentation on php.net."] = "PHP functions are linked to the documentation on php.net.";
$net2ftp_messages["Plain text editor"] = "Plain text editor";
$net2ftp_messages["Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."] = "Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server.";
$net2ftp_messages["HTML editors"] = "HTML editors";
$net2ftp_messages["Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from."] = "Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from.";
$net2ftp_messages["Code editor"] = "Code editor";
$net2ftp_messages["Edit HTML and PHP in an editor with syntax highlighting."] = "Edit HTML and PHP in an editor with syntax highlighting.";
$net2ftp_messages["Search for words or phrases"] = "Search for words or phrases";
$net2ftp_messages["Filter out files based on the filename, last modification time and filesize."] = "Filter out files based on the filename, last modification time and filesize.";
$net2ftp_messages["Calculate size"] = "Calculate size";
$net2ftp_messages["Calculate the size of directories and files."] = "Calculate the size of directories and files.";

$net2ftp_messages["FTP server"] = "FTP server" ;
$net2ftp_messages["Example"] = "Příklad";
$net2ftp_messages["Port"] = "Port";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Username"] = "Uživatelské jméno";
$net2ftp_messages["Password"] = "Heslo";
$net2ftp_messages["Anonymous"] = "Anonymní";
$net2ftp_messages["Passive mode"] = "Pasivní režim";
$net2ftp_messages["Initial directory"] = "Výchozí adresář";
$net2ftp_messages["Language"] = "Jazyk";
$net2ftp_messages["Skin"] = "Motiv";
$net2ftp_messages["FTP mode"] = "FTP mód";
$net2ftp_messages["Automatic"] = "Automatic";
$net2ftp_messages["Login"] = "Přihlásit";
$net2ftp_messages["Clear cookies"] = "Vymazat cookies";
$net2ftp_messages["Admin"] = "Admin";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";

} // end login


// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login_small") {
// -------------------------------------------------------------------------

$net2ftp_messages["Please enter your Administrator username and password."] = "Please enter your Administrator username and password.";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Please enter your username and password for FTP server <b>%1\$s</b>.";
$net2ftp_messages["Username"] = "Uživatelské jméno";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Password"] = "Heslo";
$net2ftp_messages["Login"] = "Přihlásit";
$net2ftp_messages["Continue"] = "Continue";

} // end login_small


// -------------------------------------------------------------------------
// Logout module
if ($net2ftp_globals["state"] == "logout") {
// -------------------------------------------------------------------------

// logout.inc.php
$net2ftp_messages["Login page"] = "Login page";

// logout.template.php
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Note: other users of this computer could click on the browser's Back button and access the FTP server.";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "To prevent this, you must close all browser windows.";
$net2ftp_messages["Close"] = "Close";
$net2ftp_messages["Click here to close this window"] = "Click here to close this window";

} // end logout


// -------------------------------------------------------------------------
// New directory module
if ($net2ftp_globals["state"] == "newdir") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create new directories"] = "Vytvořit nové adresáře";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "Nové adresáře budou vytvořené v <b>%1\$s</b>.";
$net2ftp_messages["New directory name:"] = "Jméno nového adresáře:";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Adresář <b>%1\$s</b> byl v pořádku vytvořen.";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Directory <b>%1\$s</b> could not be created.";

} // end newdir


// -------------------------------------------------------------------------
// Raw module
if ($net2ftp_globals["state"] == "raw") {
// -------------------------------------------------------------------------

// /modules/raw/raw.inc.php
$net2ftp_messages["Send arbitrary FTP commands"] = "Send arbitrary FTP commands";


// /skins/[skin]/raw1.template.php
$net2ftp_messages["List of commands:"] = "List of commands:";
$net2ftp_messages["FTP server response:"] = "FTP server response:";

} // end raw


// -------------------------------------------------------------------------
// Rename module
if ($net2ftp_globals["state"] == "rename") {
// -------------------------------------------------------------------------
$net2ftp_messages["Rename directories and files"] = "Přejmenovat adresáře nebo soubory";
$net2ftp_messages["Old name: "] = "Staré jméno: ";
$net2ftp_messages["New name: "] = "Nové jméno: ";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Nové jméno nesmí obsahovat žádné tečky. Tato položka byla přejmenována na <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> byl úspěšně přejmenován na <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> nemohl být přejmenován na <b>%2\$s</b>";

} // end rename


// -------------------------------------------------------------------------
// Unzip module
if ($net2ftp_globals["state"] == "unzip") {
// -------------------------------------------------------------------------

// /modules/unzip/unzip.inc.php
$net2ftp_messages["Unzip archives"] = "Unzip archives";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Getting archive %1\$s of %2\$s from the FTP server";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Unable to get the archive <b>%1\$s</b> from the FTP server";

// /skins/[skin]/unzip1.template.php
$net2ftp_messages["Set all targetdirectories"] = "Nastavit všechny cílové adresáře";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Pokud chcete nastavit obvyklý cílový adresář, zadejte ho do textového políčka výše a stiskněte tlačítko \"Nastavit všechny cílové adresáře\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Poznámka: cílový adresář musí existovat dříve, než do něj bude cokoliv zkopírováno.";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Target directory:"] = "Cílový adresář:";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Použít jména adresářů (automaticky vytvořit podadresáře)";

} // end unzip


// -------------------------------------------------------------------------
// Upload module
if ($net2ftp_globals["state"] == "upload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload to directory:"] = "Nahrát do adresáře:";
$net2ftp_messages["Files"] = "Soubory";
$net2ftp_messages["Archives"] = "Archivů";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Zde zadané soubory budou přenesené na FTP server.";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Zde zadané archivy budou rozbaleny a soubory uvnitř budou přeneseny na FTP server.";
$net2ftp_messages["Add another"] = "Přidat další";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Použít jména adresářů (automaticky vytvořit podadresáře)";

$net2ftp_messages["Choose a directory"] = "Vyberte adresář";
$net2ftp_messages["Please wait..."] = "Prosím čekejte...";
$net2ftp_messages["Uploading... please wait..."] = "Nahrávám... prosím čekejte...";
$net2ftp_messages["If the upload takes more than the allowed <b>%1\$s seconds<\/b>, you will have to try again with less/smaller files."] = "Pokud nahrání bude trvat déle než povolených <b>%1\$s sekund<\/b>, musíte to zkusit znovu s méně nebo menšími soubory.";
$net2ftp_messages["This window will close automatically in a few seconds."] = "Toto okno se za několik vteřin automaticky zavře.";
$net2ftp_messages["Close window now"] = "Zavřít okno hned";

$net2ftp_messages["Upload files and archives"] = "Nahrát soubory a archivy";
$net2ftp_messages["Upload results"] = "Výsledky nahrání";
$net2ftp_messages["Checking files:"] = "Kontroluji soubory:";
$net2ftp_messages["Transferring files to the FTP server:"] = "Přenášení souborů na FTP server:";
$net2ftp_messages["Decompressing archives and transferring files to the FTP server:"] = "Rozbalování archivů a přenášení souborů na FTP server:";
$net2ftp_messages["Upload more files and archives"] = "Nahrát více souborů a archivů";

} // end upload


// -------------------------------------------------------------------------
// Messages which are shared by upload and jupload
if ($net2ftp_globals["state"] == "upload" || $net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Restrictions:"] = "Omezení:";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "Maximální velikost jednoho souboru je v net2ftp omezena na <b>%1\$s</b> a v PHP na <b>%2\$s</b>";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Maximální čas provádění je <b>%1\$s sekund</b>";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "Režim FTP přenosu (ASCII nebo BINARY) bude automaticky nastaven podle koncovky";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Pokud cílový soubor existuje, bude přepsán";

} // end upload or jupload


// -------------------------------------------------------------------------
// View module
if ($net2ftp_globals["state"] == "view") {
// -------------------------------------------------------------------------

// /modules/view/view.inc.php
$net2ftp_messages["View file %1\$s"] = "Zobrazit soubor %1\$s";
$net2ftp_messages["View image %1\$s"] = "Zobrazit obrázek %1\$s";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Prohlédnout si klip Macromedia ShockWave Flash %1\$s";
$net2ftp_messages["Image"] = "Obrázek";

// /skins/[skin]/view1.template.php
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Pokud chcete uložit obrázek, tak na něj klikněte pravým tlačítkem myši a zvolte 'Uložit obrázek jako...'";

} // end view


// -------------------------------------------------------------------------
// Zip module
if ($net2ftp_globals["state"] == "zip") {
// -------------------------------------------------------------------------

// /modules/zip/zip.inc.php
$net2ftp_messages["Zip entries"] = "Zazipovat položky";

// /skins/[skin]/zip1.template.php
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Uložit zip na FTP serveru jako:";
$net2ftp_messages["Email the zip file in attachment to:"] = "Poslat zip v příloze e-mailem na:";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Vezměte prosím na vědomí, že přenášení souborů není anonymní: do e-mailu bude přidána vaše IP adresa a čas odeslání.";
$net2ftp_messages["Some additional comments to add in the email:"] = "Další komentář, který chcete připojit k e-mailu:";

$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Nezadali jste jméno zip souboru. Vraťte se zpět a zadejte jméno souboru.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "Zdá se, že e-mailová adresa, kterou jste zadal (%1\$s), není platná.<br />Zadejte prosím adresu ve formátu <b>uzivatel@domena.cz</b>";

} // end zip

?>