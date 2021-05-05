<?php

/**
 * Enqueue scripts and styles
 *
 * @package wpstarter
 * @version 1.0.0
 */
if ( ! function_exists( 'wpstarter_scripts' ) ) :
	function wpstarter_scripts() {

        $style_ver = filemtime( get_stylesheet_directory() . '/style.css' );
		$script_ver = filemtime( get_stylesheet_directory() . '/assets/js/wpstarter-script.js' );
        wp_enqueue_script( 'jquery' );


        /**
		 * 3rd PARTY LIBRARIES
		 */
        // wp_enqueue_style( 'wpstarter-google-font-montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap' );
        // wp_enqueue_style( 'wpstarter-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '1.0.0' );


		/**
		 * CSS
		 */
        wp_enqueue_style( 'wpstarter-style', get_stylesheet_uri(), array(), $style_ver );
        // wp_style_add_data( 'wpstarter-style', 'rtl', 'replace' );
        // wp_dequeue_style( 'wp-block-library' );
 	    // wp_dequeue_style( 'wp-block-library-theme' );
 	    // wp_dequeue_style( 'wc-block-style' );


		/**
		 * JS
		 */
        wp_enqueue_script( 'wpstarter-script', get_template_directory_uri() . '/assets/js/wpstarter-script.js', array(), $script_ver, true );
		// wp_enqueue_script( 'wpstarter-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true  );
        // wp_deregister_script( 'wp-embed' );


		/**
		 * WP: COMMENT REPLY
		 */
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'wpstarter_scripts' );


/**
 * Add inline css
 *
 * @package wpstarter
 * @version 1.0.0
 */
if ( ! function_exists( 'wpstarter_ctheme_inline_scripts' ) ) :
	function wpstarter_ctheme_inline_scripts() {

	    $inline_css = "";
	    wp_add_inline_style( 'wpstarter-style', $inline_css );

	}
endif;
// add_action( 'wp_enqueue_scripts', 'wpstarter_ctheme_inline_scripts' );
