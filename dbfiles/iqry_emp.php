<?php
// error_reporting(E_ALL);
// ini_set('display_errors',1);
/* =========================================================================================== */
#### insert,edit,update operations for add Employee Details and  display form validations ####
#### Author	: 	K Srinivasa Rao						####

/* =========================================================================================== */
//to insert data into testdetails table.if the is no errrors in form then insert data into database.
include './dbconnection/connection.php';

error_log("called");
//to update data into testdetails table.if the is no errrors in form then insert data into database.
if (isset($_POST['submit'])) {
    $photoFullPath = "http://localhost/BESTHRMS_LATEST/";
    //reading form data
    //$empid=trim($_POST['empid']);
    $emp_name      = trim($_POST['empname']);
    // $esic_number      = trim($_POST['esic_number']);
    $dob           = trim($_POST['dob']);
    $gender        = trim($_POST['gender']);
    $maritalstatus = trim($_POST['marstatus']);
    $contactno     = trim($_POST['conno']);
    $adharcardno   = trim($_POST['adhar']);
    $mcertificate   = trim($_POST['mcertificate']);
    $address       = trim($_POST['address']);
    $fname         = trim($_POST['fname']);
    $fdob           = trim($_POST['fdob']);
    $fnumber           = trim($_POST['fnumber']);
    $fadharno           = trim($_POST['fadharno']);
    $wname         = trim($_POST['wname']);
    $sdob         = trim($_POST['sdob']);
    $sadharno         = trim($_POST['sadharno']);
    $nok         = trim($_POST['nok']);
    $bg         = trim($_POST['bg']);
    $rno         = trim($_POST['rno']);
    $mname         = trim($_POST['mname']);
    $mdob           = trim($_POST['mdob']);
    $madharno           = trim($_POST['madharno']);
    $relation      = trim($_POST['rel']);
     $state         = trim($_POST['state']);
    $qualification = trim($_POST['qua']);
     $DOJ           = trim($_POST['doj']);
    $designation   = trim($_POST['des']);
    $UANNO         = trim($_POST['uan']);
    $PANNO         = trim($_POST['pan']);
    $ESI_NO        = trim($_POST['esi']);
    $PFNO          = trim($_POST['pf']);
    $emp_email     = trim(($_POST['email']));
    $licensestatus = trim(($_POST['licensestatus']));
    $tservices = trim(($_POST['tservices']));
    $managerial = trim(($_POST['managerial']));
    $mole1 = trim(($_POST['mole1']));
    $mole2 = trim(($_POST['mole2']));
    $fromdate = trim(($_POST['fromdate']));
    $todate = trim(($_POST['todate']));

     
    
    $sitename      = trim(($_POST['sitename']));
    $tools      = trim(($_POST['tools']));
    $permaddress   = trim(($_POST['permaddress']));
    $localaddress  = trim(($_POST['localaddress']));
    $refeaddress   = trim(($_POST['refeaddress']));
    $username      = trim(($_POST['uname']));
    $password      = trim(($_POST['pwd']));
    $childname     = trim(($_POST['childname']));
    // $childphoto1      = trim(($_POST['childphoto1']));
    // $childphoto2     = trim(($_POST['childphoto2']));

    
   
    $user       = trim($_POST['user']);
    $employeeid = 'KVR'.$state;
    $query      = "SELECT empid, stat FROM emps WHERE contactno = '$contactno' and status='' ";
    $result     = mysqli_query($link, $query) or die(mysqli_error($link));
    if (mysqli_num_rows($result) == 0) {

   $x = "insert into emps(emp_name,DOB,gender,maritalstatus,contactno,adharcardno,mcertificate,address,state,qualification, qualphoto,
 DOJ,designation,uan,pan,ESI_NO,PFNO,photo,mphoto,emp_email,username,password,user,
 childname,childphoto1,childphoto2,fname,fdob,fnumber,fadharno,fphoto, mname,mdob,madharno,mophoto,wname,sdob,sphoto,sadharno,nok,bg,rno,relation,stat,licensestatus,tservices,managerial,mole1,mole2,fromdate,todate,sitename,tools,permaddress,localaddress,refeaddress)
 values('$emp_name','$dob','$gender','$maritalstatus','$contactno','$adharcardno','$mcertificate','$address','$state','$qualification','$qualphoto',
 '$DOJ','$designation','$UANNO','$PANNO','$ESI_NO','$PFNO','$fileName15','$mphoto','$emp_email','$username','$password','$user','$childname','$childphoto1','$childphoto2',
 '$fname','$fdob','$fnumber','$fadharno','$fphoto','$mname','$mdob','$madharno','$mophoto','$wname','$sdob','$sphoto','$sadharno','$nok','$bg','$rno','$relation','UNBLOCKED','$licensestatus','$tservices','$managerial','$mole1','$mole2','$fromdate','$todate','$sitename',
 '$tools','$permaddress','$localaddress','$refeaddress')";      
 $res = mysqli_query($link, $x) or die("could not connected" . mysqli_error($link));
 
        //if the form variables are not empty then update data into database
        error_log("query done");

        if ($res) {
            $last_id    = $link->insert_id;
            $employeeid = 'KVR' . $state . $last_id;
        }

        $x1 = "update emps set employeeid='$employeeid',username='$employeeid' where empid='$last_id'";

        $res1 = mysqli_query($link, $x1) or die("could not connected" . mysqli_error($link));

        

            // $sql = "update bedtype set BEDTYPE='$bname',AUTH_BY='$user',REMARKS='$remarks' where BEDTYPE_ID='$id'";
            // $res = mysqli_query($link, $sql) or die("could not connected" . mysqli_error());
    

        // Bank and nomineed details starts from here
        $bname     = trim($_POST['banknm']);
        $branch    = trim($_POST['bb']);
        $ifsc      = trim($_POST['ifcs']);
        $accno     = trim($_POST['acno']);
        
        $nname     = trim($_POST['nname']);
        $nrelation = trim($_POST['nrelation']);
        $naddress  = trim($_POST['naddress']);
        $ndob      = trim($_POST['ndob']);
        $namount   = trim($_POST['namount']);
        
        $bphotoPath = "";
        $iname = $_FILES['bankimg']['name'];
        if (!empty($iname)) {
            $iname = $employeeid . '_bankimg';
            $tmp   = $_FILES['bankimg']['tmp_name'];
        
            $dir = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $bphotoPathimg = $photoFullPath . $destination;
        }
       
        if ($bname != '' && $accno != '') {
          $x4 = "INSERT INTO bank_nominee(employeeid, bname, branch, ifsc, accno, bphoto,
                     nname, nrelation, naddress, ndob, namount)
                   VALUES('$employeeid', '$bname', '$branch', '$ifsc', '$accno', '$bphotoPathimg',
                     '$nname', '$nrelation', '$naddress', '$ndob', '$namount')";
            $res4 = mysqli_query($link, $x4) or die("Could not insert bank nominee: " . mysqli_error($link));
        }
        
        // Bank and nomineed details starts End Here
        
        // uniform details are starts from here
        $uniform	     = trim($_POST['uniform']);
        $ushirt	     = trim($_POST['ushirt']);
        $shirtsize    = trim($_POST['shirtsize']);
        $shirtqty      = trim($_POST['shirtqty']);
        $upant     = trim($_POST['upant']);
        
        $pantsize     = trim($_POST['pantsize']);
        $pantqty = trim($_POST['pantqty']);
        $ushoe  = trim($_POST['ushoe']);
        $shoesize   = trim($_POST['shoesize']);
        $shoeqty      = trim($_POST['shoeqty']);
        $uniformisdate   = trim($_POST['uniformisdate']);
        
        if ($uniformisdate != '') {
            
           $x5 = "INSERT INTO emp_uniform(employeeid, uniform, ushirt, shirtsize, shirtqty, upant, pantsize,
                     pantqty, ushoe, shoesize, shoeqty, uniformisdate)
                   VALUES('$employeeid', '$uniform', '$ushirt', '$shirtsize', '$shirtqty', '$upant', '$pantsize',
                     '$pantqty', '$ushoe', '$shoesize', '$shoeqty', '$uniformisdate')";
            $res5 = mysqli_query($link, $x5) or die("Could not insert Uniform Details: " . mysqli_error($link));
        }
        // Uniform details end here

        // salary details from here 
        $basicamount	     = trim($_POST['basicamount']);
        $daamount	     = trim($_POST['daamount']);
        $hraamount    = trim($_POST['hraamount']);
        $otherallowance      = trim($_POST['otherallowance']);
        $advleave     = trim($_POST['advleave']);
        $advbonus     = trim($_POST['advbonus']);
        $totalmonthlyem     = trim($_POST['totalmonthlyem']);
        
        
        if ($basicamount != '') {
            
      $x6 = "INSERT INTO salaries(employeeid, basicamount, daamount, hraamount, otherallowance, advleave, advbonus,
                     totalmonthlyem)
                   VALUES('$employeeid', '$basicamount', '$daamount', '$hraamount', '$otherallowance', '$advleave', '$advbonus',
                     '$totalmonthlyem')";
            $res6 = mysqli_query($link, $x6) or die("Could not insert Salary Details: " . mysqli_error($link));
        }

        // salary details ends here
        $signatureData = $_POST['signatureData'];

        // Process the signature data (base64)
        if (! empty($signatureData)) {
            // Remove the data URL scheme
            $signatureData = str_replace('data:image/png;base64,', '', $signatureData);
            $signatureData = str_replace(' ', '+', $signatureData);

            // Decode base64 to binary data
            $signatureImage = base64_decode($signatureData);
            $filePath       = 'empphotos/' . $employeeid . 'empsign.png';

            // Save the binary data to a file
            if (file_put_contents($filePath, $signatureImage)) {
                $empPath1     = $photoFullPath . '/' . $filePath;
                $insertempimg = "update emps set empsign='$empPath1' where empid='$last_id' ";

                $insertempimgres = mysqli_query($link, $insertempimg) or die("could not connected" . mysqli_error($link));
                echo 'Signature saved successfully!';
            } else {
                echo 'Failed to save signature.';
            }
        }

        $iname = $_FILES['empimg']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'empimg';
            $tmp   = $_FILES['empimg']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $empPath      = $photoFullPath . '' . $destination;
            $insertempimg = "update emps set photo='$empPath' where empid='$last_id' ";

            $insertempimgres = mysqli_query($link, $insertempimg) or die("could not connected" . mysqli_error($link));

        }

        
        $iname = $_FILES['mphoto']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'mphoto';
            $tmp   = $_FILES['mphoto']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $empPath      = $photoFullPath . '' . $destination;
            $insertmimg = "update emps set mphoto='$empPath' where empid='$last_id' ";

            $insertmedicalimgres = mysqli_query($link, $insertmimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['qualphoto']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'qualphoto';
            $tmp   = $_FILES['qualphoto']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $qualPath      = $photoFullPath . '' . $destination;
            $insertqualmimg = "update emps set qualphoto='$qualPath' where empid='$last_id' ";

            $insertqualimgres = mysqli_query($link, $insertqualmimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['childphoto1']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'childphoto1';
            $tmp   = $_FILES['childphoto1']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $childphoto1Path      = $photoFullPath . '' . $destination;
            $insertchildphoto1mimg = "update emps set childphoto1='$childphoto1Path' where empid='$last_id' ";

            $insertchildphotoimgres = mysqli_query($link, $insertchildphoto1mimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['childphoto2']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'childphoto2';
            $tmp   = $_FILES['childphoto2']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $childphoto2Path      = $photoFullPath . '' . $destination;
            $insertchildphoto2mimg = "update emps set childphoto2='$childphoto2Path' where empid='$last_id' ";

            $insertchildphoto2imgres = mysqli_query($link, $insertchildphoto2mimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['fphoto']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'fphoto';
            $tmp   = $_FILES['fphoto']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $fphotoPath      = $photoFullPath . '' . $destination;
            $insertfphotomimg = "update emps set fphoto='$fphotoPath' where empid='$last_id' ";

            $insertfphotoimgres = mysqli_query($link, $insertfphotomimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['mophoto']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'mophoto';
            $tmp   = $_FILES['mophoto']['tmp_name'];

                $dir         = "empphotos";
                $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $mophotoPath      = $photoFullPath . '' . $destination;
            $insertmophotomimg = "update emps set mophoto='$mophotoPath' where empid='$last_id' ";

            $insertmophotoimgres = mysqli_query($link, $insertmophotomimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['sphoto']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'sphoto';
            $tmp   = $_FILES['sphoto']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $sphotoPath      = $photoFullPath . '' . $destination;
            $insertsphotomimg = "update emps set sphoto='$sphotoPath' where empid='$last_id' ";

            $insertsphotoimgres = mysqli_query($link, $insertsphotomimg) or die("could not connected" . mysqli_error($link));
        }


        $iname = $_FILES['licimg']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'licimg';
            $tmp   = $_FILES['licimg']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $licPath      = $photoFullPath . '' . $destination;
            $insertlicimg = "update emps set licimg='$licPath' where empid='$last_id' ";

            $insertlicimgres = mysqli_query($link, $insertlicimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['adharimg']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'adharimg';
            $tmp   = $_FILES['adharimg']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $adharPath      = $photoFullPath . '' . $destination;
            $insertadharimg = "update emps set adharphoto='$adharPath' where empid='$last_id' ";

            $insertadharimgres = mysqli_query($link, $insertadharimg) or die("could not connected" . mysqli_error($link));
        }

        // Adhar Back imge code end here

        // adhar back image code

        $iname = $_FILES['adharphotoback']['name'];

        if ($iname != "") {

            // echo "hi";

            $iname = $employeeid . 'adharphotoback';

            $tmp = $_FILES['adharphotoback']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $adharPath = $photoFullPath . '' . $destination;

            $insertadharimgback = "update emps set adharphotoback='$adharPath' where empid='$last_id' ";

            $insertadharimgres = mysqli_query($link, $insertadharimgback) or die("could not connected" . mysqli_error($link));

        }

        // adhar back image code end

        // Emp Id Card Front image code

        $iname = $_FILES['empidcardfront']['name'];

        if ($iname != "") {

            // echo "hi";

            $iname = $employeeid . 'empidcardfront';

            $tmp = $_FILES['empidcardfront']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $empidpath = $photoFullPath . '' . $destination;

            $insertempidimgfront = "update emps set empidcardfront='$empidpath' where empid='$last_id' ";

            $insertempidfrimgres = mysqli_query($link, $insertempidimgfront) or die("could not connected" . mysqli_error($link));

        }

        // Emp Id Card front image code end

        // Emp Id Card Back image code

        $iname = $_FILES['empidcardback']['name'];

        if ($iname != "") {

            // echo "hi";

            $iname = $employeeid . 'empidcardback';

            $tmp = $_FILES['empidcardback']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $empidpath = $photoFullPath . '' . $destination;

            $insertempidimgback = "update emps set empidcardback='$empidpath' where empid='$last_id' ";

            $insertempidbackimgres = mysqli_query($link, $insertempidimgback) or die("could not connected" . mysqli_error($link));

        }

        // Emp Id Card Back image code end

        // Employee Fingerprint image code

        $iname = $_FILES['empfingerprint']['name'];

        if ($iname != "") {

            // echo "hi";

            $iname = $employeeid . 'empfingerprint';

            $tmp = $_FILES['empfingerprint']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $adharPath = $photoFullPath . '' . $destination;

            $insertempfingerimg = "update emps set empfingerprint='$adharPath' where empid='$last_id' ";

            $insertempfingerimgres = mysqli_query($link, $insertempfingerimg) or die("could not connected" . mysqli_error($link));

        }

// Employee Fingerprint image code end

        $iname = $_FILES['panimg']['name'];
        if ($iname != "") {
            // echo "hi";

            $iname = $employeeid . 'panimg';
            $tmp   = $_FILES['panimg']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $panPath      = $photoFullPath . '' . $destination;
            $insertpanimg = "update emps set panphoto='$panPath' where empid='$last_id' ";

            $insertpanimgres = mysqli_query($link, $insertpanimg) or die("could not connected" . mysqli_error($link));
        }

        
        // $iname = $_FILES['img1']['name'];
        // if ($iname != "") {
        //     // echo "hi";

        //     $iname = $employeeid . 'img1';
        //     $tmp   = $_FILES['img1']['tmp_name'];

        //     $dir         = "empphotos";
        //     $destination = $dir . '/' . $iname;
        //     move_uploaded_file($tmp, $destination);
        //     $cert1Path      = $photoFullPath . '' . $destination;
        //     $insertcert1img = "update emps set certi1='$cert1Path' where empid='$last_id' ";

        //     $insertcer1imgres = mysqli_query($link, $insertcert1img) or die("could not connected" . mysqli_error($link));
        // }

//if it is successfully update then display alert box in form
        print "<script>";
        print "alert('Successfully Uploaded');";
        print "self.location='employeelist.php?state=$state';";
        print "</script>";
    } else {
        print "<script>";
        print "alert('Contact or aadharno already Exists, Please insert unique aadhar and contact no');";
        print "self.location='employeelist.php?state=$state';";
        print "</script>";
    }

//form input validations
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}

