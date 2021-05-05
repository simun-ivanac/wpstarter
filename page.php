<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default
 *
 * @package wpstarter
 * @since 1.0.0
 */

get_header();
?>


<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">

	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile;
	?>

</main>
<!-- !SITE-CONTENT -->


<?php
get_sidebar();
get_footer();
