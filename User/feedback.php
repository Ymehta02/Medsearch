<?php
 session_start();
$obj = new mysqli("localhost","root","","medical");

if (isset($_POST['submit'])) 
{
    $name =$_POST['name'];
    $message =$_POST['message'];
    $date=$_POST['date'];
     $h= $_GET['hid'];

   $e =$obj->query("insert into feedback(customerid,message,date,shop_id) values ('$name','$message','$date','$h')");
    if ($e) 
    {
     echo "<script>alert('insert sucess...')</script>";
    }
    else
    {
        echo "<script>alert('Error In Insert ...')</script>";
    }
}

?>





<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MedSearch</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon"  href="img/aa.jpeg">
		
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
        <!--Contact Us Area Start-->
        <div class="contact-us-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3">
                        <div class="sidebar-content">
                            <div class="section-title no-margin"><h2>Inquries</h2></div>
                            <div class="popular-tags">
                               
                              
                            </div>
                        </div>
                        <div class="sidebar-content">
                            <div class="banner-box">
                                <a href="#"><img src="img/banner/q11.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="sidebar-content">
                            
                        </div>
                    </div>
					<div class="col-xl-9 col-lg-9">
						<div class="contact-us-area">
                           
							<!-- contact us form start -->
							<div class="contact-us-form">
								<div class="page-title">
                                    <h1>Any Inquries</h1>
                                </div>
								<div class="contact-form">
									<span class="legend">Write Inquries</span>
									<form  method="post">
										<div class="form-top">
											<div class="form-group col-sm-6 col-md-6 col-lg-6">
												<label>Name<span class="required" title="required">*</span></label>
												<input name="name" id="name" type="text" class="form-control" required>
											</div>
																					
										
											<div class="form-group col-sm-12 col-md-12 col-lg-12">
												<label>Message<span class="required" title="required">*</span></label>
												<textarea name="message" id="message" class="yourmessage" required></textarea>
											</div>	
                                            <div class="form-group col-sm-12 col-md-12 col-lg-12">
                                                <label>Date<span class="required" title="required">*</span></label>
                                                <input type="date" name="date" id="date" required>
                                            </div>

										</div>
										<div class="submit-form form-group col-sm-12 submit-review">
											<p class="floatright"><sup>*</sup> Required Fields</p>
                                            <div class="clearfix"></div>
                                       <button class="button floatright" id="submit" name="submit" type="submit"><span>Submit</span></button>

										</div>
									</form>
								</div>
							</div>
							<!-- contact us form end -->
						</div>					
					</div>
                </div>
            </div>
        </div>
        <!--End of Contact Us ARea-->     
        <!--Brand Area Strat-->
         <?php include'common/footer.php';?>
        <!--End of Footer Widget Area-->
        <!--Footer Area Start-->
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
        
        <!-- Google Map js
		============================================ --> 		
				
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuU_0_uLMnFM-2oWod_fzC0atPZj7dHlU"></script>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(23.81033, 90.41252)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });

			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>		
        
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:43 GMT -->
</html>
