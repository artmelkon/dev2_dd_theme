<?php
/**
 * Plugin Name: Digital Decor Custom Content
 * Plugin URI: https://digirtaldecor.com/
 * Description: This plugin helps to build custom content for Digital Decor This plugin is intellectual property of GP Color.
 * Version: 1.0.0
 * Author: Arthur Melkonyan
 * Author URI: https://digitaldecor.com
 * Text Domain: dd-custom-content
 *
 * @package Digital Decor
 */

 // Exit if accessed directly.
 if( ! defined( 'ABSPATH' ) ) exit( __( 'Np Trespassing!', 'dd-custom-content' ) );

// Inclujdes
include( 'inc/activate.php' );
include( 'inc/init.php' );
include( 'process/save-post.php' );

// Hooks
register_activation_hook( __FILE__, 'dd_custom_content_activate_plugin' );
add_action( 'init', 'dd_custom_content_init' );
add_action( 'save_post_custom_content', 'dd_custom_content_save_post_admin', 10, 3 );