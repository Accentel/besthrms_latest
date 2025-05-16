<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>KVR BEST</title>
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
<style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
    }
    .center-container {
      display: flex;
      justify-content: center;
      align-items: center;
      /* height: 100vh; */
    }
    img {
      max-width: 100%;
      /* height: auto; */
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
		$q=mysqli_query($link,"select * from emps where empid='$id'") or die(mysqli_error($link));
		$row=mysqli_fetch_array($q) or die(mysqli_error($link));
		$apdate=$row['apt_date'];
		$name=$row['emp_name'];
		$address=$row['address'];
		$state=$row['state'];
		$join_date=$row['DOJ'];
		$location=$row['branch'];
	$sal_th=$row['sal_th'];
		$certi1=$row['certi1'];
		$certi2=$row['certi2'];
		
		$category=$row['appointmentcategory'];
	    $designation=$row['designation'];
      $fromdate=$row['fromdate'];
      $todate=$row['todate'];
		 ?>
     <?php 
     $employeeId = $row['employeeid'];
     $p=mysqli_query($link,"select * from salaries where employeeid='$employeeId'") or die(mysqli_error($link));
     $row1=mysqli_fetch_array($p);
     $basicamount=$row1['basicamount'];
     $daamount=$row1['daamount'];
     $hraamount=$row1['hraamount'];
     $otherallowance=$row1['otherallowance'];
     $advleave=$row1['advleave'];
     $advbonus=$row1['advbonus'];
     $totalmonthlyem=$row1['totalmonthlyem'];
     ?>
		 <?php
		 	//include('dbconnection/connection.php');
		 
	
		 ?>
	
    <!-- <img src="images/apjyothi.jpg" style="width:100%"> -->
			
    <div class="center-container">
    <img src="images/kvrbest.jpg" alt="Centered Image">
  </div>
              
            
          <h2 align="center"><u>LETTER OF APPOINTMENT</u></h2>
          <br>
          <br>
        <div>

        <div class="date">
        <p>Date: <b><?php $t = strtotime($apdate); echo date('d-m-Y',$t); ?></b></p>
      </div>
        <p>To:
        <p>Dear <b> Mr.<?php echo $name; ?></b></p>
        <p class="address-wrap"><b><?php echo $address; ?></b></p>
          <br/>
           <p><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sub: Letter of Appointment</b></p>
        Further to your application & subsequent interview, we have pleasure to appoint you as a  <b><?php echo $designation; ?></b>&nbsp;on the following terms and conditions:<br><br>
            1.	Your employment shall be for a commencing from <b><?php echo date("d-M-Y", strtotime($fromdate)); ?></b> and shall automatically end on <b><?php echo date("d-M-Y", strtotime($todate)); ?></b>.<br><br>2. Your monthly emoluments will be as under: </P>
            <p>Basic + DA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($row1['basicamount'] + $row1['daamount'], 2); ?></p>
            <p>H.R.A. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($row1['hraamount'], 2); ?></p>
            <p>Other Allowances &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($row1['otherallowance'],2 ); ?></p>
            <p>Advance Leave Encashment &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($row1['advleave'], 2); ?></p>
            <p>Advance Bonus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($row1['advbonus'], 2); ?></p>
            <p><b>Total Monthly Emoluments&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($row1['totalmonthlyem'], 2); ?></b></p>
            <p>3. You will be entitled to Provident Fund, ESI and other statutory benefits as may be <br>applicable.</p>
            <p>4. Your continuation the employement will always be subject to your remaining physically and<br> mentally fit and alert.  The management shall have every right to get you medically examined or <br>re-examined at any time by the Registered Medical Practitioner, whose findings will be final and <br>binding upon you.</p>
            <p>5. Your Work, duty hours and shift working will be regulated from time to time purely at the <br>discretion of the Management as per expediency of service.</p>
            <p>6. We are in the business of providing Facility Management services to our various corporate <br>clients. Your services will be liable to be transferred from one client to another and/or from <br> one place to another and/or from one office to another, purely at the discretion of the <br> management.
            Such transfer may be to such places & clients that may arise in future.The <br> duration of your appointment is co-terminus with our contract with the client.</p>
            <br><br>
            <p>7. You will be whole-time employee of the company and will not engage yourself in any work <br> similar in nature to that of the company and / or in which you may for the time being be <br> engaged by the company and / or engage yourself anywhere in your work,professional or <br>
            employment either honorary or otherwise during the period of your employment with the <br> company.</p>
            <p>8. Your services will be governed by the Standing Orders/ Code of Conduct / Rules and <br> Regulations of the Organization as in force from time to time.</p>
            <p>9. You may be laid-off on payment of 50% wages on account of shortage of work, materials,<br>electricity and similar other reasons.</p>
            <p>10. If you are absent yourself without permission, you shall be considered as having voluntarily <br> terminated your employment without giving any notice unless you:</p>
            <p>&nbsp;&nbsp;a. Return to work within 8 days from the commencement of such absence and <br> &nbsp;&nbsp;b. Give an explanation to the satisfaction of the Management regarding such absence.</p>
            <p>11. Your services will be liable to be terminated on one month’s notice or on payment of one <br> month's salary in lieu thereof.  Similarly, you will not terminate your services without giving one <br> month’s notice or salary in lieu thereof and in case of failure on your part to do so, the <br>
            Management will be entitled to recover the requisite amount from you either by withholding <br> dues to that extent or otherwise, as may be necessary.</p>
            <p>12. As we are service providers to others, in case of any eventuality of our business being <br> closed or terminated, your job is also liable to be ended automatically.</p>
            <p>13. You will not engage in any act that may amount to misconduct and you will always observe <br> and follow instructions given by your superiors. The management may dismiss you from the <br> services without notice for engaging in any act or omission amounting to misconduct.</p>
            <p>14. In case any act omission constituting misconduct is alleged against you, you will be placed <br> under suspension pending enquiry and will not be entitled to any wages during the period <br> of such suspension.</p>
            <p>15. SAFETY SHOES & DRESS CODE:</p>
            <P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> One pair of safety shoes and 2 pair of Uniform will be issued to you every six month <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at no extra cost. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> Maitaining of Safety Shoes will be your sole responsibility and In case of any damage 
            to <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Uniform the cost of replacement or repair to be borne by you.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> In case of any damage to Safety Shoes the cost of replacement or repair to be borne by <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;you. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> Any employee
            without Safety Shoes or without dress code will not be allowed in work <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;place for the day. <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> In case of any any loss of Safety Shoes or Uniform the cost of replacement will be <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deducted from the salary of the employee.
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>*</b> If you are found continuous abuse of Safety Shoes code or dress code procedure; the <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;management is liable to take disciplinary action to the extent of terminating you from <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;your job.</P> 
            <p>16. Unathorized disclosure of information of company or client (including trade secret) that you <br>come across in the course of discharging your duties with the company, shall render come across in the course of discharging your duties with the company, shall render your services <br> liable to be terminated without notice and the company shall be entitled 
            to proceed against <br> you for appropriate compensation / punitive action depending on the nature of such disclosure.</p>
            <br><br>
            <p>17. The monthly wages will be disbursed in form of electronic online transfer to the bank <br> account of employees.</p>
            <p>18. In case of any change in the address during the course of employment, it will be your duty <br> to intimate the management in writing within three days from the date of such change and will <br> get the change so recorded in the Register of Addresses maintained for the purpose by the <br> company.</p>
            <p>19. All communications sent to you by the management at your last given address will be <br> deemed to have been received by you.</p>
            <p>20. You job will be terminated immediately if you are found to be involved in any theft issue or <br> any integrity issue and penalties will be imposed subject to being proven.</p>
            <p>The Condition of employment regarding wages, leave and holidays, working hours etc. shall be <br> governed by the provisions of relevant statute which are in force or may come in from time to <br> time.</p>
            <p>In case the above terms and conditions are acceptable to you, please sign the copy of the letter <br> in token of your acceptance and return the same for our record.</p>
            <p><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For Unathorized Signatory</b></p>
            <p><br><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DECLARATION</b></p>
            <P>I have read and understood the above terms and conditions of employment and accept the <br> same, and further undertake to abide by them.</P>
            </br>
            <p><b>Date: <?php echo date("d-m-Y"); ?></b></p>
            <p><br><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Signature of the Employee)</b></p>
            

        <p><b>KVR BEST PROPERTY MANAGEMENT PVT LTD.</b></p>

         
</body>
</html>