<?php
/**
 *  CUSTOMIZER SETTINGS
 */

function dd_customize_register( $wp_customize ) {

  // echo '<pre>';
  // var_dump($wp_customize);
  // echo '</pre>';
  
  $wp_customize->get_section( 'title_tagline' )->title = 'General';

  $wp_customize->add_panel(
    'digitaldecor', [
      'title'         =>  __( 'Digital Decor Settings', 'digitaldecor' ),
      'description'   =>  '<p>Digital Decor Theme Settings</p>',
      'priority'      =>  160
    ]
  );

  /* ===================================================== *\
              THEME MICS CUSTOMIZER                    
  \* ===================================================== */
  dd_misc_customizer ( $wp_customize );

  /* ===================================================== *\
              THEME SOCIAL CUSTOMIZER                    
  \* ===================================================== */
  dd_social_customizer( $wp_customize);

  /* ===================================================== *\
              THEME CAROUSEL CUSTOMIZER                    
  \* ===================================================== */
  dd_slider_customizer( $wp_customize );

  /* ===================================================== *\
              THEME COPYRIGHT CUSTOMIZER                    
  \* ===================================================== */
  dd_copyright_customizer( $wp_customize );
}