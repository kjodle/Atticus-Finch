<?php
/**
 * Atticus Finch functions and definitions
 *
 * @package Atticus Finch
 */

if ( ! function_exists( 'atticus_finch_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function atticus_finch_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Atticus Finch, use a find and replace
	 * to change 'atticus-finch' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'atticus-finch', get_template_directory() . '/lang' );

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

	// This theme uses wp_nav_menu() in three locations.
	register_nav_menus( array(
		'top-menu'            => esc_html__( 'Top Menu', 'atticus-finch' ),
		'primary-menu'        => esc_html__( 'Primary Menu', 'atticus-finch' ),
		'footer-menu'         => esc_html__( 'Footer Menu', 'atticus-finch' ),
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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'audio',
		'chat',
		'gallery',
		'image',
		'link',
		'quote',
		'status',
		'video',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'atticus_finch_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // atticus_finch_setup
add_action( 'after_setup_theme', 'atticus_finch_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function atticus_finch_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'atticus_finch_content_width', 620 );
}
add_action( 'after_setup_theme', 'atticus_finch_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function atticus_finch_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'atticus-finch' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'atticus_finch_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function atticus_finch_scripts() {
	wp_enqueue_style( 'atticus-finch-googlefont', 'https://fonts.googleapis.com/css?family=IM+Fell+English:400,400italic', 'atticus-finch-style', wp_get_theme() -> get( 'Version' ), 'all' );

if ( !wp_style_is( 'font-awesome.min.css', 'enqueued' ) ) {
	wp_enqueue_style( 'atticus-finch-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 'atticus-finch-style', wp_get_theme() -> get( 'Version' ), 'all' );
}

	wp_enqueue_style( 'atticus-finch-style', get_stylesheet_uri() );

	wp_enqueue_style( 'atticus-finch-menus', get_template_directory_uri() . '/styles/menus.css', array( 'atticus-finch-style' ), wp_get_theme() -> get( 'Version' ) );

	wp_enqueue_style( 'atticus-finch-mobile', get_template_directory_uri() . '/styles/mobile.css', array( 'atticus-finch-style' ), wp_get_theme() -> get( 'Version' ), 'screen and (max-width: '. get_theme_mod( 'atticus_finch_mobile_breakpoint' ) . 'px)' );

	wp_enqueue_style( 'atticus-finch-print', get_template_directory_uri() . '/styles/print.css', array( 'atticus-finch-style' ), wp_get_theme() -> get( 'Version' ), 'print' );

	wp_enqueue_script( 'atticus-finch-menumaker', get_template_directory_uri() . '/js/menumaker.js', array( 'jquery' ), wp_get_theme() -> get( 'Version' ), true );

	wp_enqueue_script( 'atticus-finch-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), wp_get_theme() -> get( 'Version' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'atticus_finch_scripts' );

/**
 * Enable live changes in the customizer
 */
function atticus_finch_customizer_script() {
	wp_enqueue_script( 'atticus-finch-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array(), wp_get_theme() -> get( 'Version' ), true );
}
add_action( 'customize_preview_init', 'atticus_finch_customizer_script' );


// Change "read more" link on excerpts
// codex.wordpress.org/Function_Reference/the_excerpt
function atticus_finch_excerpt_more( $more ) {
	$text = get_theme_mod( 'atticus_finch_readmore', '&hellip;read more&hellip;' );
	return ' <a class="excerpt-link" href="' . get_permalink( get_the_ID() ) . '">' . $text . '</a>';
}
add_filter( 'excerpt_more', 'atticus_finch_excerpt_more' );


// Add descriptions to main menu
// http://www.wpbeginner.com/wp-themes/how-to-add-menu-descriptions-in-your-wordpress-themes/
/*
class Atticus_Finch_Menu_With_Description extends Walker_Nav_Menu {
	function start_el(&$output, $item, $depth=0, $args = array(), $id=0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';

		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) .'"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) .'"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) .'"' : '';

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '<p class="sub">' . $item->description . '</p>';
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
}
*/
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/functions/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/functions/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/functions/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/functions/jetpack.php';

/**
 * Add our widget areas.
 */
require get_template_directory() . '/functions/widget-areas.php';

/**
 * Make our menus mobile.
 */
require get_template_directory() . '/functions/mobile-menus.php';


// Include our update script to update from private repo
require 'update/puc.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'http://api.kjodle.net/?action=get_metadata&slug=atticus-finch',
	__FILE__,
	'atticus-finch'
);
