<?php
/**
 * northwood functions and definitions
 *
 * @package northwood
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'northwood_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function northwood_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on northwood, use a find and replace
	 * to change 'northwood' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'northwood', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'northwood' ),
      'social'  => __( 'Social Menu',  'northwood'),

   ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
//	add_theme_support( 'custom-background', apply_filters( 'northwood_custom_background_args', array(
//		'default-color' => 'ffffff',
//		'default-image' => '',
//	) ) );
}
endif; // northwood_setup
add_action( 'after_setup_theme', 'northwood_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function northwood_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'northwood' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
   register_sidebar( array(
      'name'          => __( 'Footer Widgets 1', 'northwood' ),
      'description'   => __( 'Footer widgets area appears in the footer of the site.', 'northwood' ),
      'id'            => 'sidebar-2',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h1>',
   ) );
   register_sidebar( array(
      'name'          => __( 'Footer Widgets 2', 'northwood' ),
      'description'   => __( 'Footer widgets area appears in the footer of the site.', 'northwood' ),
      'id'            => 'sidebar-3',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h1>',
   ) );
   register_sidebar( array(
      'name'          => __( 'Footer Widgets 3', 'northwood' ),
      'description'   => __( 'Footer widgets area appears in the footer of the site.', 'northwood' ),
      'id'            => 'sidebar-4',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget'  => '</aside>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h1>',
   ) );
}
add_action( 'widgets_init', 'northwood_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function northwood_scripts() {
   wp_enqueue_style( 'bootstrap',     get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
   wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'), '', true );
   wp_enqueue_style( 'northwood_fontawesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css' );

   wp_enqueue_style( 'northwood-google-fonts', 'http://fonts.googleapis.com/css?family=Lobster|Merriweather:400,400italic,700,700italic' );
   wp_enqueue_style( 'northwood-style', get_stylesheet_uri() );

   wp_enqueue_style( 'northwood-layout-style' , get_template_directory_uri() . '/layouts/content-sidebar.css');

   wp_enqueue_script( 'northwood-superfish',  get_template_directory_uri() . '/js/superfish.min.js', array('jquery'), '20140328', true );
   wp_enqueue_script( 'northwood-superfish-settings', get_template_directory_uri() . '/js/superfish-settings.js', array('northwood-superfish'), '20140328', true );

   wp_enqueue_script( 'northwood-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
   wp_enqueue_script( 'northwood-hide-search', get_template_directory_uri() . '/js/hide-search.js', array(), '20140404', true );

	wp_enqueue_script( 'northwood-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'northwood_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
