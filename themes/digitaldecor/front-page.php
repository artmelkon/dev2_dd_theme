<?php
/**
 *  Template Name: Front Page
 * 
 *  @package Digital Decor
 *  @subpackage Digital Decor Theme
 *  @version: 1.0
 */
if(is_front_page()):

	get_header('front-page' );

?>
	<!-- FRONT PAGE IMAGE SLIDER 
	============================== -->
<div id="home-section" class="jumbotron-fluid">
	<?php
		if( is_front_page() ) {
			get_template_part( 'template-parts/content', 'slider' );
		}
	?>
</div>
	<!-- ABOUT DIGITAL DECOR SECTION
	 ========================= -->
	<section id='about-section'>
		<div class="container">
			<div class="row">
				<div class="col">
					<?php
						$post_id			=	5; // About Page
						$thePost			= get_post($post_id);
						$post_title		= $thePost->post_title;
						$post_content	= $thePost->post_content
					?>
					<h3 class="section__header"><?php echo $post_title; ?></h3>
					<?php echo $post_content; ?>
					<a href="" class="btn btn-danger rounded-pill text-white">Products</a>
				</div>
			</div>
		</div>
	</section>
	<!-- PRODUCTS SECTION
	============================ -->
	<section id="products-section">
		<div class="container">
			<div class="row row-cols-1 row-cols-3 justify-content-between">
				<?php

					$prod = [
						'post_type'				=>	'products',
						'posts_per_page'	=>	4,
						'orderby'					=>	'ID',
						'order'						=>	'ASC'
					];

					$postHeader = $prod['post_type'];
					echo '<h3 class="section__header col-12">' . $postHeader . '</h3>';

					$query = new WP_Query( $prod );
					while($query->have_posts() ):
						$query->the_post();
				?>
					<div class="card border-0 product__card" style="width: 10rem">
						<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="product__image" id="<?php echo $post->ID; ?>">
						<div class="card-body text-center">
							<h6 class="card-title product__title d-none d-md-block"><?php the_title(); ?></h6>
							<a href="#paper" class="stretched-link"></a>
							<!-- <a href="#" class="products__btn products__btn--bgcolor btn btn-block rounded-pill">More...</a> -->
						</div>
					</div>
				<?php
					endwhile;
					wp_reset_postdata();
				?>
			</div>
		</div>
	</section>

	<!-- APPLICATION SECTION
	============================ -->
	<section id="application-section">
			<div class="container">
				<div class="row row-cols-1 row-cols-md-2">
					<?php
						global $post;
						global $more;

						$arg = [
							'post_type' 			=> 'application',
							'posts_per_page'	=>	6,
							'orderby'					=> 'ID',
							'order'						=> 'ASC'
						];

						$postHeader = $arg[ 'post_type' ];
						echo '<h3 class="section__header col-12">' . $postHeader . '</h3>';
						$query = new WP_Query( $arg );
						while( $query->have_posts() ) {
							$query->the_post();
							$more = 0;
							?>
							<div class="application col col-sm-4 mb-4">
								<div class="card">
									<a href="<?php the_permalink(); ?>">
										<img src="<?php the_post_thumbnail_url(); ?>" class="application__image card-img-top">
									</a>
									<div class="card-body">
										<h6 class="application__title card-title font-weight-bold"><?php the_title(); ?></h6>
										<div class=" d-none d-md-block">
										<?php the_content( __( 'More...', 'digitaldecor' ) ); ?>
										</div>
									</div>
								</div>
							</div>
							<?php
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
	</section>
	<!-- POPULAR PRODUCTS
	================================== -->
	<section id="popular-product-section">
		<div class="container">
			<div class="row">
				<h3 class="section__header col-12">Popular Products</h3>
				<?php echo do_shortcode( '[products limit="4" columnts="4" orderby="popularity"]' ); ?>
			</div>
		</div>
	</section>
	<!-- Contact Form 
	========================== -->
	<section id="contact-section">
		<div class="container">
			<h3 class="section__header">Contact Us</h3>
			<?php echo do_shortcode( '[digitaldecor_contact_form]' ); ?>
		</div>
	</section>
<?php
else:
	esc_html_e( 'Error 404 - Home Page not found', 'digitaldecor');
endif;
get_footer();	