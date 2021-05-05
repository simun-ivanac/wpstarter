<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css)
 * It is used to display a page when nothing more specific matches a query
 *
 * @package wpstarter
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part( 'template-parts/hero-image/hero-image-large' ); ?>


<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">
	<?php // get_template_part( 'template-parts/pages/homepage/section-one' ); ?>
</main>
<!-- !SITE-CONTENT -->


<?php
get_footer();
