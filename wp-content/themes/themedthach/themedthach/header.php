<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themedthach
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" type="image/x-icon">
	<!-- rs-plugin CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.countdown.css">
	<!-- rs-plugin CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
	<!-- rs-plugin CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slicknav.css">
	<!-- rs-plugin CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/font-awesome.min.css">
	<!-- rs-plugin CSS
	============================================ -->			
	<link href="<?php bloginfo('template_directory') ?>/lib/rs-plugin/css/settings.css" rel="stylesheet" />	
	<!-- owl.carousel CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/owl.carousel.css">
	<!-- normalize CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/normalize.css">
	<!-- main CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css">
	<!-- style CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/stylesheet.css">
	<!-- responsive CSS
	============================================ -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/responsive.css">
	<!-- modernizr-2.6.2.min Js
	============================================ -->		
    <script src="<?php bloginfo('template_directory') ?>/js/vendor/modernizr-2.6.2.min.js"></script>
	<?php wp_head(); ?>
</head>

<body class="home_4 home_2 <?php body_class(); ?>">
<?php 
	//main logo
	$logo = get_theme_mod('custom_logo');// hàm lấy id logo custom
	$newlogo = wp_get_attachment_image_src($logo,'full'); //lấy ảnh

?>
	<!--HEADER AREA START-->
		<header>
		<!---MAINMENU AREA START-->
		<div class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="main-menu home-3-menu-area">
							<div class="col-lg-3 col-md-3 pad-left">
								<div class="logo">
									<a href="#"><img src="<?php echo $newlogo[0]; ?>" alt="" /></a>
								</div>
							</div>
							<!---MAINMENU AREA START-->
							<?php  
								$icon_home = array(
									'fa-home', 
									'fa-briefcase', 
									'fa-pencil-square-o',
									'fa-shopping-cart',
									'fa-leaf',
									'fa-envelope'
								)
							?>
							<div class="col-lg-9 col-md-9 pad-right">
								<div class="mainmenu menu-home-3">
									<nav>
										<?php 
										wp_nav_menu(array(
											'link_before' => '<span><i class="fa fa-home"></i></span>',
											'link_after' => '<i class="fa fa-arrow-circle-o-right"></i>'
										))?>						
									</nav>
								</div>
								<div class="language-cart">
									<div class="language-currency">
										<nav>
										<ul>
											<li><a href="#"><img alt="" src="<?php bloginfo('template_directory') ?>/img/flag.png"><span><i class="fa fa-angle-down"></i></span></a>
												<ul class="sup-menu">
													<li><a href="#"><img alt="" src="<?php bloginfo('template_directory') ?>/img/country/it.gif">italiano</a></li>
													<li><a href="#"><img alt="" src="<?php bloginfo('template_directory') ?>/img/country/nl_nl.gif">Nederlands</a></li>
													<li><a href="#"><img alt="" src="<?php bloginfo('template_directory') ?>/img/country/de_de.gif">Deutsch</a></li>
													<li><a href="#"><img alt="" src="<?php bloginfo('template_directory') ?>/img/country/he_il.gif"> עברית</a></li>
													<li><a href="#"><img alt="" src="<?php bloginfo('template_directory') ?>/img/country/en.gif">English</a></li>
												</ul>
											</li>
											<li><a href="#"><i class="fa fa-usd"></i><span><i class="fa fa-angle-down"></i></span></a>
												<ul class="sup-menu currency">
													<li><a href="#"><i class="fa fa-eur"></i></a></li>
													<li><a href="#"><i class="fa fa-rub"></i></a></li>
													<li><a href="#"><i class="fa fa-krw"></i></a></li>
													<li><a href="#"><i class="fa fa-gbp"></i></a></li>
													<li><a href="#"><i class="fa fa-inr"></i></a></li>
												</ul>
											</li>
										</ul>
									</nav>
									</div>
									<div class="user-cart">
										<nav>
											<ul>
												<li><a href="#"><i class="fa fa-user"></i><span><i class="fa fa-angle-down"></i></span></a>
													<ul class="sup-menu user">
														<li><a href="checkout.html"><i class="fa fa-arrow-circle-o-right"></i>Checkout</a></li>
														<li><a href="cart.html"><i class="fa fa-arrow-circle-o-right"></i>Cart</a></li>
														<li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>My account</a></li>
														<li><a href="#"><i class="fa fa-arrow-circle-o-right"></i>Order tracking</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="fa fa-shopping-cart"></i><span><i class="fa fa-angle-down"></i></span></a>
												
												<!-- CART-PRODUCT-LIST START-->
												<div class="cart-product-list">
													<div class="mini-cart-content">
														<div class="cart-img-details">											
															<div class="cart-img-photo">
																<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/cart_list_prod.jpg" alt="" /></a>
																<span class="quantity">1</span>
															</div>
															<div class="cart-img-contaent">
																<a href="#"><h4>Vestibulum et mollis nunc</h4></a>
																<span>$120.00</span>
															</div>
															<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a></div>
														</div>
														<div class="clear"></div>
														<div class="cart-img-details">											
															<div class="cart-img-photo">
																<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/cart_list_prod_2.jpg" alt="" /></a>
																<span class="quantity">1</span>
															</div>
															<div class="cart-img-contaent">
																<a href="#"><h4>Aenean eu tristique</h4></a>
																<span>$170.00</span>
															</div>
															<div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a></div>
														</div>
														<p class="total">Subtotal: <span class="amount">$290.00</span></p>
														<div class="clear"></div>
														<p class="cart-button-top"><a href="checkout.html">Checkout</a></p>
													</div>
												</div>
												<!-- CART-PRODUCT-LIST END-->
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!---MAINMENU AREA END-->
						</div>
					</div>
				</div>
				<!-- MOBILE-MENU START-->
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<ul id="mobile-menu">
								<li>
									<a href="index.html">Home</a>
								</li>
								<li><a href="#">About</a></li>
								<li><a href="blog_sidebar.html">Blogs</a>
									<ul>
										<li><a href="blog_sidebar.html">Blog With Sidebar</a></li>
										<li><a href="blog_no_sidebar.html">Blog With Out Sidebar</a></li>
										<li><a href="blog_details.html">Blog details page</a></li>
									</ul>
								</li>
							
								<li><a href="category_grid.html">Shop</a>
									<ul>	
										<li><a href="category_grid.html">Men</a></li>
										<li><a href="category_grid.html">Women</a></li>
										<li><a href="category_grid.html">Shoes</a></li>
										<li><a href="category_grid.html">Bags</a></li>
										<li><a href="category_grid.html">Accessories</a></li>
										<li><a href="category_grid.html">Clothings</a></li>
										<li><a href="category_grid.html">Shop full width</a></li>
										<li><a href="category_grid.html">Shop sidebar right</a></li>
										<li><a href="category_grid.html">Shop sidebar left</a></li>
										<li><a href="category_grid.html">Sategory listing</a></li>
										<li><a href="product_details.html">Products detail</a></li>
										<li><a href="#">Checkout</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="#">My account</a></li>
										<li><a href="#">Order tracking</a></li>
									</ul>
								</li>
								<li><a href="category_list.html">Featured</a></li>
								<li><a href="contact_us.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- MOBILE-MENU END-->
			</div>
		</div>
		<!---MAINMENU AREA END-->
		</header>
		<!--HEADER AREA END-->
		<!-- CATEGORY-AND-SEARCH START-->
		<div class="category-and-search">
			<div class="container">
				<div class="row">
					<div class="search-and-menu">
						<div class="col-lg-7 col-md-7 col-sm-12">
						<div class="heder-left-menu">
						<nav>				
							<?php wp_nav_menu()?>
						</nav>
						</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="header-right pull-right">
								<div class="heder-right-menu">
								<nav>
									<ul>
										<li><a href="category_grid.html"><span><i class="fa fa-align-justify"></i></span>All Category <span class="dropdown"><i class="fa fa-angle-down"></i></span></a>
											<ul>
												<li><a href="category_grid.html">Mens</a></li>
												<li><a href="category_grid.html">Womens</a></li>
												<li><a href="category_grid.html">Bag</a></li>
												<li><a href="category_grid.html">Digital Camera</a></li>
											</ul>
										</li>
									</ul>
								</nav>
								</div>
								<div class="form-and-cart">
									<form action="#">
										<input type="text" placeholder="Search..."/>
										<span class="search-button"><i class="fa fa-search"></i></span>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CATEGORY-AND-SEARCH END-->
		<!-- OUR-SERVICE START-->
		<div class="our-service">
			<div class="container">
				<div class="row">
					<div class="service">
						<!-- SINGLE-SERVICE START-->
						<?php  
							$get_dich_vu = new WP_Query(array('post_type' => 'dich_vu'));
							while ($get_dich_vu->have_posts()) {
								$get_dich_vu->the_post();
								?>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<div class="single-service">
										<span class="icon"><i class="<?php echo get_field('hinh_dich_vu'); ?>"></i></span>
										<div class="text">
											<h2><?php the_title(); ?></h2>
											<p><?php the_content(); ?></p>
										</div>
									</div>
								</div>
								<?php
							}
						?>
						<!-- SINGLE-SERVICE END-->
					</div>
				</div>
			</div>
		</div>
		<!-- OUR-SERVICE END-->

