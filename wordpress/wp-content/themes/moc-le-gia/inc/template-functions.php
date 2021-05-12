<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package moc-le-gia
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function moc_le_gia_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'moc_le_gia_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function moc_le_gia_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'moc_le_gia_pingback_header' );


/**
 * A Custom function for get an option
 */
if ( ! function_exists( 'prefix_get_option' ) ) {
  function prefix_get_option( $option = '', $default = null ) {
    $options = get_option( 'my_framework' ); // Attention: Set your unique id of the framework
    return ( isset( $options[$option] ) ) ? $options[$option] : $default;
  }
}

function dd($input)
{
	echo '<pre>';
	print_r($input);
	echo '<pre>';
	die;
}