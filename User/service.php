
 
<?php
session_start();
error_reporting(0);
include 'common/connection.php';
if (!isset($_SESSION['userid']))
 {
    header('location:login.php');
     echo "<script>alert('please login')</script>";
} 
$cid= $_SESSION['userid'];
$state1 = $obj->query("select * from state");



if (isset($_POST['submit']))
 {
  $n = $_POST['medname'];


  $ass = $obj->query("select * from product where pname='$n'");
  
  



}


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
         <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <!--Header Start-->
        <?php include 'common/header.php';?>
        <!--End of Header Area-->
        <!--About Area Start-->
        <br><br>
       <section class="key-features kf-2">
        <div class="container">
            <div class="inner-title">

                      <form class="fromcontrol" method="post">
                <div class="row form-group">

                    <div class="col-8">
                        <input class="form-control" type="text" id="medname" name="medname" placeholder="Enter Medicin Name">
                    </div>
                  
                   <div class="col-4">
                             <button class="btn btn-danger btn-sm" id="submit" name="submit" style="width: 120px;height: 40px">Search</button>
                            
                        </div><br>
                        <br><br>
                          
                  <!--  <div class="row">
                      <img src="assets/images/aa.jpg" alt="" width="max" height="400">
                   </div> -->
               
             

            <div class="row">

               <?php while($pr = $ass->fetch_object())
              {
                
                $d = "$pr->shop_id";
                $con = new mysqli("localhost","root","","medical");
                $x= $con->query("select * from showroom where shop_id='$d'");
                 $as = $x->fetch_object();
               
                ?>

              <form method="post">
             


                 <div class="col-md-12 col-sm-4">
                    <div class="single-key">
                      <a href="medicaldetails.php?hoid=<?php echo "$as->shop_id"?>">
                        <img src="../showroom/img/Product/<?php echo "$as->image" ?>"  height="220" width="300">
                      </a>
                      <a href="medicaldetails.php?hoid=<?php echo "$as->shop_id"?>">
                        <h2><?php echo $as->name; ?></h2></a>
                        <a href="medicaldetails.php?hoid=<?php echo "$as->shop_id"?>">
                        <p><?php echo $as->address; ?></p></a>
                        <a href="medicaldetails.php?hoid=<?php echo "$as->shop_id"?>">
                        <p><?php echo $as->contact; ?></p></a>
                    </div>
                </div>


                </form>
                     <?php
                    }?>
            </div>

           
                






        </div>

    </section>
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
