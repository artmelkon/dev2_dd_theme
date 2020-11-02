<?php

function dd_social_customizer( $wp_customize) {

  $wp_customize->add_section( 
    'dd_social_section', array(
    'title'            =>  __( 'Social Settings', 'digitaldecor' ),
    'priority'         =>  30,
    'panel'            => 'digitaldecor'
  ));

  $wp_customize->add_setting( 
    'dd_facebook_handle', array(
    'default'           => ''
  ));


  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize, 'dd_social_facebook_input', array(
      'label'          => __( 'Facebook Handle', 'digitaldecor' ),
      'section'        => 'dd_social_section',
      'settings'       => 'dd_facebook_handle',
      'type'           => 'text'
    )
  ));

  $wp_customize->add_setting(
    'dd_instagram_handle', array(
      'default'         =>  ''
  ));

  $wp_customize->add_control( new WP_Customize_Control(
    $wp_customize, 'dd_twitter_input', array(
      'label'           =>  __( 'Instagram Handle', 'digitaldecor' ),
      'section'         =>  'dd_social_section',
      'settings'        =>  'dd_instagram_handle',
      'type'            =>  'text'
    )
  ));

  $wp_customize->add_setting(
    'dd_pinterest_handle', array(
      'default'          =>  ''
  ));

  $wp_customize->add_control(
    'dd_pinterest_handle', array(
      'label'            => __( 'Pinterest Handle', 'digitaldecor' ),
      'section'          => 'dd_social_section',
      'type'             =>  'text'
  ));
}