<?php
/**
 *  @title: Functions page created
 *  @author: Arthur Melkonyan
 *  @Website: https://digitaldecor.com
 */

// Settings
define('DD_DEV_MODE', true);

// Includes
include( get_theme_file_path( '/inc/front/enqueue.php' ) );
include( get_theme_file_path( '/inc/setup.php' ) );
include( get_theme_file_path( '/class-wp-bootstrap-navwalker.php') );
include( get_theme_file_path( '/inc/theme-customizer.php' ) );
include( get_theme_file_path( '/inc/customizer/social.php' ) );
include( get_theme_file_path( '/inc/customizer/slider.php' ) );
include( get_theme_file_path( '/inc/customizer/copyright.php' ) );
include( get_theme_file_path( '/inc/customizer/misc.php' ) );
include( get_theme_file_path( '/inc/footer-widgets.php' ) );
include( get_theme_file_path( '/inc/customizer/enqueue.php' ) );
include( get_theme_file_path( '/inc/functions-room.php' ) );

// Hooks
add_action( 'wp_enqueue_scripts', 'dd_enqueue_scripts' );
add_action( 'after_setup_theme', 'dd_setup_theme' );
add_action( 'after_setup_theme', 'register_navwalker' );
add_action( 'after_setup_theme', 'digitaldecor_add_woocommerce_support' );
add_action( 'customize_register', 'dd_customize_register' );
add_action( 'widgets_init', 'dd_footer_widgets' );
add_action( 'customize_preview_init', 'dd_customize_preview_init' );
add_action( 'woocommerce_before_shop_loop_item_title', 'dd_template_loop_product_thumbnail', 10 );
// add_action( 'woocommerce_before_shop_loop_item', 'dd_wc_template_loop_product_link_open', 10 );
add_action( 'init', 'wc_remove_breadcrumbs');

/* working on this section now
=============================================== */

add_action( 'woocommerce_before_single_product_summary','dd_product_design_toolbar', 11); // loded to header-room.php file
// add_action( 'wp_ajax_load_design_products', 'load_design_products_callback' );
// add_action( 'wp_ajax_nopriv_load_design_products', 'load_design_products_callback' );


/* ============================================== */

add_filter( 'get_custom_logo', 'change_logo_class' );
/**
 * To change add to cart text on single product page
 */
add_filter( 'woocommerce_product_single_add_to_cart_text', 'dd_wc_custom_single_add_to_cart_text', 10 );

// In this section we remove action in content-product.php
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

// To remove Woocommerce actions in content-single-product.php
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
// remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );


// Shortcodes


