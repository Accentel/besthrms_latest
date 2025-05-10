
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../dbconnection/connection.php';

$pcode=$_REQUEST['id'];
$state=$_REQUEST['state'];
//$img=$_GET['img'];
//unlink('../photos/'.$img);
 $query="update emps set status='resigned' where empid='$pcode'";
$rst= mysqli_query($link, $query) or die(mysqli_error($link));
if($rst){
    //header('Location:../addemployee.php');
    print "<script>";
        print "alert('Successfully Updated ');";
        print "self.location='../employeelist.php?state=$state';";
        print "</script>";
}