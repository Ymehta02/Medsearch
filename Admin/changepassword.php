<?php 
$obj=new mysqli("localhost","root","","medical");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}

$id = $_SESSION["userid"];
$w =$obj->query("select * from admin where id='$id'");
$result=$w->fetch_object();

if (isset($_POST['submit']))
{
	$op=$_POST['opassword'];
	$np=$_POST['npassword'];
	$cp=$_POST['cpassword'];

	if ($np==$cp) 
	{
		$e = $obj->query("update admin set password='$np' where id='$id'");
if ($e)
     {
    	header('location:index.php');
    }
    else
    {
    	echo "Error";
    }
	}
	

}

?>




<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Express Shopping</title>

	<link rel="canonical" href="pages-settings.html" />
	<link rel="shortcut icon" href="img/favicon.ico">

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

	<!-- Choose your prefered color scheme -->
	<link href="css/light.css" rel="stylesheet">
	<!-- <link href="css/dark.css" rel="stylesheet"> -->

	<!-- BEGIN SETTINGS -->
	<!-- Remove this after purchasing -->
	<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
	<script src="js/settings.js"></script>
	<!-- END SETTINGS -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2120269,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script><script async src="https://www.googletagmanager.com/gtag/js?id=G-Q3ZYEKLQ68"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q3ZYEKLQ68');
</script></head>
<!--
  HOW TO USE: 
  data-theme: default (default), dark, light
  data-layout: fluid (default), boxed
  data-sidebar-position: left (default), right
  data-sidebar-behavior: sticky (default), fixed, compact
-->

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
	<div class="wrapper">
		<?php include'common/sidebar.php';?>
		<div class="main">
			<?php include'common/header.php';?>
			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Settings</h1>
                                 <div class="card">
										<div class="card-body">
											<h5 class="card-title">Password</h5>

											<form method="post">
												<div class="mb-3">
													<label for="inputPasswordCurrent" class="form-label">Current password</label>
		                                            <input type="password" class="form-control"  id="opassword" name="opassword" required value="<?php echo $result->password;?>">
													
												</div>
												<div class="mb-3">
													<label for="inputPasswordNew" class="form-label">New password</label>
				                                    <input type="password" class="form-control"  id="npassword" name="npassword" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$ req" required> 
												</div>
												<div class="mb-3">
													<label for="inputPasswordNew2" class="form-label">Verify password</label>
				                                    <input type="password" class="form-control"  id="cpassword" name="cpassword"  pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
												</div>
												<input type="submit" name="submit" id="submit" value="Change Password" class="btn btn-lg btn-primary">
											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<?php include'common/footer.php';?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/pages-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
</html>