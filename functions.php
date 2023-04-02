<?php
/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */
add_action( 'after_setup_theme', function() {
	load_theme_textdomain( 'bathe', get_theme_file_uri( 'languages' ) );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	add_theme_support( 'custom-background', apply_filters( 'bathe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 50,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'bathe' ),
	) );
} );

define( 'THEME_PATH',      get_template_directory() );
define( 'THEME_IMG_PATH', get_stylesheet_directory_uri() . '/assets/images' );
define( 'THEME_FONTS_PATH', get_stylesheet_directory_uri() . '/assets/fonts' );

foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action( 'after_setup_theme', function() {
	$GLOBALS['content_width'] = apply_filters( 'bathe_content_width', 960 );
}, 0 );

 /**
  * Enqueue Splide.
  */
  add_action( 'wp_enqueue_scripts', 'custom_load_splide' );

  function custom_load_splide() {
	wp_register_script( 'splide-js', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', 0 );
	wp_enqueue_script( 'splide-js' );
	wp_enqueue_style( 'splide-css', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css' );
}


/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'bathe-main', get_theme_file_uri( 'assets/css/main.css' ) );
	wp_enqueue_style( 'tailwind', get_theme_file_uri( 'assets/css/tailwind.css' ) );

	wp_enqueue_script( 'bathe-bundle', get_theme_file_uri( 'assets/js/main.js' ), array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );

/**
 * Enqueue Scroll Reveal.
*/
add_action( 'wp_enqueue_scripts', 'custom_load_scrollreveal' );

function custom_load_scrollreveal() {
    wp_register_script( 'scroll-reveal', 'https://unpkg.com/scrollreveal', 0 );
	wp_enqueue_script( 'scroll-reveal' );
}
