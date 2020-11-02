<?php

function dd_setup_theme() {
  add_theme_support( 'title-tag' );
  /*
  * Enable support for Post Thumbnails on posts and pages.
  *
  * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
  */
  add_theme_support( 'post-thumbnails' );
  // custom logo
  add_theme_support( 'custom-logo', [
    'width'         =>  154,
    'height'        =>  27,
    'flex-width'    =>  true,
    'flex-height'   =>  true,
  ]);

  register_nav_menus([
    'primary'       =>  __( 'Primary Menu', 'digitaldecor') ,
    'footer'        =>  __( 'Footer Menu', 'digitaldecor' ),
    'front-page'    =>  __( 'Front Page Menu', 'digitaldecor' )
  ]);


  /**
   *  Slider - Custom Image Size
   */
    add_image_size( 'dd_slider', 1920, 800, [ 'center', 'center' ] );
    add_image_size( 'dd_excerpt_img', 250, 120, [ 'center', 'center' ] );
}

function register_navwalker() {
  require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

function change_logo_class($html) {
  $html = str_replace( 'custom-logo', 'logo__image', $html );
  $html = str_replace( 'logo__image-link','navbar-brand logo', $html );

  return $html;
}

function digitaldecor_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}

/**
 * Insert the opening anchor tag for products in the loop.
 */
function dd_wc_template_loop_product_link_open() {
  global $product;

  $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );

  echo '<a href="' . esc_url( $link ) . '" class="patterns-thumbnail-wrapper img-responsive">';
}

function dd_template_loop_product_thumbnail() {
  get_template_part( 'template-parts/content', 'pattern' );
}

function dd_wc_custom_single_add_to_cart_text() {
  return __( 'Buy Now', 'digitaldecor' );
}

/*
** -- SB code
*/
  
function load_design_products_callback() {
  $result = array();    
  $output = '';
  $result['status'] = 0;
    if($_POST['show_products'] == 'yes'){
        $output.= '<div class="product-filters-sidebar">
                        <div class="product-filter-box applied-filters">
                            <h3>Applied Filters<a href="#" class="reset-filters">Reset</a></h3>
                            <ul>
                              
                            </ul>
                        </div>';
        $product_filters = array('product_cat' => 'Category', 'producttype' => 'Product Type', 'color_theme' => 'Color Themes');
        foreach($product_filters as $filter_type => $filter_label){
            $terms = get_terms( array(
                'taxonomy' => $filter_type,
            ));  
            if(count($terms)>0){
                $output.= '<div class="product-filter-box">
                            <h3>'.$filter_label.'</h3>
                            <ul>';
                foreach($terms as $term){
                    $output.= '<li>
                                    <input type="checkbox" id="'.$filter_type.'_'.$term->slug.'" class="product-filter" name="product_filters[]" data-filter="'.$filter_type.'" value="'.$term->slug.'" ><label for="'.$filter_type.'_'.$term->slug.'">'.$term->name.'</label>
                                </li>';
                }
                $output.= '</ul>';
                if(count($terms)>5){
                    $output.= '<div class="show-more-filters">more...</div>';    
                }
                $output.= '</div>';
                
            }
        }                
        $output.= '</div>';
            
        $products = get_posts('post_type=product&posts_per_page=-1'); 

        if(count($products)>0){
            $new_product_settings = get_option('new_product_settings');
            $new_product_days = 0;
            if($new_product_settings['enable_new_product_sticker'] == 'yes' && $new_product_settings['new_product_sticker_days'] > 0){
                $new_product_days = $new_product_settings['new_product_sticker_days'];
            }
            $output.= '<div class="design-products">';
            foreach($products as $product){
                $postdate = get_the_time( 'Y-m-d', $product );
                $postdatestamp 	= strtotime( $postdate );
                $newness 		= $new_product_days;
                $new_badge = '';
                if ( ( time() - ( 60 * 60 * 24 * $newness ) ) < $postdatestamp && $new_product_days > 0 ) { 
                    $new_badge = '<div class="new-product-badge">NEW</div>';    
                }
                $output.= '<div class="product-item">
                            <div class="product-item-thumb">
                                <a href="'.get_permalink($prod->ID).'">'.$new_badge.'<img class="lazysvg has-svgimage" data-src="'.site_url('wp-content/uploads/products/'.get_the_title($prod->ID).'.svg').'" /><img class="lazysvg has-jpgimage" data-src="'.site_url('wp-content/uploads/products/'.get_the_title($prod->ID).'_THUMBNAIL.jpg').'" /></a>
                            </div>                           
                        </div>';
            }
            $output.= '</div>';
        }
        $result['html'] = $output;
        $result['status'] = 1;
        
    }
    echo json_encode($result);    
    die();
}

function wc_remove_breadcrumbs() {
  remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
}