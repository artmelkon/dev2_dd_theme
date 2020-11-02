<?php
/**
 * The page to display Contact Us page
 */
?>
<div class="contact container">
  <div class="">
    <?php  the_content(); ?>
  </div>
</div>      

<section id="contact-from">
  <?php echo do_shortcode( '[digitaldecor_contact_form]' ); ?>
</section><!-- Page# <?php the_ID(); ?> -->
