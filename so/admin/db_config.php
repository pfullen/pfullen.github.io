<?php
define('DB_SERVER', 'localhost');
define('DB_NAME', 'clsmedical');
define('DB_USER', 'peter');
define('DB_PASS', 'hodie8888');






// defaults timezone to EST if not set in php.ini
/* 

$tz = ini_get(date.timezone);
if (empty($tz)) date_default_timezone_set('America/New_York');
define ('NOW', date('Y-m-d H:i:s'));
*/

    

require_once('./cMySQL.php');

$cMySQL = new cMySQL(DB_SERVER, DB_NAME, DB_USER, DB_PASS);

?>