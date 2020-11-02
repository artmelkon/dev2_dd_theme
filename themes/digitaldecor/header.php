<?php
/**
 * Header file for the Digital Decor WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Digital Decor
 * @since Digital Decor 1.0
 */

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php  wp_head(); ?>
  </head>
<body <?php body_class(); ?>>
  <header class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class=" container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo">
        <!-- Top Logo
        ============================== -->
        <?php 
          if( has_custom_logo( 'custom-logo' ) ) {
            // the_custom_logo( 'custom-logo');
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            echo '<img src="' . $image[0] . '" class="logo__image">';               
          } else {
            ?>
              <h3 class="logo__title"><?php bloginfo( 'name' ); ?></h3>
            <?php
          }
        ?>
      </a>
        <!-- Shopping Cart
        ============================= -->
        <span class="row ml-2 order-sm-2">
          <?php
            if( get_theme_mod( 'dd_header_show_user' ) ) :
              ?>
              <!-- Top User Icon 
              ================================ -->
                <span id="top-user">
                  <?php
                    if( is_user_logged_in() ) :
                  ?>
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>">
                  <?php else: ?>
                    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>">
                  <?php endif; ?>
                  <i class="fa fa-user fa-lg <?php echo ( is_user_logged_in() ) ? 'text-success' : ''; ?>"></i></a>
                </span>
              <?php
            endif;

            if( get_theme_mod( 'dd_header_show_cart' ) ) :
              ?>
              <!-- Top Shopping Cart Icon 
              ================================ -->
              <span id="shopping-cart">
                <a href="#" title="<?php _e( 'View your cart'); ?>" data-toggle="modal" data-target="#cartModal">
                  <i class="fa fa-shopping-cart fa-lg"></i>
                  <span class="badge badge-pill badge-light shopping-cart__badge"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                </a>
              </span>
              <?php
            endif;
          ?>
        </span>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Top Navigation 
        =========================== -->
        <?php
          if( has_nav_menu('primary')) {
            wp_nav_menu([
              'theme_location'        =>  'primary',
              'container'             =>  'nav',
              'container_id'          =>  'mainNav',
              'container_class'       =>  'collapse navbar-collapse front-nav',
              'menu'                  =>  'ul',
              'menu_id'               =>  'front-nav',
              'menu_class'            =>  'nav navbar-nav ml-auto front-nav__list',
              'fallback_cb'           =>  'WP_Bootstrap_NavWalker::fallback',
              'walker'                =>  new WP_Bootstrap_NavWalker(),
              'depth'                 =>  1
            ]);      
          }
        ?>
      <!-- Top Social Icons
      ============================== -->
      <div class="socialout ml-5 d-none d-lg-block">
        <ul class="nav socialout__list">
          <?php
            if( get_theme_mod( 'dd_facebook_handle' )) {
              ?>
              <li class="nav-item mr-2 d-none d-md-inline">
                <a href="https://facebook.com/<?php echo get_theme_mod( 'dd_facebook_handle' ); ?>" class="socialout__link"><span><i class="fa fa-facebook-square"></i></span></a>
              </li>
              <li class="nav-item mr-2 d-none d-md-inline">
                <a href="https://instagram.com/<?php echo get_theme_mod('dd_instagram_handle'); ?>" class="socialout__link"><span><i class="fa fa-instagram"></i></span></a></li>
              <li class="nav-item mr-2 d-none d-md-inline">
                <a href="https://pinterest/<?php echo get_theme_mod( 'dd_pinterest_handle' ); ?>" class="socialout_link"><span><i class="fa fa-pinterest-square"></i></span></a>     
              </li>
              <?php
            }
          ?>
        </ul>
      </div>
    </div> 
  </header>
  <!-- Cart Modal
  ============================== -->
  <div id="cartModal" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">My Cart</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php
            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
              $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
              $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

              if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                ?>
                <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                  <td class="product-remove">
                    <?php
                      echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                        'woocommerce_cart_item_remove_link',
                        sprintf(
                          '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                          esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                          esc_html__( 'Remove this item', 'woocommerce' ),
                          esc_attr( $product_id ),
                          esc_attr( $_product->get_sku() )
                        ),
                        $cart_item_key
                      );
                    ?>
                  </td>

                  <td class="product-thumbnail">
                  <?php
                  $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                  if ( ! $product_permalink ) {
                    echo $thumbnail; // PHPCS: XSS ok.
                  } else {
                    printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                  }
                  ?>
                  </td>

                  <td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                  <?php
                  if ( ! $product_permalink ) {
                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                  } else {
                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                  }

                  do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                  // Meta data.
                  echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                  // Backorder notification.
                  if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                    echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                  }
                  ?>
                  </td>

                  <td class="product-price" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
                    <?php
                      echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                    ?>
                  </td>

                  <td class="product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                  <?php
                  if ( $_product->is_sold_individually() ) {
                    $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                  } else {
                    $product_quantity = woocommerce_quantity_input(
                      array(
                        'input_name'   => "cart[{$cart_item_key}][qty]",
                        'input_value'  => $cart_item['quantity'],
                        'max_value'    => $_product->get_max_purchase_quantity(),
                        'min_value'    => '0',
                        'product_name' => $_product->get_name(),
                      ),
                      $_product,
                      false
                    );
                  }

                  echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                  ?>
                  </td>

                  <td class="product-subtotal" data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                    <?php
                      echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                    ?>
                  </td>
                </tr>
                <?php
              }
            }
            if( WC()->cart->get_cart_contents_count() <= 0) {
              esc_html_e( 'Your Cart is Empty!', 'digitaldecor' ) ;
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  
