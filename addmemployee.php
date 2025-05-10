<?php //include('config.php');
$stn = "dashboard";
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    include 'dbconnection/connection.php';
    $state = $_GET['state'];
	
    if ($_SESSION['user']) {
        $name = $_SESSION['user'];

        include 'dbfiles/org.php';
        include 'dbfiles/iqry_emp.php';
    ?>
	<!DOCTYPE html>
	<html lang="en">
	<style>
		.frmSearch {
			border: 1px solid #a8d4b1;
			background-color: #c6f7d0;
			margin: 2px 0px;
			padding: 40px;
			border-radius: 4px;
		}

		#country-list {
			float: left;
			list-style: none;
			margin-top: -3px;
			padding: 0;
			width: 190px;
			position: absolute;
		}

		#country-list li {
			padding: 10px;
			background: #f0f0f0;
			border-bottom: #bbb9b9 1px solid;
		}

		#country-list li:hover {
			background: #ece3d2;
			cursor: pointer;
		}
	</style>
	<?php include 'template/headerfile.php'; ?>
	<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>

	<style>
		strong {
			color: red;
		}
	</style>

<script>
    function calculateTotalEmoluments() {
        const basic = parseFloat(document.getElementById('basicamount').value) || 0;
        const da = parseFloat(document.getElementById('daamount').value) || 0;
        const hra = parseFloat(document.getElementById('hraamount').value) || 0;
        const other = parseFloat(document.getElementById('otherallowance').value) || 0;
        const advLeave = parseFloat(document.getElementById('advleave').value) || 0;
        const advBonus = parseFloat(document.getElementById('advbonus').value) || 0;

        const total = basic + da + hra + other + advLeave + advBonus;

        document.getElementById('totalmonthlyem').value = total.toFixed(2); // Round to 2 decimals
    }

    // Attach input listeners
    document.addEventListener('DOMContentLoaded', function () {
        const inputs = ['basicamount', 'daamount', 'hraamount', 'otherallowance', 'advleave', 'advbonus'];
        inputs.forEach(id => {
            document.getElementById(id).addEventListener('input', calculateTotalEmoluments);
        });
    });
</script>
	<script>
		function deleteRow() {
			var rr = document.getElementById("rows1").value

			if (rr != 0) {
				// var oRow = rr.parentNode.parentNode;
				document.getElementById("dynamic-table1").deleteRow(rr);
				var row = document.getElementById("rows1").value
				document.getElementById("rows").value = row - 1;
				total();
			} else {
				alert('Please Select Atleast One Row');
				return false;
			}
		}

		function ConfirmDialog() {
			var x = confirm("Are you sure to delete record?")
			if (x) {
				return true;
			} else {
				return false;
			}
		}

		function s2() {
			var curval = document.getElementById("adhar").value;
			$.ajax({
				type: "GET",
				url: "checkAadharCard.php",
				data: {
					keyword: curval
				},
				success: function(data) {
					$("#suggesstion-box").show();
					$("#suggesstion-box").html(data);

					if (data) {
						$("#submit").prop('disabled', true);
					}

					else {

						$("#submit").prop('disabled', false);
					}
					//$("#pname"+i).css("background","#FFF");
				}
			});
		}
	</script>

	<script>
		function showHint22(str){

			if (str.length == 0) {
				document.getElementById("txtHint").innerHTML = "";
				return;
			}
			if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} else { // code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

					var show = xmlhttp.responseText;
					var strar = show.split(":");
					//document.getElementById("supname").value=strar[2];

					//document.getElementById("state").value=strar[1];

					//document.getElementById("city").value=strar[2];
					document.getElementById("store_name").value = strar[1];
					document.getElementById("state").value = strar[2];
					document.getElementById("state_code").value = strar[3];
					//document.getElementById("addr").value=strar[4];
					document.getElementById("gst_in").value = strar[4];
					document.getElementById("store_type").value = strar[5];

					document.getElementById("supervisor").value = strar[6];
					document.getElementById("cordinator").value = strar[7];
					document.getElementById("afm").value = strar[8];
					document.getElementById("company").value = strar[9];
				}
			}
			xmlhttp.open("GET", "get-apdata3.php?q=" + str, true);
			xmlhttp.send();
		}
	</script>


<script>
    function showchildren(z) {
        const isMarried = z.value === "married";

        document.getElementById("childrenblock").hidden = !isMarried;
        document.getElementById("spousedobblock").hidden = !isMarried;
		document.getElementById("sadharnoblock").hidden = !isMarried;
		document.getElementById("spousephotoblock").hidden = !isMarried;
        document.getElementById("nokblock").hidden = !isMarried;
        document.getElementById("childrennameblock").hidden = !isMarried;

        if (!isMarried) {
            document.getElementById("wname").value = '';
            document.getElementById("sdob").value = '';
			document.getElementById("sadharno").value = '';
			document.getElementById("sphoto").value = '';
            document.getElementById("nok").value = '';
            document.getElementById("childname").value = '';
        }
    }

    function changePartner(z) {
        const partnername = document.getElementById("partnername");
        const wname = document.getElementById("wname");

        if (z.value === "male") {
            partnername.textContent = "Wife Name";
            wname.placeholder = "Enter your Wife name";
        } else {
            partnername.textContent = "Husband Name";
            wname.placeholder = "Enter your Husband name";
        }
    }
</script>


	<script>
		$(document).on('keyup', '.txt1', function() {
			var id = $(this).attr('data-row');

			var qty = document.getElementById('qty' + id).value;
			var price = document.getElementById('price' + id).value;


			bal = parseFloat(qty) * parseFloat(price);
			document.getElementById('amnt' + id).value = bal;
			calculateTotal1();
			calculateTotal1k();
			calculateTotal1kk();
			calculateTotal1kv();

		});


		$(document).on('keyup', '.txt20', function() {
			var id = $(this).attr('data-row');

			var amt = document.getElementById('amnt' + id).value;
			var sgst = document.getElementById('sgst' + id).value;
			var serv_amt = document.getElementById('serv_amt' + id).value;


			bal = (parseFloat(amt) * parseFloat(sgst)) / 100;
			alert(sgst);
			ser = (parseFloat(amt) * parseFloat(serv_amt)) / 100;
			document.getElementById('sgstamt' + id).value = bal;
			document.getElementById('serv_amnt' + id).value = ser;
			calculateTotal2();

		});

		$(document).on('keyup', '.txt21', function() {
			var id = $(this).attr('data-row');

			var amt = document.getElementById('amnt' + id).value;
			var cgst = document.getElementById('sgst' + id).value;


			bal = (parseFloat(amt) * parseFloat(cgst)) / 100;
			document.getElementById('cgstamt' + id).value = bal;
			calculateTotal3();

		});

		function calculateTotal1() {
			subTotal = 0;
			total = 0;
			$('.txt').each(function() {

				if ($(this).val() != '') subTotal += parseFloat($(this).val());
			});
			$('#tot').val(subTotal.toFixed(2));
			//$('#bamount').val( subTotal.toFixed(2) );
		}


		function calculateTotal1kv() {
			subTotal = 0;
			total = 0;
			$('.txt7').each(function() {

				if ($(this).val() != '') subTotal += parseFloat($(this).val());
			});
			$('#tot_serv').val(subTotal.toFixed(2));
			//$('#bamount').val( subTotal.toFixed(2) );
		}

		function calculateTotal1k() {
			subTotal = 0;
			total = 0;
			$('.txt4').each(function() {

				if ($(this).val() != '') subTotal += parseFloat($(this).val());
			});
			$('#tot_gst').val(subTotal.toFixed(2));
			//$('#bamount').val( subTotal.toFixed(2) );
		}

		function calculateTotal1kk() {
			subTotal = 0;
			total = 0;
			$('.txt5').each(function() {

				if ($(this).val() != '') subTotal += parseFloat($(this).val());
			});
			$('#net').val(subTotal.toFixed(2));
			//$('#bamount').val( subTotal.toFixed(2) );
		}

		function calculateTotal2() {
			subTotal = 0;
			total = 0;
			$('.txt50').each(function() {

				if ($(this).val() != '') subTotal += parseFloat($(this).val());
			});
			$('#sgsttotal').val(subTotal.toFixed(2));
			//$('#bamount').val( subTotal.toFixed(2) );
		}

		function calculateTotal3() {
			subTotal = 0;
			total = 0;
			$('.txt51').each(function() {

				if ($(this).val() != '') subTotal += parseFloat($(this).val());
			});
			$('#cgsttotal').val(subTotal.toFixed(2));
			//$('#bamount').val( subTotal.toFixed(2) );
		}
	</script>

<script>
    // Run after full page is loaded
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("myForm");
        const adharInput = document.getElementById("adhar");
		const nameInput = document.getElementById("empname");
		const contactInput = document.getElementById("conno");
		const dobInput = document.getElementById("dob");

        const adharErrorBox  = document.getElementById("adhar-error");
		const nameErrorBox = document.getElementById("name-error");
		const contactErrorBox = document.getElementById("contact-error");
		const dobErrorBox = document.getElementById("dob-error");

        form.addEventListener("submit", function (e) {
            let valid = true;

            if (adharInput.value.trim() === "") {
                adharErrorBox.style.display = "block";
                adharInput.focus();
                valid = false;
            } else {
                adharErrorBox.style.display = "none";
            }

            if (nameInput.value.trim() === "") {
                nameErrorBox.style.display = "block";
                if (valid) nameInput.focus(); // only focus if Aadhaar was valid
                valid = false;
            } else {
                nameErrorBox.style.display = "none";
            }

			if (contactInput.value.trim() === "") {
                contactErrorBox.style.display = "block";
                if (valid) contactInput.focus(); // only focus if Aadhaar was valid
                valid = false;
            } else {
                contactErrorBox.style.display = "none";
            }

			if (dobInput.value.trim() === "") {
                dobErrorBox.style.display = "block";
                if (valid) dobInput.focus(); // only focus if Aadhaar was valid
                valid = false;
            } else {
                dobErrorBox.style.display = "none";
            }

            if (!valid) {
                e.preventDefault(); // prevent submission
            }
        });

        // Optional: hide error on typing
        adharInput.addEventListener("input", function () {
            if (adharInput.value.trim() !== "") {
                adharErrorBox.style.display = "none";
            }
        });

        nameInput.addEventListener("input", function () {
            if (nameInput.value.trim() !== "") {
                nameErrorBox.style.display = "none";
            }
        });

	    contactInput.addEventListener("input", function () {
            if (contactInput.value.trim() !== "") {
                nameErrorBox.style.display = "none";
            }
        });
    });
</script>

	<body class="no-skin">
	<?php require 'template/logo.php'; ?>
		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try {
					ace.settings.loadState('main-container')
				} catch (e) {}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try {
						ace.settings.loadState('sidebar')
					} catch (e) {}
				</script>

				<!-- /.sidebar-shortcuts -->

				<!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>


			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li>
								<i class="ace-icon fa fa-cog home-icon"></i>
								<!-- <a href="qot_list"> Settings</a> -->
							</li>
							<li>
								<a href=""> Add Employee</a>
							</li>

							<!--<li class="active">Blank Page</li>-->
						</ul><!-- /.breadcrumb -->

						<!-- /.nav-search -->
					</div>

					<div class="page-content">
						<!-- /.ace-settings-container -->
						<div class="#">
							<center style="color:#192436"><u><b>
										<h1>ADD EMPLOYEE</h1>
									</b></u></center>
						</div>

						<?php
                            $a    = "select `count` as cnt from qutcount where state='AP' ";
                                $ssq  = mysqli_query($link, $a);
                                $r    = mysqli_fetch_array($ssq);
                                $cnt1 = $r['cnt'];

                                $cnt = 24250000 + 1 + $cnt1;

                            ?>


						<!-- PAGE CONTENT BEGINS -->
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
										<form  id="myForm" name="frm" method="post" action="" enctype="multipart/form-data">
											<input type="hidden" name="id" value="<?php echo $id ?>">
											<input type="hidden" name="ses" value="<?php echo $name; ?>">
											<div class="table-responsive">
												<table class="table table-striped table-bordered table-hover">
													<tr>
														<td align="right">State:</td>
														<td>
															<input type="text" class="form-control" required  readonly  id="state" name="state" value="<?php echo $state; ?>">
														</td>

                                                            </tr>

															<tr>
															<td align="right">ESIC Number</td>
															<td>
																<input type="text" class="form-control" value="" name="esic_number" id="esic_number">
															</td>
														</tr>

														<tr>
															<td align="right">
																Aadhaar No <span style="color:red"><b>*</b></span>
															</td>
															<td align="left">
																<input type="text" value="" class="form-control" name="adhar" id="adhar" onkeyup='s2()'>
																<div id='suggesstion-box'></div>
																<div id="adhar-error" style="color:red; display:none;"> Employee Aadhaar number is required.</div>
															</td>
														</tr>


														<tr>
															<td align="right">Name (As per Aadhaar) <span style="color:red"><b>*</b></span></td>
															<td>
																<input type="text" class="form-control" value="" name="empname" id="empname">
																<div id="name-error" style="color:red; display:none;">Employee name is required.</div>
															</td>
														</tr>
                									<tr>
														<td align="right">DOB <span style="color:red"><b>*</b></span></td>
														<td><input type="date" value="<?php echo date('d-m-Y'); ?>"  name="dob" id="dob" class="form-control">
														<div id="dob-error" style="color:red; display:none;">Employee DOB is required.</div>
													</td>
													</tr>
													<tr>
														<td align="right">Gender </td>
														<td align="left">

															<input type="radio" id="male" name="gender" value="male" onchange="changePartner(this)">
															<label for="male">Male</label>
															<input type="radio" id="female" name="gender" value="female" onchange="changePartner(this)">
															<label for="female">Female</label>
														</td>

                                                        </tr>
                                                        <tr>
														<td align="right">Marital Status</td>
														<td>
															<input type="radio" id="married" name="marstatus" value="married" onchange="showchildren(this)">
															<label for="married">Married</label>
															<input type="radio" id="unmarried" name="marstatus" value="unmarried" onchange="showchildren(this)">
															<label for="unmarried">unmarried</label>
														</td>
													</tr>

													<tr id="childrenblock" hidden="hidden">

														<td align="right" id="partnername">Wife Name</td>
														<td align="left">
															<input type="text" value="" class="form-control" name="wname" id="wname" placeholder="Enter your Wife name">
														</td>

																<tr id="spousedobblock" hidden="hidden">
																	<td align="right">Spouse DOB</td>
																	<td>
																		<input type="date" value="<?php echo date('d-m-Y'); ?>" name="sdob" id="sdob" class="form-control">
																	</td>
                                                                </tr>
																<tr id="sadharnoblock" hidden="hidden">
															<td align="right">
																Spouse Aadhaar No 
															</td>
															<td align="left">
																<input type="text" value="" class="form-control" name="sadharno" id="sadharno">
																<!-- <div id='suggesstion-box'></div> -->
																<!-- <div id="adhar-error" style="color:red; display:none;">Aadhaar number is required.</div> -->
															</td>
														</tr>
                                                        <tr id="spousephotoblock" hidden="hidden">
															<td align="right">Spouse Photo</td>
															<td align="left">
																<input type="file" name="sphoto" id="sphoto" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
															</td>
														</tr>
                                                        <tr id="nokblock" hidden="hidden">
														<td align="right">No of kids</td>
														<td align="left">
															<input type="number" name="nok" id="nok" placeholder=" enter your number of kids " class="form-control" />
														</td>


													</tr>
													<tr id="childrennameblock" hidden="hidden">
														<td align="right">Children Names</td>
														<td align="left">
															<textarea name="childname" id="childname" class="form-control"></textarea>
														</td>
													</tr>
													<tr>

														<td align="right">Father Name</td>
														<td align="left">
															<input type="text" value="" class="form-control" name="fname" id="fname" placeholder=" Enter Father Name">
														</td>
                                                        </tr>

																<tr>
																	<td align="right">Father DOB</td>
																	<td>
																		<input type="date" value="<?php echo date('d-m-Y'); ?>" name="fdob" id="fdob" class="form-control">
																	</td>
                                                                </tr>
																<tr>
															<td align="right">
																Father Aadhaar No 
															</td>
															<td align="left">
																<input type="text" value="" class="form-control" name="fadharno" id="fadharno" onkeyup='s2()'>
																<!-- <div id='suggesstion-box'></div> -->
																<!-- <div id="adhar-error" style="color:red; display:none;">Aadhaar number is required.</div> -->
															</td>
														</tr>
													<tr>
														<td align="right">Father Contact No. </td>
														<td align="left">
															<input type="number" class="form-control" value="" id="fnumber" name="fnumber">

														</td>
													</tr>

													<tr>
															<td align="right">Father Photo</td>
															<td align="left">
																<input type="file" name="fphoto" id="fphoto" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
															</td>
														</tr>

                                                        <tr>
														<td align="right">Mother Name </td>
														<td align="left">
															<input type="text" class="form-control" value="" id="mname" name="mname" placeholder=" Enter Mother Name">
														</td>
													</tr>

													<tr>
																	<td align="right">Mother DOB</td>
																	<td>
																		<input type="date" value="<?php echo date('d-m-Y'); ?>" name="mdob" id="mdob" class="form-control">
																	</td>
                                                                    </tr>
																	<tr>
															<td align="right">
																Mother Aadhaar No 
															</td>
															<td align="left">
																<input type="text" value="" class="form-control" name="madharno" id="madharno" onkeyup='s2()'>
																<!-- <div id='suggesstion-box'></div> -->
																<!-- <div id="adhar-error" style="color:red; display:none;">Aadhaar number is required.</div> -->
															</td>
														</tr>

														<tr>
															<td align="right">Mother Photo</td>
															<td align="left">
																<input type="file" name="mophoto" id="mophoto" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
															</td>
														</tr>

													<tr>
														<td align="right">Contact No. <span style="color:red"><b>*</b></span></td>
														<td align="left">
															<input type="number" value="" class="form-control" name="conno" id="conno">
															<div id="contact-error" style="color:red; display:none;">Contact number is required.</div>
														</td>
                                                        </tr>
													<tr>
														<td align="right">Family </td>
														<td align="left">

															<select name="rel" id="rel" >
																<option value="">Relation</option>
																<option value="Father">Father</option>
																<option value="Mother">Mother</option>
																<option value="Wife">Wife</option>
																<option value="Other">Other</option>
															</select>
															<input type="text" class="text" style="width:75% !important;" name="fno" id="rno" />

														</td>
                                                        </tr>
                <tr>
														<td align="right">Email Id </td>
														<td>
															<input type="text" value="" name="email" id="email" class="form-control">
															<div id="email-error" style="color:red; display:none;">Email is required.</div>
														</td>
													</tr>
													<tr>
														<td align="right">Employee ID</td>
														<td><input type="text" readonly value=""  name="eid" id="eid" class="form-control"></td>
                                                        </tr>

                                                    <tr>
														<td align="right"> Aadhaar Photo(Front)</td>
														<td align="left">
															<input type="file" name="adharimg" id="adharimg" class="form-control photo-upload" accept=".jpeg, .png, .jpg" />
														</td>
													</tr>

													<script>
														document.getElementById('adharimg').addEventListener('change', function(event) {
															var fileInput = event.target;
															var file = fileInput.files[0];
															if (file) {
																var fileType = file.type;
																if (fileType !== "image/jpeg" && fileType !== "image/png") {
																	alert("Only JPEG and PNG images are allowed.");
																	fileInput.value = ''; // Clear the input
																}
															}
														});
													</script>





													 <tr>
                                                                                                                <td align="right"> Aadhaar Photo(Back)</td>
                                                                                                                <td align="left">
                                                                                                                        <input type="file" name="adharphotoback" id="adharphotoback" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
                                                                                                                </td>
                                                                                                                </tr>


																												<script>
																							document.getElementById('adharphotoback').addEventListener('change', function(event) {
																								var fileInput = event.target;
																								var file = fileInput.files[0];
																								if (file) {
																									var fileType = file.type;
																									if (fileType !== "image/jpeg" && fileType !== "image/png") {
																										alert("Only JPEG and PNG images are allowed.");
																										fileInput.value = ''; // Clear the input
																									}
																								}
																							});
																						</script>





													<tr>
														<td align="right">PAN No.</td>
														<td>
															<input type="text"  name="pan" id="pan" class="form-control">
														</td>
                                                        </tr>
                <tr>
														<td align="right"> PAN Photo</td>
														<td align="left">
															<input type="file" name="panimg" id="panimg" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
														</td>
													</tr>
													<script>
														document.getElementById('panimg').addEventListener('change', function(event) {
															var fileInput = event.target;
															var file = fileInput.files[0];
															if (file) {
																var fileType = file.type;
																if (fileType !== "image/jpeg" && fileType !== "image/png") {
																	alert("Only JPEG and PNG images are allowed.");
																	fileInput.value = ''; // Clear the input
																}
															}
														});
													</script>





													<tr>
														<td align="right">UAN No.</td>
														<td align="left">
															<input type="text"  name="uan" id="uan" class="form-control">
														</td>
                                                        </tr>
														<tr>
														<td align="right">PF No.</td>
														<td>
															<input type="text"  name="pf" id="pf" class="form-control">
														</td>
													</tr>
													<tr>
														<td align="right">ESI No.</td>
														<td align="left">
															<input type="text"  name="esi" id="esi" class="form-control">
														</td>
                                                        </tr>
                									<tr>
														<td align="right">DOJ</td>
														<td align="left">
															<input type="date" value="<?php $t = strtotime($doj);echo date('d-m-Y', $t); //echo date_format($apdate,"d-m-Y"); ?> "  name="doj" id="doj" class="form-control">
														</td>
													</tr>
													<tr>
														<td align="right">Qualification & Experience</td>
														<td align="left">
															<input type="text"  name="qua" id="qua" class="form-control">
														</td>
                                                        </tr>

														<tr>
															<td align="right">Upload Qualification</td>
															<td align="left">
																<input type="file" name="qualphoto" id="qualphoto" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
															</td>
														</tr>

														<script>
															document.getElementById('qualphoto').addEventListener('change', function(event) {
																var fileInput = event.target;
																var file = fileInput.files[0];
																if (file) {
																	var fileType = file.type;
																	if (fileType !== "image/jpeg" && fileType !== "image/png") {
																		alert("Only JPEG and PNG images are allowed.");
																		fileInput.value = ''; // Clear the input
																	}
																}
															});
														</script>

													<tr>
														<td align="right"> Designation </td>
														<td>
															<input type="text" name="des" id="des" placeholder="Enter Designation"  class="form-control">
														</td>
                                                        </tr>
														<tr>
															<td align="right">Photo</td>
															<td align="left">
																<input type="file" name="empimg" id="empimg" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
																<div id="photo-error" style="color:red; display:none;">Employee Photo is required.</div>
															</td>
														</tr>

														<script>
															document.getElementById('empimg').addEventListener('change', function(event) {
																var fileInput = event.target;
																var file = fileInput.files[0];
																if (file) {
																	var fileType = file.type;
																	if (fileType !== "image/jpeg" && fileType !== "image/png") {
																		alert("Only JPEG and PNG images are allowed.");
																		fileInput.value = ''; // Clear the input
																	}
																}
															});
														</script>

													<tr>
													    <td align="right"> Medical Certificate</td>
 														<td><select name="mcertificate" id="mcertificate"class="form-control">
																<option value="Yes">Yes</option>
																<option value="No">No</option>

															</select> </td>

													</tr>

														<tr>
															<td align="right">Upload Certificate</td>
															<td align="left">
																<input type="file" name="mphoto" id="mphoto" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
															</td>
														</tr>

														<script>
															document.getElementById('mphoto').addEventListener('change', function(event) {
																var fileInput = event.target;
																var file = fileInput.files[0];
																if (file) {
																	var fileType = file.type;
																	if (fileType !== "image/jpeg" && fileType !== "image/png") {
																		alert("Only JPEG and PNG images are allowed.");
																		fileInput.value = ''; // Clear the input
																	}
																}
															});
														</script>

													<tr>
														<td align="right">Address</td>
														<td align="left">

															<textarea  name="address" id="address" class="form-control"></textarea>
														</td>
                                                    </tr>
                									 
													<tr>
													    <td align="right"> Select Wiremen License Status</td>
 															<td><select name="licensestatus" id="licensestatus" class="form-control">
																<option value="NA">NA</option>
																<option value="Available">Available</option>
																<option value="Need to Apply">Need to Apply</option>
																<option value="Acknowledgement Available">Acknowledgement Available</option>

															</select> </td>

													</tr>
													<tr>
														<td align="right">License Photo</td>
														<td align="left">
															<input type="file" name="licimg" id="licimg" class="form-control photo-upload" accept=".jpeg, .png, .jpg" />
														</td>
													</tr>

													<tr>
														<td align="right">Technical Services</td>
														<td>
															<select name="tservices" id="tservices" class="form-control">
																<option value="Wiremen">Wiremen</option>
															</select>
														</td>
													</tr>

																	<tr>
																	<td align="right">Managerial</td>
																	<td>
																		<input type="text" name="managerial" id="managerial" class="form-control" placeholder="Enter Managerial">
																	</td>
                                                                    </tr>

																	<tr>
																	<td align="right">Mole1</td>
																	<td>
																		<input type="text" name="mole1" id="mole1" class="form-control" placeholder="Enter Mole1">
																	</td>
                                                                    </tr>

																	<tr>
																	<td align="right">Mole2</td>
																	<td>
																		<input type="text" name="mole2" id="mole2" class="form-control" placeholder="Enter Mole2">
																	</td>
                                                                    </tr>
																	<tr>
														<td align="right">From Date</td>
														<td align="left">
															<input type="date" value="<?php $t = strtotime($fromdate);echo date('d-m-Y', $t); //echo date_format($apdate,"d-m-Y"); ?> "  name="fromdate" id="fromdate" class="form-control">
														</td>
													</tr>

													<tr>
														<td align="right">To Date</td>
														<td align="left">
															<input type="date" value="<?php $t = strtotime($todate);echo date('d-m-Y', $t); //echo date_format($apdate,"d-m-Y"); ?> "  name="todate" id="todate" class="form-control">
														</td>
													</tr>

													<table class="table">
                                                        <center style="color:#192436"><u><b>
                                                            <h1>Salary Details</h1>
                                                            </b></u></center>
                                                            <br />
                                                        <tr>
                                                        	<td align="right">Basic</td>
                                                        	<td>
                                                                <input type="number" name="basicamount" id="basicamount" class="form-control" placeholder="Enter Basic">
                                                            </td>
                                                        </tr>
               										 	<tr>
                                                			<td align="right">DA</td>
                                                            <td>
                                                            <input type="number" name="daamount" id="daamount" class="form-control" placeholder="Enter DA">
                                                            </td>
                                                        </tr>
                										<tr>
                                                            <td align="right">H.R.A</td>
                                                            <td>
                                                            <input type="number" name="hraamount" id="hraamount" class="form-control" placeholder="Enter H.R.A">
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td align="right">Other Allowances</td>
                                                            <td>
                                                            <input type="number" name="otherallowance" id="otherallowance" class="form-control" placeholder="Enter Other allowances">
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td align="right">Advance Leave Encashment</td>
                                                            <td>
                                                            <input type="number" name="advleave" id="advleave" class="form-control" placeholder="Enter Advance Leave Encashment">
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td align="right">Advance Bonus</td>
                                                            <td>
                                                            <input type="number" name="advbonus" id="advbonus" class="form-control" placeholder="Enter Advance Bonus">
                                                            </td>
                                                        </tr>
														<tr>
                                                            <td align="right">Total Monthly Emoluments</td>
                                                            <td>
                                                            <input type="number" name="totalmonthlyem" id="totalmonthlyem" class="form-control" placeholder="Enter Total Monthly Emolumnents">
                                                            </td>
                                                        </tr>
                                                    </table>

													<table class="table table-hover table-striped">
																<center style="color:#192436"><u><b>
																			<h1>Uniform Details</h1>
																		</b></u></center>
																<br />
																<tr>
													    <td align="right">Uniform</td>
                                                            <td><select name="uniform" id="uniform" class="form-control">
																<option value="Saree">Saree</option>
																<option value="Apron">Apron</option>

															</select> </td>
														</tr>
														<tr>
													    <td align="right">Shirt</td>
                                                            <td><select name="ushirt" id="ushirt" class="form-control">
																<option value="T-Shirt Block">T-Shirt Block</option>
																<option value="T-Shirt Blue">T-Shirt Blue</option>
																<option value="White Shirt">White Shirt</option>
																<option value="Brown Shirt">Brown Shirt</option>
																<option value="Knight frank">Knight frank</option>

															</select> </td>
														</tr>
               													<tr>
																	<td align="right">Shirt Size</td>
																	<td>
																		<input type="text" name="shirtsize" id="shirtsize" class="form-control" placeholder="Enter Shirt Size">
																	</td>
                                                                    </tr>

																	<tr>
																	<td align="right">Shirt Quantity</td>
																	<td>
																		<input type="number" name="shirtqty" id="shirtqty" class="form-control" placeholder="Enter Shirt Quanity">
																	</td>
                                                                    </tr>

																	<td align="right">Pant</td>
                                                              <td><select name="upant" id="upant"  class="form-control">
															    <option value="NA">NA</option>
																<option value="Jeans Pant">Jeans Pant</option>
																<option value="Block-Pant">Block-Pant</option>
																<option value="Regular Pant">Regular Pant</option>

															</select> </td>
                <tr>
																	<td align="right">Pant Size</td>
																	<td>
																		<input type="text" name="pantsize" id="pantsize" class="form-control" placeholder="Enter Pant Size">
																	</td>
                                                                    </tr>

																	<tr>
																	<td align="right">Pant Quantity</td>
																	<td>
																		<input type="number" name="pantqty" id="pantqty" class="form-control" placeholder="Enter Pant Quantity">
																	</td>
                                                                    </tr>
                <tr>

															<td align="right">Shoe</td>
                                                            <td><select name="ushoe" id="ushoe" class="form-control">
																<option value="Fiber">Fiber</option>
																<option value="Metal">Metal</option>
																<option value="Steel">Steel</option>

															</select> </td>

															</select> </td>
                <tr>
																	<td align="right">Shoe Size</td>
																	<td>
																		<input type="text" name="shoesize" id="shoesize" class="form-control" placeholder="Enter Shoe Size">
																	</td>
                                                                    </tr>

																	<tr>
																	<td align="right">Shoe Quantity</td>
																	<td>
																		<input type="number" name="shoeqty" id="shoeqty" class="form-control" placeholder="Enter Shoe Quantity">
																	</td>
                                                                    </tr>
													<script>
															document.getElementById('licimg').addEventListener('change', function(event) {
																var fileInput = event.target;
																var file = fileInput.files[0];
																if (file) {
																	var fileType = file.type;
																	if (fileType !== "image/jpeg" && fileType !== "image/png") {
																		alert("Only JPEG and PNG images are allowed.");
																		fileInput.value = ''; // Clear the input
																	}
																}
															});
</script>
<tr>
                                                                                                                <td align="right">Uniform Issue Date</td>
                                                                                                                <td align="left">
                                                                                                                        <input type="date" value="<?php $t = strtotime($uniformisdate);
                                                                                                                                                      echo date('d-m-Y', $t); //echo date_format($apdate,"d-m-Y"); ?> "  name="uniformisdate" id="uniformisdate" class="form-control">
                                                                                                                </td>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                                <td align="right">Site Name</td>
                                                                                                                <td align="left">
                                                                                                                        <input type="text" value="" class="form-control" name="sitename" id="sitename"placeholder="Enter Site Name">
                                                                                                                </td>
                                                                                                        </tr>

																										<tr>
                                                                                                                <td align="right">Tools</td>
                                                                                                                <td align="left">
                                                                                                                        <input type="text" value="" class="form-control" name="tools" id="tools"placeholder="Enter Tools">
                                                                                                                </td>
                                                                                                        </tr>

													<tr>
														<td align="right">User Name <br />
															<!-- <p style="color:red;">(Will be same as employee id)</p> -->
														</td>

														<td align="left">
															<input type="text" class="form-control"  id="uname" name="uname" placeholder="Enter User Name">
														</td>
                                                        </tr>
                <tr>
														<td align="right">Password<br />
															<!-- <p style="color:red;"> (Will be same as aadhar card no)</p> -->
														</td>
														<td>
															<input type="password" class="form-control"  id="pwd" name="pwd" placeholder="Enter Password">
														</td>
													</tr>
													<table class="table">
                                                                                                                                <center style="color:#192436"><u><b>
                                                                                                                                                        <h1>Employee Address</h1>
                                                                                                                                                </b></u></center>
                                                                                                                                <br />
                                                                                                                                <tr>
                                                                                                                                        <td align="right">Permanent Address</td>
                                                                                                                                        <td>
                                                                                                                                                <input type="text" name="permaddress" id="permaddress" class="form-control" placeholder="Enter Permanent Address">
                                                                                                                                        </td>
                                                                    </tr>
                <tr>
                                                                                                                                        <td align="right">Local Address</td>
                                                                                                                                        <td>
                                                                                                                                                <input type="text" name="localaddress" id="localaddress" class="form-control" placeholder="Enter Local Address">
                                                                                                                                        </td>
                                                                    </tr>
                <tr>
                                                                                                                                        <td align="right">Reference Address</td>
                                                                                                                                        <td>
                                                                                                                                                <input type="text" name="refeaddress" id="refeaddress" class="form-control" placeholder="Enter Reference Address">
                                                                                                                                        </td>
                                                                    </tr>
                                                                    </table>


													<div class="form-group row">
														<div class="control-label col-md-12">
														    <table class="table table-hover table-striped">
																<center style="color:#192436"><u><b>
																			<h1>Nominee Details</h1>
																		</b></u></center>
																<br />
																<tr>

																	<td align="right">Name</td>
																	<td>
																		<input type="text" name="nname" id="nname" class="form-control" placeholder="Enter Nominee Name">
																	</td>
                                                                    </tr>

																	<tr>
																	<td align="right">Relationship</td>
																	<td>
																		<input type="text" name="nrelation" id="nrelation" class="form-control" placeholder="Enter Relationship">
																	</td>
                                                                    </tr>
                <tr>
																	<td align="right">Address</td>
																	<td>
																		<input type="text" name="naddress" id="naddress" class="form-control" placeholder="Enter Nominee Address">
																	</td>
                                                                    </tr>
                													<tr>
																	<td align="right">DOB</td>
																	<td>
																		<input type="date" value="<?php echo date('d-m-Y'); ?>" name="ndob" id="ndob" class="form-control">
																	</td>
                                                                    </tr>



																	<tr>
																	<td align="right">Share(%)</td>
																	<td>
																		<input type="text" name="namount" id="namount" class="form-control" placeholder="Enter Amount">
																	</td>
                                                                    </tr>
                                                                    
                <tr>
															</table>

															<table class="table">
																<center style="color:#192436"><u><b>
																			<h1>BANK DETAILS</h1>
																		</b></u></center>
																<br />
																<tr>

																	<td align="right"> Bank Name.</td>
																	<td>
																		<input type="text" name="banknm" id="banknm"  class="form-control">
																	</td>
                </tr>
                <tr>
																	<td align="right">Branch of Bank</td>
																	<td align="left">
																		<input type="text" class="form-control"  id="bb" name="bb">
																	</td>
                                                                    </tr>
                <tr>
																	<td align="right">IFSC Code</td>
																	<td align="left">
																		<input type="text" class="form-control"  id="ifcs" name="ifcs">
																	</td>
																</tr>

																<tr>

																	<td align="right"> Account No.</td>
																	<td>
																		<input type="text" name="acno" id="acno"  class="form-control">
																	</td>
                                                                    </tr>
                                                                    <tr>
																	<td align="right">Photo of Passbook/ Cancelled Cheque</td>
																	<td align="left">
																		<input type="file" name="bankimg" id="bankimg" class="form-control photo-upload" accept=".jpeg, .jpg, .png" />
																	</td>
																</tr>

																<script>
																	document.getElementById('bankimg').addEventListener('change', function(event) {
																		var fileInput = event.target;
																		var file = fileInput.files[0];
																		if (file) {
																			var fileType = file.type;
																			if (fileType !== "image/jpeg" && fileType !== "image/png") {
																				alert("Only JPEG and PNG images are allowed.");
																				fileInput.value = ''; // Clear the input
																			}
																		}
																	});
																</script>

                                                                <tr>
                                                                    <td align="right">Employee Signature</td>
                                                                    <td align="left">

                                                                <canvas id="signatureCanvas" width="300" height="150" style="border: 2px solid black;"></canvas><br>
																<button type="button" id="clearSignature">Clear</button><br><br>

																<input type="hidden" id="signatureData" name="signatureData">
																																										</td>
                                                                                                        </tr>
                                                                                                                                </tr>
                                                                                                                                </tr>


															</table>
															<!-- <center><a onclick="window.open('add_stock.php','mywindow','width=700,height=500,toolbar=no,menubar=no,scrollbars=yes')"><b style="color:red;font-size:18px;">Assign Stores</b></a></center> -->

															<br />
														</div>
													</div>
											</div>




										 
                                                 

											<br />

											<div class="form-group">
												<div class="col-md-offset-4 col-md-8">
													<button class="btn btn-info" type="submit" name="submit" id="submit">
														<i class="ace-icon fa fa-save bigger-110"></i>
														Save
													</button>





													&nbsp; &nbsp; &nbsp;
													<a href="employeelist.php"><button class="btn btn-danger" type="button" name="button" id="Close">
															<i class="ace-icon fa fa-close bigger-110"></i>
															Close
														</button></a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
			<script src="assets/js/jquery-2.1.4.min.js"></script>
			<script type="text/javascript">
				$(".delete").on('click', function() {
					$('.case:checkbox:checked').parents("tr").remove();
					$('#check_all').prop("checked", false);
					calculateTotal1();
					calculateTotal2();
					calculateTotal3();
				});
				var i = 100;

				$(".addmore").on('click', function() {
					i++;
					var data = "<tr>";
					data += "<td><input type='checkbox' class='case'/></td>";
					data += "<td>" + i + "</td>";
					// data +="<td><input type='hidden' name='id1[]'  id='id1"+i+"' style='width:30px;' data-row='"+i+"' value='<?php echo $id ?>'><input type='hidden' name='id5[]' id='id5"+i+"' style='width:30px;' data-row='"+i+"' value=''><input data-row='"+i+"' type='text' name='sno[]' id='sno"+i+"' style='width:30px;' value=''></td>";

					data += "<td><input type='text' name='pname[]'  id='pname" + i + "' data-row='" + i + "' style='width:150px;' class='form-control pname" + i + "' onkeyup='s2(" + i + ")' onclick='showUser(this.value," + i + ")'> <div id='suggesstion-box" + i + "'></div>";
					data += "</td>";

					data += "<td><input type='text' name='serv_num[]' data-row='" + i + "' value='' style='width:60px;'  class='' id='serv_num" + i + "' /> </td>";
					data += "<td><input type='text' name='brand[]'   value='' style='width:50px;'  id='brand" + i + "' />	   </td>";
					data += "<td> <input type='text' name='model[]'   data-row='" + i + "'  value='' style='width:60px;' class=''   id='model" + i + "' /></td>";

					data += "<td><input type='text' name='hsn[]'  value='' style='width:50px;'  id='hsn" + i + "' />	   </td>";
					data += "<td> <input type='text' name='gst[]'  data-row='" + i + "'  value='' style='width:60px;' class='txt20'   id='gst" + i + "' /></td>";

					data += "<td><input type='text' name='uom[]'  id='uom" + i + "' value='' style='width:70px;' data-row='" + i + "'></td>";
					data += "<td><input type='text' name='price[]'  data-row='" + i + "' id='price" + i + "' style='width:70px;' value=''   /></td>";
					data += "<td><input type='text' name='qty[]'  data-row='" + i + "' onkeyup='qval(this.value," + i + ")' value='' style='width:60px;' class='txt1' id='qty" + i + "'  /> </td>";


					data += "<td><input type='text' name='amnt[]' data-row='" + i + "' value='' style='width:60px;'  class='txt tx6' id='amnt" + i + "' /> </td>";
					data += "<td><input type='text' name='serv_amnt[]' data-row='" + i + "' value='' style='width:60px;' class='txt7 '   id='serv_amnt" + i + "' /> </td>";

					data += "<td><input type='text' name='gst_amnt[]' data-row='" + i + "' value='' style='width:60px;' class='txt4 ' readonly  id='gst_amnt" + i + "' /> </td>";
					data += "<td><input type='text' name='serv_amt[]' data-row='" + i + "'  style='width:60px;'  class='' id='serv_amt" + i + "' value='6'/> </td>";
					data += "<td><input type='hidden' name='id[]' data-row='" + i + "' value='' style='width:60px;' readonly class='' id='id" + i + "' /> </td>";
					data += "<td><input type='hidden' name='cap[]' data-row='" + i + "' value='' style='width:60px;' readonly class='' id='cap" + i + "' /> </td>";

					data += "<td><input type='hidden' name='serv_code[]' data-row='" + i + "' value='' style='width:60px;' readonly class='' id='serv_code" + i + "' /> </td>";


					data += "</tr>";
					$('#dynamic-table1 ').append(data).find('#dynamic-table1>tbody>tr:nth-child(2)');


				});

				function select_all() {
					$('input[class=case]:checkbox').each(function() {
						if ($('input[class=check_all]:checkbox:checked').length == 0) {
							$(this).prop("checked", false);
						} else {
							$(this).prop("checked", true);
						}
					});
				}
			</script>
			 
			<script src="assets/js/jquery-2.1.4.min.js"></script>

			<!-- <![endif]-->

			<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
			<script type="text/javascript">
				if ('ontouchstart' in document.documentElement)
					document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
			</script>
			<script src="assets/js/bootstrap.min.js"></script>

			<!-- page specific plugin scripts -->
			<script src="assets/js/jquery.dataTables.min.js"></script>
			<script src="assets/js/jquery.dataTables.bootstrap.min.js"></script>
			<script src="assets/js/dataTables.buttons.min.js"></script>
			<script src="assets/js/buttons.flash.min.js"></script>
			<script src="assets/js/buttons.html5.min.js"></script>
			<script src="assets/js/buttons.print.min.js"></script>
			<script src="assets/js/buttons.colVis.min.js"></script>
			<script src="assets/js/dataTables.select.min.js"></script>

			<!-- ace scripts -->
			<script src="assets/js/ace-elements.min.js"></script>
			<script src="assets/js/ace.min.js"></script>
			<script type="text/javascript">
				function val(str, id) {
					cal = 0;
					cal1 = 0;
					cal12 = 0;
					//alert(id);
					var price = document.getElementById("price" + id).value;
					var qty = document.getElementById("qty" + id).value;
					var gst = document.getElementById("gst" + id).value;
					var serv_amt = document.getElementById("serv_code" + id).value;
					//var serv_amtk=document.getElementById("serv_amnt"+id).value;
					//alert(serv_amtk);

					//var cgst=document.getElementById("cgst"+id).value;
					//var gst=Math.abs(sgst)+Math.abs(cgst);
					cal = eval(price) * eval(qty);
					//alert(cal);
					//document.getElementById("amnt"+id).value+document.getElementById("serv_amtk"+id).value=Math.abs(cal);
					cal12 = eval(price) * eval(qty) * eval(serv_amt) / 100;
					//alert(cal12);
					calk = (cal) + (cal12);
					//alert(calk);
					cal1 = eval(calk) * eval(gst) / 100;






					//document.getElementById("gst_amnt"+id).value=cal1;
					//alert(cal12);
					document.getElementById("serv_amnt" + id).value = Math.abs(cal12);
					//document.getElementById("serv_amnt"+id).value=cal12;


					document.getElementById("gst_amnt" + id).value = Math.abs(cal1);



				}

				function qval(str, id) {
					cal = 0;
					cal1 = 0;
					cal12 = 0;
					//alert(id);
					var price = document.getElementById("price" + id).value;
					var qty = document.getElementById("qty" + id).value;
					var gst = document.getElementById("gst" + id).value;
					var serv_amt = document.getElementById("serv_amt" + id).value;
					//var serv_amtk=document.getElementById("serv_amnt"+id).value;
					//alert(serv_amtk);

					//var cgst=document.getElementById("cgst"+id).value;
					//var gst=Math.abs(sgst)+Math.abs(cgst);
					cal = eval(price) * eval(qty);
					document.getElementById("amnt" + id).value = cal;

					//alert(cal);
					//document.getElementById("amnt"+id).value+document.getElementById("serv_amtk"+id).value=Math.abs(cal);
					cal12 = eval(price) * eval(qty) * eval(serv_amt) / 100;
					//alert(cal12);
					calk = (cal) + (cal12);
					//alert(calk);
					cal1 = eval(calk) * eval(gst) / 100;
					//document.getElementById("gst_amnt"+id).value=cal1;
					//alert(cal12);
					document.getElementById("serv_amnt" + id).value = Math.abs(cal12);
					//document.getElementById("serv_amnt"+id).value=cal12;


					document.getElementById("gst_amnt" + id).value = Math.abs(cal1);

					calculateTotal1();
					calculateTotal1k();
					calculateTotal1kk();
					calculateTotal1kv();

				}



			</script>
				<script>

async function compressImage(file, fixedWidth = 500, fixedHeight = 500, initialQuality = 1) {
    const canvas = document.createElement('canvas');
    const ctx = canvas.getContext('2d');
    const img = new Image();

    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.onload = function(event) {
            img.src = event.target.result;

            img.onload = async function() {
                // Set fixed width and height for all images
                canvas.width = fixedWidth;
                canvas.height = fixedHeight;

                // Force the image to fit the fixed width and height
                ctx.drawImage(img, 0, 0, fixedWidth, fixedHeight);

                // Initial attempt to convert the canvas image to a Blob with the initial quality
                let compressedBlob = await new Promise(resolveBlob => {
                    canvas.toBlob(resolveBlob, 'image/jpeg', initialQuality);
                });

                // If the file size is larger than 1MB, adjust the quality
                let quality = initialQuality;

                while (compressedBlob.size > 1 * 1024 * 1024 && quality > 0.1) { // 1MB = 1 * 1024 * 1024 bytes
                    quality -= 0.1; // Decrease quality
                    compressedBlob = await new Promise(resolveBlob => {
                        canvas.toBlob(resolveBlob, 'image/jpeg', quality);
                    });
                }

                resolve(compressedBlob);
            };
            img.onerror = reject;
        };
        reader.readAsDataURL(file);
    });
}

// Validate file types and compress images for all photo uploads
document.querySelectorAll('.photo-upload').forEach(function(input) {
    input.addEventListener('change', async function() {
        const file = this.files[0];
        if (file) {
            const fileType = file.type;

            // Allow only JPEG and PNG formats
            if (fileType !== 'image/jpeg' && fileType !== 'image/png') {
                alert('Only JPEG and PNG formats are allowed.');
                this.value = ''; // Clear the file input if the format is invalid
                return;
            }

            // Compress the image to the same fixed width and height
            const compressedBlob = await compressImage(file, 500, 500); // Fixed width and height: 500x500
            const newFile = new File([compressedBlob], file.name, { type: fileType });

            // Replace the selected file with the compressed one
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(newFile);
            this.files = dataTransfer.files; // Update the file input with the compressed file
        }
    });
});


		    (function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById('signatureCanvas');
  var ctx = canvas.getContext('2d');
    const signatureDataInput = document.getElementById('signatureData');
    const clearButton = document.getElementById('clearSignature');

  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  function preventScroll(event) {
            event.preventDefault();
        }

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    document.addEventListener('touchmove', preventScroll, { passive: false });
    window.addEventListener('wheel', preventScroll, { passive: false });
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    stopDrawing();
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
    stopDrawing();
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }
  function stopDrawing() {
       drawing = false;
       document.removeEventListener('touchmove', preventScroll);
       window.removeEventListener('wheel', preventScroll);
        // Update the hidden input with base64 signature data
        signatureDataInput.value = canvas.toDataURL();
    }

  // Set up the UI

  clearButton.addEventListener("click", function(e) {
    clearCanvas();
  }, false);

})();
		</script>
	</body>

	</html>
<?php

    } else {
        session_destroy();

        session_unset();

        header('Location:index.php?authentication failed');
}
?>