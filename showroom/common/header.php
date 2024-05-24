<?php

$obj=new mysqli("localhost","root","","medical");


$uid = $_SESSION["userid"];
$admin =$obj->query("select * from showroom where shop_id='$uid'");

$raw =$admin->fetch_object();
?>





<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>


				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>


							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/p.png" class="avatar img-fluid rounded-circle me-1" alt="Chris Wood" /> <span class="text-dark"><?php echo "$raw->name"; ?></span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="pages-profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="changepassword.php"><i class="align-middle me-1" data-feather="lock"></i>Change Password</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="pages-settings.php"><i class="align-middle me-1" data-feather="upload-cloud"></i>Update Info</a>
								
								<a class="dropdown-item" href="logout.php"><i class="align-middle me-1" data-feather="log-out"></i>Sign out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>