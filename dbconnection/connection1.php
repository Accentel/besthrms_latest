<?php
//include('config.php');
define("HOST_NAME", "conceptgrammarschool.com");
define("USER", "conceptg_abdul");
define("PASSWORD", "tolichowki");
define("DB", "conceptg_jyothi");
$link=mysqli_connect(HOST_NAME,USER,PASSWORD,DB);
$link2=mysqli_connect(HOST_NAME,USER,PASSWORD,DB);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
error_reporting(0);

?>