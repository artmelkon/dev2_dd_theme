<?php
/** * This is the top navbar for the Room page
* Room page
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
*  This will load navigaton menu for room
*  View, Texture, Design, Add to cart and etc...
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials *
* @package WordPress * @subpackage Digital_Decor * @since 1.0 * @version 1.0 
* @ modified by Arthur Melkonkyan
*/
$file_uri = get_theme_file_uri();


//siteorigin_unwind_display_logo();
// $custom_logo_id = get_theme_mod( 'custom_logo' );
// $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
// $file_uri = get_theme_file_uri();
// $home_url = esc_url( home_url( '/' ) );


?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="navbar navbar-expand-md navbar-dark bg-dark" id="product-design-toolbar">
	<div class="container">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo">
		<?php
			if( has_custom_logo() ) {
		?>
			<img src="<?php echo get_theme_file_uri( '/assets/images/digital-decor-logo-dark.png' ); ?>" alt="<?php get_bloginfo( 'name' ); ?>" class="img-fluid">
		<?php } else { ?>
					<h3 class="logo__title"><?php bloginfo( 'name' ); ?></h3>
		<?php
			}
		?>
		</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mobile_menu">
				<span class="navbar-toggler-icon"></span>
		</button>
		<nav class="navbar-collapse collapse" id="mobile_menu"><!--  right-main -->
			<ul class="navbar-nav ml-auto">
				<!-- <li>
						<a href="#zoom-box" id="toggle-zoom-design" >
								<span class="product-design-toolbar__icon"><noscript><img src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://dev.digitaldecor.com/wp-content/themes/Unwind-Child/images/builder/view-icon.png"></noscript><img class="lazyload" src='https://cdn.shortpixel.ai/client/q_lqip,ret_wait/https://dev.digitaldecor.com/wp-content/themes/Unwind-Child/images/builder/view-icon.png' data-src="https://cdn.shortpixel.ai/client/q_glossy,ret_img/https://dev.digitaldecor.com/wp-content/themes/Unwind-Child/images/builder/view-icon.png"></span>
								<span class="product-design-toolbar__icon-title">View</span>
						</a>
				</li> -->
				<li class="products-page navbar-item">
					<div href="#all-patterns" id="show-design-products" class="action-design-options">
						<a href="<?php echo site_url( 'shop' ); ?>" id="show-design-products" class="action-design-options">
							<div class="product-design-toolbar__icon"><i class="fa fa-newspaper-o fa-2x"></i></div>
							<span class="product-design-toolbar__icon-title">Patterns</span>
						</a>
					</div>
				</li>
				<!-- <li class="colors-tool">
						
						<a href="#design-colors" id="show-design-colors" class="action-design-options">
								<span class="lock-swatch hidden d-none "></span>
								<span class="color-pattern "><span class="color-swatch layer4" style="background-color:#B0C6B8"></span><span class="color-swatch layer3" style="background-color:#B0C6B8"></span><span class="color-swatch layer2" style="background-color:#B0C6B8"></span></span>
								<span class="product-design-toolbar__icon-title">Colors</span>
						</a>
				</li> --> 
				<li class="color-tool">
			<?php
				// getting the array of body classes
				$classes = get_body_class();
				if( in_array ( 'edit-item', $classes ) ) {
			?>
					<a id="show-design-colors-idle" style="color: #616161;">
						<div class="product-design-toolbar__icon"><i class="fa fa-paint-brush fa-2x"></i></div>
						<span class="product-design-toolbar__icon-title">Colors</span>
					</a>
				</li>
				<li class="design-options">
					<a id="designOptions-idle" style="color: #616161;">
						<div class="product-design-toolbar__icon"><i class="fa fa-magic fa-2x"></i></div>
						<span class="product-design-toolbar__icon-title">Effects</span>
					</a>							
			<?php } else  {?>
					<a href="#design-colors" id="show-design-colors" class="action-design-options">
						<span class="lock-swatch hidden d-none "></span>
						<div class="product-design-toolbar__icon"><i class="fa fa-paint-brush fa-2x"></i></div>
						<span class="product-design-toolbar__icon-title">Colors</span>
					</a>
				</li>
				<li class="design-options">
					<a href="#design-options" id="designOptions" class="action-design-options">
						<div class="product-design-toolbar__icon"><i class="fa fa-magic fa-2x"></i></div>
						<span class="product-design-toolbar__icon-title">Effects</span>
					</a>
			<?php } ?>
				</li>
				<li class="favorites">
						<a href="#my-stuff" id="show-mystuff" class="action-design-options">
								<div class="product-design-toolbar__icon"><i class="fa fa-heart fa-2x "></i></div>
								<span class="product-design-toolbar__icon-title">My Designs</span>
						</a>
				</li>
				<li class="user-icon">
					<span class="product-design-toolbar__icon-title">
			<?php
				if( is_user_logged_in() ) {
			?>
					<a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>" id="myaccount" class="action-design-options" title="<?php _e( 'My Account', 'wootheme' ); ?>">
						<div class="product-design-toolbar__icon"><i class="fa fa-user fa-2x text-success"></i></div>
						<?php _e( 'My Account', 'wootheme' ); ?></span>
				<?php } else { ?>
					<a href="<?php echo get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ); ?>" title="<?php _e( 'Login / Register', 'wootheme' ); ?>" class="action-design-options">
					<div class="product-design-toolbar__icon"><i class="fa fa-user fa-2x"></i></div>
					<?php _e( 'Login / Register', 'wootheme' ); ?></span>
				<?php
					}
				?>
					</a>
				</li>
				<li class="my-cart">
						<a href="#shopping-cart" id="show-shopping-cart" class="action-design-options">
								<div class="product-design-toolbar__icon"><i class="fa fa-shopping-cart fa-2x"></i></div>
								<span class="product-design-toolbar__icon-title">View Cart</span>
								<span class="wc-item-count badge badge-light badge-pill"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
						</a>
				</li>
			</ul>
		</nav>
	</div>
	</header>

  <div id="primary-room" class="content-area clearfix">
<?php

    // get_template_part( 'template/builder', 'effectpopuptemlate' );
?>
