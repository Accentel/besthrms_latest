<?php //include('config.php');
session_start();
include('dbconnection/connection.php');
require_once __DIR__ . '/vendor/autoload.php';

if($_SESSION['user'])
{
$name=$_SESSION['user'];
//include('org1.php');


// include('dbfiles/org.php');
// include('dbfiles/uqry_emp.php');
?>
<?php 
         
         ob_start();?>
<!DOCTYPE html>
<html lang="en">
    <?php include'template/headerfile.php'; ?>
	 <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
    <style>
        /* strong{
            color:red;
        } */
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
 
}
table{
	width: 100%;
}
    .underline{
        text-align: center;
        display: inline-block; 
        border-bottom: 2px solid black;
        padding-bottom: 5px;
    }
    .underline1{
        display:inline-block
    }
    
    .no-page-break {
        page-break-inside: avoid;
    }

    </style>
    <body class="no-skin">
        	
                      <?php $id=$_GET['id'];

//include('config.php');

$res=mysqli_query($link,"select * from emps where empid='$id'") or die("Error: " . mysqli_error($link));
$rw=mysqli_fetch_array($res) or die("Error: " . mysqli_error($link));
//$to=$rw['btype'];
//$msg=$rw['msg'];
$employeeId = $rw['employeeid'];
//echo($employeeId);
$certquery = mysqli_query($link,"select * from emp_uniform where employeeid = '$employeeId'");
$rw1=mysqli_fetch_array($certquery);
$bankquery = mysqli_query($link,"select * from bank_nominee where employeeid = '$employeeId'");
$rw2=mysqli_fetch_array($bankquery);
//echo($check_num_rows);
$state=$rw['state'];
$photo = $rw['photo'];
$empsign=$rw['empsign'];
$photo = str_replace( 'http://actlhms.com/kvrhrms/', '', $photo );
$empsign = str_replace( 'http://actlhms.com/kvrhrms//', '', $empsign );


 ?>         
   	
                             
                                                <div style=" text-align: center;">
												   <img src="images/kvrbest.jpg" alt="">
												   <p style="margin=0">Road No:3, Sree Colony,Near Neredmet X Road,<br>Secunderabad - 500 056.
												   </p>
                                                </div> 
                                
            <br/>
			
			
			
			
                        
												  <div style=" text-align: center;background-color: rgba(0, 0, 255, 0.3);" >
                                    
                                    <img src="<?php echo htmlspecialchars($photo); ?>" height= "110" width="100" style="float:right;"/>
                                        <h1 style="float:left;">Employee Info</h1></h3>
												   
									
        
												   </div> 
                                            <table>
                                           <tr>
											    <td><b>State</b></td>
											    <td><?php if($rw['state']=='KN') echo 'Karnataka'; else echo $rw['state'];?></td>
											    <td><b>Employee ID</b></td>
											     <td><?php echo $rw['employeeid']?></td>
											</tr>     
											<tr style=>
											    <td><b>Name of Employee </b></td>
											    <td><?php echo $rw['emp_name']?> </td>
											    <td><b>DOB</b></td>
											     <td><?php echo date('d-m-Y',strtotime($rw["DOB"])) ?></td>
											</tr>
											  <tr><td><b>Gender</b></td><td>
											

  <?php echo $rw['gender']?>
  
  
											</td>
											
                                            
                                        
											  
                                        <td><b>Marital Status</b></td>
										<td>
										<?php echo $rw['maritalstatus']?>
										</td>
                                        </tr>
                                        <tr>
										  
										   <td><b>Spouse  Name</b></td>
										   <td>
											<?php echo $rw['wname']?></td> 
										    
										 <td><b>No of Children</b></td><td style="border:1px solid black;" >
											<?php echo $rw['nok']?></td> 
										 	
											 
										   </tr>
										   <tr>
										   <td><b>Children Names</b></td>
										 	<td >
											   <?php echo $rw['childname']?>
											</td>
											</tr>
											   <tr style="border:1px solid black;">
											
											<td style="border:1px solid black;" ><b>Father  Name</b></td><td style="border:1px solid black;" >
											<?php echo $rw['fname'] ?></td>
                                      
											
											<td style="border:1px solid black;" ><b>Mother Name</b> </td><td style="border:1px solid black;" >
											<?php echo $rw['mname'] ?>
											
											</td>
</tr>
                                            <tr style="border:1px solid black;">
											
											<td style="border:1px solid black;" ><b>Contact No.</b></td><td style="border:1px solid black;" >
											<?php echo $rw['contactno']?></td>
                                      
											
											<td style="border:1px solid black;" ><b>Alternate Contact No.</b> </td><td style="border:1px solid black;" >
<?php echo $rw['alternateno']?>"
											
											</td>
</tr>
<tr style="border:1px solid black;">
<td style="border:1px solid black;" ><b>Family Member Contact No.</b> </td>
<td style="border:1px solid black;" >


    

</td>
<td style="border:1px solid black;" ><b>Email Id</b></td><td style="border:1px solid black;">
									<?php echo $rw['emp_email']?></td>
</tr>
                                        
                                          <tr style="border:1px solid black;"><td style="border:1px solid black;" ><b>Adhar No</b></td><td style="border:1px solid black;" >
										<?php echo $rw['adharcardno']?></td>
										 <td style="border:1px solid black;" ><b> Adhar Photo</b></td><td style="border:1px solid black;" >
										
										</td>
                                        
                                        </tr>
                                        <tr style="border:1px solid black;"><td style="border:1px solid black;" ><b>PAN No</b>.</td><td style="border:1px solid black;">
										<?php echo $rw['pan']?></td>
										<td style="border:1px solid black;" ><b> PAN Card Photo</b></td><td style="border:1px solid black;" >
									
										</td>
										</tr>
										<tr style="border:1px solid black;"><td style="border:1px solid black;" ><b>UAN No.</b></td><td style="border:1px solid black;">
									<?php echo $rw['uan']?></td>
                                         <td style="border:1px solid black;" ><b>PF No.</b></td><td style="border:1px solid black;">
										<?php echo $rw['PFNO']?></td>
                                        </tr>
                                        <tr style="border:1px solid black;"><td style="border:1px solid black;" ><b>ESI No.</b></td><td style="border:1px solid black;" >
										<?php echo $rw['ESI_NO']?></td>
                                     <td style="border:1px solid black;" ><b>DOJ</b></td><td style="border:1px solid black;" >
										<?php echo date('d-m-y',strtotime($rw["DOJ"])) ?></td>
                                        </tr>
											 <tr style="border:1px solid black;"><td style="border:1px solid black;" ><b>Qualification</b></td><td style="border:1px solid black;" >
									<?php echo $rw['qualification']?></td>
                                       <td style="border:1px solid black;" ><b>Experience</b></td><td style="border:1px solid black;">
									<?php echo $rw['experience']?></td>
                                        </tr>
                                         <tr style="border:1px solid black;">
                                          <td style="border:1px solid black;" ><b> Designation</b></td><td style="border:1px solid black;">
										 <?php echo $rw['designation']?>
										  <td style="border:1px solid black;" ><b>Photo</b></td><td style="border:1px solid black;" >
										    </td>
                                        </tr>	  
                                        <tr style="border:1px solid black;"><td style="border:1px solid black;" ><b>Address</b></td><td style="border:1px solid black;" >
										
										<?php echo $rw['address']?></td>
										<td style="border:1px solid black;" ><b>City</b></td><td style="border:1px solid black;" >
										 <?php echo $rw['city']?></td>
										</tr>
										
										 
                                    
										  <tr style="border:1px solid black;"><td style="border:1px solid black;" ><b>User Name</b></td><td style="border:1px solid black;" >
									<?php echo $rw['username']?>
										</td>
                                       
                                        </tr>
                                        
									   </table>		
                                        	
                                                  <br/>
												   <div style=" text-align: center;background-color: rgba(0, 0, 255, 0.3);">
												   <p><h1>Bank Details</h1></p>
												   </div>  
                                                   <table  style="border:1px solid black; width:100%;">
                                                    
												   <tr style="border:1px solid black;">
									
                                          <td style="border:1px solid black;" > <b>Bank Name.</b></td>
										<td><?php echo $rw2['bname']?></td>
										 <td style="border:1px solid black;" ><b> Account No.</b></td><td style="border:1px solid black;">
										  <?php echo $rw2['accno']?>
										 
										  <td style="border:1px solid black;" ><b>IFSC Code</b></td><td style="border:1px solid black;" >
										<?php echo $rw2['ifsc']?>
										</td>
										<td style="border:1px solid black;" ><b>Branch of Bank</b></td><td style="border:1px solid black;" >
										<?php echo $rw2['branch']?>
										</td>
                                        </tr>
                                        
                                        <!-- <tr style="border:1px solid black;">
                                        
                                          
										 
										  <td style="border:1px solid black;" ><b>Photo of Passbook/ Cancelled Cheque</b></td><td style="border:1px solid black;" >
										
										</td>
                                        </tr> -->
                                       
												   </table>
												   
												   
                                                  <br/>
												   <div style=" text-align: center;background-color: rgba(0, 0, 255, 0.3);">
												   <p ><h1>Uniform Details</h1></p>
												   </div>  
                                                   <table  style="border:1px solid black; width:100%;">
                                                    
												   <tr style="border:1px solid black;">
									
                                          <td style="border:1px solid black;" > <b>Shirt</b></td><td style="border:1px solid black;">
										 <?php echo $rw1['ushirt']?></td>
										  <td style="border:1px solid black;" ><b>Shirt Size</b></td><td style="border:1px solid black;" >
										<?php echo $rw1['shirtsize']?>
										</td>
										<td style="border:1px solid black;" ><b>Shirt Quantity</b></td><td style="border:1px solid black;" >
										<?php echo $rw1['shirtqty']?>
										</td>
										
										  <!--<td style="border:1px solid black;" ><b>Uniform Issue Date</b></td><td style="border:1px solid black;" >
										<?php  /*echo date('d-m-Y',strtotime    ($rw['uniformisdate']))*/ ?>
										</td>-->
                                        </tr>
                                        <tr style="border:1px solid black;">
									
                                          <td style="border:1px solid black;" > <b>Pant</b></td><td style="border:1px solid black;">
										 <?php echo $rw1['upant']?></td>
										  <td style="border:1px solid black;" ><b>Pant Size</b></td><td style="border:1px solid black;" >
										<?php echo $rw1['pantsize']?>
										</td>
										<td style="border:1px solid black;" ><b>Pant Qty</b></td><td style="border:1px solid black;" >
										<?php echo $rw1['pantqty']?>
										</td>
										
										 
                                        </tr>
                                         <tr style="border:1px solid black;">
									
                                          <td style="border:1px solid black;" > <b>Shoe</b></td><td style="border:1px solid black;">
										 <?php echo $rw1['ushoe']?></td>
										  <td style="border:1px solid black;" ><b>Shoe Size</b></td><td style="border:1px solid black;" >
										<?php echo $rw1['shoesize']?>
										</td>
										<td style="border:1px solid black;" ><b>Shoe Qty</b></td><td style="border:1px solid black;" >
										<?php echo $rw1['shoeqty']?>
										</td>
										
										 
                                        </tr>
                                        <tr style="border:1px solid black;">
									<td style="border:1px solid black;" ><b>Uniform Issue Date</b></td><td style="border:1px solid black;" >
										<?php  echo date('d-m-Y',strtotime    ($rw['uniformisdate'])) ?>
										</td>
                                          
										
										 
                                        </tr>
                                        
                                       
												   </table>
												   <br/>
												   
  <style>
        /* strong{
            color:red;
        } */
        table, th, td {
  border: 1px solid black;
 
}

    .underline{
        text-align: center;
        display: inline-block; 
        border-bottom: 2px solid black;
        padding-bottom: 5px;
    }
    .underline1{
        display:inline-block
    }
    
    .no-page-break {
        page-break-inside: avoid;
    }
	body {
            background-color: white; /* Sets the background color of the entire page */
            /* margin: 0; Removes default margin */
            padding: 0; /* Removes default padding */

			font-family: Arial, sans-serif;
            /* background-color: white; */
            margin: 20px;

        }

        .image-container {
            width: 500px;
            /* padding: 20px; */
            /* background-color: #f0f0f0; */
            /* border: 2px solid #ccc; */
            text-align: center;
            margin: 0 auto;
        }

		.form-container {
            width: 60%; /* Width of the table */
            margin: 0 auto;
            border-collapse: collapse; /* Collapse borders into one */
			margin-top:30px;
        }

        .form-container, .form-container th, .form-container td {
            border: 2px solid black;
        }

        .form-container th, .form-container td {
            padding: 5px;
            text-align: left;
        }

        .title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .image-container img {
            max-width: 100%;
            height: auto;
            /* border-radius: 20px; */
        }

		.center-container {
            text-align: center; /* Centers text inside the div */
            margin-top: 20px; /* Optional: Adds space above the div */
        }

        .center-container h2 {
            font-weight: bold; /* Ensures the text is bold */
			text-decoration: underline; /* Adds an underline to the text */
        }

		.box {
            width: 60%; /* Adjust width as needed (percentage or fixed size) */
            height: 400px; /* Set a fixed height */
            background-color: #f8f8f8; /* Background color */
            border: 2px solid #333; /* Border around the box */
            padding: 20px; /* Space inside the box */
            margin: 20px auto; /* Center the box horizontally with margin */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Adds shadow for 3D effect */
        }

		/* .outer-box {
            width: 300px;
            padding: 20px; */
            /* background-color: #f0f0f0; */
            /* border: 2px solid #ccc;
            text-align: center;
        } */

        .inner-box {
            width: 820px;
            padding: 15px;
            /* background-color: #e0e0e0; */
            border: 1px solid #999;
            margin: 0 auto;
			border: 2px solid #333; /* Border around the box */
            /* text-align: center; */
        }
	  .box1 {
            border: 2px solid black;
            padding: -10px 50px;
            text-align: center;
            
            display: inline-block;
            margin: 30px 550px;
			width: 350px;
            /* height: 30px; */
            font-family: Arial, sans-serif;
            font-size: 5px; /* Adjust this size according to your preference */
        }
		.box-small {
            margin: 3px 0;
			text-align: center;
        }
		.numbered-box {
            border: 2px solid black;
            padding: 10px;
            font-weight: bold;
            text-align: center;
            width: 50px; /* Adjust width as needed */
            background-color: white; /* Optional background color */
        }

    </style>
	 <div class="image-container" style="margin-top: 150px;">
                                       <img src="images/kvrbest.jpg" alt="" style="margin-top:30px">
                                   </div>
								   <div class="center-container">
									<h2 style="font-weight:bold">BIOMETRIC DATA</h2>
								</div>

								<table class="form-container">
									<tr>
										<th colspan="2">Date</th><td colspan="5"><?php

$formatted_date = date('d-m-y');

echo $formatted_date;
?></td>

									</tr>
									<tr>
										<th colspan="2">Emp. ID</th><td colspan="5"><?php echo $rw['employeeid']?></td>
									</tr>
									<!-- <tr>
										<td colspan="5"><?php echo $rw['employeeid']?></td>
									</tr> -->
									<tr>
										<th colspan="2">Emp. Name</th><td colspan="5"><?php echo $rw['emp_name']?></td>
									</tr>
									<!-- <tr>
										<td colspan="5"><?php echo $rw['emp_name']?></td>
									</tr> -->
									<tr>
										<th colspan="2">Right Hand finger prints</th>
									</tr>
									<tr>
										<td>Thumb</td>
										<td>Index Finger</td>
										<td>Middle Finger</td>
										<td>Ring Finger</td>
										<td>Small Finger</td>

									</tr>
									<tr>
										<td style="width: 100px; height: 120px;"></td>
										<td style="width: 100px; height: 120px;"></td>
										<td style="width: 100px; height: 120px;"></td>
										<td style="width: 100px; height: 120px;"></td>
										<td style="width: 100px; height: 120px;"></td>
									</tr>
									<tr>
										<th colspan="2">Left Hand finger prints</th>
									</tr>
									<tr>
										<td>Thumb</td>
										<td>Index Finger</td>
										<td>Middle Finger</td>
										<td>Ring Finger</td>
										<td>Small Finger</td>
									</tr>
									<tr>
										<td style="width: 100px; height: 120px;"></td>
										<td style="width: 100px; height: 120px;"></td>
										<td style="width: 100px; height: 120px;"></td>
										<td style="width: 100px; height: 120px;"></td>
										<td style="width: 100px; height: 120px;"></td>
									</tr>

								</table>


								<div class="acknowledgement-container" style="display: flex; flex-direction: column; align-items: flex-end; margin-right: 300px; margin-top: 70px;">
    <img src="<?php echo htmlspecialchars($empsign); ?>" style="font-weight: bold;" height="110" width="100" />
    <h4 style="font-weight: bold;">Signature</h4>
</div>
    
								<div class="box1" style="border: 2px solid black; padding: 10px; width:300px; margin-left: 200px; margin-top: 520px;">
    <h2 style="font-weight: bold; margin: 0; font-size: 15px;">Form "Q"<br>
    SEE RULE 24 (9A)</h2>
</div>

<div class="box-small" style="border: 2px solid black; padding: 10px; width:300px; margin-left: 200px; margin-top: 20px;">
    <h2 style="font-weight: bold; margin: 0; font-size: 15px;">APPOINTMENT ORDER</h2>
</div>
 
							 <br/>

							 <form name="frm" method="post" action="">
							 <table   style="border:1px solid black;  border-collapse: collapse; width:100%;" >
							 
							        <tr style="border:1px solid black;">
									<td class="numbered-box">1</td>
											    <td style="border:2px solid black; font-weight:bold;"><P><b>NAME & ADDRESS OF THE ESTABLISHMENT</b></td></P>
											    <td style="border:2px solid black;">KVR BEST PROPERTY MANAGEMENT, Road No:3, Sree Colony, Near Neredmet X Road, Secunderabad - 500 056.</td>
											</tr>
											<tr style="border:1px solid black;">
											<td class="numbered-box">2</td>
											    <td style="border:2px solid black; font-weight:bold;" ><P><b>NAME & ADDRESS OF THE EMPLOYER</b></td></P>
												 <td style="border:2px solid black;">KVR BEST PROPERTY MANAGEMENT, Road No:3, Sree Colony, Near Neredmet X Road, Secunderabad - 500 056.</td>
</tr>

											<tr style="border:1px solid black;">
											<td class="numbered-box">3</td>
											    <td style="border:2px solid black; font-weight:bold;" ><P><b>NAME OF THE EMPLOYEE</b></td></P>
											    <td style="border:2px solid black; text-align: center;"><?php echo $rw['emp_name']; ?></td>
											</tr>

											<tr style="border:1px solid black;">
											<td class="numbered-box">4</td>
											    <td style="border:2px solid black; font-weight:bold;" ><P><b>HIS/HER POSTAL ADDRESS</b></td></P>
											    <td style="border:2px solid black; text-align: center;"><?php echo $rw['localaddress']; ?></td>
											</tr>

											<tr style="border:1px solid black;">
											<td class="numbered-box">5</td>
											    <td style="border:2px solid black; font-weight:bold;" ><P><b>HIS/HER PERMANENT ADDRESS</b></td></P>
											    <td style="border:2px solid black; text-align: center;"><?php echo $rw['permaddress']; ?></td>
											</tr>

											<tr style="border:1px solid black;">
											<td class="numbered-box">6</td>
											    <td style="border:2px solid black; font-weight:bold;" ><P><b>PARENT/SPOUSE NAME</b></td></P>
											    <td style="border:2px solid black; text-align: center;">
        <?php
        // Assuming $rw['gender'] contains 'Male' or 'Female'
        // and $rw['maritalstatus'] contains 'married' or 'unmarried'
        // and $rw['relation'] contains 'father' or 'spouse'

        if ( ($rw['maritalstatus'] == 'unmarried' )) {
            // If unmarried, or if the relation is 'father', show the father name
            echo $rw['fname'];
        } elseif ( ($rw['maritalstatus'] == 'married' )) {
            // If married and relation is spouse, show the spouse name (wife for male, husband for female)
            echo $rw['wname'];
        }
        ?>
    </td>
											</tr>

											<tr style="border:1px solid black;">
											<td class="numbered-box">7</td>
											    <td style="border:2px solid black; font-weight:bold;" ><P><b>DATE OF BIRTH</b></td></P>
											    <td style="border:2px solid black; text-align: center;">
												<?php echo date('d-m-Y',strtotime($rw["DOB"])) ?></td>
											</tr>

											<tr style="border:1px solid black;">
											<td class="numbered-box">8</td>
											    <td style="border:2px solid black; font-weight:bold;" ><P><b>DATE OF HIS/HER ENTRY IN TO EMPLOYEMENT</b></td></P>
												<td style="border:2px solid black; text-align: center;">
												<?php echo date('d-m-Y',strtotime($rw["DOJ"])) ?></td>
											</tr>
<tr style="border:1px solid black;">
											<td class="numbered-box" style="border: 1px solid black;">9</td>
											    <td style="border: 1px solid black; font-weight:bold;" ><P><b>HIS/HER SERIAL NUMBER IN THE REGISTER OF EMPLOYMENT</b></td></P>
											    <td style="border:2px solid black; text-align: center;" ><?php echo $rw['employeeid']?></td>
											</tr>
											

											<tr style="border:1px solid black;">
											<td class="numbered-box" style="border: 1px solid black;">10</td>
											    <td style="border: 1px solid black; font-weight: bold;" ><P><b>NATURE OF WORK ENSTRUSTED TO HIM/HER</b></td></P>
											    <td style="border: 1px solid black; text-align: center;"><?php echo $rw['state']; ?></td>
											</tr>
<tr style="border:1px solid black;">
											<td class="numbered-box">11</td>
											    <td style="border: 1px solid black; font-weight:bold;" ><P><b>DESIGNATION</b></td></P>
											    <td style="border: 1px solid black; text-align: center;"><?php echo $rw['designation']; ?></td>
											</tr>
											

											<tr style="border:1px solid black;">
											<td class="numbered-box">12</td>
    <td style="border: 1px solid black; font-weight: bold;">
        <p><b>Salary Details</b></p>
    </td>
    <td style="border: 1px solid black; border-collapse: collapse;">
        <div style="display: flex; flex-direction: column;">
            <div style="margin-top: 5px; font-weight: bold;">
                <b>Basic + DA:</b> <br>
               <b> Other Allowances:</b><br> 
                <b>Total:</b> 
            </div>
        </div>
    </td>
</tr>
							 </table>

							 <div class="acknowledgement-container">
							   <!-- <p class="place" style="margin-left:300px; font-weight:bold;">Place: Bangalore</p> -->
							   <h3 style="font-weight:bold; font-size: 15px;">Place: Hyderabad.</h3>
							   <h3 style="font-weight: bold; font-size: 15px; ">Date:</h3>
							   <h3 style="text-align: right; margin-right: 660px; margin-top: 45px; font-weight: bold;font-size: 15px;">Seal of the Establishment</h3>
							   <img src="<?php echo htmlspecialchars($empsign); ?>" style="font-weight: bold;font-size: 15px;" height="80" width="100" />
							   <h3 style="font-weight: bold;font-size: 15px;">acknowledgement by the employee</h3>
                             </div>
        
         

                             <!-- Form 11 -->
							
                              
                                
                                <div style="text-align: center; margin-top: 200px;">
    <h4 style="margin: 0;">New form no.11-Declaration form</h4>
    <p style="margin: 0; font-style: italic;">(To be retained by the employer for future reference)</p>
    <h4 style="margin: 0;">EMPLOYEE'S PROVIDENT FUND ORGANISATION</h4>
    <p style="margin: 0;">Employee's Provident Fund Scheme, 1952 (paragraph 34 & 57) &</p>
    <p style="margin: 0;">Employee's Pension Scheme, 1995 (paragraph 24)</p>
    <p style="font-size: small; margin: 0;">
        (Declaration by a person taking up employment in any establishment on which EPF Scheme, 1952 and/or EPS, 1995 is applicable)
    </p>
</div>

                                
<br/><tr>
                        
												   
<table style="border: 1px solid black; width: 70%; margin: auto; border-collapse: collapse;">
    <tr>
        <td style="border: 1px solid black; padding: 2px;">1</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">Name of the member</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;"><?php echo $rw['emp_name']; ?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">2</td>
        <td style="border: 1px solid black; padding: 5px; width: 60%;">
            <label>
                 <?php  
                 if (strtolower($rw['nrelation'])=='father') echo '&#x2609;' ?> <?php  
                 if (strtolower($rw['nrelation'])!='father') echo '&#x26AC;' ?>  Father Name
            </label>
            <label>
                <?php  
                 if (strtolower($rw['nrelation'])=='spouse') echo '&#x2609;' ?> <?php  
                 if (strtolower($rw['nrelation'])!='spouse') echo '&#x26AC;' ?>  Spouse Name
            </label>
            <br>(Please select which is applicable)
        </td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;">
        <?php 
            // Display name based on marital status
           
                echo $rw2['nname']; // Display Spouse's name for married
            
        ?>
    </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">3</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">Date of Birth (DD/MM/YY)</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;"><?php echo date('d-m-Y', strtotime($rw["DOB"])); ?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">4</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">Gender: (Male/Female/Transgender)</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;"><?php echo $rw['gender']; ?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">5</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">Marital Status: (Married/Unmarried/Widow/Widower/Divorce)</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;"><?php echo $rw['maritalstatus']; ?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">6</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">
            (a) Email Id:<br>
            <span style="display:inline-block; width:100%; border-bottom: 1px solid black;"></span><br>
            (b) Mobile no:
        </td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;">
            <?php echo $rw['emp_email']; ?><br>
            <hr style="border: 1px solid black;">
            <?php echo $rw['contactno']; ?>
        </td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">7</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">Whether earlier a member of Employee's Provident Fund Scheme 1952</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;"><?php echo $rw['pensionscheme'];?></td>
    </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">8</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">Whether earlier a member of Employee's Pension Scheme 1995</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;"><?php echo $rw['pfscheme'];?></td>
    </tr>
    <tr>
	<td style="border: 1px solid black; padding: 2px;">9(a)</td>
    <td style="border: 1px solid black; padding: 2px; width: 60%;">
        Previous employment details: [If yes to 7 AND / OR 8 Above]<br>
         Universal Account Number:</td></tr>
         <td style="border: 1px solid black; padding: 2px; width: 35%;">
         <?php echo $rw['uan']; ?></td>
         <tr>
         <td style="border: 1px solid black; padding: 2px;">9(b)</td>
         <td style="border: 1px solid black; padding: 2px; width: 60%;"> Previous PF Account Number:</td>
         <td style="border: 1px solid black; padding: 2px; width: 35%;">
         <?php echo $rw['PFNO']; ?></td></tr>
        <tr>
        <td style="border: 1px solid black; padding: 2px;">9(c)</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;"> Date of Exit from Previous employment (DD/MM/YY):</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;">
        </td></tr>
        <tr>
        <td style="border: 1px solid black; padding: 2px;">9(d)</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;"> Scheme Certificate No. (if issued):</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;">
         </td>
        </tr>
        <tr>
        <td style="border: 1px solid black; padding: 2px;">9(e)</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;"> Pension Payment Order (PPO) No. (If issued):</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;">
         </td>
        </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">10(a)</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">
             International Worker:</td>
             <td style="border: 1px solid black; padding: 2px; width: 35%;">
         NO</td>
        </tr>
        <tr>
        <td style="border: 1px solid black; padding: 2px;">10(b)</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">
        If yes, state country of origin (India/Name of the country):</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;">
       </td>
        </tr>
        <tr>
        <td style="border: 1px solid black; padding: 2px;">10(c)</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">
        Passport Number:</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;">
        </td>
        </tr>
        <tr>
        <td style="border: 1px solid black; padding: 2px;">10(d)</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">
        Validity of passport: (DD/MM/YY) to (DD/MM/YY):</td>
        <td style="border: 1px solid black; padding: 2px; width: 35%;">
        </td>
        </tr>
    <tr>
        <td style="border: 1px solid black; padding: 2px;">11(a)</td>
        <td style="border: 1px solid black; padding: 2px; width: 60%;">
            KYC Details: (attach self-attested copies of following KYCs)<br>
             Bank Account No. & IFSC No.</td>
             <td style="border: 1px solid black; padding: 2px; width: 35%;">
             <?php echo $rw2['accno'].'<br>'. $rw2['ifsc']; ?></td>
             </tr>
             <tr>
             <td style="border: 1px solid black; padding: 2px;">11(b)</td>
             <td style="border: 1px solid black; padding: 2px; width: 60%;">
           Aadhaar Number:</td>
           <td style="border: 1px solid black; padding: 2px; width: 35%;">
             <?php echo $rw['adharcardno']; ?></td>
             </tr>
             <tr>
             <td style="border: 1px solid black; padding: 2px;">11(c)</td>
             <td style="border: 1px solid black; padding: 2px; width: 60%;">
             Permanent Account Number (PAN) If applicable:</td>
             <td style="border: 1px solid black; padding: 2px; width: 35%;">
             <?php echo $rw['pan']; ?></td>
             </tr>
</table>
<br>

<div style="text-align: center;"><h4 class="underline" style="font-weight:bold; font-size: 15px;">UNDERTAKING</h4>
</div>                               
<p>1)<span style="margin-left: 10px;"></span> Certified that the particulars are true to the best of my knowledge.</p>
<p>2)<span style="margin-left: 10px;"></span> I Authorized EPFO to use my aadhaar for verification / authentication / e-KYC purpose for service delivery</p><hr>
<p>3)<span style="margin-left: 10px;"></span> Kindly transfer the funds and service details,if applicable from the previous PF account as declared above to the present P.F. account.<br><span style="margin-left: 27px;"></span>(The transfer would be possible only if the identified KYC detail approved by previous employer has been verified by present employer<br><span style="margin-left: 27px;"></span> using his Digital Signature Certified) </p>
<p>4) <span style="margin-left: 10px;"></span> In case of changes in above details, the same will be initiated to employer at the earliest</p>

<p style="font-weight: bold;">Date:</h4>
<p style="font-weight: bold;">Place:</h4>

<img src="<?php echo htmlspecialchars($empsign); ?>" style="margin-left: 450px;" height="110" width="100" />
<h4 style="margin-left: 450px; font-weight: bold; font-size:15px;">Signature of member</h4>

<div style="text-align: center; "><h4 style="font-weight: bold; font-size:15px;">DECLARATION BY PRESENT EMPLOYER</h4>
</div>
  

<p>A)<span style="margin-left: 10px;"> The member (<span style="font-weight:bold"><?php echo $rw['emp_name']; ?></span>) joined on <?php echo date('d-m-Y', strtotime($rw["DOJ"])) ?> and has been alloted PF Number <b>BGBNG0023605000</b></p>


<p>B) <span style="margin-left: 10px;"></span> In case the person was earlier not a member of EPF Scheme 1952 and EPS 1995<span style="font-weight: bold;">(Post allotment of UAN <?php echo $rw['uan']; ?>)</span><br><span style="margin-left: 27px;"></span>The UAN alloted for the member is <span style="display: inline-block;"><?php  echo $rw['emp_name'];?></span><br><span style="font-weight: bold;">Please select the appropriate options:</span><br> The KYC details of the above member in the UAN database<br><img style="width: 20px; height: 10px;" src="images/arrow.png"> Have not been uploaded<br><img style="width: 20px; height: 10px;" src="images/arrow.png"> Have been uploaded but not approved<br><img style="width: 20px; height: 10px;" src="images/arrow.png"> Have been uploaded and approved with DSC</p>

<p>C)<span style="margin-left: 10px;"></span> In case the person was earlier not a member of EPF Scheme 1952 and EPS 1995<b>(Post allotment of UAN)</b><br>The above PF Account Number/UAN of the member as mentioned in(A) above has been tagged with his/her UAN/Previous member id as declared <br><b>Please select the appropriate options:</b><br><img style="width: 20px; height: 10px;" src="images/arrow.png"> The KYC details of the above member in the UAN database have been approved with Digital Signature Certificate and transfer<br> Requests has been generated on the portal.<br><img style="width: 20px; height: 10px;" src="images/arrow.png"> As the DSC of establishment are not registered with EPFO, the member has been informed to fill physical claims (form-13)<br> for transfer of fumds from his previous establishment.<br></p>
  <p style="font-weight: bold;">Date :</p>
  <p style="margin-left: 250px; font-size: 15px; font-weight: bold;"> Signature of Employer with Seal of Establishment<h4>
            
                                        <!-- FORM 2 -->

										<style>
        
        .table1 {
  border: 1px solid black;

}
		.pra {
            margin: -2px 0;
            font-size: 16px;
            text-align: center;        
        }
       
    .outer-box {
    width: 200px;
    height: 15px;
    padding: 10px;
    border: 3px solid black;
    margin-left: 250px;
    /* display: flex;
    align-items: center;
    text-align: center; */
    
    
}

.inner-box {
    width: 30px;
    height: 10px;
    padding: 5px;
    border: 1px solid black; 
      
    

}

.table1 {
    width: 100%;
    /* margin-left: 120px; */
    border-collapse: collapse; 
    margin-top: 20px;
    text-align: center;
}

    </style>
			
  <div class="outer-box" style="margin-top: 1000px; ">
        <div class="inner-box">
           <h2 class="pra" style=" font-weight: bold;"> FORM 2 (Revised) </h2> 
        </div>
    </div>

<h2 class="pra" style=" margin-top: 30px; text-align: center; font-weight: bold; ">NOMINATION AND DECLARATION FORM FOR UNEXEMPTED/<br>EXEMPTED ESTABLISHMENT</h2>
<br>
<p style="text-align: center; font-weight: bold; font-size: 12px; ">Declaration and Nomination form under the Employees' Provident Funds and<br> Employees' Pension Scheme</p>

<p style="text-align: center; font-size:small;">(Paragraphs 33 & 61 (1) of the Employees Provident Fund Scheme, 1952 and paragraphs 18 of the Employees' Pension Scheme, 1995)</p>

<table style="width: 100%; border-collapse: collapse;">
    <tr>
        <td style="padding: 5px; width: 50%;">
            <span style="font-size: 15px;">1. Name (in Block letters)</span>
        </td>
        <td style=" padding: 5px; width: 70%;">
            <span style="font-weight: bold; font-size: 15px;"><?php echo strtoupper($rw['emp_name']); ?></span>
        </td>
    </tr>
    <tr>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;">2. Father's / Husband's Name</span>
        </td>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;"><?php if ( ($rw['maritalstatus'] == 'unmarried' ) ) {
            // If unmarried, or if the relation is 'father', show the father name
            echo $rw['fname'];
        } elseif ( ($rw['maritalstatus'] == 'married' ) and $rw['gender']=='female') {
            // If married and relation is spouse, show the spouse name (wife for male, husband for female)
            echo $rw['wname'];
        } else {
        echo $rw['fname'];}?></span>
        </td>
    </tr>
    <tr>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;">3. Date of Birth</span>
        </td>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;"><?php echo date('d-m-Y', strtotime($rw["DOB"])); ?></span>
        </td>
    </tr>
    <tr>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;">4. Sex</span>
        </td>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;"><?php echo $rw['gender']; ?></span>
        </td>
    </tr>
    <tr>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;">5. Marital Status</span>
        </td>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;"><?php echo $rw['maritalstatus']; ?></span>
        </td>
    </tr>
    <tr>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;">6. EPF Account Number</span>
        </td>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;"><?php echo $rw['PFNO']; ?></span>
        </td>
    </tr>
    <tr>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;">7. Permanent Address</span>
        </td>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;"><?php echo $rw['permaddress']; ?></span>
        </td>
    </tr>
    <tr>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;">8. Temporary Address</span>
        </td>
        <td style=" padding: 5px;">
            <span style="font-size: 15px;"><?php echo $rw['localaddress']; ?></span>
        </td>
    </tr>
</table>





<h2 class="pra" style="margin-top: 50px; font-size:15px;font-weight:bold">PART - A (EPF)</h2><br>


 <p style="font-size: 15px;">I hereby nominate the person (s) /cancel the nomination made by me previously and nominate the person (s) mentioned below to receive the amount standing to my credit in the Employee's Provident Fund in the event of my death :</p>
 
<table class="table1">
        <thead>
            <tr>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Name of nominee/ <br> nominees</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Address</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Nominee's relationship<br> with the member</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Date of Birth</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Total amount of share of Accumulations in Provident Fund to be paid to each nominee</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">If the nominee is a minor, name & relationship & address of the guardian who may receive the amount during the minority of nominee</th>
            </tr>
        </thead>
        <tbody>
            <tr>
    <td>
        <?php echo $rw2['nname'] ?>
    </td>
    <td>
         <?php echo $rw2['naddress']?>
    </td>
    <td>
        <?php echo  $rw2['nrelation'] ?>
    </td>
    <td><?php echo date('d-m-Y',strtotime($rw2["ndob"])) ?></td>
    <td>
        <?php echo  $rw2['namount'] ?>
    </td>
        <td>&#10003;</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>

    <hr style="border:1px solid black; margin-top: 50px; margin-left: 220px; margin-right:160px">

    <p>1.<span style="margin-left: 10px; font-size: 15px;">* Certified that i have no family as defined in no para 2(g) of the Employee's Provident Fund Scheme,1952 and should<br><span style="margin-left: 35px;">I Acquire a family here after, the above nomination should be deemed as cancelled </p>

    <p>2.<span style="margin-left: 10px; font-size: 15px;">*Certified that my father/mother is/are dependent upon me.</p>

<img src="<?php echo htmlspecialchars($empsign); ?>" style="margin-left:300px; font-weight:bold; margin-top: 30px; font-size: 15px;" height="110" width="100" />
    <p style="margin-left:300px; font-weight:bold; margin-top: 30px; font-size: 15px;">Signature or thumb impression of subscriber.</p>



    <h2 class="pra" style="margin-top: 50px; font-weight: bold; ">PART - B (EPF) (Para 18)</h2><br>

    <p style="font-size: 15px;">I hereby below particulars of the members of my family who would be eligible to receive widow/children pension in the event of my death.</p>

    <table class="table1">
        <thead>
            <tr>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">S.No</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Name of the<br> family member</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Address</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Date of Birth</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Relationship with the member</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
        <?php echo $rw2['nname'] ?>
    </td>
    <td>
        <?php echo $rw2['naddress'] ?>
    </td>  
    <td><?php echo date('d-m-Y',strtotime($rw2["ndob"])) ?></td>
    <td>
        <?php echo  $rw2['nrelation'] ?>
    </td>            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
<br>


<hr style="border:1px solid black; margin-top: 20px; margin-left: 220px;margin-right:160px">

<p style="font-size: 15px;">**Certified that i have no family, as defined in para 2(vii) of Employee's Pension Scheme , 1995 and should I acquire a family here after I shall furnish particulars there on in the above form.</p>

<p style="font-size: 15px;">I hereby nominate the following person for receiving the monthly widow pension(admissible under para 16 2 (a)(i) and (ii)in the event of my death without leaving any eligible family member for receiving Pension.</p>

<table class="table1">
        <thead>
            <tr>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Name and Address of the Nominee</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Date of Birth</th>
                <th style="font-weight: lighter ;text-align:center;
    font-size: 17px;">Relationship with the member</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>
        <?php echo $rw2['nname'].'<br>'.', '.$rw2['naddress']; ?>
    </td>
    <td><?php echo date('d-m-Y',strtotime($rw2["ndob"])) ?></td>
    <td>
        <?php echo  $rw2['nrelation'] ?>
    </td>                
            </tr>
        </tbody>
    </table>
<br>


<hr style="border:1px solid black; margin-top: 20px; margin-left: 220px;margin-right:160px">

<p style="font-size: 15px;">Date <span style="margin-left: 15px; "></span>:</p>

<img src="<?php echo htmlspecialchars($empsign); ?>" style="margin-left:250px; font-weight:bold; font-size: 15px;" height="80" width="100" />
<p style="margin-left:250px; font-weight:bold; font-size: 15px;">Signature or thumb impression of subscriber.</p>

<p style="margin-top: 20px; font-size: 15px;">Place <span style="margin-left: 15px; font-size: 15px;"></span>: Hyderabad</p>

<p style="margin-top: 20px; font-size: 15px;">**Strike out whichever is not applicable </p><br>

<h2 class="pra" style="font-weight: bold; font-size: 15px; ">CERTIFICATE BY EMPLOYER</h2><br>

<p style="font-size: 15px;">Certified that above declaration and nomination has been signed/thumb impressed before me by shri/smt./kum <span style="text-decoration: underline; text-decoration-style: dotted; font-size: 15px; font-weight: bold;"><?php echo $rw['emp_name']?></span> employed in my establishment after he/she read the entries have been read over to him/her by me and got confirmed by him/her.</p>



<p style="font-size: 15px;">Place <span style="margin-left: 15px; font-size: 15px;"></span>: Hyderabad</p>

<p style="margin: 30px 0 0 250px; font-weight:bold; font-size: 15px;">Signature of the employer or other </p>
<p style="margin: 0 0 0 250px; font-weight:bold; font-size: 15px;">Authorized officers of the Establishment.</p><br>

<p style="margin-left: 250px; font-weight:bold; font-size: 15px;">Designation</p>

<p style=" margin-top: 20px; font-size: 15px;">Dated <span style="margin-left: 15px; font-size: 15px;"></span>:</p>

<p style="margin: 30px 0 0 350px; font-weight:bold; font-size: 15px;">Name & Address of the factory/</p>
<p style="margin: 0 0 0 350px; font-weight:bold; font-size: 15px; ">Establishment or Rubber Stamp</p>

                        <!-- ESI -->

<style>

            .image-container {
            width: 500px;
            /* padding: 20px; */
            /* background-color: #f0f0f0; */
            /* border: 2px solid #ccc; */
            text-align: center;
            margin: 0 auto;
        }

		.table-container {
			display: flex; /* Use flexbox to align the tables side by side */
			justify-content: flex-start; /* Align the tables to the left */
			gap: 20px; /* Space between the tables */
			margin-top: 20px; /* Space from the top */
			/* margin-left: 200px;  */
	}

		.form-container {
			width: 73%; /* Width of each table */
			border-collapse: collapse; /* Collapse borders into one */
	}

		.form-container, .form-container th, .form-container td {
   			 border: 2px solid black;
	}

		.form-container th, .form-container td {
			padding: 5px;
			text-align: left;
	}

	.table-wrapper {
    width: 50%; 
}
.table-wrapper1 {
    width: 50%;
	margin-left: 480px;
	margin-top: -300px; 
}
.table-wrapper2 {
    width: 100%;
}
.table-wrapper3 {
    width: 100%;
	margin-left: 400px;
	margin-top: -70px;
}


        .title {
            text-align: center;
            font-weight: bold;
            text-decoration: underline;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .image-container img {
            max-width: 550%;
            height: auto;
            /* border-radius: 20px; */
        }

		.center-container {
            text-align: center; Centers text inside the div
            margin-top: 30px; /* Optional: Adds space above the div */
			/* margin-left: 235px; */
        }

        .center-container h2 {
            font-weight: bold; /* Ensures the text is bold */
			text-decoration: underline; /* Adds an underline to the text */
        }

		.box {
            width: 60%; /* Adjust width as needed (percentage or fixed size) */
            height: 400px; /* Set a fixed height */
            background-color: #f8f8f8; /* Background color */
            border: 2px solid #333; /* Border around the box */
            padding: 20px; /* Space inside the box */
            margin: 20px auto; /* Center the box horizontally with margin */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Optional: Adds shadow for 3D effect */
        }

		/* .outer-box {
            width: 300px;
            padding: 20px; */
            /* background-color: #f0f0f0; */
            /* border: 2px solid #ccc;
            text-align: center;
        } */

        .inner-box {
            width: 820px;
            padding: 15px;
            /* background-color: #e0e0e0; */
            border: 1px solid #999;
            margin: 0 auto;
			border: 2px solid #333; /* Border around the box */
            /* text-align: center; */
        }

	  .top-aligned {
    vertical-align: top; /* Aligns text to the top of the cell */
    padding: 20px; /* Optional: add padding if needed */
    text-align: center; /* Optional: center-align text horizontally */
}


/* Ensure other cells have consistent alignment */
th, td {
    /* vertical-align: middle; */
     /* Default alignment for other cells */
    /* padding: 10px; */
     /* Optional: add padding to other cells */
}

</style>



                         <!-- <div class="image-container">
                                       <img src="images/headeresi1.jpg" alt="" style="margin-top:50px; margin-left:1x; width:720px">
                                   </div> -->
								   <div class="center-container">
									<h2 style="font-size: 15px; margin-top: 800px;">DECLARATION FORM</h2>
								</div>
								<div class="center-container">
    <h6 style="font-weight:bold">
        To be filled by employee after reading instruction overleaf. Two Postcard Size photographs to be attached with the form. This form is free of cost.
    </h6>
    </div>
	
								<div class="table-container" style="margin-top: -30px;">
								<div class="table-wrapper">
								<h5 style=" margin-top:40px; font-weight: bold;">(A) INSURED PERSON'S PARTICULARS</h5>
								<table class="form-container" style="margin-left:35px">
								
									<tr>
										<th colspan="1">1.Insurance No.</th>
										<td colspan="6"></td>
									</tr>

									<tr>
										<th colspan="1">2.Name in block letters</th>
										<td colspan="6"><?php echo $rw['emp_name'] ?></td>
									</tr>

									<tr>
										<th colspan="1">3.Father's/Husband's Name</th>
										<td colspan="6"><?php echo $rw['fname'] ?> </td>
									</tr>

									<tr>
										<th rowspan="2" class="top-aligned" style="height:120px">4. Date of Birth</th>
										<?php
										$day = date('d', strtotime($rw['DOB']));
$month = date('m', strtotime($rw['DOB']));
$year = date('Y', strtotime($rw['DOB']));
										?>
											<th rowspan="1" class="top-aligned">Day</th>
											<th rowspan="1" class="top-aligned">Month</th>
											<th rowspan="1" class="top-aligned">Year</th>
											<th rowspan="1" class="top-aligned">5.Marital Status</th>
											<th rowspan="1" class="top-aligned">M/U/W</th>
									</tr>
									<tr>
										<th style="height:50px"><?php echo $day ?></th>
										<th><?php echo $month ?> </th>
										<th><?php echo $year ?> </th>
										<th> </th>
										<th><?php echo $rw['maritalstatus'] ?> </th>
									</tr>

									<tr>
										<th colspan="3" style="text-align: left; vertical-align: top;">7.Present Address <?php echo $rw['localaddress'] ?></th>
										<th colspan="4" style="text-align: left; vertical-align: top;">8. Permanent Address <p><?php echo $rw['permaddress'] ?></th>
									</tr>

									<tr>
										<th colspan="3" style="text-align: left; vertical-align: top;">Brance Office</th>
										<th colspan="4" style="text-align: left; vertical-align: top;">Dispensary</th>
									</tr>
								</table>
							</div>

								
								<div class="table-wrapper1">
       								 <h5 style="margin-left:-100px; font-weight: bold;">(B) EMPLOYER'S PARTICULARS</h5>
								<table class="form-container" style="margin-left:-120px; ">
								    <tr>
										<th colspan="5">9. Employer's Code No  
									<?php echo $rw['username'] ?>	.</th>
										
									</tr>

									<tr>
									    <?php
										$day = date('d', strtotime($rw['DOJ']));
$month = date('m', strtotime($rw['DOJ']));
$year = date('Y', strtotime($rw['DOJ']));
										?>
										<th rowspan="2" class="top-aligned" style="height:70px">10. Date of Appointment</th>
										<th rowspan="1" class="top-aligned">Day</th>
										<th rowspan="1" class="top-aligned">Month</th>
										<th rowspan="1" class="top-aligned">Year</th>
									</tr>

									<tr>
										<th style="height:50px"><?php echo $day ?></th>
										<th><?php echo $month ?></th>
										<th><?php echo $year ?></th>
										
									</tr>
									
									 <tr>
									 <th colspan="4" style="text-align: left; vertical-align: top;">11. Name & Address of the Employer 
										<p>
                                        KVR BEST PROPERTY MANAGEMENT, Road No:3, Sree Colony, Near Neredmet X Road, Secunderabad - 500 056.</td>
										</p></th>
									 </tr>
									 <tr>
									 <th colspan="4" style="text-align: left; vertical-align: top;">12. In case of any previous employment please fill up the details as under.</th>
									 </tr>

									 <tr>
									 <th colspan="4" style="text-align: left; vertical-align: top;">(a) Previous Ins. No.</th>
									 </tr>

									 <tr>
									 <th colspan="4" style="text-align: left; vertical-align: top;">(b) Employer's code No</th>
									 </tr>

									 <tr>
									 <th colspan="4" style="text-align: left; vertical-align: top;">(c) Name & Address of the Employer<br><br>e-mail address</th>
									 </tr>
									
								</table>
							</div>
						</div>

						<div class="center-container">
							<h6 style="margin-right:95px; margin-top:25px; font-weight:bold;">(C) Details of Nominee u/s 71 of ESI Act 1948/Rule-56(2) of ESI (Central) Rules, 1950 for payment of cash benfit in the event of death.</h5>
						</div>

							<div class="table-wrapper2">
								<table class="form-container" style="margin-left:20px;width: 100%; ">
									<tr>
										<th style="text-align:center">Name</th>
										<th style="text-align:center">Relationship</th>
										<th style="text-align:center">Address</th>
									</tr>

									<tr>
										<th style="height:30px">
        <?php echo $rw2['nname'] ?>
                                        </th>
										<th>
                                        
        <?php echo $rw2['nrelation'] ?>
    
                                        </th>
                                        <th>
                                        
        <?php echo $rw2['naddress'] ?>
    
                                        </th>
									</tr>
								</table>
							</div>

							<div class="center-container">
    <h6 style="margin-right:50px; margin-top: 25px; font-weight: bold;">
        I hereby declare that the particulars given by me are correct to the best of my knowledge and belief. I undertake to intimate the corporation any changes in the membership of my family within 15 days of such change.
    </h6>
    
</div>

                            <div class="acknowledgement-container">
							   <!-- <p class="place" style="margin-left:300px; font-weight:bold;">Place: Bangalore</p> -->
							   
							    <img src="<?php echo htmlspecialchars($empsign); ?>" style="text-align: right; margin-left:475px; font-weight: bold;  margin-top: 40px;" height="70" width="100" />
							  <div style="display: flex; justify-content: space-between;">
    <!-- Left side: Counter signature text -->
    <h5 style="text-align: left; font-weight: bold;">Counter signature by the employer</h5>

    <!-- Right side: Signature /T.I of IP -->
    <h5 style="text-align: right; font-weight: bold;">Signature /T.I of IP.</h5>
</div>
							   <h5 style="text-align: left; font-weight: bold;">Signature of the seal</h5>
                             </div>


							 <div class="table-wrapper2">
       								 <h5 style="text-align:left; font-weight: bold;">(D) Family Particulars of Insured person</h5>
								<table class="form-container" style="width:124%">
								    <tr>
										<th style="text-align:center; ">SI. No</th>
										<th style="text-align:center">Name</th>
										<th style="text-align:center">Date of Birth/Age as on date of filling form</th>
										<th style="text-align:center">Relationship with the Employee</th>
										<th colspan="2" style="text-align:center">Wheather resideing with him/her</th>
										<th colspan="2" style="text-align:center">If 'No' state place of Residence</th>
									</tr>

									<tr>
										
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										
										<th style="text-align:center">Yes</th>
										<th style="text-align:center">No</th>
										<th style="text-align:center">Town</th>
										<th style="text-align:center">State</th>
									</tr>

									<tr>
									
										<th style="height: 25px "></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>

									<tr>
										<th style="height: 25px "></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>

									<tr>
										<th style="height: 25px "></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
										<th></th>
									</tr>
								</table>

								<div class="acknowledgement-container">
							   <!-- <p class="place" style="margin-left:300px; font-weight:bold;">Place: Bangalore</p> -->
							   <h5 style="text-align: left; margin-top:40px ; font-weight: bold; font-size: 10px;">ESI Corporation Temporary Identity Card</h5>
							   
                             </div>
							 <h5 style="text-align: right; margin-top:-15px; font-weight: bold; font-size: 10px;">(Valid for 3 month from the date of appointment)</h5>
							 <div class="table-container">
								<div class="table-wrapper">
								<!-- <h5 style="margin-left:50px; margin-top:40px;"><b>(A) INSURED PERSON'S PARTICULARS</b></h5> -->
								<table class="form-container" style="margin-left:35px; width:240%">
								<tr>
									<th style="width: 100px; font-size:18px;">Name</th>
									<td style="width: 250px"></td>
									<td style="width: 300px"></td>
								</tr>

								<tr>
									<th style="width: 100px; font-size:18px;">Ins. No.</th>
									<td style="width: 250px"></td>
									<td style="width: 300px;font-size:18px;font-weight:bold;">Date of Appointment</td>
								</tr>

								<tr>
									<th style="width: 100px; font-size:18px;">Branch Office</th>
									<td style="width: 250px"></td>
									<td style="width: 300px; font-size:18px; font-weight:bold;"><b>Dispensary</b></td>
								</tr>

								<tr>
									<th colspan="2" style="font-size:18px;">Employer's Code No. & Address</th>
									 	  
								</tr>
								<tr>
									<th colspan="2" style="font-size:18px;"> KVR BEST PROPERTY MANAGEMENT, <br>Road No:3, Sree Colony, Near Neredmet X Road, Secunderabad - 500 056.</th>	
									<td style="height:20px; font-size:18px;"></td> 
                                    <!-- <td style="height:20px; font-size:18px;"><h2>53000163390000607</h2></td> -->
									  
								</tr>
	
								</table>
								
							</div>

							<div class="table-wrapper3">
       								 <!-- <h5 style="margin-left:-125px; margin-top: 40px;"><b>(B) EMPLOYER'S PARTICULARS</b></h5> -->
								<table class="form-container" style="text-align:right; height:200px; width:30px">
								    
								<tr>
									<th style="text-align:center;"><img src="<?php echo htmlspecialchars($photo); ?>" height= "110" width="100" /></th>
                                    
								</tr>

								</table>
							</div>

						</div>

						
							   <h5 class="place" style="text-align:left;  margin-top:40px; font-weight:bold;">Validity</h5>
							    <img src="<?php echo htmlspecialchars($empsign); ?>" style="margin-left:100px;  margin-top: 20px;" height="70" width="100" />
							 
    <!-- Left side: Dated -->
    <div>
    <h5 style="text-align: left; font-weight: bold;">Dated</h5>

    <!-- Center: Signature/T.I. of I.P. -->
    <h5 style="text-align: center; font-weight: bold; margin-top: 20px;">Signature/T.I. of I.P.</h5>

    <!-- Right side: Signature of B.M. with seal -->
    <h5 style="text-align: right; font-weight: bold;">Signature of B.M. with seal</h5>
    </div>
                                      
												   
												   
</body>

<?php mysqli_close($link); ?>
</html>
<?php
$html = ob_get_clean(); 

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);

// Output PDF with dynamically generated filename
$filename = 'Employee/' . date('d-m-Y') . '.pdf';
$mpdf->Output($filename, \Mpdf\Output\Destination::DOWNLOAD);


	

}else
{
session_destroy();

session_unset();

header('Location:index.php?authentication failed');

}
?>