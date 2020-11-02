<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Digital Decor
 * @since Digital Decor 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */

$dd_unique_id = esc_attr( uniqid( 'search-form-') );
?>
<form action="<?php esc_url( home_url( '/' ) ); ?>" method="get" class="search-form form-inline my-2 my-lg-0" role="search" id="search-form">
  <input type="search" name="s" id="<?php the_search_query(); ?>" class="form-control mr-sm-2" placeholder="<?php _e( 'Search', 'digitaldecor' ); ?>">
  <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit" ><i class="fa fa-search"></i></button>
</form>