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
