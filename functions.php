<?php
/**
 * Functions
 *
 * 
 * Common functions for the template
 * 
 * @package WordPress
 * @subpackage ClearstrapWP
 * @since ClearstrapWP 0.1
 */


/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;      
        
/**
 * Register JS 
 */
function wpt_register_js() {
    wp_register_script('jquery.min', get_template_directory_uri() . '/vendor/jquery/dist/jquery.min.js');
    wp_register_script('bootstrap.min', get_template_directory_uri() . '/vendor/bootstrap/dist/js/bootstrap.min.js');
    wp_enqueue_script('jquery.min');
    wp_enqueue_script('bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );

/**
 * Register CSS
 */
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/vendor/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
        
// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

// Register two sidebards
if ( function_exists ('register_sidebar')) { 
    
   register_sidebar( array(
		'name'          => 'Left',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
   register_sidebar( array(
		'name'          => 'Right',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
?>