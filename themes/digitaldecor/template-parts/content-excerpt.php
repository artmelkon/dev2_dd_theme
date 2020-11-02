<?php
/**
 *  theme posts excerpts
 */
?>
<div class="row no-gutters bg-light position-relative">
  <?php
    if( has_post_thumbnail() ) {
      ?>
      <div class="col-md-6 mb-md-0 p-md-4">
        <img src="<?php the_post_thumbnail_url(); ?>" class="w-100" />
      </div>
      <?php
    }
  ?>
  <div class="col-md-6 position-static p-4 pl-md-0">
    <h5 class="mt-0"><?php the_title(); ?></h5>
    <p><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark stretched-link">Read more...</a>
  </div>
</div>