


<header>
            <div class="header-top">
                <div class="container">
                    <div class="header-container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7">
                                <div class="header-contact">
                                    <span class="email">Email: Info.harry@gmail.com </span> / <span class="phone">Phone: +91 9624412941
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5">
                                <div class="currency-language">
                                 
                                    
                                    <div class="account-menu">
                                        <ul>
                                            <li><a href="#">My Account <i class="fa fa-angle-down"></i></a>
                                                <ul class="account-dropdown">
                                                     <?php  if (!isset($_SESSION['userid']))
                                                    {
                                                        ?>
                                                    <li><a href="login.php">Log In</a></li>
                                                     <?php                                                        
                                                    } ?>
                                                
                                                    <?php  if (isset($_SESSION['userid']))
                                                    {
                                                        ?>
                                                        <!-- <li><a href="cart.php">My Cart</a></li>
                                                    <li><a href="myorder.php">My Order</a></li> -->
                                                   
                                                    
                                                    <li><a href="updateprofile.php">Update Profile</a></li>
                                                    <li><a href="changepassword.php">Change Password</a></li>
                                                    <li><a href="logout.php">Log out</a></li>
                                                        <?php                                                        
                                                    } ?>
                                                
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <div class="header-main">
                <div class="container">
                    <div class="header-content">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="logo">
                                    <a href="index.php"> <img src="img/logo/md.jpg" width="150" height="180" alt="MOZAR"></a>
                                </div>
                            </div>
                           <!--  <div class="col-xl-6 col-lg-6 col-md-8">
                                <div id="search-category">
                                    <form class="search-box" action="#" method="post">
                                       
                                        <input type="search" placeholder="Search here..." id="text-search" name="search">
                                        <button id="btn-search-category" type="submit">
                                            <i class="icon-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div> -->
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <ul class="header-r-cart">
                                    <li><a class="cart" href="service.php">Services</a>
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            <!--Mainmenu Start-->
            <div class="mainmenu-area d-lg-block d-none">
                <div id="sticker"> 
                    <div class="container">
                        <div class="row">   
                            <div class="col-xl-12 col-lg-12 d-xl-block d-lg-block d-none">
                                <div class="mainmenu">
                                    <nav>
                                        <ul id="nav">
                                            <li class="current"><a href="index.php">Home</a>
                                                <li><a href="aboutus.php">About  Us</a></li>
                                                 <li><a href="service.php">Services</a></li>
                                                
                                            </li>
                                            <li><a href="shop-grid.php">Products</a>
                                                <div class="megamenu">
                                                    <div class="megamenu-list clearfix">
                                                        <?php 
                                                         $obj = new mysqli("localhost","root","","medical");
                                                         $cat=$obj->query("select * from category");
                                                        ?>
                                                        <?php 
                                                            while($results=$cat->fetch_object())
                                                            {
                                                        ?>
                                                        <span>                                          
                                                            <a class="mega-title" href="category.php?catid=<?php echo "$results->id"?>"><?php echo $results->cname;?></a>
                                                            
                                                            <?php
                                                                $sub = $obj->query("select * from subcategory where c='$results->id'");
                                                                while ($subc = $sub->fetch_object())
                                                                {
                                                            ?>
                                                            <a href="subcategory.php?subcatid=<?php echo "$subc->id"?>"><?php echo "$subc->sc"; ?></a>
                                                            <?php } ?>
                                                        </span>
                                                    <?php } ?>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li><a href="contact.php">Contact Us</a></li>
                                            <li><a href="customerregistration.php">Registration</a></li>
                                            
                                            
                                        </ul>
                                    </nav>
                                </div>        
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
            <!--End of Mainmenu-->
            <!-- Mobile Menu Area start -->
            
            <!-- Mobile Menu Area end -->
        </header>