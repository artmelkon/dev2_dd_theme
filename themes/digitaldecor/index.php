<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Digital Decor
 * @subpackage Digital Decor Theme
 * @since 1.0.0
 */

get_header();

?>
  <main class="container-fluid content__wrap">
    <section class="container">
      <!-- Post Content =================================== -->
      <div class="content-wrapper">
        <?php
            if( have_posts() ){
              while( have_posts() ) {
                the_post();
                
                get_template_part('template-parts/content', 'excerpt');
              }
            }
          ?>
        <div class="row mb-3">
          <div class="col-12 page-nav">
            <?php previous_posts_link( '<span class="page-nav__link">&laquo; Newer</span>' ); ?>&nbsp;|&nbsp;
            <?php next_posts_link( '<span class="page-nav__link">Older &raquo;</span>' ); ?>
            <!-- <a href="#" class="btn btn-outline-secondary ml-auto"></a>
            <a href="#" class="btn btn-outline-secondary mr-auto"></a> -->
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();