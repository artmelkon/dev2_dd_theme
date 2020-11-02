<?php

function dd_enqueue_scripts() {
  $uri = get_theme_file_uri();
  $ver = DD_DEV_MODE ? time() : false;
  // styles
  wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@400;600;700&display=swap' );
  wp_register_style('dd-main-style', $uri . '/assets/css/main.css', [], $ver );
  wp_register_style( 'bootstrap-style', $uri . '/assets/bootstrap/css/bootstrap.css', [], $ver );
  wp_register_style( 'fontawesome', $uri . '/assets/fontawesome/css/font-awesome.css',  [], $ver );
  wp_register_style( 'flexslider', $uri . '/assets/flexslider/flexslider.css', [], $ver );
  wp_register_style( 'front-page-style', $uri . '/assets/css/front-page.css', [], $ver );
  wp_register_style( 'dd-woocommerce-style', $uri . '/woocommerce/style.css', [], $ver );
  wp_register_style( 'shop-products-style', $uri . '/assets/css/shop-patterns.css', [], $ver );
  wp_register_style( 'room-style', $uri . '/assets/css/room.css', [], $ver );

  wp_enqueue_style( 'google-fonts' );
  wp_enqueue_style( 'dd-main-style' );
  wp_enqueue_style( 'bootstrap-style' );
  wp_enqueue_style( 'fontawesome' );


  // javascript
  wp_register_script( 'bootstrap-js', $uri . '/assets/bootstrap/js/bootstrap.min.js', [ 'jquery' ], $ver, true );
  wp_register_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', ['jquery'], '', true );
  wp_register_script( 'jquery-flexslider-js', $uri . '/assets/flexslider/jquery.flexslider.js', ['jquery'], '2.7.2', true );
  wp_register_script( 'flexslider-js', $uri . '/assets/flexslider/flexslider.js', ['jquery'], '2.7.2', true );
  wp_register_script( 'functions-js', $uri . '/assets/js/functions.js', [ 'jquery' ], $ver, true );
  wp_register_script( 'infinite-scroll-js', $uri . '/assets/js/infinite-scroll.pkgd.min.js', [ 'jquery' ], $ver, false );
  wp_register_script( 'isotope-js', $uri . '/assets/js/isotope.pkgd.min.js', [], '3.0.6', true );
  wp_register_script( 'room-js', $uri . '/assets/js/functions-room.js', ['jquery'], $ver, true );
  wp_register_script( 'front-page-js', $uri . '/assets/js/functions-front-page.js', ['jquery'], $ver, true );

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap-js' );
  wp_enqueue_script( 'functions-js' );
  wp_enqueue_script( 'popper-js' );

  if( is_front_page() ):
    wp_enqueue_style( 'flexslider' );
    wp_enqueue_style( 'front-page-style' );
    wp_enqueue_style( 'dd-woocommerce-style' );
    wp_enqueue_script( 'jquery-flexslider-js' );
    wp_enqueue_script( 'flexslider-js' );
    wp_enqueue_script( 'front-page-js' );
    wp_dequeue_script( 'functions-js' );
  endif;

  if( is_shop() ):
    wp_enqueue_style( 'shop-products-style' );
    // wp_enqueue_script( 'infinite-scroll-js');
    wp_enqueue_script( 'isotope-js' );
  endif;

  if( is_product() ):
    wp_enqueue_style( 'room-style' );
    wp_enqueue_script( 'room-js' );
  endif;}
