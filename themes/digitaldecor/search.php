<?php get_header(); ?>
<!-- Page Title =========================== -->
<section id="page-title">
  <div class="container">
    <h1><?php _e( 'Search Results for: ', 'digitaldecor' ); ?> <?php the_search_query(); ?> </h1>
  </div>
</section>
<section id="content"></section>
  <div class="content-wrap">
    <div class="container">
      <div class="content-post-content__container">
        <!-- Search Box ========================== -->
        <div class="card">
          <div class="card-header"><?php _e( 'What are  you searching for today?', 'digitaldecor' ); ?></div>
          <div class="card-body">
            <?php get_search_form(); ?>
          </div>
        </div>
        <!-- Search Box End ========================== -->
        <div id="posts">
        <?php
          if( have_posts() ) {
            while( have_posts() ) {
              the_post();
            }
          }
        ?>
        </div>
      </div>
    </div>
  </div>
</section>

