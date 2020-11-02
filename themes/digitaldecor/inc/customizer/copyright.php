<?php
  
  function dd_copyright_customizer( $wp_customize ) {
    $wp_customize->add_section(
      'dd_copyright_section', array(
        'title'         =>  __( 'Copyright Section', 'digitaldecor' ),
        'description'   =>  __( 'Copyright Section', 'digitaldecor' ),
        'priority'      =>  30,
        'panel'         =>  'digitaldecor'
      )
    );

    $wp_customize->add_setting(
      'dd_copyright_handle', array(
        'type'          =>  'theme_mod',
        'default'       =>  '',
        'sanitize_callback'   =>  'sanitize_text_field'
      )
    );

    $wp_customize->add_control(
      'dd_copyright_handle', array(
        'label'         =>  __( 'Copyright', 'digitaldecor' ),
        'description'   =>  __( 'Please, add your copyright information here'),
        'section'       =>  'dd_copyright_section'
      )
    );
  }