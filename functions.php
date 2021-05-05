<?php

/**
 * The functions template: include functions and definitions
 *
 * @package wpstarter
 * @since 1.0.0
 */


/**
 * Core functions
 */
// Base support functions (title, menus, html5...)
require get_template_directory() . '/includes/core/setup.php';

// Thumbnails, logo & background support
require get_template_directory() . '/includes/core/images.php';

// Implement the Custom Header feature
require get_template_directory() . '/includes/core/custom-header.php';

// Custom template tags for this theme
require get_template_directory() . '/includes/core/template-tags.php';

// Functions which enhance the theme by hooking into WordPress
require get_template_directory() . '/includes/core/template-functions.php';


/**
 * Enqueue css stylesheets and js scripts
 */
require get_template_directory() . '/includes/scripts/scripts.php';


/**
 * Widget - register areas and add new widgets
 */
// Register widget areas
require get_template_directory() . '/includes/widgets/widgets-setup.php';

// Customize some widgets displayed options
require get_template_directory() . '/includes/widgets/widgets-customization.php';


/**
 * Extra functions
 */


/**
 * Helper functions
 */


/**
 * Include admin files
 */
if ( is_admin() ) {
	require get_template_directory() . '/admin/include.php';
}


/**
 * Customizer additions
 */
if ( is_admin() ) {
	require get_template_directory() . '/includes/customizer/customizer.php';
}

/**
 * Load Jetpack compatibility file
 */
// if ( defined( 'JETPACK__VERSION' ) ) {
// 	require get_template_directory() . '/includes/plugins/jetpack.php';
// }
