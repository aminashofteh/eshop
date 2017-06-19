<?php
$servername = "localhost";
$databasename = "db_eshop";
$username = "root";
$password = "";
$dbcodepage = "SET NAMES UTF8";

$db = new PDO ("mysql: host=$servername; dbname=$databasename", $username ,$password,
	array( PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => $dbcodepage));
	
//echo "Succesfully";
?>
