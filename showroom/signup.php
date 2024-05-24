 <?php
$obj  =new mysqli("localhost","root","","medical");

$r = $obj->query("select * from state");
$c = $obj->query("select * from city");
$a = $obj->query("select * from area");




if (isset($_POST['submit']))
 {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$area=$_POST['area'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$owner=$_POST['owner'];
	$password=$_POST['password'];
	$cpassword=$_POST['cpassword']; 
    $date  = date("Y-m-d");
 
	 $filename = $_FILES["f"]["name"];
	$f=explode(".", $filename);
	$exe=end($f);

    $tmp = $_FILES["f"]["tmp_name"];

    $path ="img/Product/$filename";
    if ($exe == 'jpg' || $exe == 'png' || $exe == 'jpeg') 
    {
		    	if($password == $cpassword)
		    	{
			    		

      $eee =$obj->query("insert into showroom(name,email,contact,address,state_id,city_id,area_id,owner_name,image,reg_date,password) values ('$name','$email','$contact','$address','$state','$city','$area','$owner','$filename','$date','$password')");
             move_uploaded_file($tmp, $path);
			        	echo "<script>alert(' sucess') </script>";
			    	if ($eee)
			    	 {
			    		echo "<script>alert('data insert') </script>";
			    		header('location:index.php');
			    	}
			        else
			        {
			    	echo "<script>alert('upload error') </script>";
	                 }	
    	       }
    	       else
    	       {
    	       	  echo "<script>alert('Password Does Not Match')</script>";
    	       }
      
    	
    	
    }
   
}



?>





 <!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Sign Up | Express Shopping</title>

	<link rel="canonical" href="pages-sign-up.html" />
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
	<div class="main d-flex justify-content-center w-100">
		<main class="content d-flex p-0">
			<div class="container d-flex flex-column">
				<div class="row h-100">
					<div class="col-sm-10 col-md-8 col-lg-8 mx-auto d-table h-100">
						<div class="d-table-cell align-middle">

							<div class="text-center mt-4">
								<h1 class="h2">Get started</h1>
								<p class="lead">
									Start creating the best possible user experience for you customers.
								</p>
							</div>

							<div class="card">
								<div class="card-body">
									<div class="m-sm-4 ">
										<form method="post" enctype="multipart/form-data">
											<div class="mb-3">
												<label class="form-label">Store Name</label>
												<input class="form-control form-control-lg" type="text" id="name" name="name" placeholder="Enter your Store name" />
											</div>
											<div class="mb-3">
												<label class="form-label">Email</label>
												<input class="form-control form-control-lg" type="email" id="email" name="email" placeholder="Enter your email address" />
											</div>
											<div class="mb-3">
												<label class="form-label">Contact</label>
												<input class="form-control form-control-lg" type="text" id="contact" name="contact" pattern="^\d{10}$" placeholder="Enter your contact" />
											</div>
											<div class="mb-3">
												<label class="form-label">Address</label>
												<input class="form-control form-control-lg" type="text" id="address" name="address" placeholder="Enter your address" />
											</div>
											<div class="row mb-3">
	                                              <div class="col-6">
	                                             	<label class="form-label">Area</label>
											  		<select id="area" name="area" class="form-control form-control-lg">
														<option value=""> - - - Select Area - - - </option>
                                                    <?php 
	                                                    while($resc=$a->fetch_object()){
	                                               ?>

	                                              <option value="<?php echo $resc->a_id ;?>"><?php echo $resc->area_name ;?></option>
	                                              <?php
                                                   }
	                                                 ?>

													</select>
												  </div>
												  <div class="col-6">
												  	<label class="form-label">City</label>
											  		<select id="city" name="city" class="form-control form-control-lg">
														<option value=""> - - - Select City - - - </option>
                                                     <?php 
	                                                    while($resc=$c->fetch_object()){
	                                               ?>

	                                              <option value="<?php echo $resc->c_id ;?>"><?php echo $resc->city ;?></option>
	                                              <?php
                                                   }
	                                                 ?>

													</select>
												  </div>
											<div class="mb-3">
														<label class="form-label">State</label>
														<select id="state" name="state" class="form-control form-control-lg">
														<option value=""> - - - Select State - - - </option>
                                                  <?php 
	                                                    while($res=$r->fetch_object()){
	                                               ?>

	                                              <option value="<?php echo $res->s_id ;?>"><?php echo $res->s_name ;?></option>
	                                              <?php
                                                   }
	                                                 ?>

													</select>
											</div>
											<div class="mb-3">
												<label class="form-label">Owner Name</label>
												<input class="form-control form-control-lg" type="text" id="owner" name="owner" placeholder="Enter your Owner" />
											</div>
											<div class="mb-3">
												<label class="form-label">Shop Image</label>
												<input class="form-control form-control-lg" type="file" id="f" name="f" placeholder="Enter your Owner" />
											</div>
											<div class="mb-3">
												<label class="form-label">Password</label>
												<input class="form-control form-control-lg" type="password" id="password" name="password" placeholder="Enter your Password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" />
											</div>
											<div class="mb-3">
												<label class="form-label">Confirm Password</label>
												<input class="form-control form-control-lg" type="password" id="cpassword" name="cpassword" placeholder="Enter Confirm password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" />
											</div>
											<div class="text-center mt-3">
												
												<button type="submit" id="submit" name="submit" class="btn btn-lg btn-primary">Sign up</button>
											</div>
										</form>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</main>
	</div>

	<script src="js/app.js"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/pages-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
</html>