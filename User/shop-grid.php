<?php
 session_start();
include 'common/connection.php';
$r =$obj->query("select * from product");
?>


<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:34 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MedSearch</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/aa.jpeg">
		
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
        <?php include'common/header.php'?>
        <!--End of Header Area-->
        <!--Breadcrumb Start-->
        <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="index.php">Home</a><span>/ </span></li>
                                <li><strong>Shop Grid</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb-->
        <!--Banner Imgae Area Start-->
        <div class="banner-image-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="category-image"><img alt="women" src="img/slider/azz.jpg"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Banner Imgae Area-->
        <!--Shop Main Area Start-->
        <div class="shop-main-area">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-12 order-lg-2  order-1">
                        <div class="shop-item-filter">
                            <div class="shop-tab clearfix">
                                <!-- Nav tabs -->
                                <div class="tab-menu">
                                    <ul class="nav nav-tabs navbar-left" role="tablist">
                                    <li><a href="#grid" class="active grid-view" aria-controls="grid" role="tab" data-toggle="tab">Grid</a></li>
                                   
                                </ul>
                                </div>
                                
                               
                            </div>
                        </div>
                        <div class="clearfix"></div> 
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane show active" id="grid">
                                <div class="container">

                                <div class="row">


                                           <?php
                                            while($result=$r->fetch_object())
                                     {
                                              ?>
                                     <div class="col-lg-3 col-md-3 col-sm-3">
                                        <div class="single-product-item">
                                            <div class="sale-product-label"><span>sale</span></div>
                                            <div class="single-product clearfix">
                                                <a href="product-details.php?delid=<?php echo "$result->id"?>">
                                                    <span class="product-image">
                                             <img src="../showroom/img/Product/<?php echo "$result->img"  ?>" >
                                                    </span>
                                                    
                                                </a>
                                                
                                            </div>
                                            <h2 class="single-product-name"><a href="product-details.php?delid=<?php echo "$result->id"?>"><?php echo $result->pname ;?></a></h2>
                                            <div class="price-box">
                                               
                                                <p class="special-price">
                                                    <span class="price">    
                                                       ₹<?php echo $result->price;?></span>
                                                </p>                                            
                                            </div>
                                    </div>
                                    </div>
                                    <?php }
                                    ?>

                            </div>
                            </div>
                              </div>   
                        <div class="row">
                           
                            
                        
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--End of Shop Main Area-->
        <!--Brand Area Strat-->
       <?php include 'common/footer.php';?>
        <!--End of Footer Area-->
        <!--Quickview Product Start -->
   
        <!--End of Quickview Product-->	
        
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

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:36 GMT -->
</html>