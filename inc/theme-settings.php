<?php
/**
 * Check and setup theme's default settings
 *
 * @package denver
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists ( 'denver_setup_theme_default_settings' ) ) {
	function denver_setup_theme_default_settings() {

		// check if settings are set, if not set defaults.
		// Caution: DO NOT check existence using === always check with == .
		// Latest blog posts style.
		$denver_posts_index_style = get_theme_mod( 'denver_posts_index_style' );
		if ( '' == $denver_posts_index_style ) {
			set_theme_mod( 'denver_posts_index_style', 'default' );
		}

		// Sidebar position.
		$denver_sidebar_position = get_theme_mod( 'denver_sidebar_position' );
		if ( '' == $denver_sidebar_position ) {
			set_theme_mod( 'denver_sidebar_position', 'right' );
		}

		// Container width.
		$denver_container_type = get_theme_mod( 'denver_container_type' );
		if ( '' == $denver_container_type ) {
			set_theme_mod( 'denver_container_type', 'container' );
		}
	}
}