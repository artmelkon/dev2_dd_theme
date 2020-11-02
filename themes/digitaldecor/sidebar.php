<?php
/**
 *  This is themes sidebar
 */
?>
<div class="sidebar">
  <div class="sidebar__widget">
    <?php
      if( is_active_sidebar( 'dd_footer_searchbar' ) ) {
        dynamic_sidebar( 'dd_footer_searchbar' );
      }
    ?>
  </div>
</div>