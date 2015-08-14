<?php
/**
 * Hannari Blue functions and definitions
 *
 * @package Hannari Blue
 */
 
add_action( 'wp_enqueue_scripts', 'hannari_blue_enqueue_styles' );
function hannari_blue_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
?>