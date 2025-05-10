<?php
$host="localhost";
$username="ospsbill_billing";
$pass="billing#123";
$db="ospsbill_ospsbilling";
$con=mysql_connect($host,$username,$pass) or die(mysql_error());
$db1=mysql_select_db($db) or die(mysql_error());
error_reporting(0);



?>