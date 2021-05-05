<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> and <header> section
 *
 * @package wpstarter
 * @since 1.0.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- SITE-WRAPPER -->
<div id="site-wrapper" class="site-wrapper">
	<a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e( 'Skip to content', 'wpstarter' ); ?></a>

    <!-- SITE-HEADER -->
	<header id="site-header" class="site-header">
		<?php //the_header_image_tag(); ?>

        <div class="site-branding">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) :
                the_custom_logo();
            endif;
            ?>

			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </h1>
			<?php else : ?>
				<p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </p>
			<?php endif; ?>

			<?php $wpstarter_description = get_bloginfo( 'description', 'display' ); ?>
			<?php if ( $wpstarter_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $wpstarter_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="site-navigation">
            <button class="menu-icon js-toggle-menu" aria-controls="primary-menu" aria-expanded="false">
                <span class="screen-reader-text"><?php esc_html_e( 'Primary Menu', 'wpstarter' ); ?></span>
                <span class="menu-icon-style"></span>
            </button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>
	</header>
    <!-- !SITE-HEADER -->
