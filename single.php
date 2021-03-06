<?php
  require 'php/Product.class.php';
  require 'php/Cloth.class.php';
  require 'php/Utility.class.php';

  $db = new Utility();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Detail</title>
		
		<link href="css/master.css" rel="stylesheet">
		<link href="css/header.css" rel="stylesheet">
    <link href="css/icon-menu.css" rel="stylesheet">

		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="plugins/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/color1.css" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="plugins/switcher/css/color5.css" title="color5" media="all" />

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="animated-css" data-scrolling-animations="false">
		<div class="sp-body">

      <!-- Loader Landing Page -->
       <div id="loader">
        <div class="loader"></div>  
      </div>
      <!-- Loader end -->
			
      <!-- Start Switcher -->
      <div class="switcher-wrapper">  
        <div class="demo_changer">
          <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
          <div class="form_holder">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="predefined_styles">
                  <div class="skin-theme-switcher">
                    <h4>Color</h4>
                    <a href="#" data-switchcolor="color1" class="styleswitch" style="background-color:#e94d38;"> </a>
                    <a href="#" data-switchcolor="color2" class="styleswitch" style="background-color:#0078ff;"> </a>
                    <a href="#" data-switchcolor="color3" class="styleswitch" style="background-color:#00ac00;"> </a>             
                    <a href="#" data-switchcolor="color4" class="styleswitch" style="background-color:#e8c500;"> </a>
                    <a href="#" data-switchcolor="color5" class="styleswitch" style="background-color:#c23eff;"> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Switcher -->

      <header id="header">
        <div class="header-top">
          <div class="container">
            <ul class="nav nav-pills nav-top navbar-right">
              <li class="dropdown langs">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><img src="images/arabic.png" alt="uk"> <i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#"><img src="images/UK.png" alt="uk"></a></li>
                  <li><a href="#"><img src="images/dutch.png" alt="uk"></a></li>
                  <li><a href="#"><img src="images/german.png" alt="uk"></a></li>
                </ul>
              </li>
              <li class="dropdown currency">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-usd"></i> <i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#"><i class="fa fa-eur"></i></a></li>
                  <li><a href="#"><i class="fa fa-jpy"></i></a></li>
                </ul>
              </li>
              <li class="dropdown my-account">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">My Account <i class="fa fa-angle-down"></i></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">My Dashboard</a></li>
                  <li><a href="#">Account Information</a></li>
                  <li><a href="#">Address Book</a></li>
                  <li><a href="#">My Orders</a></li>
                </ul>
              </li>
              <li class="dropdown my-cart">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="fa fa-shopping-cart"></i></a>
                <ul role="menu" class="dropdown-menu header-cart_product_list">
                    <li class="added-items">
                      <div class="header-cart_product_list_item clearfix">
                        <a class="item-preview" href="product-details.html"><img src="images/cart-img-1.jpg" alt="Product"></a>
                        <h4><a class="font-additional font-weight-normal hover-focus-color cart-product-title" href="product-details.html">Stylish Wear</a></h4>
                        <span class="item-cat font-main font-weight-normal"><a class="hover-focus-color cart-product-category" href="#">Men</a></span>
                        <span class="item-price font-additional font-weight-normal customColor">37.15 USD</span>
                        <a class="item-del hover-focus-color" href="#"><i class="fa fa-trash-o"></i></a>
                      </div>
                    </li>
                    <li class="added-items">
                      <div class="header-cart_product_list_item clearfix">
                        <a class="item-preview" href="product-details.html"><img src="images/cart-img-2.jpg" alt="Product"></a>
                        <h4><a class="font-additional font-weight-normal hover-focus-color cart-product-title" href="product-details.html">Bag</a></h4>
                        <span class="item-cat font-main font-weight-normal"><a class="hover-focus-color cart-product-category" href="#">Accessories</a></span>
                        <span class="item-price font-additional font-weight-normal customColor">60.10 USD</span>
                        <a class="item-del hover-focus-color" href="#"><i class="fa fa-trash-o"></i></a>
                      </div>
                    </li>
                  </ul>
              </li>
            </ul>            
          </div> 
          <div class="container-fluid trigger-container">
            <div class="row text-center">
              <button class="menu-trigger"><i class="fa fa-bars"></i></button>
            </div>
          </div>         
        </div>
        <div class="header-middle">
          <div class="container relative">
            <a href="index.html" class="logo pull-left"></a>
            <div class="header-search pull-right">
              <div class="header-search_filter">
                <select class="formDropdown font-additional font-weight-normal" name="filterby" id="filterby">
                  <option value="0">Filter By</option>
                  <option value="date">Date</option>
                  <option value="title">Title</option>
                  <option value="cat">Category</option>
                </select>
                <i class="fa fa-angle-down customColor"></i>
              </div>
              <div class="header-search_form">
                <form class="product-search form-inline" action="#" method="POST">
                  <div class="form-group">
                    <label class="sr-only" for="searchQuery">Product Name ...</label>
                    <input type="search" class="product-search_field font-main font-weight-normal" id="searchQuery" placeholder="Product Name ...">
                  </div>
                  <button type="submit" class="product-search_btn hvr-bounce-to-right">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- icon-menu -->
      <nav id="icon-menu" class="main-menu">
        
        <div class="scrollbar" id="style-1">
          <ul>
            <li class="lightli">                                   
              <a href="index.html">
                <i class="fa fa-home fa-lg"></i>
                <span class="nav-text">Home</span>
              </a>
            </li>
            <li class="lightli">                                 
              <a href="#">
                <i class="fa fa-user fa-lg"></i>
                <span class="nav-text">My Account</span>
              </a>
            </li>
            <li class="lightli">                                 
              <a href="contact.html">
                <i class="fa fa-envelope-o fa-lg"></i>
                <span class="nav-text">Contact</span>
              </a>
            </li>
            
              <li class="darkerli">
                <a href="category.html">
                  <i class="fa fa-shopping-cart"></i>
                   <span class="nav-text">Shop</span>
                </a>
              </li>
              <li class="darkerli">
                <a href="category.html">
                  <i class="fa fa-male fa-lg"></i>
                  <span class="nav-text">Men</span>
                </a>
              </li>
              <li class="darkerli">
                <a href="category-1.html">
                  <i class="fa fa-female fa-lg"></i>
                  <span class="nav-text">Women</span>
                </a>
              </li>
              <li class="darkerli">
                <a href="category.html">
                  <i class="fa fa-picture-o fa-user-secret"></i>
                  <span class="nav-text">shoes</span>
                </a>
              </li>
             <li class="darkerli">
                <a href="product-details.html">
                  <i class="fa fa-picture-o fa-newspaper-o"></i>
                  <span class="nav-text">Detail</span>
                </a>
              </li>
              <li class="darkerli">
                <a href="product-details-1.html">
                  <i class="fa fa-picture-o fa-building"></i>
                  <span class="nav-text">Detail-1</span>
                </a>
              </li>
              <li class="darkerli">
                <a href="blog.html">
                  <i class="fa fa-pencil-square-o fa-lg"></i>
                  <span class="nav-text">Blog</span>
                </a>
              </li>
                                 
          </ul>
        </div>
        
      </nav>
          <!-- icon-menu -->

      <section id="pageTitleBox" class="paralax breadcrumb-container"  style="background-image: url('images/detail-heading-bg.jpg');">
        <div class="overlay"></div>
        <div class="container relative">
          <h1 class="title font-additional font-weight-normal color-main text-uppercase wow zoomIn" data-wow-delay="0.3s">Product Name</h1>
          <ul class="breadcrumb-list">
            <li>
              <a href="index-1.html" class="font-additional font-weight-normal color-main text-uppercase">HOME</a>
              <span><i class="fa fa-angle-double-right"></i> </span>
            </li>
            <li>
              <a href="#" class="font-additional font-weight-normal color-main text-uppercase">Bags</a>
              <span><i class="fa fa-angle-double-right"></i></span>
            </li>
            <li>
              <a href="product-detail-1.html" class="font-additional font-weight-normal color-main text-uppercase">Product detail</a>
            </li>
          </ul>
        </div>
      </section>
      
			<section id="productDetails" class="product-details">
				<div class="container">
					<div class="row narrow-content">
          <?php              
            foreach ($db->select("v_cat_pro", "WHERE id=".$_GET['id']) as $key => $value){
          ?>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
            
							<div class="product-gallery vertical-pager">
								<div id="bx-pager" class="product-gallery_preview">
									<a data-slide-index="0" href="#"><img src="images/product-detail/detail-img-1-thumb.jpg" alt="product-image-thumb" /></a>
									<a data-slide-index="1" href="#"><img src="images/product-detail/detail-img-2-thumb.jpg" alt="product-image-thumb"/></a>
									<a data-slide-index="2" href="#"><img src="images/product-detail/detail-img-3-thumb.jpg" alt="product-image-thumb"/></a>
									<a data-slide-index="3" href="#"><img src="images/product-detail/detail-img-4-thumb.jpg" alt="product-image-thumb" /></a>
								</div>
								<ul class="bxslider" data-mode="fade" data-slide-margin="0" data-min-slides="1" data-move-slides="1" data-pager="true" data-pager-custom="#bx-pager" data-controls="false">
									<li><img src="images/product-detail/detail-img-1.jpg" alt="product-image" /></li>
									<li><img src="images/product-detail/detail-img-2.jpg" alt="product-image" /></li>
									<li><img src="images/product-detail/detail-img-3.jpg" alt="product-image" /></li>
									<li><img src="images/product-detail/detail-img-4.jpg" alt="product-image" /></li>
								</ul>
							</div>
						</div>
						<div class="product-cart product-details-narrow col-lg-6 col-md-6 col-sm-12 col-xs-12 clearfix">
							<div class="product-options_header clearfix wow fadeIn" data-wow-delay="0.3s">
								<h3 class="font-additional font-weight-bold text-uppercase"><?php echo $value['name']; ?></h3>
								<div class="product-item_price font-additional font-weight-normal customColor">$<?php echo $value['price']; ?></div>
                <div class="product-item_price font-additional font-weight-normal customColor">Brand: <?php echo $value['cat_name']; ?></div>
								<ul class="rating">
									<li><span aria-hidden="true" class="icon-star customColor"></span></li>
									<li><span aria-hidden="true" class="icon-star customColor"></span></li>
									<li><span aria-hidden="true" class="icon-star customColor"></span></li>
									<li><span aria-hidden="true" class="icon-star customColor"></span></li>
									<li><span aria-hidden="true" class="icon-star color-additional"></span></li>
								</ul>
							</div>
							<div class="product-options_body clearfix wow fadeIn" data-wow-delay="0.3s">
								<h4 class="font-additional font-weight-bold text-uppercase">PRODUCT DESCRIPTION</h4>
								<div class="product-options_desc font-main color-third"><?php echo $value['description']; ?></div>
							</div>
							
							<div class="product-options_footer clearfix wow fadeIn" data-wow-delay="0.3s">
								<div class="product-options_row">									
									<h4 class="font-additional font-weight-bold text-uppercase">Share this product</h4>
									<ul class="social-list">
										<li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_facebook" aria-hidden="true"></span></a></li>
										<li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_twitter" aria-hidden="true"></span></a></li>
										<li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_googleplus" aria-hidden="true"></span></a></li>
										<li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_pinterest" aria-hidden="true"></span></a></li>
										<li><a href="#" class="hover-focus-border hvr-bounce-to-right before-bg"><span class="social_instagram" aria-hidden="true"></span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php
              }
            ?>
				</div>
			</section>

      <footer id="footer">
        <a class="goToTop font-additional color-main text-uppercase" href="#" id="scrollTop">
          <i class="fa fa-angle-up"></i>
          <span>Top</span>
        </a>
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeIn" data-wow-delay="0.3s" data-wow-duration="2s">
                <a href="index.html" class="footer-top_logo"></a>
                <div class="footer-top_container clearfix">
                  <span class="font-main font-weight-normal color-additional">Proin est Pellentesque risus magna vulput vitae sodales uam morbi non sem lacus por mollis. Nunc condime ntum metus eud Ino lestie. Sed consectetuer. Lorem ipsum dolor amet ectetur adipisicing elit sed doincl.</span>
                  <ul class="footer-social-list">
                    <li><a href="#"><span class="social_facebook" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="social_twitter" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="social_googleplus" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="social_pinterest" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="social_youtube" aria-hidden="true"></span></a></li>
                    <li><a href="#"><span class="social_instagram" aria-hidden="true"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeIn" data-wow-delay="0.6s" data-wow-duration="2s">
                <h4><span class="footer-top_title color-main font-additional font-weight-bold text-uppercase">QUICK LINKS</span></h4>
                <div class="footer-top_container clearfix">
                  <ul class="footer-nav">
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> My Account</a></li>
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> My Wishlist</a></li>
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Order Tracking</a></li>
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Order History</a></li>          
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Shipping Information</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeIn" data-wow-delay="0.9s" data-wow-duration="2s">
                <h4><span class="footer-top_title color-main font-additional font-weight-bold text-uppercase">INFORMATION</span></h4>
                <div class="footer-top_container clearfix">
                  <ul class="footer-nav">
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> About us</a></li>
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Contact us</a></li>             
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Privacy Policy</a></li>
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Terms &amp; Conditions</a></li>
                    <li><a href="#" class="font-main font-weight-normal color-additional"><i class="fa fa-caret-right customColor"></i> Return Policy</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 clearfix wow fadeIn" data-wow-delay="1.2s" data-wow-duration="2s">
                <h4><span class="footer-top_title color-main font-additional font-weight-bold text-uppercase">GET IN TOUCH</span></h4>
                <div class="footer-top_container clearfix">
                  <ul class="footer-contact">
                    <li class="font-main font-weight-normal color-additional">
                      <span class="icon_pin" aria-hidden="true"></span>
                      Woocom ABC Road 14 Street <br>XYZ Country
                    </li>
                    <li class="font-main font-weight-normal color-additional oneLine">
                      <span class="icon_phone" aria-hidden="true"></span>
                       (800) 9235 3658 32
                    </li>
                    <li class="font-main font-weight-normal color-additional oneLine">
                      <span class="icon_mail" aria-hidden="true"></span>
                      info@mail.com
                    </li>
                    <li class="font-main font-weight-normal color-additional">
                      <span class="icon_clock" aria-hidden="true"></span>
                      Mon to Sat : 08:30 AM - 09:30 PM <br>Sun : 10:00 PM - 4:00 PM
                    </li>                   
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <div class="container">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
                <span class="footer_copyright font-main" style="color:#fff;">Created by <span class="font-main font-weight-semibold">ewebcraft</span> &copy; 2015 All rights reserved.</span>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 clearfix">
                <ul class="footer-payments pull-right">
                  <li><img src="images/C-1.jpg" alt="Payments"></li>
                  <li><img src="images/C-2.jpg" alt="Payments"></li>
                  <li><img src="images/C-3.jpg" alt="Payments"></li>
                  <li><img src="images/C-4.jpg" alt="Payments"></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
		</div>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/classie.js"></script>
		
	  <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
	  
	  <script src="plugins/bxslider/jquery.bxslider.min.js"></script>
		
		<script src="plugins/switcher/js/bootstrap-select.js"></script> 
		<script src="plugins/switcher/js/evol.colorpicker.min.js" type="text/javascript"></script> 
		<script src="plugins/switcher/js/dmss.js"></script>
	  
	  <script type="text/javascript" src="plugins/isotope/jquery.isotope.min.js"></script> 

		<script src="js/wow.min.js"></script>
		<script src="js/cssua.min.js"></script>
    <script src="js/theme.js"></script> 
	</body>
</html>