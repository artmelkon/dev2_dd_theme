<?php
/**
 *  The template for displaying the 404 template in the Twenty Twenty theme.
 * 
 * @package WordPress
 * @subpackage Digital Decor
 * @version 1.0.0
 *  
 */

 get_header();
 ?>
 <main class="page__404">
    <div class="container">
      <div class="card text-center">
        <div class="card-header display-2 text-secondary font-weight-bold">
        404
        </div>
        <div class="card-body col-8 offset-md-2">
          <h1 class="card-title py-2 font-weight-bold"><?php _e( 'Ooops! The Page Not Found', 'digitaldecor' ); ?></h1>
          <p class="card-text"><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'digitaldecor' ); ?></p>
          <small class="card-text text-muted"><?php _e( 'Try searching for the best match or browse the links below.', 'digitaldecor' ); ?></small>
        </div>
        <div class="card-footer">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
 </main>
 <?php get_footer();