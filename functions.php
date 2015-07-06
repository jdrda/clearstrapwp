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

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

/* Theme setup */
register_nav_menus( array(
    'primary' => __( 'Primary Menu'),
) );      
        
/**
 * Register JS 
 */
function wpt_register_js() {
    wp_register_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/dist/js/bootstrap.min.js', array(), NULL);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
}
add_action( 'init', 'wpt_register_js' );

/**
 * Register CSS
 */
function wpt_register_css() {
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/dist/css/bootstrap.min.css', array(), NULL);
    wp_enqueue_style( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
        


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