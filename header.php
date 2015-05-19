<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package northwood
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
   <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
   <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'northwood'); ?></a>

   <header id="masthead" class="site-header col-md-12" role="banner">
      <div class="site-branding">
         <div id="logo" class="site-logo">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Site Logo">
         </div>
         <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"
                                   rel="home"><?php bloginfo('name'); ?></a></h1>

      </div>
      <!-- .site-branding -->

      <nav id="site-navigation" class="main-navigation" role="navigation">
         <button class="menu-toggle" aria-controls="primary-menu"
                 aria-expanded="false"><?php _e('Menu', 'northwood'); ?></button>
         <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
         <div class="search-toggle">
            <i class="fa fa-search"></i>
            <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'northwood' ); ?></a>
         </div>
         <?php northwood_social_menu(); ?>
      </nav>

      <div id="search-container" class="search-box-wrapper clear">
         <div class="search-box clear">
            <?php get_search_form(); ?>
         </div>
      </div>
      <!-- #site-navigation -->
   </header>
   <!-- #masthead -->

   <div id="content" class="site-content">
