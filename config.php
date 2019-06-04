
<?php

$hostname = "localhost";
$username = "root";
$pass = "localhost";
$dbname = "node";

$connect =mysql_connect($hostname,$username,$pass) or die (mysql_error("cannot connect to mySQL")); 
mysql_select_db($dbname) or die (mysql_error("cannot connect to database $dbname "));
mysql_query("SET NAMES UTF8");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");

?>
