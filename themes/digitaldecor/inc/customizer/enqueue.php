<?php
function dd_customize_preview_init() {
  wp_enqueue_script( 'dd_theme_customizer', get_theme_file_uri( '/assets/js/theme-customizer.js' ), [ 'jquery', 'customize-preview' ], false, true );
}