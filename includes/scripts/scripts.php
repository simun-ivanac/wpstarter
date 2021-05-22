<?php
/**
 * Enqueue scripts and styles
 *
 * @package wpstarter
 * @version 1.0.0
 */
if ( ! function_exists( 'wpstarter_scripts' ) ) :
	function wpstarter_scripts() {
        /**
         * FILE VERSIONING
         */
        $style_ver = filemtime( get_stylesheet_directory() . '/style.css' );
        $script_ver = filemtime( get_stylesheet_directory() . '/assets/js/wpstarter-script.js' );
        $theme_ver = '1.0.0';


        /**
         * MAIN CSS
         */
        wp_enqueue_style( 'devwp-style', get_stylesheet_uri(), array(), $style_ver );


        /**
         * WP: JQUERY
         */
        wp_scripts()->add_data( 'jquery', 'group', 1 );
        wp_scripts()->add_data( 'jquery-core', 'group', 1 );
        wp_scripts()->add_data( 'jquery-migrate', 'group', 1 );
        wp_enqueue_script( 'jquery' );


		/**
		 * JS
		 */
        wp_enqueue_script( 'wpstarter-script', get_template_directory_uri() . '/assets/js/wpstarter-script.js', array('jquery'), $script_ver, true );


		/**
		 * WP: COMMENT REPLY
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'wpstarter_scripts' );
