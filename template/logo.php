<?php include('dbconnection/connection.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $sql1 = "select * from organization where id='1'";
    $res1 = mysqli_query($link, $sql1)or die(mysql_error());
    $r = mysqli_fetch_assoc($res1);
    
     if(($stn=="TN") or ($stn=="KL") ){
        $schoolname = "KVR BEST PROPERTY MANAGEMENT PVT. LTD.";
    }else if($stn=="dashboard"){
        $schoolname = "KVR BEST PROPERTY MANAGEMENT PVT. LTD.";
    }else{
          $schoolname = $r['org_name'];
    }
    
    
	?>
<style>

    @media only screen and (max-width: 541px) {
        .responsive-brand{
        word-wrap: break-word;
        max-width: 250px;
        
    }
    .header-font{
        font-size: small;
    }
    }
    @media only screen and (max-width: 423px){
        .responsive-brand{
        word-wrap: break-word;
        max-width: 150px;
        
    }
    }
    .tbutton{
        display: flex;
 
  align-items: center;
    }
    .avatar{
        margin-left: auto;
    }
    
    
</style>


<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state tbutton" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left " id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="responsive-brand pull-left">
					<a href="dashboard.php" class="navbar-brand">
						<small class="header-font">
							
							<?php echo $schoolname; ?>
						</small>
					</a>
				</div>

				<div class="avatar pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="kvrbest.jpeg" width="48" height="48" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $name; ?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
<li>
									<a href="change_pass.php">
										<i class="ace-icon fa fa-power-off"></i>
										Change Password
									</a>
								</li>
								

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>


