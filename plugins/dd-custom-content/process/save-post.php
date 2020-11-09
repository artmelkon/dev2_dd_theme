<?php
/**
 * 
 * Digital Decor Custom Content CPT
 * 
 */

 // Exit if accessed directly.
 if( ! defined( 'ABSPATH' ) ) exit( __( 'Np Trespassing!', 'dd-custom-content' ) );

function dd_custom_content_save_post_admin( $post_id, $post, $update ) {
  $custom_content_data        = get_post_meta( $post_id, 'custom_content_data', true );
  $custom_content_data        = empty( $custom_content_data) ? [] : $custom_content_data;
  
}