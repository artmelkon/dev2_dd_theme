<?php
/**
 * Filename - content-pattern.php
 * This is the patterns page display all the patterns for the different wall papers.
 * 
 * We are seperating the patterns from the showroom page because it is too heavy.  
 * Seperating it into its own page will optimize showroom, and allow users to focus on
 * picking the patterns.
 * 
 * @category   	themes
 * @package    	Digital Decorf
 * @author			Arthur Melkonyan
 * @copyright 	2018-2019 GP Color Imaging Group
 * @license    	http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version  	  1.0.0
 * @link     	  http://10.0.5.118:8888/patterns/
 * @see      	  n/a
 * @since    	  File available since Release 1.6.8.1
 * @deprecated	File deprecated in Release n/a
 */

 

 global $product, $post;

 if( empty( $product ) || ! $product->is_visible() ) {
	 return;
 }
	$permalink 	= get_permalink( $post->ID );
	if( ! isset( $_GET[ 'color1' ] ) ):
		$designname 	=	$post->post_title;
		$layercount 	=	get_post_meta( $post->ID, 'wpcf-number-of-layers', true );
		$layer2 			= get_post_meta ($post->ID,'wpcf-layer-2-color',true );
		$layer3 			= get_post_meta ($post->ID,'wpcf-layer-3-color',true );
		$layer4 			= get_post_meta ($post->ID,'wpcf-layer-4-color',true );
	else:
		$permalink .='?color1=' . $_GET[ 'color1' ] . '&color2=' . $_GET[ 'color2' ] . '&color3=' . $_GET[ 'color3' ];
	endif;
?>
<a class="patterns-thumbnail-wrapper img-responsive" href="<?php echo $permalink ?>">
	<!-- <h6><?php echo $designname; ?></h6> -->
	<div class="TEXTURE_pattern_thmb" style="background-image: url(&quot;&quot;)"></div>
	<div class="MASK2_pattern_thmb" data-src="" style="background-image: url(<?php echo site_url('wp-content/uploads/assets/patterns/') . $designname;?>/web/01/51/mask2.png);"></div>
	<div class="MASK3_pattern_thmb" data-src="" style="background-image: url(<?php echo site_url('wp-content/uploads/assets/patterns/') . $designname;?>/web/01/51/mask2.png);"></div>
	<div class="CLASS2_pattern_thmb" data-src="" style="background-image: url(<?php echo site_url('wp-content/uploads/assets/patterns/') . $designname;?>/web/01/51/class2.png);background-color: <?php echo $layer2; ?> ;  "></div>
	<div class="CLASS3_pattern_thmb" style="background-image: url(<?php echo site_url('wp-content/uploads/assets/patterns/') . $designname;?>/web/01/51/class3.png); background-color: <?php echo $layer3; ?> ;  "></div>
	<div class="CLASS4_pattern_thmb" style="background-image: url(<?php echo site_url('wp-content/uploads/assets/patterns/') . $designname;?>/web/01/51/class4.png); background-color: <?php echo $layer4; ?> ;"></div>
	<div class="HL_pattern_thmb" data-src="<?php echo site_url('wp-content/uploads/assets/patterns/') . $designname;?>/web/01/51/hl.jpg" style="background-image: url(<?php echo site_url('wp-content/uploads/assets/patterns/') . $designname; ?>/web/01/51/hl.jpg)"></div>
	<div class="AGING_pattern_thmb" style="background-image: url(&quot;&quot;)"></div>
	<div class="threeDM_pattern_thmb" style="background-image: url(<?php echo site_url('wp-content/uploads/assets/patterns/').$designname; ?>/web/01/51/dddMedium.jpg); opacity: 0;"></div>
	<div class="threeDS_pattern_thmb" style="background-image: url(<?php echo site_url('wp-content/uploads/assets/patterns/').$designname; ?>/web/01/51/dddSharp.jpg); opacity: 0;"></div>
</a>