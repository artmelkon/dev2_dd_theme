<?php
/**
 * Register a custom post type called "book".
 *
 * @see get_post_type_labels() for label keys.
 */

 // Exit if accessed directly.
 if( ! defined( 'ABSPATH' ) ) exit( __( 'Np Trespassing!', 'dd-custom-content' ) );


function dd_custom_content_init() {
  $labels = array(
    'name'                  => _x( 'Custom Conttents', 'Post type general name', 'dd-custom-content' ),
    'singular_name'         => _x( 'Custom Conttent', 'Post type singular name', 'dd-custom-content' ),
    'menu_name'             => _x( 'Custom Conttents', 'Admin Menu text', 'dd-custom-content' ),
    'name_admin_bar'        => _x( 'Custom Conttent', 'Add New on Toolbar', 'dd-custom-content' ),
    'add_new'               => __( 'Add New', 'dd-custom-content' ),
    'add_new_item'          => __( 'Add New Custom Conttent', 'dd-custom-content' ),
    'new_item'              => __( 'New Custom Conttent', 'dd-custom-content' ),
    'edit_item'             => __( 'Edit Custom Conttent', 'dd-custom-content' ),
    'view_item'             => __( 'View Custom Conttent', 'dd-custom-content' ),
    'all_items'             => __( 'All Custom Conttents', 'dd-custom-content' ),
    'search_items'          => __( 'Search Custom Conttents', 'dd-custom-content' ),
    'parent_item_colon'     => __( 'Parent Custom Conttents:', 'dd-custom-content' ),
    'not_found'             => __( 'No Custom Conttents found.', 'dd-custom-content' ),
    'not_found_in_trash'    => __( 'No Custom Conttents found in Trash.', 'dd-custom-content' ),
    'featured_image'        => _x( 'Custom Conttent Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'dd-custom-content' ),
    'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'dd-custom-content' ),
    'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'dd-custom-content' ),
    'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'dd-custom-content' ),
    'archives'              => _x( 'Custom Conttent archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'dd-custom-content' ),
    'insert_into_item'      => _x( 'Insert into Custom Conttent', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'dd-custom-content' ),
    'uploaded_to_this_item' => _x( 'Uploaded to this Custom Conttent', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'dd-custom-content' ),
    'filter_items_list'     => _x( 'Filter Custom Conttents list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'dd-custom-content' ),
    'items_list_navigation' => _x( 'Custom Conttents list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'dd-custom-content' ),
    'items_list'            => _x( 'Custom Conttents list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'dd-custom-content' ),
);

$args = array(
    'labels'              =>  $labels,
    'description'         =>  __( 'A custom post type for Custom Content', 'dd-custom-content' ),
    'public'              =>  true,
    'publicly_queryable'  =>  true,
    'show_ui'             =>  true,
    'show_in_menu'        =>  true,
    'query_var'           =>  true,
    'rewrite'             =>  [ 'slug' => 'custom_content' ],
    'capability_type'     =>  'post',
    'has_archive'         =>  true,
    'hierarchical'        =>  false,
    'menu_position'       =>  20,
    'supports'            =>  [ 'title', 'editor', 'author', 'thumbnail' ],
    'taxonomies'          =>  [ 'category', 'post_tag'],
    'show_in_rest'        =>  true,
    'menu_icon'           =>  'dashicons-text'
);

register_post_type( 'custom-content', $args );}