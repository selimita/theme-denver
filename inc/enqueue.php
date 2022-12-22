<?php
/**
 * denver enqueue scripts
 *
 * @package denver
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'denver_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function denver_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );
		
		$css_version = $theme_version . '.' . filemtime(get_template_directory() . '/css/theme.min.css');
		wp_enqueue_style( 'justifiedGallery-css', get_stylesheet_directory_uri() . '/css/justifiedGallery.min.css', array(), $css_version );
		wp_enqueue_style( 'denver-styles', get_stylesheet_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'denver-styles-css', get_stylesheet_uri(), array(), $css_version );


		$js_version = $theme_version . '.1' . filemtime(get_template_directory() . '/js/theme.min.js');
		wp_enqueue_script( 'denver-scripts', get_template_directory_uri() . '/js/jquery.justifiedGallery.min.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'denver-scripts', get_template_directory_uri() . '/js/theme.min.js', array('jquery'), $js_version, true );
		wp_enqueue_script( 'denver-extra', get_template_directory_uri() . '/js/script.js', array('jquery'), time(), true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'denver_scripts' ).

add_action( 'wp_enqueue_scripts', 'denver_scripts' );