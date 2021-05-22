<?php
/**
* Enqueue admin scripts and styles.
*
* @package wpstarter
* @version 1.0.0
*/
if ( ! function_exists( 'wpstarter_admin_main_scripts' ) ) :
    function wpstarter_admin_main_scripts() {
        /**
        * FILE VERSIONING
        */
        // $theme_ver = '1.0.0';
        // $admin_style_ver = filemtime( get_stylesheet_directory() . '/admin/assets/css/wpstarter-admin-style.js' );
        // $admin_script_ver = filemtime( get_stylesheet_directory() . '/admin/assets/js/wpstarter-admin-script.js' );

        /**
        * ADMIN JS
        */
        // wp_enqueue_style('wpstarter-admin-style', get_template_directory_uri() . '/admin/assets/css/wpstarter-admin-style.css', false, $admin_style_ver);
        // wp_enqueue_script( 'wpstarter-admin-script', get_template_directory_uri() . '/admin/assets/js/wpstarter-admin-script.js', array('jquery'), $admin_script_ver, true );
    }
endif;
// add_action( 'admin_enqueue_scripts', 'wpstarter_admin_main_scripts' );
