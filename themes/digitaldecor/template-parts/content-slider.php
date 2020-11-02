<?php
/***
 * The template to display slider
 * 
 *  @package Digital Decor
 *  @subpackage Digital Decor Theme
 *  @version: 1.0
 * 
 */

?>
<div class="flexslider slider">
    <ul class="slides slider_list">
    <?php
        for( $i = 1; $i < 4; $i++ ) :
          $slider_page[$i]          = get_theme_mod( 'set_slider_page' . $i );
          $slider_button_text[$i]   = get_theme_mod( 'set_slider_button_text' . $i );
          $slider_button_url[$i]    = get_theme_mod( 'set_slider_button_url' . $i );
        endfor;

        $args = [
          'post_type'       => 'page',
          'post_per_page'   =>  3,
          'post__in'        =>  $slider_page,
          'orderby'         =>  'post__in'
        ];

        $slider_loop = new WP_Query( $args );
        $n = 0;
        if( $slider_loop->have_posts()  ) :
          while( $slider_loop->have_posts() ) : $slider_loop->the_post();
          $n++;
      ?>
      <li class="slider__item slider__item--slide<?php echo $n; ?>">
        <img src="<?php the_post_thumbnail_url(); ?>" class="slider__image">

        <div class="slider__caption">
          <h4 class="display-4 slider__title"><?php the_title(); ?></h4>
          <p class="slider__copy"><?php the_content(); ?></p>
          <a href="<?php the_permalink(); ?>" class="btn btn-danger slider__btn--color rounded-pill">Click Me</a>
        </div>
      </li>
      <?php
          endwhile;
          wp_reset_postdata();
        endif;
    ?>
    </ul>
  </div>
