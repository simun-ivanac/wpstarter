<?php
/**
 * The template for displaying search results pages
 *
 * @package wpstarter
 * @since 1.0.0
 */

get_header();
?>


<!-- SITE-CONTENT -->
<main id="site-content" class="site-content">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Search Results for: %s', 'wpstarter' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h1>
		</header>

		<?php
		while ( have_posts() ) :
			the_post();

			/**
			 * Run the loop for the search to output the results.
			 * If you want to overload this in a child theme then include a file
			 * called content-search.php and that will be used instead.
			 */
			get_template_part( 'template-parts/content/content', 'search' );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content/content', 'none' );

	endif;
	?>

</main>
<!-- !SITE-CONTENT -->


<?php
get_sidebar();
get_footer();
