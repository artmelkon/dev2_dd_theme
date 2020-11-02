<?php

function dd_misc_customizer ( $wp_customize ) {

  $wp_customize->add_section( 'dd_misc_section', [
    'title'         =>  __( 'Digital Decor Misc Section', 'digitaldecor' ),
    'description'   =>  __( 'Digital Decor Misc Section', 'digitaldecor' ),
    'priority'      =>  30
  ]);
  
  $wp_customize->add_setting( 'dd_header_show_user', [
    'type'          =>  'theme_mod',
    'default'       =>  'yes',
    'transport'     =>  'postMessage'
  ]);
  $wp_customize->add_setting( 'dd_header_show_cart', [
    'type'          =>  'theme_mod',
    'default'       =>  'yes',
    'transport'     =>  'postMessage'
  ]);
  $wp_customize->add_setting( 'dd_footer_search', [
    'type'          =>  'theme_mod',
    'default'       =>  'yes'
  ]);
  $wp_customize->add_setting( 'dd_footer_tos_page', [
    'type'          =>  'theme_mod',
    'default'       =>  0
  ]);
  $wp_customize->add_setting( 'dd_footer_privacy_page', [
    'default'       =>  0
  ]);

  $wp_customize->add_control( 'dd_header_show_user', [
    'label'         =>  __( 'Show User Icon in Header', 'digitaldecor' ),
    'section'       =>  'dd_misc_section',
    'type'          =>  'checkbox',
    'choices'       =>  [
      'yes'         =>  'Yes'
    ]
  ]);
  $wp_customize->add_control( 'dd_header_show_cart', [
    'label'         =>  __( 'Show Cart Icon in Header', 'digitaldecor' ),
    'section'       =>  'dd_misc_section',
    'type'          =>  'checkbox',
    'choices'       =>  [
      'yes'         =>  'Yes'
    ]
  ]);
  $wp_customize->add_control( 'dd_footer_search', [
      'label'       =>  __( 'Show Search Button in Footer', 'digitaldecor' ),
      'section'     =>  'dd_misc_section',
      'type'        =>  'checkbox',
      'choices'     =>  [
        'yes'       =>  'Yes'
      ]
    ]
  );
  $wp_customize->add_control( 'dd_footer_tos_page', [
    'label'         =>   __( 'Display Term of Use Page0 Footer', 'digitaldecor' ),
    'default'       =>  '',
    'section'       =>  'dd_misc_section',
    'type'          =>  'dropdown-pages'
  ]);
  $wp_customize->add_control( 'dd_footer_privacy_page', [
    'label'         =>  __( 'Display Privacy Page in footer', 'digitaldecor' ),
    'default'       =>  '',
    'section'       =>  'dd_misc_section',
    'type'          =>  'dropdown-pages'
  ]);
}