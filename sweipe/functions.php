<?php
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Sweipe 1.0
 */
function sweipe_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'sweipe_javascript_detection', 0 );

if ( ! function_exists( 'sweipe_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Sweipe 1.0
	 */
	function sweipe_setup() {
		load_theme_textdomain( 'sweipe', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'woocommerce' );

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
		 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 825, 510, true );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus( array(
				'primary' => esc_html__( 'Primary Menu', 'sweipe' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
				'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
		) );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
				'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
		) );
	}
endif; // sweipe_setup
add_action( 'after_setup_theme', 'sweipe_setup' );


/**
 * Enqueue scripts and styles.
 *
 * @since Sweipe 1.0
 */
function sweipe_scripts() {
	/**
	 * Register and Enqueue Styles
	 */
	wp_enqueue_style( 'sweipe-essentials', get_template_directory_uri() . '/css/essentials.css', false, '' );
	wp_enqueue_style( 'sweipe-my-app', get_template_directory_uri() . '/css/my-app.css', false, '' );
	wp_enqueue_style( 'sweipe-style', get_stylesheet_uri() );


	/**
	 * Register and Enqueue Scripts
	 */
	wp_register_script( 'jflickrfeed', get_template_directory_uri() . '/js/lib/jflickrfeed.js', false, '', true );
	wp_register_script( 'swipebox', get_template_directory_uri() . '/js/lib/swipebox.js', false, '', true );
	wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/js/lib/fastclick.js', false, '', true );
	wp_enqueue_script( 'isInViewport', get_template_directory_uri() . '/js/lib/isInViewport.js', false, '', true );
	wp_enqueue_script( 'sweipe-main', get_template_directory_uri() . '/js/app/main.js', array('jquery','fastclick'), '', true );
}
add_action( 'wp_enqueue_scripts', 'sweipe_scripts' );

require get_template_directory() . '/mstudio/mobius-studio.php';

add_image_size( 'sweipe-blog-thumb', 486, 283, true );



/**
 * Custom CSS and JS
 *
 *
 * @since Sweipe 1.1
 */
function sweipe_custom_css() {
	if( '' != sweipe::option('sweipe_custom_code','sweipe_custom_css', '') ):
		echo '<style>';
		echo esc_html( sweipe::option('sweipe_custom_code','sweipe_custom_css','') );
		echo '</style>';
	endif;
}
add_action( 'wp_head', 'sweipe_custom_css');

function sweipe_custom_js() {
	if( '' != sweipe::option('sweipe_custom_code','sweipe_custom_js', '') ):
		echo '<script>';
		echo sweipe::option('sweipe_custom_code','sweipe_custom_js','');
		echo '</script>';
	endif;
}
add_action( 'wp_footer', 'sweipe_custom_js');