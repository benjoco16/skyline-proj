<?php
/**
 * skyline-template functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package skyline-template
 */

if ( ! function_exists( 'skyline_template_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function skyline_template_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on skyline-template, use a find and replace
	 * to change 'skyline-template' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'skyline-template', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'skyline-template' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'skyline_template_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'skyline_template_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function skyline_template_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'skyline_template_content_width', 640 );
}
add_action( 'after_setup_theme', 'skyline_template_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function skyline_template_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'skyline-template' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'skyline-template' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'skyline-template' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add Footer 1 widgets here.', 'skyline-template' ),
		'before_widget' => '<section class="wpb_column vc_column_container vc_col-sm-3 widget_list">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'skyline-template' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add Footer 2 widgets here.', 'skyline-template' ),
		'before_widget' => '<section class="wpb_column vc_column_container vc_col-sm-3 widget_list">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'skyline-template' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add Footer 3 widgets here.', 'skyline-template' ),
		'before_widget' => '<section class="wpb_column vc_column_container vc_col-sm-3 widget_list">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'skyline-template' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add Footer 4 widgets here.', 'skyline-template' ),
		'before_widget' => '<section class="wpb_column vc_column_container vc_col-sm-3 widget_list">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="footer-widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'skyline_template_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function skyline_template_scripts() {
	wp_enqueue_style( 'skyline-template-style', get_stylesheet_uri() );
	wp_enqueue_style( 'skyline-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '', 'all' );
	wp_enqueue_style( 'skyline-bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.css', array(), '', 'all' );
	wp_enqueue_style( 'skyline-ammap', get_template_directory_uri() . '/css/ammap.css', array(), '', 'all' );
	wp_enqueue_style( 'skyline-font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'skyline-custom', get_template_directory_uri() . '/css/style.css', array(), time(), 'all' );
	wp_enqueue_style( 'new-custom', get_template_directory_uri() . '/css/custom.css', array(), time(), 'all' );

	wp_enqueue_script( 'skyline-template-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'skyline-html5', get_template_directory_uri() . '/js/html5.js', array(), '1.0', false );
	wp_enqueue_script( 'skyline-modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.8.3.min.js', array(), '1.0', false );
	wp_enqueue_script( 'skyline-pace', get_template_directory_uri() . '/js/pace.min.js', array(), '1.0', false );

	wp_enqueue_script( 'skyline-template-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'skyline-jquery.min', get_template_directory_uri() . '/js/lib/jquery.min.js', array(), '1.0', true );
	wp_enqueue_script( 'skyline-jquery-ui.min', get_template_directory_uri() . '/js/lib/jquery-ui.min.js', array(), '1.0', true );
	wp_enqueue_script( 'skyline-plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0', true );
	wp_enqueue_script( 'skyline-bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0', true );
	wp_enqueue_script( 'skyline-ammap', get_template_directory_uri() . '/js/ammap.js', array(), '1.0', false );
	wp_enqueue_script( 'skyline-worldLow', get_template_directory_uri() . '/js/worldLow.js', array(), '1.0', false );
	wp_enqueue_script( 'skyline-custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skyline_template_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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
