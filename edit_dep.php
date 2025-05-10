<?php //include('config.php');
session_start();
// include('dbconnection/connection.php');
// Error reporting and exception handling
error_reporting(E_ALL);
ini_set('display_errors', 1);
$state = $_GET['state'];
if ($_SESSION['user']) {
    $name = $_SESSION['user'];

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
  


    <body class="no-skin">
        <?php include 'template/logo.php'; ?>

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
                <?php include 'template/sidemenu.php' ?>
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
                                <a href="qot_list"> Portfolio </a>
                            </li>
                            <li>
                                <a href=""> Deployment</a>
                            </li>

                            <!--<li class="active">Blank Page</li>-->
                        </ul><!-- /.breadcrumb -->

                        <!-- /.nav-search -->
                    </div>

                    <div class="page-content">
                        <!-- /.ace-settings-container -->
                        <div class="page-header">
                            <h1 align="center">
                            Deployment Order

                            </h1>
                        </div>

                        <?php
                         $id = $_GET['id'];
                        $res = mysqli_query($link, "select * from emps where empid='$id'");
                        $rw = mysqli_fetch_array($res);
                        $res1 = mysqli_query($link, "select * from deployment_records where id='$id'");
                       
                            $to_address='';
                            $position='';
                            $deployment_date ='';
                            $joindate='';
                            $location_address='';
                            $notes='';
                            $location_company='';
                        if(mysqli_num_rows($res1)>0)
                        {
                            $rw1 = mysqli_fetch_array($res1) or die(mysqli_error());
                            $to_address=$rw1['to_address'];
                            $position=$rw1['position'];
                            $deployment_date =$rw1["deployment_date"];
                            $joindate =$rw1["joindate"];
                            $location_address=$rw1['location_address'];
                            $notes=$rw1['notes'];
                            $location_company=$rw1['location_company'];
                        }
                        ?>


                        <!-- PAGE CONTENT BEGINS -->
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                <div class="row">
                                    <div class="col-xs-12">

                                        <form name="frm" method="post" action="dep_suc.php?state=<?php echo $state; ?>" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            <input type="hidden" name="ses" value="<?php echo $name; ?>">
                                            <table class="table table-striped table-bordered table-hover">
                                                <tr>

                                                <tr>
                                                    <td align="right">Address To </td>
                                                    <td align="left"><input type="text" value="<?php echo $to_address ?>" class="form-control" name="address" id="address"></td>
                                                    <td align="right">Designation</td>
                                                    <td align="left"><input type="text" value="<?php echo $position?>" class="form-control" name="desig" id="desig"></td>
                                                </tr>

                                                <tr>
                                                    <td align="right">Deployment Date</td>
                                                    <td><input type="date" name="apdate" id="apdate" value="<?php echo date('Y-m-d', strtotime($deployment_date)) ?>" class="form-control"></td>
                                                
                                                    <td align="right">Address From </td>
                                                    <td align="left">
                                                        <textarea  name="loc" id="loc" class="form-control"><?php echo $location_address ?></textarea>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td align="right">Name</td>
                                                    <td align="left"><input type="text" value="<?php echo $rw['emp_name'] ?>" class="form-control" name="name" id="name"></td>
                                                    <td align="right">Join Date</td>
                                                    <td><input type="date" name="join_date" id="join_date" value="<?php echo date('Y-m-d', strtotime($rw["joindate"])) ?>" class="form-control"></td>
                                                

                                                  
                                                </tr>

                                                <tr>
                                                    <td align="right">State</td>
                                                    <td align="left">
                                                        <input type="text" value="<?php echo $rw['state'] ?>"  class="form-control" name="state" id="state">
                                                    </td>
                                                    <td align="right">Subject </td>
                                                    <td>
                                                        <input type="text"  name="sub" id="sub" value="<?php echo $notes ?>" class="form-control">
                                                    </td>
                                                   </tr>


                                                <tr>
                                                    
                                                    <td align="right">Working Company Name</td><td align="left">
								
                                                        <input type="text" value="<?php echo $location_company ?>" class="form-control" name="location" id="location">
                                                    </td>


                                            



                                            </table>

                                            <div>


                                                <div class="form-group">
                                                    <div class="col-md-offset-4 col-md-8">


                                                        <button class="btn btn-info" type="submit" name="update1" id="update1">
                                                            <i class="ace-icon fa fa-save bigger-110"></i>
                                                            Save
                                                        </button>

                                                        &nbsp; &nbsp; &nbsp;
                                                        <a href="dp_list.php?state=<?php echo $state;?>"><button class="btn btn-danger" type="button" name="button" id="Close">
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
                
            </script>

            <script src="assets/js/jquery-2.1.4.min.js"></script>

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


    </body>

    </html>
<?php

} else {
    session_destroy();

    session_unset();

    header('Location:index.php?authentication failed');
}

?>