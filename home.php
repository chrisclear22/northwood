<?php
/**
 * The home template file.
 *
 * @package northwood
 */

get_header(); ?>

<div id="primary" class="content-area col-md-12">
   <main id="main" class="home-main" role="main">
      <?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '22' ); } ?>
   </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
