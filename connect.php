<?php

/* Database config */

$db_host		= 'hidden';
$db_user		= 'hidden';
$db_pass		= 'hidden';
$db_database	= 'hidden';  

/* End config */


$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>