<?php

/* =========================================================================================== */
#### insert,edit,update operations for add Employee Details and  display form validations ####
#### Author	: 	K Srinivasa Rao						####

/* =========================================================================================== */
//to insert data into testdetails table.if the is no errrors in form then insert data into database.
include '../dbconnection/connection.php';

//to update data into testdetails table.if the is no errrors in form then insert data into database.
if (isset($_POST['submit'])) {
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    //reading form data
    $photoFullPath = "http://localhost/BESTHRMS_LATEST/";
    $employeeid    = trim($_POST['eid']);
    // $esic_number      = trim($_POST['esic_number']);
    $emp_name      = trim($_POST['empname']);
    $DOB           = trim($_POST['dob']);
    $fname         = trim($_POST['fname']);
    $fdob           = trim($_POST['fdob']);
    $fadharno           = trim($_POST['fadharno']);
    $mname         = trim($_POST['mname']);
    $mdob           = trim($_POST['mdob']);
    $madharno           = trim($_POST['madharno']);
    $wname         = trim($_POST['wname']);
    $sdob         = trim($_POST['sdob']);
    $sadharno         = trim($_POST['sadharno']);
    $nok           = trim($_POST['nok']);
    $childname     = trim($_POST['childname']);
    $gender        = trim($_POST['gender']);
    $pan           = trim($_POST['pan']);
    $uan           = trim($_POST['uan']);
     $sitename      = trim($_POST['sitename']);
     $tools      = trim($_POST['tools']);
     $permaddress   = trim($_POST['permaddress']);
    $localaddress  = trim($_POST['localaddress']);
    $refeaddress   = trim($_POST['refeaddress']);
    $ESI_NO        = trim($_POST['esi']);
    $maritalstatus = trim($_POST['marstatus']);
    $contactno     = trim($_POST['conno']);
     $adharcardno   = trim($_POST['adhar']);
     $mcertificate   = trim($_POST['mcertificate']);
    $address       = trim($_POST['address']);
    $relation      = trim($_POST['relation']);
    $rno           = trim($_POST['rno']);
     $state         = trim($_POST['state']);
    $qualification = trim($_POST['qua']);
     $DOJ           = trim($_POST['doj']);
     $designation   = trim($_POST['des']);
    $ESI_NO        = trim($_POST['esi']);
    $PFNO          = trim($_POST['pf']);
    $bg            = trim($_POST['bg']);
    $stat          = trim($_POST['stat']);

    $tservices = trim(($_POST['tservices']));
    $managerial = trim(($_POST['managerial']));
    $mole1 = trim(($_POST['mole1']));
    $mole2 = trim(($_POST['mole2']));
    $fromdate = trim(($_POST['fromdate']));
    $todate = trim(($_POST['todate']));
    //$photo= trim($_POST['img1']);
    $iname = $_FILES['empfile']['name'];
    if ($iname != "") {
        // echo "hi";

        $code = md5(rand());
        //$date=date("Y");
        $iname = $date . "-" . $_FILES['empfile']['name'];
        $tmp   = $_FILES['empfile']['tmp_name'];

        $dir         = "photos";
        $destination = $dir . '/' . $iname;
        move_uploaded_file($tmp, $destination);
        //move_uploaded_file($tmp,"../staff/" . $code.$_FILES["sfile"]["name"]);
        $fileName15 = $date . "-" . $_FILES['empfile']['name'];
        //$iname = $code.$_FILES["sfile"]["name"];
        $fileName15 = ($fileName15);
    } else {
        $fileName15 = ($image1);
    }
    $emp_email     = trim(addslashes($_POST['email']));
    $licensestatus = trim(($_POST['licensestatus']));
    $username      = trim(addslashes($_POST['uname']));
    $password      = trim(addslashes($_POST['pwd']));
    $gender        = trim(addslashes($_POST['gender']));
    $pan           = trim(addslashes($_POST['pan']));
    $user          = trim($_POST['user']);
    $id            = trim($_POST['id']);
    $childname     = trim(($_POST['childname']));
    

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
            $insertempimg = "update emps set empsign='$empPath1' where empid='$id' ";

            $insertempimgres = mysqli_query($link, $insertempimg) or die("could not connected" . mysqli_error($link));
            echo 'Signature saved successfully!';
        } else {
            echo 'Failed to save signature.';
        }
    }

    //$res = mysqli_query($link, "insert into acyear(year,user) values('$acyear','$user')") or die("could not connected" . mysqli_error());
    //if the form variables are not empty then update data into database

     $sql = "update emps set emp_name='$emp_name',DOB ='$DOB',gender='$gender',maritalstatus='$maritalstatus',contactno='$contactno',
    adharcardno='$adharcardno',address='$address',state='$state',qualification='$qualification', DOJ='$DOJ',fname='$fname',fdob='$fdob',
    fadharno='$fadharno',mname='$mname', mdob='$mdob',madharno='$madharno', rno='$rno',wname='$wname',sdob='$sdob',sadharno='$sadharno',
    nok='$nok',childname='$childname',pan='$pan',designation='$designation',uan='$uan',ESI_NO='$ESI_NO', photo='$fileName15',
    emp_email='$emp_email', username='$username',password='$password',bg='$bg',stat='BLOCKED',licensestatus='$licensestatus',
    tservices='$tservices', managerial='$managerial',mole1='$mole1',mole2='$mole2', fromdate='$fromdate',todate='$todate',sitename='$sitename',
    tools='$tools',permaddress='$permaddress',localaddress='$localaddress', refeaddress='$refeaddress' where empid='$id'";
    $res = mysqli_query($link, $sql) or die("could not connected" . mysqli_error($link));


    $bname     = trim($_POST['banknm']);
    $branch    = trim($_POST['bb']);
    $ifsc      = trim($_POST['ifcs']);
    $accno     = trim($_POST['acno']);
    
    $nname     = trim($_POST['nname']);
    $nrelation = trim($_POST['nrelation']);
    $naddress  = trim($_POST['naddress']);
    $ndob      = trim($_POST['ndob']);
    $namount   = trim($_POST['namount']);
    

    
       
        $x4 = "update bank_nominee set bname = '$bname',branch= '$branch',ifsc='$ifsc',accno='$accno',nname='$nname',
  nrelation='$nrelation',naddress='$naddress',ndob='$ndob',namount='$namount' where employeeid='$employeeid'";
  

        $res4 = mysqli_query($link, $x4) or die("could not connected" . mysqli_error($link));


    $uniform     = trim($_POST['uniform']);
    $ushirt     = trim($_POST['ushirt']);
    $shirtsize    = trim($_POST['shirtsize']);
    $shirtqty      = trim($_POST['shirtqty']);
    $upant     = trim($_POST['upant']);
    
    $pantsize     = trim($_POST['pantsize']);
    $pantqty = trim($_POST['pantqty']);
    $ushoe  = trim($_POST['ushoe']);
    $shoesize      = trim($_POST['shoesize']);
    $shoeqty   = trim($_POST['shoeqty']);
    $uniformisdate   = trim($_POST['uniformisdate']);

     
        $x5 = "update emp_uniform set uniform = '$uniform', ushirt = '$ushirt' ,shirtsize= '$shirtsize' ,shirtqty='$shirtqty',
  upant='$upant',pantsize='$pantsize',pantqty='$pantqty',ushoe='$ushoe',shoesize='$shoesize',shoeqty='$shoeqty',
  uniformisdate='$uniformisdate' where employeeid='$employeeid'";
 

        $res5 = mysqli_query($link, $x5) or die("could not connected" . mysqli_error($link));

    if ($res) {
        $iname = $_FILES['empimg']['name'];
        //echo("file name is ".$iname);
        if ($iname != "") {
            //echo "hi";

            $iname = $employeeid . 'empimg';
            $tmp   = $_FILES['empimg']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $empPath = $photoFullPath . '' . $destination;
            //echo $empPath;
            $insertempimg = "update emps set photo='$empPath' where empid='$id'";

            $insertempimgres = mysqli_query($link, $insertempimg) or die("could not connected" . mysqli_error($link));

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
            $insertlicimg = "update emps set licimg='$licPath' where empid='$id' ";

            $insertlicimgres = mysqli_query($link, $insertlicimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['adharimg']['name'];
        if ($iname != "") {

            $iname = $employeeid . 'adharimg';
            $tmp   = $_FILES['adharimg']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $adharPath      = $photoFullPath . '' . $destination;
            $insertadharimg = "update emps set adharphoto='$adharPath' where empid='$id' ";

            $insertadharimgres = mysqli_query($link, $insertadharimg) or die("could not connected" . mysqli_error($link));
        }

        // adhar front image code end here

        // adhar Back image code starts from here

        $iname = $_FILES['adharphotoback']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'adharphotoback';

            $tmp = $_FILES['adharphotoback']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $adharPath = $photoFullPath . '' . $destination;

            $insertadharimgback = "update emps set adharphotoback='$adharPath' where empid='$id' ";

            $insertadharimgbackres = mysqli_query($link, $insertadharimgback) or die("could not connected" . mysqli_error($link));

        }

        $iname = $_FILES['mphoto']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'mphoto';

            $tmp = $_FILES['mphoto']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $medPath = $photoFullPath . '' . $destination;

            $insertmedimg = "update emps set mphoto='$medPath' where empid='$id' ";

            $insertmedicalsimgres = mysqli_query($link, $insertmedimg) or die("could not connected" . mysqli_error($link));

        }

        $iname = $_FILES['childphoto1']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'childphoto1';

            $tmp = $_FILES['childphoto1']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $childphoto1Path = $photoFullPath . '' . $destination;

            $insertchildphoto1mimg = "update emps set childphoto1='$childphoto1Path' where empid='$id' ";

            $insertchildphotoimgres = mysqli_query($link, $insertchildphoto1mimg) or die("could not connected" . mysqli_error($link));

        }

        $iname = $_FILES['childphoto2']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'childpho2o1';

            $tmp = $_FILES['childphoto2']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $childphoto2Path = $photoFullPath . '' . $destination;

            $insertchildphoto2mimg = "update emps set childphoto2='$childphoto2Path' where empid='$id' ";

            $insertchildphoto2imgres = mysqli_query($link, $insertchildphoto2mimg) or die("could not connected" . mysqli_error($link));

        }

        $iname = $_FILES['qualphoto']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'qualphoto';

            $tmp = $_FILES['qualphoto']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $qualPath = $photoFullPath . '' . $destination;

            $insertqualmimg = "update emps set qualphoto='$qualPath' where empid='$id' ";

            $insertqualimgres = mysqli_query($link, $insertqualmimg) or die("could not connected" . mysqli_error($link));

        }

        $iname = $_FILES['fphoto']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'fphoto';

            $tmp = $_FILES['fphoto']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $fphotoPath = $photoFullPath . '' . $destination;

            $insertfphotomimg = "update emps set fphoto='$fphotoPath' where empid='$id' ";

            $insertfphotoimgres = mysqli_query($link, $insertfphotomimg) or die("could not connected" . mysqli_error($link));

        }

        $iname = $_FILES['mophoto']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'mophoto';

            $tmp = $_FILES['mophoto']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $mophotoPath = $photoFullPath . '' . $destination;

            $insertmophotomimg = "update emps set mophoto='$mophotoPath' where empid='$id' ";

            $insertmophotoimgres = mysqli_query($link, $insertmophotomimg) or die("could not connected" . mysqli_error($link));

        }

        $iname = $_FILES['sphoto']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'sphoto';

            $tmp = $_FILES['sphoto']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $sphotoPath = $photoFullPath . '' . $destination;

            $insertsphotomimg = "update emps set sphoto='$sphotoPath' where empid='$id' ";

            $insertsphotoimgres = mysqli_query($link, $insertsphotomimg) or die("could not connected" . mysqli_error($link));

        }

        // Emp ID Back image code end here

        // Empi ID front image code starts from here

        $iname = $_FILES['empidcardfront']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'empidcardfront';

            $tmp = $_FILES['empidcardfront']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $empidpath = $photoFullPath . '' . $destination;

            $insertempidfrimg = "update emps set empidcardfront='$empidpath' where empid='$id' ";

            $insertempidmgres = mysqli_query($link, $insertempidfrimg) or die("could not connected" . mysqli_error($link));

        }

        // Emp ID front image code end here

        // Emp ID Back image code starts from here

        $iname = $_FILES['empidcardback']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'empidcardback';

            $tmp = $_FILES['empidcardback']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $empidpath = $photoFullPath . '' . $destination;

            $insertimgidimgback = "update emps set empidcardback='$empidpath' where empid='$id' ";

            $insertempidimgbackres = mysqli_query($link, $insertempidimgback) or die("could not connected" . mysqli_error($link));

        }

        // Emp ID Back image code end here

        // Emp Fingerprint image code starts from here

        $iname = $_FILES['empfingerprint']['name'];

        if ($iname != "") {

            $iname = $employeeid . 'empfingerprint';

            $tmp = $_FILES['empfingerprint']['tmp_name'];

            $dir = "empphotos";

            $destination = $dir . '/' . $iname;

            move_uploaded_file($tmp, $destination);

            $adharPath = $photoFullPath . '' . $destination;

            $insertfingerimg = "update emps set empfingerprint='$adharPath' where empid='$id' ";

            $insertfingerimgres = mysqli_query($link, $insertfingerimg) or die("could not connected" . mysqli_error($link));

        }

        // Emp Fingerprint image code end here

        $iname = $_FILES['panimg']['name'];
        if ($iname != "") {

            $iname = $employeeid . 'panimg';
            $tmp   = $_FILES['panimg']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $panPath      = $photoFullPath . '' . $destination;
            $insertpanimg = "update emps set panphoto='$panPath' where empid='$id' ";

            $insertpanimgres = mysqli_query($link, $insertpanimg) or die("could not connected" . mysqli_error($link));
        }

        $iname = $_FILES['bankimg']['name'];
        if ($iname != "") {

            $iname = $employeeid . 'bankimg';
            $tmp   = $_FILES['bankimg']['tmp_name'];

            $dir         = "empphotos";
            $destination = $dir . '/' . $iname;
            move_uploaded_file($tmp, $destination);
            $bankPath      = $photoFullPath . '' . $destination;
            $insertbankimg = "update bank_nominee set bphoto='$bankPath' where employeeid='$employeeid' ";

            $insertbankimgres = mysqli_query($link, $insertbankimg) or die("could not connected" . mysqli_error($link));
        }
        print "<script>";
        print "alert('Successfully Uploaded ');";
        print "self.location='emplog.php';";
        print "</script>";

    }

} else {

    $id = $_GET['id'];

    $sql           = "select * from emps where empid='$id'";
    $res           = mysqli_query($link, $sql) or die("could not connected" . mysqli_error($link));
    $t             = mysqli_fetch_array($res);
    $acyear        = $t['lname'];
    $id1           = $t['empid'];
    $city          = $t['city'];
    $emp_email     = $t['emp_email'];
    $emp_name      = $t['emp_name'];
    $username      = $t['username'];
    $password      = $t['password'];
    $eid           = $t['employeeid'];
    $fname         = $t['fname'];
    $mname         = $t['mname'];
    $relation      = $t['relation'];
    $rno           = $t['rno'];
    $dob           = $t['DOB'];
    $doj           = $t['DOJ'];
    $gender        = $t['gender'];
    $adhar         = $t['adharcardno'];
    $pf            = $t['PFNO'];
    $pan           = $t['pan'];
    $uan           = $t['uan'];
    $ESI_NO        = $t['esi'];
    $qualification = $t['qua'];
    $ndob = $t['ndob'];
    $ndob = $t['ndob'];
    $ndob = $t['ndob'];
    $sitename = $t['sitename'];
    $childname = $t['childname'];
    $experience = $t['exp'];
    $designation   = $t['des'];
    $address       = $t['address'];

}

//form input validations
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);

    $data = htmlspecialchars($data);
    return $data;
}
