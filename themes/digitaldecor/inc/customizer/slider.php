<?php

function dd_slider_customizer( $wp_customize ) {
  $wp_customize->add_section(
    'dd_slider_section', array(
      'title'         =>  __( 'Slider Section', 'digitaldecor' ),
      'description'   =>  __( 'Digital Decor Slider Section', 'digitaldecor' ),
      'priority'      =>  30,
      'panel'         =>  'digitaldecor'
  ));

  /** =====================================
   *  Field 1 - Slider Page #1
   */
  $wp_customize->add_setting(
    'set_slider_page1', array(
      'type'                => 'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'absint'
    )
  );

  $wp_customize->add_control(
    'set_slider_page1', array(
      'label'               =>  __( 'Set slider page #1', 'digitaldecor' ),
      'description'         =>  __( 'Set slider page #1', 'digitaldecor' ),
      'section'             =>  'dd_slider_section',
      'type'                => 'dropdown-pages'
    )
  );
  /**
   *  Field 2 - Slider Button Text #1
   */
  $wp_customize->add_setting(
    'set_slider_button_text1', array(
      'type'                =>  'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'sanitize_text_field'
    )
  );

  $wp_customize->add_control(
    'set_slider_button_text1', array(
      'label'               =>  __( 'Button Tex for page 1', 'digitaldecor' ),
      'description'         =>  __( 'Button Text for page 1', 'digitaldecor'),
      'section'             =>  'dd_slider_section',
      'type'                =>  'text'
    )
  );
  /**
   *  Field 2 - Slider Button URL #1
   */
  $wp_customize->add_setting(
    'set_slider_button_url1', array(
      'type'                =>  'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    'set_slider_button_url1', array(
      'label'               =>  __( 'Set URL for page 1', 'digitaldecor' ),
      'description'         =>  __( 'Set URL for page 1', 'digitaldecor' ),
      'section'             =>  'dd_slider_section',
      'type'                =>  'url'
    )
  );

  /** ========================================
   *  Field 1 - Slider Page #2
   */
  $wp_customize->add_setting(
    'set_slider_page2', array(
      'type'                =>  'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'absint'
    )
  );
  $wp_customize->add_control(
    'set_slider_page2', array(
      'label'               =>  __( 'Set slider page #2', 'digitaldecor' ),
      'description'         =>  __( 'Set slider page #2', 'digitaldecor' ),
      'section'             =>  'dd_slider_section',
      'type'                =>  'dropdown-pages'
    )
  );

  /**
   *  Field 2 - Slider Button Text #2
   */
  $wp_customize->add_setting(
    'set_slider_buttton_text2', array(
      'type'                =>  'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'sanitize_text_field'
    )
  );
  $wp_customize->add_control(
    'set_slider_button_text2', array(
      'label'               =>  __( 'Set Text for page 2', 'digitaldecor' ),
      'description'         =>  __( 'Set Text for page 2', 'digitaldecor' ),
      'section'             =>  'dd_slider_section',
      'type'                =>  'text'
    )
  );
  /**
   *  Field 2 - Slider Button URL #2
   */
  $wp_customize->add_setting(
    'set_slider_button_url2', array(
      'type'                =>  'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    'set_slider_button_url2', array(
      'label'               =>  __( 'Set URL for page 2', 'digitaldecor' ),
      'description'         =>  __( 'Set URL for page 2', 'digitaldecor' ),
      'section'             =>  'dd_slider_section',
      'type'                =>  'url'
    )
  );
    /** ========================
   *  Field 1 - Slider Page #3
   */
  $wp_customize->add_setting(
    'set_slider_page3', array(
      'type'                =>  'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'absint'
    )
  );

  $wp_customize->add_control(
    'set_slider_page3', array(
      'label'               =>  __( 'Set slider page #3', 'digitaldecor' ),
      'description'         =>  __( 'Set slider page #3', 'digitaldecor' ),
      'section'             =>  'dd_slider_section',
      'type'                =>  'dropdown-pages'
    )
  );
    /**
   *  Field 2 - Slider Button Text #3
   */
  $wp_customize->add_setting(
    'set_slider_button_text3', array(
      'type'                => 'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'sanitize_text_field'
    )
  );
  $wp_customize->add_control(
    'set_slider_button_text3', array(
      'label'               =>  __( 'Set button text for page #3', 'digitaldecor' ),
      'description'         =>  __( 'Set button text for page #3', 'digitaldecor' ),
      'section'             =>  'dd_slider_section',
      'type'                =>  'text'
    )
  );
  /**
   *  Field 2 - Slider Button URL #3
   */
  $wp_customize->add_setting(
    'set_slider_button_url3', array(
      'type'                =>  'theme_mod',
      'default'             =>  '',
      'sanitize_callback'   =>  'esc_url_raw'
    )
  );
  $wp_customize->add_control(
    'set_slider_button_url3', array(
      'label'               =>  __( 'Set URL for page 2', 'digitaldecor' ),
      'description'         =>  __( 'Set URL for page 2', 'digitaldecor' ),
      'section'             =>  'dd_slider_section',
      'type'                =>  'url'
    )
  );

}