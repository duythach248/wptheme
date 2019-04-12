<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themedthach
 */

?>

	<!-- FOOTER-AREA START-->
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="footer">
							<div class="row">
								<div class="col-lg-3 col-md-3 col-sm-5">
									<div class="footer-logo">
										<a href="index.html"><img alt="" src="<?php bloginfo('template_directory') ?>/img/logo_footer_1.png"></a>
										<p>Vestibulum gravida magna ut commodo lacinia. Quisque dictum in arcu ut vestibulum. Morbi sed tempor lacus...  <a href="#">Readmore>></a></p>
									</div>
								</div>
								<div class="col-lg-3 col-md-3 col-sm-4 hidden-sm">
									<!-- INFORMATION START-->
									<div class="information">
										<h3>Infomation</h3>
										<ul>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Specials
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													New products
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Best sellers
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Our stores
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													Contact us
												</a>
											</li>
										</ul>
									</div>
									<!-- INFORMATION END-->
								</div>
								<div class="col-lg-3 col-md-3 col-sm-3">
								<!-- MYACCOUNT START-->
									<div class="myaccount">
										<h3>My Account</h3>
										<ul>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													My orders
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													My credit slips
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													My addresses
												</a>
											</li>
											<li>
												<a href="#">
													<span><i class="fa fa-arrow-circle-o-right"></i></span>
													My personal info
												</a>
											</li>
										</ul>
									</div>
									<!-- MYACCOUNT END-->
								</div>
								
								<!-- JOIN-US AREA START-->
								<div class="col-lg-3 col-md-3 col-sm-4">
									<div class="join-us">
										<h3>Join us</h3>
										<span>Follow with us now!</span>
									</div>
									<div class="social-icon">
										<ul>
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- JOIN-US AREA END-->
							</div>
							<!-- ROW END-->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- FOOTER-AREA START-->
		<div class="footer-bottum-menu-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="footer-bottum">
							<div class="row">
								<div class="col-lg-6 col-md-6">
								
									<!-- FOOTER-BOTTUM-MENU START-->
									<div class="footer-bottum-menu">
										<ul>
											<li><a href="#">Our stores</a></li>
											<li><a href="#">Contact us</a></li>
											<li><a href="#">Terms and conditions of use</a></li>
											<li><a href="#">About us</a></li>
											<li><a href="#">Sitemap</a></li>
										</ul>
									</div>
									<!-- FOOTER-BOTTUM-MENU END-->
								</div>
								<div class="col-lg-6 col-md-6">
									<!-- CARD-AREA START-->
									<div class="card-area">
										<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/paypal.png" alt="" /></a>
										<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/amazon.png" alt="" /></a>
										<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/skrill.png" alt="" /></a>
										<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/visa.png" alt="" /></a>
										<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/discover.png" alt="" /></a>
										<a href="#"><img src="<?php bloginfo('template_directory') ?>/img/master.png" alt="" /></a>
									</div>
									<!-- CARD-AREA END-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- COPY-RIGHT START-->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="copy-right">
						<p>Copyright &copy; 2015 <a href="#">Rammustheme</a>. All Rights Reserved</p>
					</div>
				</div>
			</div>
		</div>
	<!-- COPY-RIGHT END-->
	<!-- QUICKVIEW PRODUCT -->
	<div id="quickview-wrapper">
		<!-- Modal -->
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<div class="product-images">
								<div class="main-image images">
									<img alt="" src="<?php bloginfo('template_directory') ?>/img/product/fetured/fetured_1.jpg">
								</div>
								<div class="thumbnail-img">
									<img src="<?php bloginfo('template_directory') ?>/img/product/product_details/product_details_small_1.jpg" alt="" />
									<img src="<?php bloginfo('template_directory') ?>/img/product/product_details/product_details_small_2.jpg" alt="" />
									<img src="<?php bloginfo('template_directory') ?>/img/product/product_details/product_details_small_3.jpg" alt="" />
								</div>
							</div><!-- .product-images -->
							
							<div class="product-info">
								<h1>Vestibulum et mollis nunc</h1>
								<div class="price-box">
									<p class="price"><span class="special-price"><span class="amount">$120.00</span></span></p>
								</div>
								<a href="#" class="see-all">See all features</a>
								<div class="quick-add-to-cart">
									<form method="post" class="cart">
										<div class="numbers-row">
											<input type="number" id="french-hens" value="3">
										</div>
										<button class="single_add_to_cart_button" type="submit">Add to cart</button>
									</form>
								</div>
								<div class="quick-desc">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
								</div>
								<div class="social-sharing">
									<div class="widget widget_socialsharing_widget">
										<h3 class="widget-title-modal">Share this product</h3>
										<ul class="social-icons">
											<li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
											<li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
											<li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
											<li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
											<li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>
								</div>
							</div><!-- .product-info -->
						</div><!-- .modal-product -->
					</div><!-- .modal-body -->
				</div><!-- .modal-content -->
			</div><!-- .modal-dialog -->
		</div>
		<!-- END Modal -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
	<script src="<?php bloginfo('template_directory') ?>/js/vendor/jquery-1.11.3.min.js"></script>
	<!-- bootstrap.min js -->
	<script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
	<!-- FILTER_PRICE js -->
	<script src="<?php bloginfo('template_directory') ?>/js/jquery-ui.min.js"></script>
	<!-- owl.carousel.min js -->
	<script src="<?php bloginfo('template_directory') ?>/js/owl.carousel.min.js"></script>
	<!-- jquery.slicknav.min js -->
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.slicknav.min.js"></script>
	<!-- plugins js -->
	<script src="<?php bloginfo('template_directory') ?>/js/plugins.js"></script>
	<!-- jquery.scrollUp js -->
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.scrollUp.min.js"></script>
	<!-- RS Lib js -->		
	<script src="<?php bloginfo('template_directory') ?>/lib/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/lib/rs-plugin/rs.home.js"></script>
	<!-- Countdown -->
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.plugin.min.js"></script>
	<script src="<?php bloginfo('template_directory') ?>/js/jquery.countdown.min.js"></script>
	<!-- main -->
	 <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
</body>
</html>
