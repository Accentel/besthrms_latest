<?php
include("../dbconnection/connection.php"); 

if (isset($_GET['id']) && isset($_GET['status'])) {
    $empid = $_GET['id'];
    $new_status = $_GET['status'];

    $update = "UPDATE emps SET stutas = '$new_status' WHERE empid = '$empid'";
    mysqli_query($link, $update) or die(mysqli_error($link));

    header('Location: ../employeelist.php'); 
    exit();
}
?>