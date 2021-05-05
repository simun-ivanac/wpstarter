<?php
/**
 * The template for displaying all single posts
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

		get_template_part( 'template-parts/content/content', get_post_type() );

		the_post_navigation(
			array(
				'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wpstarter' ) . '</span> <span class="nav-title">%title</span>',
				'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wpstarter' ) . '</span> <span class="nav-title">%title</span>',
			)
		);

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
