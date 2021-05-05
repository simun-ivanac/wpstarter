<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package wpstarter
 * @since 1.0.0
 *
 */


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
if ( ! function_exists( 'wpstarter_body_classes' ) ) :
    function wpstarter_body_classes( $classes ) {
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
endif;
add_filter( 'body_class', 'wpstarter_body_classes' );


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
if ( ! function_exists( 'wpstarter_pingback_header' ) ) :
    function wpstarter_pingback_header() {
    	if ( is_singular() && pings_open() ) {
    		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
    	}
    }
endif;
add_action( 'wp_head', 'wpstarter_pingback_header' );
