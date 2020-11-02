<?php
/**
 * Digital Decor Custom Content CPT
 * 
 */

 // Exit if accessed directly.
 if( ! defined( 'ABSPATH' ) ) exit( __( 'Np Trespassing!', 'dd-custom-content' ) );

function dd_custom_content_activate_plugin() {
  // validateiing if WordPress is version 5.0 or higher
  if( version_compare( get_bloginfo( 'version' ), '5.0', '<' ) ) {
    wp_die( __( 'You must update Wordpress to use this plugin', 'dd-custom-content' ) ); 
  }
}