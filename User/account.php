<?php session_start();?><!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:10 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Account || MedSearch</title>
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
        <?php include'common/header.php';?>
        <!--End of Header Area-->
        <!-- Account Area start -->
        <div class="account-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="account-link-list">
                            <div class="page-title">
                                <h1>My Account</h1>
                            </div>
                            <p class="account-info">Welcome to your account. Here you can manage all of your personal information and orders.</p>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h4 class="card-title">
                                            <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">                                         
                                                <i class="fa fa-list-ol"></i><span>Order history and details</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="card-title">Here are the orders you've placed since your account was created.</p>
                                            <div id="orders-history">
			                                    <p class="warning">You have not placed any orders.</p>
	                                       </div>                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h4 class="card-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                <i class="fa fa-file-o"></i><span>My credit slips</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="card-title">Credit slips you have received after canceled orders. </p>
                                            <div id="order-history">
			                                    <p class="warning">You have not received any credit slips.</p>
	                                        </div>                                    
                                        </div>
                                    </div>
                                </div>
                                
                               
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h4 class="card-title">
                                            <a class="collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                <i class="fa fa-heart"></i><span>My wishlists</span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="wishlist-container">
                                                        <h3>New Wishlist</h3>
                                                        <div class="row form-group required">
                                                            <label class="col-lg-12 col-md-12 control-label">Name</label>
                                                            <div class="col-lg-12 col-md-12">
                                                                <input type="text" class="form-control" id="wishlist-name" placeholder="" value="" name="name">
                                                            </div>
                                                        </div>   
                                                        <div class="buttons-set">
                                                            <button class="button" type="button"><span>Save </span></button>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>    
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="button-back">
                            <a href="account.php" class="read-button floatleft"><span>Back to your Account</span></a>
                        </div>
                        <div class="button-home">
                            <a href="index.php" class="read-button floatleft"><span>Home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Account Area-->	
        <!--Brand Area Strat-->
      <?php include'common/footer.php';?>
        <!--End of Brand Area-->
        <!--Service Area Start-->
    
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

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:10 GMT -->
</html>