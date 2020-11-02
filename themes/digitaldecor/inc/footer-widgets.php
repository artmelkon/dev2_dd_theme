<?php
/**
 *  Theme sidebar widget
 */
function dd_footer_widgets() {
  register_sidebar([
    'name'            =>  __( 'Footer Search Bar', 'digitaldecor' ),
    'id'              =>  'dd_footer_searchbar',
    'description'     =>  __( 'Sidebar for the theme digital Decor', 'digitaldecor' ),
    'before_widget'   =>  '<div id="%1$s" class="widget %2$s">',
    'after_widget'    =>  '</div>',
    'before_title'    =>  '<h4>',
    'after_title'     =>  '</h4>'
  ]);
}