<?php
$obj=new mysqli("localhost","root","","medical");
session_start();
if (!isset($_SESSION['userid']))
 {
	header('location:index.php');
}
$id = $_SESSION["userid"];

$o_id=$_GET["odid"];

$r =$obj->query("select * from admin where id='$id'");
$result =$r->fetch_object();

$bill =$obj->query("select * from billingaddress where customer_id='$o_id'");
$bill_address =$bill->fetch_object();
$oid=$bill_address->order_id;
$ship =$obj->query("select * from shipping_address where customer_id='$o_id'");
$ship_address =$ship->fetch_object();

$order =$obj->query("select * from order_items where order_id='$oid'");

?>





<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from appstack.bootlab.io/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
	<meta name="author" content="Bootlab">

	<title>Express Shopping</title>

	<link rel="canonical" href="pages-profile.html" />
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
				<form method="post">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Customer Order</h1>

					<div class="row">
						<div class="col-md-12 ">
							<div class="card mb-3">
								
								
								<hr class="my-0" />
								   <div class="card-body">
									<h5 class="h6 card-title">Billing Information</h5>
									<div class="row">
										<div class="col-6">
											<ul class="list-unstyled mb-0">

											
											
												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> First Name: &nbsp<?php echo $bill_address->fname;?></li>
												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Last Name: &nbsp<?php echo $bill_address->lname;?></li>
												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Email: &nbsp<?php echo $bill_address->email;?></li>
												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Contact: &nbsp<?php echo $bill_address->contact;?></li>
											</ul>
											</div>
											<div class="col-6">
												<ul class="list-unstyled mb-0">
												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Address: &nbsp<?php echo $bill_address->address;?></li>
												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> City: &nbsp<?php echo $bill_address->city;?></li>
												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> State: &nbsp<?php echo $bill_address->state;?></li>
												<li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Country: &nbsp<?php echo $bill_address->country;?></li>
											</ul>
											</div>
										</ul>
									</div>
								</div>

								<hr class="my-0" />
								<div class="card-body">
									<h5 class="h6 card-title">Shipping Information</h5>
										<div class="row">
										<div class="col-6">
						            <ul class="list-unstyled mb-0">
			                               <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> First Name: &nbsp<?php echo $ship_address->fname;?></li>
			                               <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Last Name: &nbsp<?php echo $ship_address->lname;?></li>
			                               <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Email: &nbsp<?php echo $ship_address->email;?></li>
			                               <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Address: &nbsp<?php echo $ship_address->address;?></li>
				                    </ul>
											</div>
											<div class="col-6">
	                                <ul class="list-unstyled mb-0">
			                             <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> City: &nbsp<?php echo $ship_address->city;?></li>
			                             <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> State: &nbsp<?php echo $ship_address->state;?></li>
			                             <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Country: &nbsp<?php echo $ship_address->country;?></li>
						            </ul>
								       </div>
								</ul>
									</div>
								<hr class="my-0" />
								   <div class="card-body">
									<h5 class="h6 card-title">Order Item Information</h5>
									<div class="row">
										<div class="col-6">
					                 <table border="0" width="1000" hight="500" >
                                                 <th> <tr>
                                                  		<td>Order Item Id</td>
                                                  		<td>Product Name</td>
                                                  		<td>Product Image</td>
                                                  		<td>Quantity</td>
                                                  		<td>Price</td>
                                                  	</tr></th>
                                                  		<?php
                                                  		while ($o=$order->fetch_object()) 
                                                  		{
                                                  		  ?>
                                                  		     <tr>
                                                  		           <td><?php echo $o->order_items_id;?></td>
                                                  		           <td><?php echo $o->pname;?></td>
                                                  		           <td><img src="../Admin/img/Product/<?php echo "$o->image" ?>"  height="120" width="150"></td>
                                                  		           <td><?php echo $o->quantity;?></td>
                                                  		           <td><?php echo $o->price;?></td>
                                                  	          </tr>
                                                  	 <?php
                                                  		}

                                                  		?>
                                                  	</table>
											</div>
											
										</ul>
									</div>
								</div>
								
							</div>
						</div>

					</form>	
			</main>
<?php include'common/footer.php';?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>


<!-- Mirrored from appstack.bootlab.io/pages-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Aug 2021 05:07:26 GMT -->
</html>