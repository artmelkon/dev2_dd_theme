<?php
/**
 * The template to display page content
 * 
 * @package WoredPress
 * @subpackage Digital Decor
 * 
 */
?>
    <?php the_post_thumbnail( 'post-thumb', [ 'class' => 'content-page__image'] ); ?>
    <div class="entry-content'">
        <?php 
            the_content(); 

            wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'digitaldecor' ),
					'after'  => '</div>',
				)
			);

        ?>
    </div>
