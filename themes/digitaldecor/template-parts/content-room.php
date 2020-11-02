<?php
/**
 *  This the Room page
 */
?>
<!--  The Room goes here -->
<div class="zoom-in mainGroupImage the-room" id="document">
  <div id="TEXTURE_spr"></div>
  <div id="MASK_spr"></div>
  <div id="CLASS2_spr"></div>
  <div id="CLASS3_spr"></div>
  <div id="CLASS4_spr"></div>
  <div id="HL_spr"></div>
  <div id="AGING_spr"></div>
  <div id="threeD"></div>
  
  <div id="showroom_spr">
      <img id="showroomimage" src="<?php echo site_url( '/wp-content/uploads/assets/Room1.png' ); ?>" data-was-processed="true">
  </div>
</div>

 <!-- bottom toolbar -->
 <div id="div-design-bottom-panel" class="design-bottom-panel d-flex justify-content-end">
  <div class="bottom-left-panel">
      <a href="#" class="button button-arrows">Interior Example</a>
  </div>
      <div class="bottom-right-panel">
      <?php 
        // validateing if user editing product in the shopping cart
        $classes = get_body_class(); ?>

          <?php if( is_user_logged_in() && !in_array( 'edit-item', $classes ) ){ ?>
              <!-- <div id="ppr-mydesign">
                Add to My Design
              </div> -->
              <a id="btn-add-to-favorite" href="<?php echo get_permalink($product->id); ?>" title="<?php _e( 'Add to Design' ); ?>" data-product="<?php echo $product->id; ?>" class="button button-like button-add-to-favorite">
          <?php } elseif (in_array( 'edit-item', $classes ) ) { ?>
              <a id="btn-like-idle" class="button">
          <?php } else { ?>
              <!-- <a id="btn-like-login" data-toggle="modal" data-target="#loginModal" class="button button-login"> -->
              <a id="btn-like-login" class="button button-login" href="<?php echo esc_url (home_url( '/' ) ); ?>my-account/">
          <?php } ?><i class="fa fa-heart"></i></a>
          <?php if( $_GET['cart_item_key'] || $_GET['tm_cart_item_key'] ){ ?>
              <a id="btn-shopping-cart" title="<?php _e( 'Add to cart' ); ?>" class="button">
          <?php }else{ ?>
              <a id="show-product-calc" href="#product-calc" class="action-design-options button button-cart" title="<?php _e( 'Add to cart' ); ?>">
          <?php } ?><i class="fa fa-cart-plus"></i></a>
      </div>
    </div>
  </div>
</div>
<!--  END OF TEMPORARY GALLERY -->

<div id="dom-target" style="display: none;">

</div>
<div id="texture-mask" style="display:none;">
<?php $texture_id = get_the_title($post->ID);	
echo $texture_url = '/wp-content/uploads/products/'.$texture_id.'_MASK.png'; ?>
</div>
<div id="layerimg" style="display:none;">
  <?php $layer_id = get_the_title($post->ID);	
echo $layer_url = '/wp-content/uploads/products/'.$layer_id.'_HL.jpg'; ?>
</div>  
<div id="designdetail" style="float:left;">
  <div style="margin-left:10px;padding-bottom:10px;float:left;display:none;">
    <script>
        var userrole_element = document.getElementById("userrole");

        if ( userrole_element != null) {
          var userrole = userrole_element.innerHTML;
          if ((userrole=="administrator") || (userrole=="shop_manager")) {
            document.write ("<input id=\"getdesignurl\" onclick=\"opendesignurl();\" type=\"button\" value=\"Open Full Screen\">") ;
          }
        }
   	</script>      
  </div>
</div>
  
  
<div id="clearfloat" style="clear: both;display:none;"></div>  

<div id="margin"></div>