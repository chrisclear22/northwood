<?php
/**
 * The footer sidebar
 *
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
   return;
}
?>

<div id="supplementary">

   <div id="footer-widgets1" class="footer-widgets widget-area clear col-md-4" role="complementary">
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
   </div><!-- #footer-sidebar -->

   <div id="footer-widgets2" class="footer-widgets widget-area clear col-md-4" role="complementary">
      <?php dynamic_sidebar( 'sidebar-3' ); ?>
   </div><!-- #footer-sidebar -->

   <div id="footer-widgets3" class="footer-widgets widget-area clear col-md-4" role="complementary">
      <?php dynamic_sidebar( 'sidebar-4' ); ?>
   </div><!-- #footer-sidebar -->
</div><!-- #supplementary -->

