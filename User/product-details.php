<?php
session_start();
error_reporting(0);
include 'common/connection.php';
if (!isset($_GET['delid']))
 {
    header('location:index.php'); 
}
$cid=$_SESSION['userid'];  // logged in user id
$product_id = $_GET['delid'];
$product_result =$obj->query("select * from product where id='$product_id'");
$product_details = $product_result->fetch_object();


//Add to cart Functionality
if (isset($_POST['submit']))
{
    $product_name    = $product_details->pname;
    $product_price   = $product_details->price;
    $product_qty     = $_POST['qty'];
    $product_photo   = $product_details->img;

    $cart_result = $obj->query("select * from cart where customer_id='$cid' and product_id='$product_id'");
    $cart_row_count = $cart_result->num_rows;

    if($cart_row_count == 1)
    {
        echo "<script>alert('Product Already Exist in Wishlist'); document.location='cart.php';</script>";
    }
    else
    {
        $r =$obj->query("insert into cart(product_id,price,qty,pimg,customer_id) values ('$product_id','$product_price','$product_qty','$product_photo','$cid')");
        if ($r) 
        {
             echo "<script>alert('Added to Wishlist')</script>";
        }
        else
        {
            header('location:shop-grid.php');
        }
    }
}
if (isset($_POST['wishlist']))
 {
    $cart_results = $obj->query("select * from wishlist where customer_id='$cid' and product_id='$product_id'");
    $cart_row_counts = $cart_results->num_rows;

    if($cart_row_counts == 1)
    {
        echo "<script>alert('Product Already Exist in Wishlist'); document.location='wishlist.php';</script>";
    }
    else
    {

        $r=$obj->query("insert into wishlist(customer_id,product_id) values ('$cid','$product_id')");
        if ($r) 
        {
             echo "<script>alert('Added to Wishlist')</script>";
        }
        else
        {
            header('location:shop-grid.php');
        }
    }
   
}
?>

<!doctype html>
<html class="no-js" lang="">
    
<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:40 GMT -->
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
       <?php include 'common/header.php';?>
        <!--End of Header Area-->
        <!--Breadcrumb Start-->
        <div class="breadcrumb-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumbs">
                            <ul>
                                <li class="home"><a href="index.html">Home</a><span>/ </span></li>
                                <li><strong>Product Details</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Breadcrumb-->
        <!--Product Details Area Start-->

    <form method="post">
        <div class="product-deails-area">
            <div class="container">
                <div class="row" >

                    <div class="col-xl-9 col-lg-9">
                        <div class="product-details-content row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="zoomWrapper">
                                    <div id="img-1" class="zoomWrapper single-zoom">
                                        <a href="#">
                                     <img id="zoom1" src="../showroom/img/Product/<?php echo "$product_details->img"  ?>" data-zoom-image="../showroom/img/Product/<?php echo "$product_details->img"  ?>" >
                                    <input type="hidden" name="pphoto" id="pphoto" value="<?php echo $product_details->img; ?>">
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="product-details-conetnt">
                                    <div class="shipping">
                                        <div class="single-service">
                                            <span class="fa fa-truck"></span>
                                            <div class="service-text-container">
                                                <h3>fREE SHIPPING</h3>
                                          <p>One order over ₹99</p>
                                            </div>   
                                        </div>
                                        <div class="single-service">
                                            <span class="fa fa-cube"></span>
                                            <div class="service-text-container">
                                                <h3>UNLIMITED Delivery</h3>
                                                <p>order over ₹999</p>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="product-name">
                                        <h1><?php echo $product_details->pname;?> </h1>
                              
                                    </div>
                                    
                                    <p class="availability">Availability: <span>In stock</span></p>
                                    <div class="price-box">
                                       
                                        <p class="special-price">
                                            <span class="price" >₹ <?php echo $product_details->price;?></span>
                                            
                                        </p> 											
                                    </div>
                                    <div class="details-description">
                                        <p><?php echo $product_details->description;?>
                                        </p>
                                        
                                    </div>
                                  
                                    <div class="add-to-cart-qty">
                                        
                                        <div class="cart-qty-button">
                                           
                                       <input type="hidden" class="input-text qty" value="1" maxlength="12" id="qty" name="qty">
                            
                                       <!--  <button class="button btn-cart" type="submit" id="submit" name="submit"><span>Add to Wishlist</span></button> -->
                                
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="p-details-tab">
                                    <ul role="tablist" class="nav nav-tabs">
                                        <li><a class="active" data-toggle="tab" role="tab" aria-controls="description" href="#description">Product Description</a></li>
                                        
                                        
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="tab-content review product-details">
                                    <div id="description" class="tab-pane show active" role="tabpanel">
                                        <p><?php echo $product_details->description;?> </p>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>

</form>
                        <div class="product-carousel-area section-top-padding">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title"><h2>Upsell Products</h2></div>
                                </div>
                            </div>
                            <div class="row">
                                                                 
                                <div class="upsell-product-details-carousel">
                                            <?php
                                            $con = new mysqli("localhost","root","","medical");
                                            $rr = $con->query("select * from product");
                                while ($res=$rr->fetch_object()) 
                                {
                                ?> 
                                    <div class="col-lg-12">
                                 
                                        <div class="single-product-item">
                                            <div class="single-product clearfix">
                                                <a href="product-details.php?delid=<?php echo "$res->id"?>">
                                                    <span class="product-image">
                                                 <img src="../showroom/img/Product/<?php echo "$res->img"  ?>" >
                                                    </span>
                                                </a>
                                            </div>
                                            <h2 class="single-product-name"><a href="product-details.php?delid=<?php echo "$res->id"?>"><?php echo $res->pname;?></a></h2>
                                            <div class="price-box">
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
                    </div>
                    
                </div>
            </div>
        </div>

   
        <!--End of Product Details Area-->
        <!--Brand Area Strat-->
       <?php include'common/footer.php';?>
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

<!-- Mirrored from demo.hasthemes.com/mozar-preview/mozar/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Mar 2021 01:37:43 GMT -->
</html>