<?php
/**
 * The single post template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital Decor
 * @subpackage Digital Decor Theme
 * @since 1.0.0
 */

get_header();

?>
  <main class="container-fluid">
    <!-- POSTS Page ======================= -->
    <section class="container">
      <?php
        if( have_posts() ) {
          while( have_posts() ) {
            the_post();
            
            ?>
            <div class="single-post">
              <h3 class="single-post__title"><?php the_title(); ?></h3>
              <img src="<?php the_post_thumbnail_url(); ?>" class="single-post__image">
              <!-- <?php the_post_thumbnail( 'post-thumg', [ 'class' => 'single-post__image']); ?> -->
                <?php
                  the_content();

                  $defaults = [
                    'before'        =>  '<p class="text-center">' .  __( 'Pages: ', 'digitaldecor' ),
                    'after'         =>  '</p>'
                  ];

                  wp_link_pages( $defaults );
                ?>
            </div>
            <?php
          }
        }
      ?>
      <!-- Pagination ====================== -->
      <div class="row my-3">
        <div class="col-12 page-nav">
          <?php previous_post_link( '<span class="page-nav__link">&laquo; %link</span>' ); ?>&nbsp;|&nbsp;
          <?php next_post_link( '<spoan class="page-nav__link">%link &raquo;</span>' ); ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();