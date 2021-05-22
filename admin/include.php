<?php

/**
 * Include: functions and definitions for ADMIN.
 *
 * @package devwp
 * @since 1.0.0
 */


define( 'THEME_ADMIN_DIR', get_template_directory() . '/admin' );
define( 'THEME_ADMIN_DIR_URI', get_template_directory_uri() . '/admin' );


/**
 * * Enqueue admin css stylesheets and js scripts
 */
require THEME_ADMIN_DIR . '/includes/scripts/scripts.php';


/**
 * Customizer additions
 */
require THEME_ADMIN_DIR . '/includes/customizer/customizer.php';
