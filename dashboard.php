<?php
ob_start();
$stn = "dashboard"; // Not sure what $stn is used for, but you're setting it here
include('dbconnection/connection.php');
session_start();
date_default_timezone_set('Asia/Kolkata');

if($_SESSION['user'])
{
    $name = $_SESSION['user']; // Example variable assignment
    $tsname = $_SESSION['user']; // Example variable assignment
    $user_emp = $_SESSION['username']; // Example variable assignment

    // Your dashboard content goes here
    // Example: Displaying logged-in user's name
  
//include('org1.php');


//include'dbfiles/org.php'
?>

<!DOCTYPE html>
<html lang="en">
	<?php include'template/headerfile.php'; ?>


	<body class="no-skin">
		<?php include'template/logo.php'; ?>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<!-- /.sidebar-shortcuts -->
				<?php include'template/sidemenu.php' ?>
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
								<a href="#">Dashboard</a>
							</li>
							<!--<li class="active">Blank Page</li>-->
						</ul><!-- /.breadcrumb -->

						<!-- /.nav-search -->
					</div>
<?php
  echo "Welcome, $name!";
  ?>
					<div class="page-content">
						<!-- /.ace-settings-container -->
						<div class="row">
							<div class="col-xs-12">
							    <h1>Summary</h1>
								<!-- PAGE CONTENT BEGINS -->
                                <div class="col-12"  style="margin-bottom:10px;">                           			
								     <form name="form" method="post">
									    <!-- <input type="hidden" name="sname" id="fdate" value="<?php echo date('Y-m-d');?>">  -->
				                    	<div class="row">
	                                        <div class="col-md-6">
	                                            <div class="analysis-box m-b-0" style="background-color:#1e3d70">
															<!-- <a href='book_appointment.php'><h3 class="text-white box-title">New Appointments <span class="pull-right">(ToDay)
																<i class="fa fa-caret-up"></i> <?php echo $cnt?></span></h3>-->
													<h3 class="text-white box-title">
														<input type="submit" style="font-weight: bold;" class="btn btn-danger" value="Employees" >
															<?php echo $cnt;?>
													</h3>								
													<div id="sparkline7" style="color:white"><canvas style="display: contents; width: 267px; height: 60px; vertical-align: top;"></canvas> 
														<table class="table">
															<tr>
															    <th>State Name</th>
																<th>AP</th>
																<th>KN</th>
																<th>KL</th>
																<th>OD</th>
																<th>TS</th>
																
															</tr>
															<tr>
															    <th>Active Employees</th>
																<td> 
																  <?php $k=mysqli_query($link,"select * from emps where state='AP'and status=''") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                              ?>
																</td>
																<td>
																  <?php $k=mysqli_query($link,"select * from emps where state='KN' and status=''") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                              ?>
															    </td>
																<td>
																  <?php $k=mysqli_query($link,"select * from emps where state='KL'and status=''") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                              ?>
																</td>
																<td>
																<?php $k=mysqli_query($link,"select * from emps where state='OD'and status=''") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                              ?>
																</td>
																 <td>
																  <?php $k=mysqli_query($link,"select * from emps where state='TS' and status=''") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                              ?>
																</td>
																
																
																
															</tr>
															<tr>
															<!-- <th>Resigned Employees</th> -->
															
																<!-- <td>
																	<?php $k=mysqli_query($link,"select * from emps where state='AP' and status!=''") or die(mysqli_error($link));
																	echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
																	?>
																</td> -->
																<!-- <td>
																    <?php $k=mysqli_query($link,"select * from emps where state='TS' and status!=''") or die(mysqli_error($link));
																	echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
																	?>
																</td> -->
																<!-- <td>
																    <?php $k=mysqli_query($link,"select * from emps where state='KL' and status!=''") or die(mysqli_error($link));
																	echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
																	?>
																</td>
																<td> 
																	<?php $k=mysqli_query($link,"select * from emps where state='TN' and status!=''") or die(mysqli_error($link));
																	echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
																	?>
																</td> -->
																<!-- <td>
																  <?php $k=mysqli_query($link,"select * from emps where state='KN'  and status!=''") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                              ?>
																</td> -->
																<!-- <td>
																  <?php $k=mysqli_query($link,"select * from emps where state='OD'  and status!=''") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                              ?>
																</td> -->
															</tr>
															<tr>
															    <!-- <th>NOC Employees</th> -->
																<!-- <td>
															   <?php $k=mysqli_query($link,"select * from add_noc where state='AP'") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                            ?>
															</td> -->
															<!-- <td>
															     <?php $k=mysqli_query($link,"select * from add_noc where state='TS'") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                              ?>
														    </td> -->
															<!-- <td>
															   <?php $k=mysqli_query($link,"select * from add_noc where state='KL'") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                            ?>
															</td>
															<td>
														    	<?php $k=mysqli_query($link,"select * from add_noc where state='TN'") or die(mysqli_error($link));
									                               echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
									                            ?>
															</td> -->
															<!-- <td>
																<?php $k=mysqli_query($link,"select * from add_noc where state='KN'") or die(mysqli_error($link));
																echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
																?>
															</td> -->
															<!-- <td>
																<?php $k=mysqli_query($link,"select * from add_noc where state='OD'") or die(mysqli_error($link));
																echo "<b style='color:white;'>".mysqli_num_rows($k)."</b>";
																?>
															</td> -->
                                                            </tr>
														</table>
													</div>
	                                            </div>
                                            </div>
                                        </div> <!--inner row ends...-->
                                     </form>
                                </div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			<?php include('template/footer.php'); ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	</body>
</html>
<?php 

}else
{
session_destroy();

session_unset();

header('Location:index.php?authentication failed');

}

?>