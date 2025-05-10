<?php
//include('config.php');
define("HOST_NAME4", "conceptgrammarschool.com");
define("USER4", "conceptg_abdul");
define("PASSWORD4", "tolichowki");
define("DB4", "conceptg_jyothi");
$link4=mysqli_connect(HOST_NAME4,USER4,PASSWORD4,DB4);
//$link2=mysqli_connect(HOST_NAME,USER,PASSWORD,DB);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
error_reporting(0);

?>