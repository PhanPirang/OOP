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
		<title>iCart | Ecommerce HTML Template</title>
		
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
              <a href="contact.html">
                <i class="fa fa-envelope-o fa-lg"></i>
                <span class="nav-text">Contact</span>
              </a>
            </li>

                                 
          </ul>
        </div>

      </nav>
          <!-- icon-menu -->

			<section id="main-slider">
				<div id="owl-main-slider" class="enable-owl-carousel owl-main-slider owl-carousel owl-theme" data-navigation="true" data-pagination="false" data-single-item="true" data-auto-play="7000" data-transition-style="fadeUp" data-main-text-animation="true" data-after-init-delay="4000" data-after-move-delay="500" data-stop-on-hover="true">
					<div class="item slide1">
						<img src="images/main-slider/slide-1.jpg" alt="Slide 1">
						<div class="main-slider_content">
							<div class="main-slider_smalltitle main-slider_zoomIn animated" style="visibility: hidden;"><span class="customColor">get upto 30% offer for order over $400!</span></div>
							<h3 class="main-slider_title font-additional font-weight-bold main-slider_fadeInLeft animated" style="visibility: hidden;">BIGGEST FASHION 2015<br>  COLLECTION</h3>
							<div class="main-slider_row">
								<div class="line-separator main-slider_zoomIn animated" style="visibility: hidden;">
									<img src="images/seperator.png" alt="seperator">
								</div>
							</div>
							<div class="main-slider_buttons">
								<a href="#" class="btn button-border font-additional font-weight-bold hvr-bounce-to-right main-slider_fadeInLeftBig animated before-bg" style="visibility: hidden;">SHOP NOW</a>
								<a href="#" class="btn button-border font-additional font-weight-bold hvr-bounce-to-right main-slider_fadeInRightBig animated before-bg" style="visibility: hidden;">PURCHASE</a>
							</div>
						</div>
					</div>
					<div class="item slide2">
						<img src="images/main-slider/slide-2.jpg" alt="Slide 2">
						<div class="main-slider_content">
							<div class="main-slider_row">
								<div class="line-separator main-slider_zoomIn animated" style="visibility: hidden;">
									<img src="images/seperator.png" alt="seperator">
								</div>
							</div>
							<div class="main-slider_smalltitle color-main main-slider_fadeInRight animated" style="visibility: hidden;">HOT COLLECTION</div>
							<h3 class="main-slider_title font-additional font-weight-bold text-shadow color-main main-slider_fadeInLeft animated" style="visibility: hidden;">AUTUMN WINTER 2015/2016</h3>
							<div class="main-slider_buttons">
								<a href="#" class="btn button-border font-additional font-weight-bold hvr-bounce-to-right main-slider_slideInUp animated before-bg" style="visibility: hidden;">SHOP NOW</a>
							</div>
						</div>
					</div>
					<div class="item slide3">
						<img src="images/main-slider/slide-3.jpg" alt="Slide 3">
						<div class="main-slider_content">
							
							<h3 class="main-slider_title font-additional font-weight-normal text-shadow main-slider_fadeInLeft animated" style="visibility: hidden; padding-bottom:5px;">style &amp; comfort</h3>
							<div class="main-slider_row">
								<div class="line-separator main-slider_zoomIn animated" style="visibility: hidden;">
									<img src="images/white-seperator.png" alt="seperator">
								</div>
							</div>
							<span class="main-slider_desc font-main main-slider_fadeInRight animated" style="visibility: hidden;">Proin est Pellentesque risus magna vulputate vitae sodales aliquam morb non sem lacus porta molis. Nunc condimentum metus</span>
							<div class="main-slider_buttons">
								<a href="#" class="btn button-border font-additional font-weight-bold hvr-bounce-to-right main-slider_slideInUp animated before-bg" style="visibility: hidden;">SHOP NOW</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="slider" class="slider-container">
				<div class="container">
          <div class="row">
					<h2 class="title font-additional font-weight-bold text-uppercase wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="2s">NEW ARRIVALS</h2>
					<span class="subTitle font-additional font-weight-normal text-uppercase wow fadeIn" data-wow-duration="2s">TRENDY COLLECTION</span>
					<div class="line-separatorBox text-center">
		              	<div class="line-separator animated" style="visibility: visible; margin-top:15px; margin-bottom:30px;">
		                  <img src="images/seperator.png" alt="seperator">
		                </div>
		            </div>
						<div id="owl-product-slider" class="enable-owl-carousel owl-product-slider owl-bottom-pagination owl-carousel owl-theme" data-navigation="true" data-pagination="false" data-single-item="false" data-auto-play="false" data-transition-style="false" data-main-text-animation="false" data-min600="2" data-min800="3" data-min1200="4">
						<?php
							
							foreach ($db->select("tbl_product") as $key => $value) {
						?>
							<div class="item">
								<div class="product-item hvr-underline-from-center">
									<div class="product-item_body product-border">
										<img alt="Product" src="images/products/12.jpg" class="product-item_image">
										<a href="single.php?id=<?php echo $value['id']; ?>" class="product-item_link">
											<span class="product-item_sale color-main font-additional customBgColor circle">-<?php echo $value['discount']; ?>%</span>
										</a>
										<div class="product-sidebar">
				                          <a href="#" class="buy">
				                            <span>BUY ITEM</span>
				                          </a>

				                          <a href="single.php?id=<?php echo $value['id']; ?>" class="info">
				                            <span>QUICK VIEW</span>
				                          </a>

				                          <a href="#" class="favorites">
				                            <span>ADD TO FAVORITE</span>
				                          </a>
				                        </div>
									</div>
									<a class="product-item_footer" href="product-details.html">
										<div class="product-item_title font-additional font-weight-bold text-center text-uppercase"><?php echo $value['name']; ?></div>
										<div class="product-item_price font-additional font-weight-normal customColor">$<?php echo $value['price']; ?></div>
									</a>
								</div>
							</div>
						<?php
							}
						?>
						</div>
					</div>
				</div>
			</section>

			<section id="brands">
				<div class="container">
          <div class="row">
						<ul class="brands-list">
							<li>
								<a href="#" class="brand-item">
									<img src="images/brand-img-1.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="images/brand-img-2.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="images/brand-img-3.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="images/brand-img-4.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="images/brand-img-5.jpg" alt="Brand">
								</a>
							</li>
							<li>
								<a href="#" class="brand-item">
									<img src="images/brand-img-6.jpg" alt="Brand">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</section>
      
			<section id="subscribe" class="subscribe-row">
				<div class="container">
					<div class="subscribe-container clearfix wow fadeInUp text-center" data-wow-delay="0.3s">
						<div class="col-sm-12 subscribe-desc font-additional font-weight-bold">SIGN UP FOR OUR MONTHLY NEWSLETTER</div>
						<div id="mc_embed_signup" class="col-sm-9 col-sm-offset-3 subscribe-form">
							<form action="#" method="post">
                <div id="mc_embed_signup_scroll">
                  <div class="mc-field-group subscribe-field">
                    <input type="email" value="" name="sub-email" class="required email font-main color-third" id="sub-email" required>
                  </div>                  
                  <div class="subscribe-button">
                    <button type="submit" value="Subscribe" name="subscribe" class="btn btn-primary font-additional hvr-bounce-to-right before-bg"> SUBSCRIBE </button>
                  </div>
                </div>
              </form>
						</div>
					</div>
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

			</footer>
		</div>
    
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		
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