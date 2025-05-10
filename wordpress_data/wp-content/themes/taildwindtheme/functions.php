<?php
/**
 * Tailwind Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tailwind_Theme
 * @subpackage Tailwind_Theme
 * @since Tailwind Theme 1.0
 */

// Đăng ký menu
 function taildwindtheme_register_menus() {
	 register_nav_menus( array(
		 'primary' => __( 'Menu chính', 'taildwindtheme' ),
		 'footer'  => __( 'Menu phụ', 'taildwindtheme' ),
	 ) );
 }
 add_action( 'after_setup_theme', 'taildwindtheme_register_menus' );

function taildwindtheme_enqueue_styles() {
    wp_enqueue_style( 'tailwind-style', get_template_directory_uri() . '/dist/style.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'taildwindtheme_enqueue_styles' );
