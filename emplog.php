<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include('dbconnection/connection.php');
include ('dbfiles/org.php');

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $contactno = $_POST['conno'];

    // Query to check if the contact number exists in the emp table
    $query = "SELECT empid, stat FROM emps WHERE contactno = '$contactno' and status=''";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));

    // Check if a row with the contact number exists
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $id = $row['empid'];
        $status = $row['stat'];

        // Check if the status is BLOCKED
        if ($status == 'BLOCKED') {
            echo "<script>alert('Employee details updated. Please take HR approval.'); window.location.href = 'emplog.php';</script>";
            exit();
        }

        // Redirect to editemp.php with the retrieved ID if status is not BLOCKED
           echo "<script>
                if (confirm('Please fill up the form carefully. This is a one-time form, and once submitted, you can\'t change it without HR permission.')) {
                    window.location.href = 'http://localhost/BESTHRMS_LATEST/editemp.php?id=$id';
                }
            </script>";
            exit();
    } else {
        echo "<script>alert('Contact number does not exist.');</script>";
    }
}
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

<body class="no-skin">
    <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>

    <div class="main-content">
        <div class="main-content-inner">
            <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Employee Details</a>
                    </li>
                </ul>
            </div>

            <div class="page-content">
                <div class="#">
                    <center style="color:#192436">
                        <u><b>
                                <h1>EMPLOYEE LOGIN</h1>
                            </b></u>
                    </center>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-info">
                            <div class="box-header with-border">
                            </div>

                            <form name="frm" method="post" action="" enctype="multipart/form-data">
                                <table class="table table-striped table-bordered table-hover">
                                    <tr>
                                        <td align="right">Contact No.</td>
                                        <td align="left">
                                            <input type="number" class="form-control" name="conno" id="conno" required>
                                        </td>
                                    </tr>
                                </table>

                                <div class="form-group">
                                    <div class="col-md-offset-4 col-md-8">
                                        <button class="btn btn-info" type="submit" name="submit" id="submit">
                                            <i class="ace-icon fa fa-save bigger-110"></i>
                                            LOGIN
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <?php include('template/footer.php'); ?>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</body>
<?php mysqli_close($link); ?>
</html>
