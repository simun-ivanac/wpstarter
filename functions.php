<?php

/**
 * The functions template: include functions and definitions
 *
 * @package wpstarter
 * @since 1.0.0
 */


define( 'THEME_DIR', get_template_directory() );
define( 'THEME_DIR_URI', get_template_directory_uri() );


/**
 * Core functions
 */
// Base support functions (title, menus, html5...)
require THEME_DIR . '/includes/core/setup.php';

// Thumbnails, logo & background support
require THEME_DIR . '/includes/core/images.php';

// Implement the Custom Header feature
require THEME_DIR . '/includes/core/custom-header.php';

// Custom template tags for this theme
require THEME_DIR . '/includes/core/template-tags.php';

// Functions which enhance the theme by hooking into WordPress
require THEME_DIR . '/includes/core/template-functions.php';


/**
 * Enqueue css stylesheets and js scripts
 */
require THEME_DIR . '/includes/scripts/scripts.php';


/**
 * Widget - register areas and add new widgets
 */
// Register widget areas
require THEME_DIR . '/includes/widgets/widgets-setup.php';

// Customize some widgets displayed options
require THEME_DIR . '/includes/widgets/widgets-customization.php';


/**
 * Extra functions
 */


/**
 * Helper functions
 */


/**
 * Plugins files || modifications
 */
// JETPACK: Load compatibility file
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require THEME_DIR . '/includes/plugins/jetpack.php';
// }


/**
 * Include admin files
 */
if ( is_admin() ) {
	require THEME_DIR . '/admin/include.php';
}
