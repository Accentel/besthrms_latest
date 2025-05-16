<?php //include('config.php');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    include 'dbconnection/connection.php';

    include 'dbfiles/org.php';
    include 'dbfiles/uqry_emp.php';
?>
    <!DOCTYPE html>
    <html lang="en">
     <?php include 'template/headerfile.php'; ?>
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker3.min.css" />
    <style>
        strong {
            color: red;
        }
    </style>

<script>
function changePartner(z) {
    let partnername = document.getElementById("partnername");
    let wname = document.getElementById("wname");
    if (z.value === "male") {
        partnername.textContent = "Wife Name";
        wname.placeholder = "Enter your Wife name";
    } else {
        partnername.textContent = "Husband Name";
        wname.placeholder = "Enter your Husband name";
    }
}

function showchildren(z) {
    let childrenblock = document.getElementById("childrenblock");
    let childrennameblock = document.getElementById("childrennameblock");
    let noofkids = document.getElementById("nokblock");
    let spouseadharnoblock = document.getElementById("sadharnoblock");
    let spouseDOBblock = document.getElementById("spousedobblock");
    let spousephotoblock = document.getElementById("spousephotoblock");
    let childrenphoto1 = document.getElementById("childrenphoto1");
    let childrenphoto2 = document.getElementById("childrenphoto2");

    if (z.value === "married") {
        childrenblock.removeAttribute("hidden");
        childrennameblock.removeAttribute("hidden");
        noofkids.removeAttribute("hidden");
        spouseadharnoblock.removeAttribute("hidden");
        spouseDOBblock.removeAttribute("hidden");
        spousephotoblock.removeAttribute("hidden");
        childrenphoto1.removeAttribute("hidden");
        childrenphoto2.removeAttribute("hidden");
    } else {
        childrenblock.setAttribute("hidden", "hidden");
        childrennameblock.setAttribute("hidden", "hidden");
        noofkids.setAttribute("hidden", "hidden");
        spouseadharnoblock.setAttribute("hidden", "hidden");
        spouseDOBblock.setAttribute("hidden", "hidden");
        spousephotoblock.setAttribute("hidden", "hidden");
        childrenphoto1.setAttribute("hidden", "hidden");
        childrenphoto2.setAttribute("hidden", "hidden");

        document.getElementById("nok").value = '';
        document.getElementById("sadharno").value = '';
        document.getElementById("wname").value = '';
        document.getElementById("childname").value = '';
        document.getElementById("sphoto").value = '';
        document.getElementById("childphoto1").value = '';
        document.getElementById("childphoto2").value = '';
    }
}

window.onload = function() {
    // Set gender-related partner label
    const genderRadio = document.querySelector('input[name="gender"]:checked');
    if (genderRadio) changePartner(genderRadio);

    // Trigger marital status display
    const marstatusRadio = document.querySelector('input[name="marstatus"]:checked');
    if (marstatusRadio) showchildren(marstatusRadio);
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

<script>
function validateUAN() {
    const uanInput = document.getElementById("uan");
    const uan = uanInput.value;
    const errorBox = document.getElementById("uan-error");

    if (uan.length > 0 && uan.length !== 12) {
        errorBox.style.display = "block";
    } else {
        errorBox.style.display = "none";
    }
}
</script>

<script>
function validateESI() {
    const esiInput = document.getElementById("esi");
    const esi = esiInput.value;
    const errorBox = document.getElementById("esi-error");

    if (esi.length > 0 && esi.length !== 10) {
        errorBox.style.display = "block";
    } else {
        errorBox.style.display = "none";
    }
}
</script>

    <body class="no-skin">



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
                                <a href="#">Settings</a>
                            </li>
                            <li>
                                <a href="#">Edit Employee Details</a>
                            </li>
                            <!--<li class="active">Blank Page</li>-->
                        </ul><!-- /.breadcrumb -->

                        <!-- /.nav-search -->
                    </div>

                    <div class="page-content">
                        <!-- /.ace-settings-container -->
                        <div class="#">
                            <center style="color:#192436"><u><b>
                                        <h1>EDIT EMPLOYEE</h1>
                                    </b></u></center>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="box box-info">
                                    <div class="box-header with-border">

                                    </div>
                                    <?php $id = $_GET['id'];
                                        $res= mysqli_query($link, "select * from emps where empid='$id'") or die(mysqli_error());
                                        $rw= mysqli_fetch_array($res) or die(mysqli_error());
                                        $employeeId= $rw['employeeid'];

                                        $uniquery = mysqli_query($link, "select * from emp_uniform where employeeid = '$employeeId' order by id asc");
                                        $urows    = mysqli_fetch_array($uniquery);

                                        $bankquery = mysqli_query($link, "select * from bank_nominee where employeeid = '$employeeId' order by id asc");
                                        $brows     = mysqli_fetch_array($bankquery);

                                        
                                        $state     = $rw['state'];

                                    ?>

                                    <form name="frm" method="post" action="" enctype="multipart/form-data">
                                        <input type="hidden" name="id" value="<?php echo $id ?>">
                                        <input type="hidden" name="ses" value="<?php echo $name; ?>">
                                        <table class="table table-striped table-bordered table-hover">
                                            <tr>
                                                <td align="right">State:</td>
                                                <td><input type="text" readonly value="<?php echo $rw['state'] ?>"  name="state" id="state" class="form-control"></td>
                                            </tr>
                                            <!-- <tr>
                                                <td align="right">ESIC Number </td>
                                                <td><input type="text" class="form-control" value="<?php echo $rw['esic_number'] ?>"  name="esic_number" id="esic_number"></td>
                                                </tr>
                                            <tr> -->

                                             <tr>
                                                <td align="right">Site Name</td>
                                                <td align="left">
                                                    <input type="text" class="form-control" value="<?php echo $rw['sitename'] ?>" name="sitename" id="sitename">
                                                </td>
                                            </tr>
                                            
                                                <td align="right">Employee ID</td>
                                                <td><input type="text" readonly value="<?php echo $rw['employeeid'] ?>"  name="eid" id="eid" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Name (As per Aadhaar) </td>
                                                <td><input type="text" class="form-control" value="<?php echo $rw['emp_name'] ?>"  name="empname" id="empname"></td>
                                                </tr>
                                            <tr>
                                                <td align="right">DOB</td>
                                                <td><input type="date" value="<?php echo $rw["DOB"] ?>"  name="dob" id="dob" class="form-control"></td>
                                            </tr>
                                            <tr>
                                                <td align="right">Gender</td>
                                                <td align="left">


                                                    <label><input type="radio" name="gender" value="male" onchange="changePartner(this)"                                                                                                                                                                                                                                                                                 <?php if (strtolower($rw['gender']) == "male") {
                                                        echo 'checked';
                                                         }?>>Male</label>
                                                    <label><input type="radio" name="gender" value="female" onchange="changePartner(this)"                                                                                                                                                                                                                                                                                    <?php if (strtolower($rw['gender']) == "female") {
                                                        echo 'checked';
                                                         }?>>feMale</label>

                                                </td>

                                                </tr>
                                                <tr>


                                                <td align="right">Marital Status</td>
                                                <td>
                                                    <input type="radio" id="married" onchange="showchildren(this)" name="marstatus" value="married"<?php if (strtolower($rw['maritalstatus']) == "married") {
                                                        echo 'checked';
                                                             }?>>
                                                    <label for="married">Married</label>
                                                    <input type="radio" id="unmarried" name="marstatus" onchange="showchildren(this)" value="unmarried"                                                                                                                                                                                                                                                                                                               <?php if (strtolower($rw['maritalstatus']) == "unmarried") {
                                                     echo 'checked';
                                                                }?>>
                                                    <label for="unmarried">unmarried</label>
                                                </td>
                                            </tr>
                                            <tr id="childrenblock">
                                                <td align="right" id="partnername">Wife Name</td>
                                                <td align="left">
                                                    <input type="text" value="<?php echo $rw['wname'] ?>" class="form-control" name="wname" id="wname" placeholder="Enter your Wife name">
                                                </td>
                                            </tr>

                                            <tr id="spousedobblock">
                                                <td align="right">Spouse DOB</td>
                                                <td><input type="date" value="<?php echo $rw["sdob"] ?>"  name="sdob" id="sdob" class="form-control"></td>
                                            </tr>

                                            <tr id="spousephotoblock">
                                                <td align="right">Spouse Photo</td>
                                                <td align="left">
                                                    <input type="file" name="sphoto" id="sphoto"  class="form-control photo-upload" accept=".jpeg, .png, .jpg" />

                                                    <?php
                                                        if ($rw['sphoto'] != "") {
                                                            ?>
                                                        <a href='<?php echo $rw['sphoto'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                        ?>
                                                </td>
                                            </tr>

                                            <tr id="sadharnoblock">
                                                <td align="right">Spouse Aadhaar No</td>
                                                <td><input type="number" name="sadharno" id="sadharno" value="<?php echo $rw['sadharno'] ?>" class="form-control" /></td>
                                            </tr>

                                            <tr id="nokblock">
                                                <td align="right">No of kids</td>
                                                <td><input type="number" name="nok" id="nok" value="<?php echo $rw['nok'] ?>" class="form-control" /></td>
                                            </tr>

                                            <tr id="childrennameblock">
                                                <td align="right">Children Names</td>
                                                <td><textarea name="childname" id="childname" class="form-control"><?php echo $rw['childname'] ?></textarea></td>
                                            </tr>

                                            <tr id="childrenphoto1">
                                                <td align="right">Children Photo1</td>
                                                <td align="left">
                                                    <input type="file" name="childphoto1" id="childphoto1"  class="form-control photo-upload" accept=".jpeg, .png, .jpg" />

                                                    <?php
                                                        if ($rw['childphoto1'] != "") {
                                                            ?>
                                                        <a href='<?php echo $rw['childphoto1'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                        ?>
                                                </td>
                                            </tr>

                                            <tr id="childrenphoto2">
                                                <td align="right">Children Photo2</td>
                                                <td align="left">
                                                    <input type="file" name="childphoto2" id="childphoto2"  class="form-control photo-upload" accept=".jpeg, .png, .jpg" />

                                                    <?php
                                                        if ($rw['childphoto2'] != "") {
                                                            ?>
                                                        <a href='<?php echo $rw['childphoto2'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                        ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td align="right">Blood Group </td>
                                                <td align="left">
                                                    <input type="text" class="form-control" value="<?php echo $rw['bg'] ?>" id="bg" name="bg">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">Father Name</td>
                                                <td align="left">
                                                    <input type="text" class="form-control" value="<?php echo $rw['fname'] ?>" name="fname" id="fname">
                                                </td>
                                                <tr>
                                                <td align="right">Father DOB</td>
                                                <td><input type="date" value="<?php echo $rw["fdob"] ?>"  name="fdob" id="fdob" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                <td align="right">Father Contact No.</td>
                                                <td align="left">
                                                    <input type="number" readonly value="<?php echo $rw['fnumber'] ?>" class="form-control" name="fnumber" id="fnumber">
                                                </td>
                                                </tr>
                                                <tr>
                                                <td align="right">Father Aadhaar No</td>
                                                <td align="left">
                                                    <input type="text" class="form-control" value="<?php echo $rw['fadharno'] ?>" name="fadharno" id="fadharno">
                                                </td>
                                                <tr>
                                                <td align="right">Father Photo</td>
                                                <td align="left">
                                                    <input type="file" name="fphoto" id="fphoto"  class="form-control photo-upload" accept=".jpeg, .png, .jpg" />

                                                    <?php
                                                        if ($rw['fphoto'] != "") {
                                                            ?>
                                                        <a href='<?php echo $rw['fphoto'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                        ?>
                                                </td>
                                            </tr>
                                                <tr>
                                                <td align="right">Mother Name </td>
                                                <td align="left">
                                                    <input type="text" class="form-control" value="<?php echo $rw['mname'] ?>" id="mname" name="mname">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">Mother DOB</td>
                                                <td><input type="date" value="<?php echo $rw["mdob"] ?>"  name="mdob" id="mdob" class="form-control"></td>
                                            </tr>

                                            <tr>
                                                <td align="right">Mother Aadhar No </td>
                                                <td align="left">
                                                    <input type="text" class="form-control" value="<?php echo $rw['madharno'] ?>" id="madharno" name="madharno">

                                                </td>
                                            </tr>

                                            <tr>
                                                <td align="right">Upload Qualification</td>
                                                <td align="left">
                                                    <input type="file" name="mophoto" id="mophoto"  class="form-control photo-upload" accept=".jpeg, .png, .jpg" />

                                                    <?php
                                                        if ($rw['mophoto'] != "") {
                                                            ?>
                                                        <a href='<?php echo $rw['mophoto'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                        ?>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td align="right">Contact No.</td>
                                                <td align="left">
                                                    <input type="number" readonly value="<?php echo $rw['contactno'] ?>" class="form-control" name="conno" id="conno">
                                                </td>
                                                </tr>
                                                
                                            <tr>
                                                <td align="right">Family Member Contact No. </td>
                                                <td align="left">

                                                    <select name="relation" >
                                                        <option value="<?php echo $rw['relation']; ?>"><?php echo $rw['relation']; ?></option>
                                                        <option value="">Relation</option>
                                                        <option value="Father">Father</option>
                                                        <option value="Mother">Mother</option>
                                                        <option value="Wife">Wife</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    <input type="text" class="text" style="width:75% !important;" value="<?php echo $rw['rno']; ?>" name="rno" id="rno" ="" />


                                            </td>
                                            </tr>
                <tr>
                                                <td align="right">Email Id</td>
                                                <td>
                                                    <input type="text"  name="email" id="email" value="<?php echo $rw['emp_email'] ?>" class="form-control">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td align="right">Aadhar No</td>
                                                <td align="left">
                                                    <input type="text" class="form-control" value="<?php echo $rw['adharcardno'] ?>" name="adhar" id="adhar">
                                                </td>
                                                </tr>
                <tr>
                                                <td align="right"> Adhar Photo(Front)</td>
                                                <td align="left">
                                                    <input type="file" name="adharimg" id="adharimg" class="form-control photo-upload" accept=".jpeg, .png, .jpg" />
                                                    <?php
                                                        if ($rw['adharphoto'] != "") {
                                                        ?>
                                                        <a href='<?php echo $rw['adharphoto'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>

                                            </tr>
                                              <tr>

                                                <td align="right"> Adhar Photo(Back)</td>

                                                <td align="left">

                                                    <input type="file" name="adharphotoback" id="adharphotoback" class="form-control photo-upload" accept=".jpeg, .png, .jpg"/>

                                                    <?php

                                                        if ($rw['adharphotoback'] != "") {

                                                        ?>

                                                        <a href='<?php echo $rw['adharphotoback'] ?>' target="_blank" style="color:blue;">view image</a>

                                                    <?php

                                                        }

                                                    ?>

                                                </td>



                                            </tr>
                                            <tr>
                                                <td align="right">PAN No.</td>
                                                <td>
                                                    <input type="text"  name="pan" value="<?php echo $rw['pan'] ?>" id="pan" class="form-control">
                                                </td>
                                                </tr>
                <tr>
                                                <td align="right"> PAN Card Photo</td>
                                                <td align="left">
                                                    <input type="file" name="panimg" id="panimg" cclass="form-control photo-upload" accept=".jpeg, .png, .jpg" />
                                                    <?php
                                                        if ($rw['panphoto'] != "") {
                                                        ?>
                                                        <a href='<?php echo $rw['panphoto'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">UAN No.</td>
                                                <td align="left">
                                                    <input type="text" name="uan" value="<?php echo $rw['uan'] ?>" id="uan" class="form-control"
                                                        maxlength="12" title="UAN number must be 12 digits"
                                                        oninput="this.value=this.value.replace(/[^0-9]/g,''); validateUAN();">
                                                    <div id="uan-error" style="color:red; display:none;">UAN number must be exactly 12 digits.</div>
                                                </td>
                                            </tr>
          
                                            <tr>
                                                <td align="right">ESI No.</td>
                                                <td align="left">
                                                    <input type="text" name="esi" id="esi" value="<?php echo $rw['ESI_NO'] ?>" class="form-control"
                                                        maxlength="10" title="ESI number must be 10 digits"
                                                        oninput="this.value=this.value.replace(/[^0-9]/g,''); validateESI();">
                                                    <div id="esi-error" style="color:red; display:none;">ESI number must be exactly 10 digits.</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">DOJ</td>
                                                <td align="left">
                                                    <input type="date" value="<?php echo $rw["DOJ"] ?>"  name="doj" id="doj" class="form-control">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td align="right">Qualification & Experience</td>
                                                <td align="left">
                                                    <input type="text"  name="qua" value="<?php echo $rw['qualification'] ?>" id="qua" class="form-control">
                                                </td>
                                                </tr>
                                                <tr>
                                                <td align="right">Upload Qualification</td>
                                                <td align="left">
                                                    <input type="file" name="qualphoto" id="qualphoto"  class="form-control photo-upload" accept=".jpeg, .png, .jpg" />

                                                    <?php
                                                        if ($rw['qualphoto'] != "") {
                                                            ?>
                                                        <a href='<?php echo $rw['qualphoto'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                        ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right"> Designation</td>
                                                <td>
                                                    <input type="text" name="des" id="des" value="<?php echo $rw['designation'] ?>"  class="form-control">
                                                </td>
                                                </tr>
                <tr>
                                                <td align="right">Photo</td>
                                                <td align="left">
                                                    <input type="file" name="empimg" id="empimg" class="form-control photo-upload" accept=".jpeg, .png, .jpg"/>

                                                    <?php
                                                        if ($rw['photo'] != "") {
                                                        ?>
                                                        <a href='<?php echo $rw['photo'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
													    <td align="right">Medical Certificate</td>
                                                         <td><select name="mcertificate" id="mcertificate" required class="form-control">
																<option value="Yes"<?php echo($rw["mcertificate"] == "Yes") ? 'selected' : ''; ?>>Yes</option>
																<option value="No"<?php echo($rw["mcertificate"] == "No") ? 'selected' : ''; ?>>No</option>
															</select> </td>
                                                    </tr>
                                                    <tr>
                                                <td align="right">Upload Certificate</td>
                                                <td align="left">
                                                    <input type="file" name="mphoto" id="mphoto"  class="form-control photo-upload" accept=".jpeg, .png, .jpg" />

                                                    <?php
                                                        if ($rw['mphoto'] != "") {
                                                            ?>
                                                        <a href='<?php echo $rw['mphoto'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                        ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="right">Address</td>
                                                <td align="left">

                                                    <textarea  name="address" id="address" value="<?php echo $rw['address'] ?>" class="form-control"><?php echo $rw['address'] ?></textarea>
                                                </td>
                                                </tr>
                                                <tr>
                                                    <td align="right">Select Wiremen License Status</td>
                                                    <td>
                                                        <select name="licensestatus" id="licensestatus" class="form-control">
                                                            <option value="NA" <?php echo ($rw["licensestatus"] == "NA") ? 'selected' : ''; ?>>NA</option>
                                                            <option value="Available" <?php echo ($rw["licensestatus"] == "Available") ? 'selected' : ''; ?>>Available</option>
                                                            <option value="Need to Apply" <?php echo ($rw["licensestatus"] == "Need to Apply") ? 'selected' : ''; ?>>Need to Apply</option>
                                                            <option value="Acknowledgement Available" <?php echo ($rw["licensestatus"] == "Acknowledgement Available") ? 'selected' : ''; ?>>Acknowledgement Available</option>
                                                        </select>
                                                    </td>
                                                </tr>

<tr>
													     
</tr>
<tr>
														<td align="right">License Photo</td>
														<td align="left">
															<input type="file" name="licimg" id="licimg" class="form-control photo-upload" accept=".jpeg, .png, .jpg"/>
															<?php
                                                                if ($rw['licimg'] != "") {
                                                                ?>
                                                        <a href='<?php echo $rw['licimg'] ?>' target="_blank" style="color:blue;">view image</a>
                                                    <?php
                                                        }
                                                    ?>
														</td>
													</tr>
                                                    <tr>
                                                    <td align="right">Technical Services</td>
                                                    <td>
                                                        <select name="tservices" id="tservices" class="form-control">
                                                            <option value="NA" <?php echo ($rw["tservices"] == "NA") ? 'selected' : ''; ?>>Wiremen</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                        <tr>
                                                            <td align="right">Managerial</td>
                                                            <td align="left">
                                                                <input type="text" class="form-control"  id="managerial" name="managerial" value="<?php echo $rw['managerial'] ?>" placeholder="Enter Managerial">
                                                            </td>
                                                            </tr>

                                                            <tr>
                                                            <td align="right">Mole1</td>
                                                            <td align="left">
                                                                <input type="text" class="form-control"  id="mole1" name="mole1" value="<?php echo $rw['mole1'] ?>" placeholder="Enter Managerial">
                                                            </td>
                                                            </tr>

                                                            <tr>
                                                            <td align="right">Mole2</td>
                                                            <td align="left">
                                                                <input type="text" class="form-control"  id="mole2" name="mole2" value="<?php echo $rw['mole2'] ?>" placeholder="Enter Managerial">
                                                            </td>
                                                            </tr>

                                                            <tr>
                                                <td align="right">From Date</td>
                                                <td align="left">
                                                    <input type="date" value="<?php echo $rw["fromdate"] ?>"  name="fromdate" id="fromdate" class="form-control">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td align="right">To Date</td>
                                                <td align="left">
                                                    <input type="date" value="<?php echo $rw["todate"] ?>"  name="todate" id="todate" class="form-control">
                                                </td>
                                            </tr>
													<table class="table table-striped table-bordered table-hover">
                                                        <center style="color:#192436"><u><b>
                                                                    <h1>Uniform Details</h1>
                                                                </b></u></center>
                                                        <br />
                                                        <tr>
                                                            <td align="right">Uniform</td>
                                                            <td align="left">
                                                                <select name="uniform" id="uniform" class="form-control">
                                                                    <option value="T-Shirt Block"<?php echo($urows["uniform"] == "Saree") ? 'selected' : ''; ?>>Saree</option>
                                                                    <option value="T-Shirt Blue"<?php echo($urows["uniform"] == "Apron") ? 'selected' : ''; ?>>Apron</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Shirt</td>
                                                            <td align="left">
                                                                <select name="ushirt" id="ushirt" class="form-control">
                                                                    <option value="T-Shirt Block"<?php echo($urows["ushirt"] == "T-Shirt Block") ? 'selected' : ''; ?>>T-Shirt Block</option>
                                                                    <option value="T-Shirt Blue"<?php echo($urows["ushirt"] == "T-Shirt Blue") ? 'selected' : ''; ?>>T-Shirt Blue</option>
                                                                    <option value="White Shirt"<?php echo($urows["ushirt"] == "White Shirt") ? 'selected' : ''; ?>>White Shirt</option>
                                                                    <option value="Brown Shirt"<?php echo($urows["ushirt"] == "brown") ? 'selected' : ''; ?>>Brown Shirt</option>
                                                                    <option value="Knight frank"<?php echo($urows["ushirt"] == "Knight frank") ? 'selected' : ''; ?>>Knight frank</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                <tr>
                                                            <td align="right">Shirt Size</td>
                                                            <td align="left">
                                                                <input type="text" class="form-control"  id="shirtsize" name="shirtsize" value="<?php echo $urows['shirtsize'] ?>" placeholder="Enter Shirt Size">
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td align="right">Shirt Quantity</td>
                                                            <td align="left">
                                                                <input type="text" class="form-control"  id="shirtqty" name="shirtqty" value="<?php echo $urows['shirtqty'] ?>" placeholder="Enter Shirt Quantity">
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td align="right">Pant</td>
                                                            <td align="left">
                                                                <select name="upant" id="upant" class="form-control">
                                                                    <option value="Jeans"<?php echo($urows["phant"] == "Jeans") ? 'selected' : ''; ?>>Jeans Pant</option>
                                                                    <option value="Block Pant"<?php echo($urows["phant"] == "Block Pant") ? 'selected' : ''; ?>>Block Pant</option>
                                                                    <option value="Regular Pant"<?php echo($urows["phant"] == "Regular Pant") ? 'selected' : ''; ?>>Regular Pant</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td align="right">Pant Size</td>
                                                                <td align="left">
                                                                    <input type="text" class="form-control"  id="pantsize" name="pantsize" value="<?php echo $urows['pantsize'] ?>" placeholder="Enter Pant Size">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Pant Quantity</td>
                                                                <td align="left">
                                                                    <input type="text" class="form-control"  id="pantqty" name="pantqty" value="<?php echo $urows['pantqty'] ?>" placeholder="Enter Pant Quantiry">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Shoe</td>
                                                            <td align="left">
                                                                <select name="ushoe" id="ushoe" class="form-control">
                                                                    <option value="Fiber"<?php echo($urows["sshoes"] == "Fiber") ? 'selected' : ''; ?>>Fiber</option>
                                                                    <option value="metal"<?php echo($urows["sshoes"] == "metal") ? 'selected' : ''; ?>>metal</option>
                                                                    <option value="Steel"<?php echo($urows["sshoes"] == "Steel") ? 'selected' : ''; ?>>Steel</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td align="right">Shoe Size</td>
                                                                <td align="left">
                                                                    <input type="text" class="form-control"  id="shoesize" name="shoesize" value="<?php echo $urows['shoesize'] ?>" placeholder="Enter Shoe Size">
                                                                </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="right">Shoe Quantity</td>
                                                                <td align="left">
                                                                    <input type="text" class="form-control"  id="shoeqty" name="shoeqty" value="<?php echo $urows['shoeqty'] ?>" placeholder="Enter Shoe Quantity">
                                                                </td>
                                                        </tr>
												

<tr>

                                                <td align="right">Uniform Issue Date</td>

                                                <td align="left">

                                                    <input type="date" value="<?php echo $urows["uniformisdate"] ?>"  name="uniformisdate" id="uniformisdate" class="form-control">

                                                </td>

                                            </tr>

                                            <tr>
                                                <td align="right">Tools</td>
                                                <td align="left">
                                                    <input type="text" class="form-control"  value="<?php echo $rw['tools'] ?>" id="tools" name="tools" placeholder="Enter Tools">
                                                </td>
                                                </tr>



                                            <tr>
                                                <td align="right">User Name</td>
                                                <td align="left">
                                                    <input type="text" class="form-control"  value="<?php echo $rw['username'] ?>" id="uname" name="uname" placeholder="Enter User Name">
                                                </td>
                                                </tr>
                <tr>
                                                <td align="right">Password</td>
                                                <td>
                                                    <input type="text" class="form-control"  value="<?php echo $rw['password'] ?>" id="pwd" name="pwd" placeholder="Enter Password">
                                                </td>
                                            </tr>
</table>
<table class="table">

                                                        <center style="color:#192436"><u><b>

                                                                    <h1>Employee Address</h1>

                                                                </b></u></center>

                                                        <br />

                                                        <tr>



                                                            <td align="right"> Permanent Address</td>

                                                            <td>

                                                                <input type="text" name="permaddress" id="permaddress"  class="form-control" value="<?php echo $rw['permaddress'] ?>">

                                                            </td>

                                                            </tr>

                <tr>

                                                            <td align="right">Local Address</td>

                                                            <td align="left">

                                                                <input type="text" class="form-control"  id="localaddress" name="localaddress" value="<?php echo $rw['localaddress'] ?>">

                                                            </td>

                                                            </tr>

                <tr>

                                                            <td align="right">Reference Address</td>

                                                                <td align="left">

                                                                    <input type="text" class="form-control"  id="refeaddress" name="refeaddress" value="<?php echo $rw['refeaddress'] ?>">

                                                                </td>

                                                        </tr>
                                                    </table>

<table class="table table-striped table-bordered table-hover">
                                                        <center style="color:#192436"><u><b>
                                                                    <h1>Nominee Details</h1>
                                                                </b></u></center>
                                                        <br />
                                                        <tr>

                                                            <td align="right"> Name</td>
                                                            <td>
                                                                <input type="text" name="nname" id="nname"  class="form-control" value="<?php echo $brows['nname'] ?>" placeholder="Enter Nominee Name">
                                                            </td>
                                                            </tr>

                                                            <tr>
                                                            <td align="right">Relationship</td>
                                                                <td align="left">
                                                                    <input type="text" class="form-control"  id="nrelation" name="nrelation" value="<?php echo $brows['nrelation'] ?>" placeholder="Enter Relationship">
                                                                </td>
                                                        </tr>
                <tr>
                                                            <td align="right">Address</td>
                                                            <td align="left">
                                                                <input type="text" class="form-control"  id="naddress" name="naddress" value="<?php echo $brows['naddress'] ?>" placeholder="Enter Nominee Address">
                                                            </td>
                                                            </tr>


                                                        <tr>
                                                            <td align="right">DOB</td>
                                                                <td align="left">
                                                                    <input type="date" class="form-control"  id="ndob" name="ndob" value="<?php echo $brows['ndob'] ?>">
                                                                </td>
                                                        </tr>

                                                        <tr>
                                                            <td align="right">Share(%)</td>
                                                                <td align="left">
                                                                    <input type="text" class="form-control"  id="namount" name="namount" value="<?php echo $brows['namount'] ?>" placeholder="Enter Amount">
                                                                </td>
                                                        </tr>


                                                    </table>


                                                    <table class="table">
                                                        <center style="color:#192436"><u><b>
                                                                    <h1>BANK DETAILS</h1>
                                                                </b></u></center>
                                                        <br />
                                                        <tr>

                                                            <td align="right"> Bank Name.</td>
                                                            <td>
                                                                <input type="text" name="banknm" id="banknm"  class="form-control" value="<?php echo $brows['bname'] ?>">
                                                            </td>
                                                            </tr>
                <tr>
                                                            <td align="right">Branch of Bank</td>
                                                            <td align="left">
                                                                <input type="text" class="form-control"  id="bb" name="bb" value="<?php echo $brows['branch'] ?>">
                                                            </td>
                                                            </tr>
                <tr>
                                                            <td align="right">IFSC Code</td>
                                                                <td align="left">
                                                                    <input type="text" class="form-control"  id="ifcs" name="ifcs" value="<?php echo $brows['ifsc'] ?>">
                                                                </td>
                                                        </tr>

                                                        <tr>

                                                            <td align="right"> Account No.</td>
                                                            <td>
                                                                <input type="text" name="acno" id="acno"  class="form-control" value="<?php echo $brows['accno'] ?>">
                                                            </td>
                                                            </tr>
                                                            <tr>
                                                            <td align="right">Photo of Passbook/ Cancelled Cheque</td>
                                                            <td align="left">
                                                                <input type="file" name="bankimg" id="bankimg" class="form-control photo-upload" accept=".jpeg, .png, .jpg"/>
                                                                <?php
                                                                    if ($brows['bphoto'] != "") {
                                                                    ?>
                                                                    <a href='<?php echo $brows['bphoto'] ?>' target="_blank" style="color:blue;">view image</a>
                                                                <?php
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
        <tr>

                                                <td align="right">Employee Signature</td>

                                                <td align="left">

                                                    <canvas id="signatureCanvas" width="300" height="150" style="border: 2px solid black;"></canvas><br>
        <button type="button" id="clearSignature">Clear</button><br><br>
        	<?php
                if ($rw['empsign'] != "") {
                ?>
                                                        <a href='<?php echo $rw['empsign'] ?>' target="_blank" style="color:blue;">view sign</a>
                                                    <?php
                                                        }
                                                    ?>

        <input type="hidden" id="signatureData" name="signatureData">


                                                </td>

                                            </tr>
    </table>

                                            <div class="form-group">
                                                <div class="col-md-offset-4 col-md-8">


                                                    <button class="btn btn-info" type="submit" name="submit" id="submit">
                                                        <i class="ace-icon fa fa-save bigger-110"></i>
                                                        Save
                                                    </button>





                                                    &nbsp; &nbsp; &nbsp;
                                                    <a href="emplog.php"><button class="btn btn-danger" type="button" name="button" id="Close">
                                                            <i class="ace-icon fa fa-close bigger-110"></i>
                                                            Close
                                                        </button></a>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- PAGE CONTENT BEGINS -->

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->



                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
        </div><!-- /.main-content -->

        <?php include 'template/footer.php'; ?>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
        </div><!-- /.main-container -->
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
    <?php mysqli_close($link); ?>

    </html>
