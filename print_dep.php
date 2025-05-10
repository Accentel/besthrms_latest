<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Supervisor</title>
<script language="JavaScript" type="text/javascript">


function prnt(){
	

document.getElementById("prnt").style.display="none";
document.getElementById("cls").style.display="none";
window.print();
window.close();
}
function closew(){
window.close();
}

function abc(){
	
//document.getElementById('tr1').style.display='none';
window.print();
window.close();
//document.getElementById('tr1').style.display='';
}
</script>
<style>
body {
    margin: 0;
    padding: 0;
    background-color: #FAFAFA;
    font: 12pt "Tahoma";
}
.styled-button-2 {
	 background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}
* {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
}
.page {
    width: 21cm;
    min-height: 28.7cm;
    padding: 1.5cm;
    margin: 1cm auto;
    border: 1px #D3D3D3 solid;
    border-radius: 5px;
    background: white;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    font-size:16px;
}
.subpage {
    padding: 0.25cm;
    border: 0px red solid;
    height: 245mm;
	padding-top:120px;
	font:"Times New Roman", Times, serif;
	font-size:16px;
  
}

@page {
    size: A4;
    margin: 0;
}
@media print {
    .page {
        margin: 0;
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
	
}
 .text-line {
        background-color: transparent;
        color: #000;
        outline: none;
        outline-style: none;
        outline-offset: 0;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid red 1px;
        padding: 8px 10px;
		width:200px;
    }
    
   
    .date {
            float: right;
        }

        .address {
            word-wrap: break-word;
            white-space: pre-wrap;
        }
        .address-wrap {
    max-width: 300px; /* Adjust the width as needed */
    word-wrap: break-word;
    white-space: normal;
}
</style>
</head>

<body>
<div align="center" style="border:#CC6666">
								
          <input type="button" value="Print" id="prnt" class="styled-button-2" onclick="prnt();"/> <input type="button" value="Close" id="cls" class="styled-button-2" onclick="window.close();"/>
								</div>
<div class="book">
 <div class="page">
      <div class="pageborder">
      <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

       
         
         
<?php 
			include('dbconnection/connection.php');
		$id=$_REQUEST['id'];
		$q=mysqli_query($link,"select * from deployment_records where id='$id'") or die(mysqli_error($link));
		$row=mysqli_fetch_array($q);
		$date=$row['date'];
		$to_company=$row['to_company'];
		$to_address=$row['to_address'];
		$location_company=$row['location_company'];
		$location_address=$row['location_address'];
		$person_name=$row['person_name'];
	$deployment_date=$row['deployment_date'];
		$position=$row['position'];
		$notes=$row['notes'];
        
		
		$authorized_by=$row['authorized_by'];
	    $position_of_authorizer=$row['position_of_authorizer'];
	
		 ?>
		 <?php
		 	//include('dbconnection/connection.php');
		 
	
		 ?>
	
    <!-- <img src="images/apjyothi.jpg" style="width:100%"> -->
			
		 	<br>
             <br>
             <br>
         
         
          <br>
          <br>
        <div>
        <h2 align="center"><u>DEPLOYMENT LETTER</u></h2>
        <br>
        <div class="date">
        <p>Date: <b><?php $t = strtotime($date); echo date('d-m-Y',$t); ?></b></p>
    </div>
        <p>To:
        <p class="address-wrap"><b><?php echo $to_address; ?></b></p>
        <p class="address"><b><?php echo $address; ?></b></p>
          <br/>
          <p>From:
        <p class="address-wrap"><b> <?php echo $location_address; ?></b></p>
        <br/>
        <!-- <p class="address"><b><?php echo $address; ?></b></p> -->
           <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub:<?php echo $notes; ?></b></p>
           <br/>
           This is to certify and introduce that   <b><?php echo $person_name; ?></b>&nbsp;is deployed at 
       <b><?php echo $location_company; ?></b> as  <b><?php echo $position; ?></b>.
       from <b><?php echo $deployment_date; ?></b>. He has completed our induction formalities. 
    </p>
    </br>
 
    
           
                   <p>Yours Sincerely</p>
                   

        <p><b>For JTechno Associates FMS Pvt Ltd.</b></p>
<p>
Manager, Services.
</p>
         
</body>
</html>