<?php
/**
 * Images: add support for thumbnails, custom-background, custom-logo
 *
 * @package wpstarter
 * @since 1.0.0
 */
if ( ! function_exists( 'wpstarter_images' ) ) :
    function wpstarter_images() {

        // Enable support for post thumbnails on posts and pages
        add_theme_support( 'post-thumbnails' );
        // set_post_thumbnail_size( 620, 9999, false );
        // add_image_size( 'wp-wpstarter-banner', 525, 525, array( 'center', 'center' ) );
        // add_image_size( 'wp-wpstarter-features', 225, 525, array( 'center', 'center' ) );
        // add_image_size( 'wp-wpstarter-gallery', 500, 400, array( 'center', 'center' ) );

        // Set up custom background feature
		add_theme_support( 'custom-background',
			apply_filters( 'wpstarter_custom_background_args', array(
                'default-color'      => 'ffffff',
				'default-image'      => '',
                'default-repeat'     => 'no-repeat',
                'default-position-x' => 'center',
                'default-position-y' => 'center',
                'default-size'       => 'cover',
                'default-attachment' => 'fixed',
			) )
		);

		// Add support for custom logo
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

    }
endif;
add_action( 'after_setup_theme', 'wpstarter_images' );


/**
 * Remove default image sizes
 *
 * @package wpstarter
 * @since 1.0.0
 */
if ( ! function_exists( 'wpstarter_remove_default_image_sizes' ) ) :
    function wpstarter_remove_default_image_sizes( $sizes ) {

        unset( $sizes['thumbnail'] );
        unset( $sizes['medium'] );
        unset( $sizes['large'] );

        return $sizes;

    }
endif;
// add_filter( 'intermediate_image_sizes_advanced', 'wpstarter_remove_default_image_sizes' );


/**
 * Image size names (add new)
 *
 * @package wpstarter
 * @since 1.0.0
 */
if ( ! function_exists( 'wpstarter_image_size_names' ) ) :
    function wpstarter_image_size_names( $sizes ) {

        return array_merge( $sizes, array(
            'wp-wpstarter-banner'   => __( 'Banner', 'wpstarter' ),
            'wp-wpstarter-features' => __( 'Features', 'wpstarter' ),
        ) );

    }
endif;
// add_filter( 'image_size_names_choose', 'wpstarter_image_size_names' );
