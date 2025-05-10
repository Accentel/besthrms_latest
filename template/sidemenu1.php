<?php
include("../dbconnection/connection.php");
if ($name != "admin") {
	

	

	$p = "SELECT D.menus FROM hrms_hr_user as D,hrms_admin_login as M  WHERE D.emp_id=M.empname and D.emp_id='$name' ";
	$sql = mysqli_query($link, $p) or die(mysqli_error($link));
	if ($sql) {
		$i = 0;
		while ($row = mysqli_fetch_array($sql)) {
			$menu = $row[0];
			if ($menu == "2") {
				$menu2 = "2";
			}
			if ($menu == "21") {
				$menu21 = "21";
			}
			if ($menu == "22") {
				$menu22 = "22";
			}
			if ($menu == "3") {
				$menu3 = "3";
			}
			if ($menu == "31") {
				$menu31 = "31";
			}
			if ($menu == "32") {
				$menu32 = "32";
			}
			if ($menu == "33") {
				$menu33 = "33";
			}
			if ($menu == "34") {
				$menu34 = "34";
			}
			if ($menu == "35") {
				$menu35 = "35";
			}
			if ($menu == "36") {
				$menu36 = "36";
			}
			if ($menu == "37") {
				$menu37 = "37";
			}
			if ($menu == "38") {
				$menu38 = "38";
			}
			if ($menu == "39") {
				$menu39 = "39";
			}
			if ($menu == "310") {
				$menu310 = "310";
			}
			if ($menu == "311") {
				$menu311 = "311";
			}
			if ($menu == "312") {
				$menu312 = "312";
			}

			if ($menu == "5") {
				$menu5 = "5";
			}
			if ($menu == "51") {
				$menu51 = "51";
			}
			if ($menu == "52") {
				$menu52 = "52";
			}
			if ($menu == "53") {
				$menu53 = "53";
			}
			if ($menu == "54") {
				$menu54 = "54";
			}
			if ($menu == "55") {
				$menu55 = "55";
			}
			if ($menu == "56") {
				$menu56 = "56";
			}
			if ($menu == "57") {
				$menu57 = "57";
			}
			if ($menu == "58") {
				$menu58 = "58";
			}
			if ($menu == "59") {
				$menu59 = "59";
			}
			if ($menu == "510") {
				$menu510 = "510";
			}
			if ($menu == "511") {
				$menu511 = "511";
			}
			if ($menu == "512") {
				$menu512 = "512";
			}


			if ($menu == "4") {
				$menu4 = "4";
			}
			if ($menu == "41") {
				$menu41 = "41";
			}
			if ($menu == "42") {
				$menu42 = "42";
			}
			if ($menu == "43") {
				$menu43 = "43";
			}
			if ($menu == "44") {
				$menu44 = "44";
			}
			if ($menu == "45") {
				$menu45 = "45";
			}
			if ($menu == "46") {
				$menu46 = "46";
			}
			if ($menu == "47") {
				$menu47 = "47";
			}
			if ($menu == "48") {
				$menu48 = "48";
			}
			if ($menu == "49") {
				$menu49 = "49";
			}
			if ($menu == "410") {
				$menu410 = "410";
			}
			if ($menu == "411") {
				$menu411 = "411";
			}
			if ($menu == "412") {
				$menu412 = "412";
			}


			if ($menu == "6") {
				$menu6 = "6";
			}
			if ($menu == "61") {
				$menu61 = "61";
			}
			if ($menu == "62") {
				$menu62 = "62";
			}
			if ($menu == "63") {
				$menu63 = "63";
			}
			if ($menu == "64") {
				$menu64 = "64";
			}
			if ($menu == "65") {
				$menu65 = "65";
			}
			if ($menu == "66") {
				$menu66 = "66";
			}
			if ($menu == "67") {
				$menu67 = "67";
			}
			if ($menu == "68") {
				$menu68 = "68";
			}
			if ($menu == "69") {
				$menu69 = "69";
			}
			if ($menu == "610") {
				$menu610 = "610";
			}
			if ($menu == "611") {
				$menu611 = "611";
			}
			if ($menu == "612") {
				$menu612 = "612";
			}


			if ($menu == "7") {
				$menu7 = "7";
			}
			if ($menu == "71") {
				$menu71 = "71";
			}
			if ($menu == "72") {
				$menu72 = "72";
			}
			if ($menu == "73") {
				$menu73 = "73";
			}
			if ($menu == "74") {
				$menu74 = "74";
			}
			if ($menu == "75") {
				$menu75 = "75";
			}
			if ($menu == "76") {
				$menu76 = "76";
			}
			if ($menu == "77") {
				$menu77 = "77";
			}
			if ($menu == "78") {
				$menu78 = "78";
			}
			if ($menu == "79") {
				$menu79 = "79";
			}
			if ($menu == "710") {
				$menu710 = "710";
			}
			if ($menu == "711") {
				$menu711 = "711";
			}
			if ($menu == "712") {
				$menu712 = "712";
			}
			if ($menu == "8") {
				$menu8 = "8";
			}

			if ($menu == "81") {
				$menu81 = "81";
			}
			if ($menu == "82") {
				$menu82 = "82";
			}
			if ($menu == "83") {
				$menu83 = "83";
			}
			if ($menu == "84") {
				$menu84 = "84";
			}
			if ($menu == "85") {
				$menu85 = "85";
			}
			if ($menu == "86") {
				$menu86 = "86";
			}
			if ($menu == "87") {
				$menu87 = "87";
			}
			if ($menu == "88") {
				$menu88 = "88";
			}
			if ($menu == "89") {
				$menu89 = "89";
			}
			if ($menu == "810") {
				$menu810 = "810";
			}
			if ($menu == "811") {
				$menu811 = "811";
			}
			if ($menu == "812") {
				$menu812 = "812";
			}
			if ($menu == "16") {
				$menu16 = "16";
			}
		}
	}

?>

	<ul class="nav nav-list">
		<li class="">
			<a href="dashboard.php">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>

		<?php if ($menu2 == "2") { ?> <li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-cog"></i>
					<span class="menu-text">
						Settings
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
					<?php if ($menu21 == "21") { ?> <li class="">
							<a href="organization.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Update Organization
							</a>


						</li><?php } ?>

					<?php if ($menu22 == "22") { ?> <li class="">
							<a href="cattool.php">
								<i class="menu-icon fa fa-caret-right"></i>
								Tool Category
							</a>


						</li><?php } ?>

				</ul>
			</li>
		<?php } ?>
		<?php if ($menu3 == "3") { ?> <li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text">
						Andhra Pradesh
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
				<?php if ($menu34 == "34") { ?> <li class="">
							<a href="employeelist.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Employee
							</a>


						</li><?php } ?>

					<?php if ($menu31 == "31") { ?><li class="">
							<a href="al_list.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Appointment List
							</a>


						</li><?php } ?>
						<?php if ($menu36 == "36") { ?> <li class="">
							<a href="assigntoollist.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Tools
							</a>


						</li><?php } ?>
					<?php if ($menu37 == "37") { ?> <li class="">
							<a href="expiredtoollist.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Expired Tools
							</a>


						</li><?php } ?>
					<?php if ($menu38 == "38") { ?> <li class="">
							<a href="pendingtoollist.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Pending Tools
							</a>


						</li><?php } ?>
						<?php if ($menu35 == "35") { ?> <li class="">
							<a href="resign_emp_list.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Resigned Employees
							</a>


						</li><?php } ?>

					<?php if ($menu32 == "32") { ?><li class="">
							<a href="reli_list.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Relieving List
							</a>

						</li><?php } ?>




					<?php if ($menu33 == "33") { ?><li class="">
							<a href="noc_list.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								NOC
							</a>


						</li><?php } ?>
					
					<?php if ($menu39 == "39") { ?> <li class="">
							<a href="#">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Store
							</a>


						</li><?php } ?>
					<?php if ($menu310 == "310") { ?> <li class="">
							<a href="addtool.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tools
							</a>


						</li><?php } ?>
					<?php if ($menu311 == "311") { ?> <li class="">
							<a href="ptoollist.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tool Purchase
							</a>


						</li><?php } ?>
					<?php if ($menu312 == "312") { ?> <li class="">
							<a href="assets_xl.php?state=AP">
								<i class="menu-icon fa fa-caret-right"></i>
								Total Assets Report
							</a>


						</li><?php } ?>

				</ul>
			</li>
		<?php } ?>


		<?php if ($menu4 == "4") { ?> <li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text">
					Telangana
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
				<?php if ($menu44 == "44") { ?> <li class="">
							<a href="employeelist.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Employee
							</a>


						</li><?php } ?>
					<?php if ($menu41 == "41") { ?><li class="">
							<a href="al_list.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Appointment List
							</a>


						</li><?php } ?>
						<?php if ($menu46 == "46") { ?> <li class="">
							<a href="assigntoollist.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Tools
							</a>


						</li><?php } ?>
					<?php if ($menu47 == "47") { ?> <li class="">
							<a href="expiredtoollist.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Expired Tools
							</a>


						</li><?php } ?>
					<?php if ($menu48 == "48") { ?> <li class="">
							<a href="pendingtoollist.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Pending Tools
							</a>


						</li><?php } ?>
						<?php if ($menu45 == "45") { ?> <li class="">
							<a href="resign_emp_list.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Resigned Employees
							</a>


						</li><?php } ?>
					<?php if ($menu42 == "42") { ?><li class="">
							<a href="reli_list.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Relieving List
							</a>

						</li><?php } ?>




					<?php if ($menu43 == "43") { ?><li class="">
							<a href="noc_list.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								NOC
							</a>


						</li><?php } ?>
			
					<?php if ($menu49 == "49") { ?> <li class="">
							<a href="#">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Store
							</a>


						</li><?php } ?>
					<?php if ($menu410 == "410") { ?> <li class="">
							<a href="addtool.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tools
							</a>


						</li><?php } ?>
					<?php if ($menu411 == "411") { ?> <li class="">
							<a href="ptoollist.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tool Purchase
							</a>


						</li><?php } ?>
					<?php if ($menu412 == "412") { ?> <li class="">
							<a href="assets_xl.php?state=TS">
								<i class="menu-icon fa fa-caret-right"></i>
								Total Assets Report
							</a>


						</li><?php } ?>

				</ul>
			</li>
		<?php } ?>



		<?php if ($menu5 == "5") { ?> <li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text">
					Kerala
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">

				<?php if ($menu54 == "54") { ?> <li class="">
							<a href="employeelist.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Employee
							</a>


						</li><?php } ?>
					<?php if ($menu51 == "51") { ?><li class="">
							<a href="al_list.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Appointment List
							</a>


						</li><?php } ?>
						<?php if ($menu56 == "56") { ?> <li class="">
							<a href="assigntoollist.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Tools
							</a>


						</li><?php } ?>
					<?php if ($menu57 == "57") { ?> <li class="">
							<a href="expiredtoollist.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Expired Tools
							</a>


						</li><?php } ?>
					<?php if ($menu58 == "58") { ?> <li class="">
							<a href="pendingtoollist.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Pending Tools
							</a>
						</li><?php } ?>
						<?php if ($menu55 == "55") { ?> <li class="">
							<a href="resign_emp_list.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Resigned Employees
							</a>


						</li><?php } ?>
					<?php if ($menu52 == "52") { ?><li class="">
							<a href="reli_list.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Relieving List
							</a>

						</li><?php } ?>




					<?php if ($menu53 == "53") { ?><li class="">
							<a href="noc_list.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								NOC
							</a>

					</li><?php } ?>
					
					<?php if ($menu59 == "59") { ?> <li class="">
							<a href="#">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Store
							</a>


						</li><?php } ?>
					<?php if ($menu510 == "510") { ?> <li class="">
							<a href="addtool.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tools
							</a>


						</li><?php } ?>
					<?php if ($menu511 == "511") { ?> <li class="">
							<a href="ptoollist.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tool Purchase
							</a>


						</li><?php } ?>
					<?php if ($menu512 == "512") { ?> <li class="">
							<a href="assets_xl.php?state=KL">
								<i class="menu-icon fa fa-caret-right"></i>
								Total Assets Report
							</a>


						</li><?php } ?>

				</ul>
			</li>
		<?php } ?>



		<?php if ($menu6 == "6") { ?> <li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text">
					Tamil Nadu
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
				<?php if ($menu64 == "64") { ?> <li class="">
							<a href="employeelist.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Employee
							</a>

					</li><?php } ?>
					<?php if ($menu61 == "61") { ?><li class="">
							<a href="al_list.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Appointment List
							</a>


						</li><?php } ?>
						<?php if ($menu66 == "66") { ?> <li class="">
							<a href="assigntoollist.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Tools
							</a>


						</li><?php } ?>
					<?php if ($menu67 == "67") { ?> <li class="">
							<a href="expiredtoollist.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Expired Tools
							</a>


						</li><?php } ?>
					<?php if ($menu68 == "68") { ?> <li class="">
							<a href="pendingtoollist.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Pending Tools
							</a>


						</li><?php } ?>
						<?php if ($menu65 == "65") { ?> <li class="">
							<a href="resign_emp_list.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Resigned Employees
							</a>


						</li><?php } ?>
					<?php if ($menu62 == "62") { ?><li class="">
							<a href="reli_list.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Relieving List
							</a>

						</li><?php } ?>




					<?php if ($menu63 == "63") { ?><li class="">
							<a href="noc_list.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								NOC
							</a>


						</li><?php } ?>



					
					
					
					<?php if ($menu69 == "69") { ?> <li class="">
							<a href="#">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Store
							</a>


						</li><?php } ?>
					<?php if ($menu610 == "610") { ?> <li class="">
							<a href="addtool.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tools
							</a>


						</li><?php } ?>
					<?php if ($menu611 == "611") { ?> <li class="">
							<a href="ptoollist.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tool Purchase
							</a>


						</li><?php } ?>
					<?php if ($menu612 == "612") { ?> <li class="">
							<a href="assets_xl.php?state=TN">
								<i class="menu-icon fa fa-caret-right"></i>
								Total Assets Report
							</a>


						</li><?php } ?>

				</ul>
			</li>
		<?php } ?>


		<?php if ($menu7 == "7") { ?> <li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text">
					Karnataka
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
				<?php if ($menu74 == "74") { ?> <li class="">
							<a href="employeelist.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Employee
							</a>


						</li><?php } ?>
					<?php if ($menu71 == "71") { ?><li class="">
							<a href="al_list.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Appointment List
							</a>


						</li><?php } ?>

						<?php if ($menu76 == "76") { ?> <li class="">
							<a href="assigntoollist.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Tools
							</a>


						</li><?php } ?>
					<?php if ($menu77 == "77") { ?> <li class="">
							<a href="expiredtoollist.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Expired Tools
							</a>


						</li><?php } ?>
					<?php if ($menu78 == "78") { ?> <li class="">
							<a href="pendingtoollist.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Pending Tools
							</a>


						</li><?php } ?>
						<?php if ($menu75 == "75") { ?> <li class="">
							<a href="resign_emp_list.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Resigned Employees
							</a>


						</li><?php } ?>
					<?php if ($menu72 == "72") { ?><li class="">
							<a href="reli_list.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Relieving List
							</a>

						</li><?php } ?>

						

					<?php if ($menu73 == "73") { ?><li class="">
							<a href="noc_list.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								NOC
							</a>


						</li><?php } ?>

				
					
					<?php if ($menu79 == "79") { ?> <li class="">
							<a href="#">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Store
							</a>


						</li><?php } ?>
					<?php if ($menu710 == "710") { ?> <li class="">
							<a href="addtool.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tools
							</a>


						</li><?php } ?>
					<?php if ($menu711 == "711") { ?> <li class="">
							<a href="ptoollist.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tool Purchase
							</a>


						</li><?php } ?>
					<?php if ($menu712 == "712") { ?> <li class="">
							<a href="assets_xl.php?state=KN">
								<i class="menu-icon fa fa-caret-right"></i>
								Total Assets Report
							</a>


						</li><?php } ?>

				</ul>
			</li>
		<?php } ?>


		<?php if ($menu8 == "8") { ?> <li class="">
				<a href="#" class="dropdown-toggle">
					<i class="menu-icon fa fa-users"></i>
					<span class="menu-text">
					Odisha
					</span>

					<b class="arrow fa fa-angle-down"></b>
				</a>

				<b class="arrow"></b>

				<ul class="submenu">
				<?php if ($menu84 == "84") { ?> <li class="">
							<a href="employeelist.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Employee
							</a>


						</li><?php } ?>
					<?php if ($menu81 == "81") { ?><li class="">
							<a href="al_list.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Appointment List
							</a>


						</li><?php } ?>

						<?php if ($menu86 == "86") { ?> <li class="">
							<a href="assigntoollist.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Tools
							</a>


						</li><?php } ?>
					<?php if ($menu87 == "87") { ?> <li class="">
							<a href="expiredtoollist.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Expired Tools
							</a>


						</li><?php } ?>
					<?php if ($menu88 == "88") { ?> <li class="">
							<a href="pendingtoollist.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Pending Tools
							</a>


						</li><?php } ?>
						<?php if ($menu85 == "85") { ?> <li class="">
							<a href="resign_emp_list.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Resigned Employees
							</a>


						</li><?php } ?>
					<?php if ($menu82 == "82") { ?><li class="">
							<a href="reli_list.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Relieving List
							</a>

						</li><?php } ?>

					<?php if ($menu83 == "83") { ?><li class="">
							<a href="noc_list.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								NOC
							</a>


						</li><?php } ?>

					
					<?php if ($menu89 == "89") { ?> <li class="">
							<a href="#">
								<i class="menu-icon fa fa-caret-right"></i>
								Assign Store
							</a>


						</li><?php } ?>
					<?php if ($menu810 == "810") { ?> <li class="">
							<a href="addtool.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tools
							</a>


						</li><?php } ?>
					<?php if ($menu811 == "811") { ?> <li class="">
							<a href="ptoollist.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Add Tool Purchase
							</a>


						</li><?php } ?>
					<?php if ($menu812 == "812") { ?> <li class="">
							<a href="assets_xl.php?state=OD">
								<i class="menu-icon fa fa-caret-right"></i>
								Total Assets Report
							</a>


						</li><?php } ?>

				</ul>
			</li>
		<?php } ?>


		<?php if ($menu16 == "16") { ?> <li class="">
				<a href="usermanagement.php">
					<i class="menu-icon fa fa-user"></i>
					<span class="menu-text">
						User Management
					</span>
				</a>
			</li>
		<?php } ?>
	</ul>
<?php
}
?>