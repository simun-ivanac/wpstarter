<?php
/**
 * Widgets setup - register widget area.
 *
 * @package wpstarter
 * @version 1.0.0
 */
if ( ! function_exists( 'wpstarter_widgets_setup' ) ) :
    function wpstarter_widgets_setup() {

        register_sidebar( array(
    		'name'          => esc_html__( 'Sidebar-1', 'wpstarter' ),
    		'id'            => 'sidebar-1',
    		'description'   => esc_html__( 'Add widgets here.', 'wpstarter' ),
    		'before_widget' => '<section id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</section>',
    		'before_title'  => '<h2 class="widget-title">',
    		'after_title'   => '</h2>',
    	) );

    }
endif;
add_action( 'widgets_init', 'wpstarter_widgets_setup' );
