<?php 
session_start();
if (!isset($_SESSION['userid']))
 {
    header('location:index.php');
}
$obj = new mysqli("localhost","root","","medical");
$h= $_GET['hoid'];

$j = $obj->query("select * from showroom where shop_id='$h'");
$result = $j->fetch_object();


$t = $obj->query("select * from offer where shop_id='$h'");






?>


<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MedSearch</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900,700,700italic,300' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/nivo-slider/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/nivo-slider/css/preview.css" type="text/css" media="screen" />
        
		<!-- Fontawsome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
        
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="style.css">
        
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
        
		<!-- modernizr JS
		============================================ -->		
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Header Start-->
        <?php include 'common/header.php';?>
        <!--End of Header Area-->
        <!--About Area Start-->
        <br>
       <div class="about-us">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                           <img src="../showroom/img/Product/<?php echo "$result->image" ?>">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h1 class="text-success">Welcome to  <?php echo $result->name; ?></h1>
                            
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-primary "><b>Address:</b><?php echo $result->address; ?></li>
                              <li class="list-group-item list-group-item-primary "><b>Register Date:</b><?php echo $result->reg_date; ?></li>
                                <li class="list-group-item list-group-item-primary"><b>Email:</b><?php echo $result->email; ?></li>
                                  <li class="list-group-item list-group-item-primary"><b>Contact:</b><?php echo $result->contact; ?></li><br>
                                    <a href="feedback.php?hid=<?php echo "$result->shop_id"?>">
                                 <button class="btn btn-danger btn-sm" id="submit" name="submit" style="width: 120px;height: 40px">Send Inquries</button></a>

                                    </ul>
                                    <br>
                                  </div>

                          <?php
                          while ($offer = $t->fetch_object()) 
                          {
                             ?>
                             <ul>
                             <li class="list-group-item list-group-item-success "><b>Offer Details:</b></li>&nbsp
                                 <li class="list-group-item list-group-item-primary "><b>Start Date:</b><?php echo $offer->tod; ?></li>
                              <li class="list-group-item list-group-item-primary "><b>End Date:</b><?php echo $offer->fromd; ?></li>
                                <li class="list-group-item list-group-item-primary"><b>Offer:</b><?php echo $offer->dets; ?></li>
                            </ul>

                             <?php
                           } 
                          ?>

                                


                    </div>
                    
                </div>
            </div>
             <div class="product-carousel-area section-top-padding">
                            <div class="row">
                                <div class="col-lg-12" style="margin-left: 100px;">
                                    <div class="section-title"><h2>Upsell Products</h2></div>
                                </div>
                            </div>
                            <div class="row">
                                                                 
                                <div class="upsell-product-details-carousel">
                                            <?php
                                            $con = new mysqli("localhost","root","","medical");
                                            $rr = $con->query("select * from product where shop_id='$h'");
                                while ($res=$rr->fetch_object()) 
                                {
                                ?> 
                                    <div class="col-lg-12">
                                 
                                        <div class="single-product-item">
                                            <div class="single-product clearfix">
                                                <a href="product-details.php?delid=<?php echo "$res->id"?>">
                                                    <span class="product-image">
                                                 <img src="../showroom/img/Product/<?php echo "$res->img"  ?>" style="height: 300px; width: 350px; margin-left: 100px;">
                                                    </span>
                                                </a>
                                            </div>
                                            <h2 class="single-product-name" style="margin-left: 100px;"><a href="product-details.php?delid=<?php echo "$res->id"?>"><?php echo $res->pname;?></a></h2>
                                            <div class="price-box" style="margin-left: 100px;">
                                                <p class="special-price"> 
                                                    <span class="price">₹ <?php echo $res->price;?></span>
                                                </p>                                            
                                            </div>
                                        </div>
                                       
                                    </div>
                                     <?php } ?>
                                </div>
                            
                            </div>
                        </div>
        <!--End of ABout ARea-->
        <!--Our Team Start-->
       
        <?php include 'common/footer.php';?>
        <!--End of Footer Area-->
        
		<!-- jquery
		============================================ -->		
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        
		<!-- popper JS
		============================================ -->		
        <script src="js/popper.min.js"></script>
        
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
        
        <!-- nivo slider js
		============================================ -->       
		<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script src="lib/nivo-slider/home.js" type="text/javascript"></script>
		
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
        	
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
        
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
        
		<!-- price-slider JS
		============================================ -->		
        <script src="js/jquery-price-slider.js"></script>	
        
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        
        <!--Countdown js-->
        <script src="js/jquery.countdown.min.js"></script>
        
		<!-- Sticky Menu JS
		============================================ -->		
        <script src="js/jquery.sticky.js"></script>
        
		<!-- Elevatezoom JS
		============================================ -->		
        <script src="js/jquery.elevateZoom-3.0.8.min.js"></script>
        
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:39 GMT -->
</html>
