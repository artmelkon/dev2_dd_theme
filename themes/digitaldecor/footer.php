<?php
/**
 * The Digital Decor template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Digital Decor
 * @since Digital Decor 1.0
 */

?>
  <!-- Beginning of Footer =========================== -->
  <footer class="container-fluid bg-dark">
    <div class="container">
      <div class="row pt-3">
        <div class="col-sm-3">
          empty column
        </div>
        <!-- footer navbar ========================================== -->
        <div class="col-md-6 col-sm-6">
          <div class="legal-content text-center">
          <?php
            if( get_theme_mod( 'dd_footer_tos_page' ) ) :
          ?>
            <span class="legal-content__tos-page pr-3">
              <a href="<?php the_permalink( get_theme_mod( 'dd_footer_tos_page' ) ); ?>" class="legal-content__link legal-content__link--color">Terms & Conditions</a>
            </span>
          <?php
            endif;

            if ( get_theme_mod( 'dd_footer_privacy_page' ) );
          ?>
            <span class="legal-content__privacy-page pl-3">
              <a href="<?php the_permalink( get_theme_mod( 'dd_footer_privacy_page' ) ); ?>" class="legal-content__link legal-content__link--color">Privacy Policy</a>
            </span>
          </div>
        </div>
        <!-- Footer Sidebar Container =============================== -->
        <div class="footer-search col-sm-3">
          <div class="footer-search__container">
            <?php 
              if( get_theme_mod( 'dd_footer_search' ) ) :
                get_sidebar( 'dd_footer_searchbar');
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer Copyright Container =============================== -->
    <div class="copyright  col-6 offset-md-3 text-light text-center">
      <p class="copyright__text copyright__text--sm">Copyright &copy; <?php echo date( 'Y' ); ?>
        <?php
          if( get_theme_mod( 'dd_copyright_handle') ):
            ?>
          &nbsp;&nbsp;|&nbsp;&nbsp;</a> <?php echo get_theme_mod( 'dd_copyright_handle' ); ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="copyright__link text-light"><?php bloginfo( 'name' ); ?>
            <?php
          endif;
        ?>
      </p>
    </div>
  </footer>
  <!-- End of Footer =========================== -->
  <?php wp_footer(); ?>
</body>
</html>