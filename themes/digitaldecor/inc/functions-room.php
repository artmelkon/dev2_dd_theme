<?php
/**
 * Room page functions
 */

/*  Room toolbar
====================================== */
function dd_product_design_toolbar() {
	global $post, $product, $woocommerce;

	$postid = get_the_ID();
	$post = get_post($postid);
	$product_content = apply_filters('the_content',$post->post_content);
	$designname = strtoupper($post->post_name);
	$color_class = '';  

	$layercount     =   get_post_meta ( $post->ID,'wpcf-number-of-layers', true );
	$layer2         =   isset( $_REQUEST[ 'color1' ] )      ? $_REQUEST[ 'color1' ]     : get_post_meta( $post->ID,'wpcf-layer-2-color', true );
	$layer3         =   isset( $_REQUEST[ 'color2' ] )      ? $_REQUEST[ 'color2' ]     : get_post_meta( $post->ID,'wpcf-layer-3-color', true );
	$layer4         =   isset( $_REQUEST[ 'color3' ] )      ? $_REQUEST[ 'color3' ]     : get_post_meta( $post->ID,'wpcf-layer-4-color', true );
	$aging          =   isset( $_REQUEST['aging'] )         ? $_REQUEST['aging']        : "none";
	$threed         =   isset( $_REQUEST['3d'] )            ? $_REQUEST['3d']           : "none";
	$aging          =   isset( $_REQUEST['texture'] )       ? $_REQUEST['texture']      : "none";
	$patternscale   =   isset( $_REQUEST['patternscale'] )  ? $_REQUEST['patternscale'] : get_post_meta( $post->ID, 'wpcf-scale', true );
	
	if($layercount == 1){
		$color_class = 'single-color';    
	} elseif($layercount == 2) {
		$color_class = 'two-colors';     
	}
	
	$get_substrate = '';
	$get_width = "0";
	$get_height = "0";
	$get_square = 0;
	$get_total_price = '$0.00';


	get_template_part( 'template-parts/wc/content', 'wc-cart' );


}