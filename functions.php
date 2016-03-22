<?php

//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'hueman' );
define( 'CHILD_THEME_URL', 'http://www.hummingbirdesigns.com' );
define( 'CHILD_THEME_VERSION', '2.2.2' );

//* Enqueue Google Fonts
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {
wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Lato:300,400,700', array(), CHILD_THEME_VERSION );
}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( 'headings', 'drop-down-menu',  'search-form', 'skip-links', 'rems' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Enqueue scripts and styles
add_action( 'wp_enqueue_scripts', 'hueman_scripts_styles' );
function hueman_scripts_styles() {
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', array(), 'hueman');
}

//* Add suppport for structural wraps
add_theme_support( 'genesis-structural-wraps', array(
	'header', 'nav', 'subnav', 'main', 'footer-widgets', 'footer',
	) );

//* Rename menus
add_theme_support( 'genesis_menus', array(
	'primary' => __( 'Header Top Navigation Menu', 'hueman'),
	'secondary' => __( 'Header Bottom Navigation Menu', 'hueman')
	) );

//* Add new image sizes
add_image_size( 'home-top', 780, 354, TRUE);
add_image_size( 'home-middle', 375, 175, TRUE);

//* Add support for custom background
add_theme_support( 'custom-background');

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Register Widget Areas
genesis_register_sidebar( array(
'id' => 'home-top',
'name' => __( 'Home Top', 'hueman' ),
'description' => __( 'widgets in this section will display in the top widget area on the homepage.', 'hueman' ),
) );

genesis_register_sidebar( array(
'id' => 'home-bottom',
'name' => __( 'Home Bottom', 'hueman' ),
'description' => __( 'widgets in this section will display in the bottom widget area on the homepage.', 'hueman' ),
));











