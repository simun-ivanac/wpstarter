<?php

/**
 * Modify number of posts in category widget to display it in span element.
 *
 * @package wpstarter
 * @version 1.0.0
 */
if ( ! function_exists( 'wpstarter_ctheme_add_span_element_to_category_list' ) ) :
    function wpstarter_ctheme_add_span_element_to_category_list( $links ) {

    	$links = str_replace( '</a> (', '</a><span>', $links );
    	$links = str_replace( ')', '</span>', $links );
    	return $links;

    }
endif;
add_filter( 'wp_list_categories', 'wpstarter_ctheme_add_span_element_to_category_list' );


/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and uses list format for better accessibility.
 *
 * @package wpstarter
 * @version 1.0.0
 */
if ( ! function_exists( 'wpstarter_ctheme_tag_widget_cloud' ) ) :
    function wpstarter_ctheme_tag_widget_cloud( $args ) {
    	$args[ 'largest' ] = 14;
    	$args[ 'smallest' ] = 14;
    	$args[ 'unit' ] = 'px';
    	$args[ 'format' ] = 'list';

    	return $args;
    }
endif;
add_filter( 'widget_tag_cloud_args', 'wpstarter_ctheme_tag_widget_cloud' );
