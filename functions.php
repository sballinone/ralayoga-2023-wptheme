<?php
// Styles and Scripts
function ralayoga_queue() {
	wp_enqueue_style('style', get_template_directory_uri()."/assets/css/style.css");
	wp_enqueue_style('style-res', get_template_directory_uri()."/assets/css/style-res.css");
	wp_enqueue_style('fonts', get_template_directory_uri()."/assets/css/fonts.css");
	
	wp_enqueue_script('script', get_template_directory_uri()."/assets/js/scripts.js", array( 'jquery' ), 1.0, true);
}
add_action('wp_enqueue_scripts', 'ralayoga_queue');



// Menus
function register_my_menus() {
	register_nav_menus(
		array(
			'navMain' => __( 'Main Navigation' ),
			'navLegal' => __( 'Legal Navigation' )
		)
	);
 }
 add_action( 'init', 'register_my_menus' );



// Header
// Only the upper part is visible
$header_info = array(
	'width'         => 1280,
	'height'        => 800,
	'default-image' => get_template_directory_uri() . '/assets/images/header/rock.jpeg',
);
add_theme_support( 'custom-header', $header_info );



// Footer Widgets
function my_register_sidebars() {
	register_sidebar(
		array(
			'id'            => 'footer',
			'name'          => __( 'Footer Widgets' ),
			'description'   => __( 'Hier kommt der Footer hin.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_register_sidebars' );



// Customizer
require_once('WordPressThemeCustomizer.php');



// Sonstige
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
