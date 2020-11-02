<?php
/**
 *  Ths Page template
 * 
 */

get_header();

while( have_posts() ) :
  the_post();
?>
  <h2 class="content-page__title content-page__title--bgcolor"><?php the_title(); ?></h2>
<?php 
endwhile;
rewind_posts();
?>
<main id="content">
    <div class="content-page container">
      <?php
        while( have_posts() ):
          the_post();

          if( is_page( 'contact' ) ) {
            // insert contact page content template
            get_template_part( 'template-parts/content', 'contact-form' );
          } else {
            // insert the page content template
            get_template_part( 'template-parts/content', 'page' );
          }

        endwhile;
      ?>
    </div>
</main>
<?php
get_footer();
