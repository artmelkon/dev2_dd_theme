<?php
/**
 * This page will display custom cart
 * 
 * @author Arthur Melkonyan
 * 
 */

 global $post, $woocommerce, $product;
 	// if( $_GET['cart_item_key'] ){
	// 	if(!$get_cart_item_key){
	// 			$get_cart_item_key = $_GET['cart_item_key'];
  //   }
	// }
	
		$get_cart_item_key = isset( $_GET['cart_item_key'] ) ? $_GET[ 'car_item_key' ] : '';
			
		foreach ( $woocommerce->cart->get_cart() as $cart_item_key => $cart_item ) {
			if( isset( $get_cart_item_key) && $get_cart_item_key === $cart_item_key ) 
			echo $cart_item_key;
			// if ($cart_item_key == $get_cart_item_key ) {
			// 		$custom_selections = $cart_item['tmcartepo'];
			// 		if(count($custom_selections)>0){
			// 			foreach($custom_selections as $custom_selection){
			// 				if(strtoupper($custom_selection['name']) == 'COLOR 1' && $custom_selection['value']){
			// 						$layer2 = $custom_selection['value'];
			// 				}
			// 				if(strtoupper($custom_selection['name']) == 'COLOR 2' && $custom_selection['value']){
			// 						$layer3 = $custom_selection['value'];
			// 				}
			// 				if(strtoupper($custom_selection['name']) == 'COLOR 3' && $custom_selection['value']){
			// 						$layer4 = $custom_selection['value'];
			// 				}                        
			// 				if(strtoupper($custom_selection['name']) == 'AGING OVERLAY' && $custom_selection['value']){
			// 						$aging = $custom_selection['value'];
			// 				}
			// 				if(strtoupper($custom_selection['name']) == '3D SHADING' && $custom_selection['value']){
			// 						$threed = $custom_selection['value'];
			// 				}
			// 				if(strtoupper($custom_selection['name']) == 'TEXTURE LOOK' && $custom_selection['value']){
			// 						$texture = $custom_selection['value'];
			// 				}
			// 				if(strtoupper($custom_selection['name']) == 'PATTERN SCAL' && $custom_selection['value']){
			// 						$patternscale = $custom_selection['value'];
			// 				}
			// 			}
			// 		}
			// 		$item_variations = $cart_item['variation'];
			// 		if($item_variations['attribute_pa_substrate']){ 
			// 				$get_substrate = $item_variations['attribute_pa_substrate'];   
			// 		}
			// 		$item_meta = $cart_item['pricing_item_meta_data'];
			// 		$get_width = $item_meta['length'];
			// 		if(empty($get_width)) {
			// 				$get_width = 0;
			// 		} 
			// 		$get_height = $item_meta['width'];
			// 				if(empty($get_height)) {
			// 				$get_height = 0;
			// 		} 
			// 		$get_square = $get_width * $get_height;
			// 		$get_total_price = wc_price($cart_item['data']->price);
			// }
		}
	// }