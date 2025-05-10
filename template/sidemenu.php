<?php
if ($name == "admin") {
?>
	<ul class="nav nav-list">
		<li class="">
			<a href="dashboard.php">
				<i class="menu-icon fa fa-tachometer"></i>
				<span class="menu-text"> Dashboard </span>
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-cog"></i>
				<span class="menu-text">
					Settings
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
				<li class="">
					<a href="organization.php">
						<i class="menu-icon fa fa-caret-right"></i>
						Update Organization
					</a>


				</li>
				<li class="">
					<a href="emplog.php">
						<i class="menu-icon fa fa-caret-right"></i>
						Mobile Link
					</a>


				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Andra Pradesh
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>

			<b class="arrow"></b>

			<ul class="submenu">
			<li class="">
					<a href="employeelist.php?state=AP">
						<i class="menu-icon fa fa-caret-right"></i>
						Add Employee
					</a>


				</li>

                <li class="">
					<a href="al_list.php?state=AP">
						<i class="menu-icon fa fa-caret-right"></i>
						Appointment List
					</a>


				</li>
				<li class="">
					<a href="dp_list.php?state=AP">
						<i class="menu-icon fa fa-caret-right"></i>
						Deployment List
					</a>


				</li>
			</ul>
		</li>

		<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Karnataka
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
			<li class="">
					<a href="employeelist.php?state=KN">
						<i class="menu-icon fa fa-caret-right"></i>
						Add Employee
					</a>
				</li>
                <li class="">
					<a href="al_list.php?state=KN">
						<i class="menu-icon fa fa-caret-right"></i>
						Appointment List
					</a>
				</li>
				<li class="">
					<a href="dp_list.php?state=KN">
						<i class="menu-icon fa fa-caret-right"></i>
						Deployment List
					</a>
				</li>
</ul>
</li>
				

				<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Kerala
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
			<li class="">
					<a href="employeelist.php?state=KL">
						<i class="menu-icon fa fa-caret-right"></i>
						Add Employee
					</a>
				</li>
                <li class="">
					<a href="al_list.php?state=KL">
						<i class="menu-icon fa fa-caret-right"></i>
						Appointment List
					</a>
				</li>
				<li class="">
					<a href="dp_list.php?state=KL">
						<i class="menu-icon fa fa-caret-right"></i>
						Deployment List
					</a>
				</li>
				</ul>
            </li>

				<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Odissa
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
			<li class="">
					<a href="employeelist.php?state=OD">
						<i class="menu-icon fa fa-caret-right"></i>
						Add Employee
					</a>
				</li>
                <li class="">
					<a href="al_list.php?state=OD">
						<i class="menu-icon fa fa-caret-right"></i>
						Appointment List
					</a>
				</li>
				<li class="">
					<a href="dp_list.php?state=KN">
						<i class="menu-icon fa fa-caret-right"></i>
						Deployment List
					</a>
				</li>
</ul>
</li>

				<li class="">
			<a href="#" class="dropdown-toggle">
				<i class="menu-icon fa fa-users"></i>
				<span class="menu-text">
					Telangana
				</span>

				<b class="arrow fa fa-angle-down"></b>
			</a>
			<b class="arrow"></b>
			<ul class="submenu">
			<li class="">
					<a href="employeelist.php?state=TS">
						<i class="menu-icon fa fa-caret-right"></i>
						Add Employee
					</a>
				</li>
                <li class="">
					<a href="al_list.php?state=TS">
						<i class="menu-icon fa fa-caret-right"></i>
						Appointment List
					</a>
				</li>
				<li class="">
					<a href="dp_list.php?state=TS">
						<i class="menu-icon fa fa-caret-right"></i>
						Deployment List
					</a>
				</li>
	        </ul>
</li>
<?php } else {

	include('sidemenu1.php');
} ?>