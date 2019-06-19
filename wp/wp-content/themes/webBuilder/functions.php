<?php
/**
 * Main Functions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage webBuilder
 * @since 1.0.0
 */
$mode = 'prod';
$_ENV["PHP_ENV"]=$mode;

 /**
 * Enqueue scripts and styles.
 */
function webbuilder_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    
    if ($_ENV["PHP_ENV"] === 'dev') {$version = time();}

    wp_enqueue_script( 'webbuilder-modernizr', get_theme_file_uri( '/js/modernizr-2.6.2-respond-1.1.0.min.js' ), array(), $version, false );
    wp_enqueue_script( 'webbuilder-jquery', get_theme_file_uri( '/js/jquery.min.js' ), array(), $version, true );
    wp_enqueue_script( 'webbuilder-jquery-plugins', get_theme_file_uri( '/js/jquery.plugin.min.js' ), array(), $version, true );
    wp_enqueue_script( 'webbuilder-bootstrap', get_theme_file_uri( '/js/bootstrap.min.js' ), array(), $version, true );
    wp_enqueue_script( 'webbuilder-skrollr', get_theme_file_uri( '/js/skrollr.min.js' ), array(), $version, true );
    wp_enqueue_script( 'webbuilder-scrollreveal', get_theme_file_uri( '/js/scrollReveal.min.js' ), array(), $version, true );
    wp_enqueue_script( 'webbuilder-scripts', get_theme_file_uri( '/js/scripts.js' ), array(), $version, true );

}
add_action( 'wp_enqueue_scripts', 'webbuilder_scripts' );

function webbuilder_styles() {

    $version = wp_get_theme()->get( 'Version' );
    
    if ($_ENV["PHP_ENV"] === 'dev') {$version = time();}
    
    wp_enqueue_style( 'webbuilder-font-opensans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' , array(), $version );
    wp_enqueue_style( 'webbuilder-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' , array(), $version );
    wp_enqueue_style( 'webbuilder-elegant-icons', get_template_directory_uri() . '/css/elegant-icons.min.css' , array(), $version );
    wp_enqueue_style( 'webbuilder-style', get_template_directory_uri() . '/style.css' , array(), $version );

}
add_action( 'wp_enqueue_scripts', 'webbuilder_styles' );

/**
 * Customizer additions.
 */

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// Enable post thumbnails
add_theme_support( 'post-thumbnails' ); 