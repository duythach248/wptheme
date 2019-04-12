<?php get_header() ?>
<!-- 	 -->


<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="slider">
						<div class="fullwidthbanner-container" >
							<div class="fullwidthbanner2">
								<ul>
									<?php 
										$get_slide_data = new WP_Query(array('post_type' => 'hieu_ung_anh'));
										while ($get_slide_data->have_posts()) {
											$get_slide_data->the_post();
											$get_url_slide = get_field('ảnh_slide');
											?>
											<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
											<img src="<?php echo $get_url_slide['url']; ?>" alt="slide" >
											<div class="tp-caption large_black sfr" 
												data-x="170" 
												data-y="100" 
												data-speed="1100" 
												data-start="1500" 
												data-easing="easeInOutBack" 
													style="font-size: 24px; font-weight: 400; text-transform: normal; color: #312e28;font-family: Playfair Display;font-style:italic;text-align:center;">
													<?php the_title(); ?>
											</div>
											<div class="tp-caption large_black sfr" 
											data-x="50" 
											data-y="140" 
											data-speed="1100" 
											data-start="1500" 
											data-easing="easeInOutBack" 
												style="border-width: 2px; background-color: #222222; min-height: 1px;min-width: 400px;">
											</div>
											<div class="tp-caption large_black sfr" 
											data-x="0" 
											data-y="150" 
											data-speed="1100" 
											data-start="2000" 
											data-easing="easeInOutBack"
												style="font-family: Open Sans; font-size: 54px; font-weight: 800; text-transform: uppercase; color: #222222;text-align:center;">
												Big sale <br /><span style="font-family:Playfair Display;font-weight:400;font-style:italic;font-size:54px;text-transform:lowercase;"><?php the_content(); ?></span>
											</div>
											<div class="tp-caption lfb carousel-caption-inner" 
											data-x="180" 
											data-y="320" 
											data-speed="1300" 
											data-start="2500" 
											data-easing="easeInOutBack" 
												style="font-family: Open Sans; font-size: 14px; font-weight: 700; text-transform: uppercase; color: #fff;">
												<a href="<?php echo get_field('link'); ?>" class="s-btn" style="background:#c4c4c4;color: #fff;display: block;padding: 12px 28px;"><?php echo get_field('tieu_dề_link'); ?></a>
											</div>
											<?php
										}
										wp_reset_query();
									?>		
									
									<!-- SLIDER LAYER 1 START-->
									</li>
									<!-- SLIDER LAYER 1 END-->
									<!-- SLIDER LAYER 3 END-->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- SLIDER AREA END -->
		<!-- FEATURED-AND-SPECIAL-AREA START-->
		<div class="featured-and-special-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<hr/>
						<h3 class="heading-text-home-4">Featured</h3>
						<div class="row">
						<!-- FEATURED-PRODUCT START-->
									<?php echo do_shortcode('[recent_products per_page="5"]'); ?>
								<!-- FEATURED-PRODUCT END-->
						</div>
					</div>					
				</div>
			</div>
		</div>
		<!-- FEATURED-AND-SPECIAL-AREA END-->

		<!-- SHOPE-ADD-AREA START-->
		<?php  
			$titledm1 = get_field('title_danh_muc');
			$txtbuttondm1 = get_field('text_button_1');
			$urldmimg1 = get_field('image_1'); 

			$titledm2 = get_field('title_danh_muc_2');
			$txtbuttondm2 = get_field('text_button_2');
			$urldmimg2 = get_field('image_2');

			$titledm3 = get_field('title_danh_muc_3');
			$txtbuttondm3 = get_field('text_button_3');
			$urldmimg3 = get_field('image_3');
		?>
		<div class="shope-add-area">
			<div class="container">
				<div class="row">
					<!-- SINGLE-ADD START-->
					<div class="col-lg-12 col-md-12 shope-add"></div>
					<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-add">
						<img src="<?php echo $urldmimg1['url'];?>" alt="" />
						<div class="add-text">
							<h3><?php echo $titledm1 ?></h3>
							<a href="#"><?php echo $txtbuttondm1 ?></a>
						</div>
					</div>
					</div>
					<!-- SINGLE-ADD END-->
					<!-- SINGLE-ADD START-->
					<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-add">
						<img src="<?php echo $urldmimg2['url'];?>" alt="" />
						<div class="add-text midle_text">
							<h3><?php echo $titledm2 ?></h3>
							<a href="#"><?php echo $txtbuttondm2 ?></a>
						</div>
					</div>
					</div>
					<!-- SINGLE-ADD END-->
					<!-- SINGLE-ADD START-->
					<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="single-add">
						<img src="<?php echo $urldmimg3['url'];?>" alt="" />
						<div class="add-text">
							<h3><?php echo $titledm3 ?></h3>
							<a href="#"><?php echo $txtbuttondm3 ?></a>
						</div>
					</div>
					</div>
					<!-- SINGLE-ADD END-->
				</div>
			</div>
		</div>
		<!-- SHOPE-ADD-AREA END-->
		<!-- TOP_CATEGORY_AREA START-->
		<div class="top_category_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="name_area">
							<h2>Top categories</h2>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-9">
						<div class="top-category-menu nav-carosol-cat">
							<a href="category_grid.html">
								<div>
									<i class="fa fa-female"></i>
									<p>Women</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- TOP_CATEGORY_AREA END-->
			<div class="best_sell_block_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<!-- BEST-PRODUCT START-->
					<div class="best-product">
						<h3 class="area-heading">Best Seller</h3>
						<!-- BESTSELLER-PRODUCT-ALL START-->
						<div class="best-product-all">
							<!-- SINGLE-BESTSELLER-PRODUCT START-->
							<?php wp_reset_query(); ?>
							<?php  
							global $product;
							$get_product = new WP_Query(array('post_type' => 'product','posts_per_page' => 2));
							while ($get_product->have_posts()) {
								$get_product->the_post();

							?>
							<div class="single-featured-product">
								<div class="product_img">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail(); ?>
									</a>
									<div class="add-cart-area">
										<div class="fet-price">
											<span class="addcart-text">₫<?php echo $product->get_price(); ?></span>
										</div>
										<?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
									</div>
								</div>
								<div class="infor-text">
									<span>
									<?php  
									 /**
									 * Hook: woocommerce_shop_loop_item_title.
									 *
									 * @hooked woocommerce_template_loop_product_title - 10
									 */
									do_action( 'woocommerce_shop_loop_item_title' );
									?>
									</span></a>
									<span class="star">
									<?php  
										/**
									 * Hook: woocommerce_duythach_test.
									 *
									 * @hooked woocommerce_template_loop_rating_bottom - 10
									 */
									do_action('woocommerce_duythach_test');
									?>
									</span>
								</div>
							</div>
							<?php
								}
							?>
							<!-- SINGLE-BESTSELLER-PRODUCT END-->
						</div>
						<!-- BESTSELLER-PRODUCT-ALL END-->
					</div>
					<!-- BEST-PRODUCT END-->
				</div>
				
				<!-- BLOG-CORUSOL-4 START-->
				<div class="col-lg-6 col-md-6 col-sm-9">
				<div class="blog-corusol-4 nav-carosol">
	
					<!-- SINGLE-BLOG START-->
					<!-- <div class="single-blog">
						<div class="blog-img">
							<a href="#"><img src="<?php //bloginfo('template_directory') ?>/img/blog/blog_2.jpg" alt="Blog" /></a>
						</div>
						<div class="blog-text-area">
							<div class="block-desc">
								<a href="#">
									<h3>Fusce consequat, mauris non venenatis...</h3>
								</a>
								<p>Aliquam sed libero neque. Duis ut finibus dui. Sed egestas elit tortor, vel volutpat est ultrices sed. Ut quis pellentesque ligula. </p>
								<div class="comment-area">
									<a href="#">
										<span class="author"><i class="fa fa-user"></i>Authur</span>
									</a>
									<a href="#">
										<span class="comment"><i class="fa fa-comments"></i>12 Comments</span>
									</a>
									<a href="#">
										<span class=""><i class="fa fa-clock-o"></i>1 hour ago</span>
									</a>
								</div>
							</div>
						</div>
					</div> -->
					<!-- SINGLE-BLOG END-->
					<!-- SINGLE-BLOG START-->
					
						<?php  
							$data_of_post = new WP_Query(array('post_type' => 'post'));
							while($data_of_post->have_posts()) {
								$data_of_post->the_post();
						?>
						<div class="single-blog">
						<div class="blog-img">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						</div>
						<div class="blog-text-area">
							<div class="block-desc">
								<a href="#">
									<h3><?php the_title(); ?></h3>
								</a>
								<p><?php the_content(); ?></p>
								<div class="comment-area">
									<a href="#">
										<span class="author"><i class="fa fa-user"></i><?php echo get_the_author(); ?></span>
									</a>
									<a href="#">
										<span class="comment"><i class="fa fa-comments"></i>
				
											<?php comments_number(); ?>
										</span>
									</a>
									<a href="#">
										<span class=""><i class="fa fa-clock-o"></i><?php the_date('l, F j, Y'); ?></span>
									</a>
								</div>
							</div>
						</div>
						</div>
						<?php  
						}	
						?>
					
					<!-- SINGLE-BLOG END-->
				</div>
				</div>
				<!-- BLOG-CORUSOL-4 END-->
				<!-- OFFER_IMG START-->
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="offer_img">
						<img src="<?php bloginfo('template_directory') ?>/img/offer-img.jpg" alt="Offer" />
						<div class="offer-text">
							<h2>Sale</h2>
							<p>up to</p>
							<h2 class="amout">30</h2>
						</div>
					</div>
				</div>
				<!-- OFFER_IMG END-->
			</div>
		</div>
		</div>
		<div class="logo_news_latter_area">
			<div class="container">
				<div class="row">
					<!-- NEWS-LETTER-AREA START-->
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<div class="news-letter news-home-3">
							<h2>send newsletter</h2>
							<form action="#">
								<span class="input-box">
									<i class="fa fa-envelope"></i><input type="text" name="Email" placeholder="Email"/>
								</span>
								<input type="button" value="Send" />
							</form>
						</div>
					</div>
					<!-- NEWS-LETTER-AREA END-->
					<!-- LOGO-BAND-AREA START-->
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 logo-band">
						<h3 class="area-heading">Logo Brands</h3>
						<div class="logo-area-4">
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_1.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_2.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_3.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_4.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_5.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_2.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_1.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_3.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_2.png" alt="Logo" />
									</div>
								</a>
							</div>
							<div class="single-logo">
								<a href="#">
									<div class="logo-pic">
										<img src="<?php bloginfo('template_directory') ?>/img/logo_band/logo_5.png" alt="Logo" />
									</div>
								</a>
							</div>
						</div>
					</div>
					<!-- LOGO-BAND-AREA END-->
				</div>
			</div>
		</div>

<?php get_footer() ?>