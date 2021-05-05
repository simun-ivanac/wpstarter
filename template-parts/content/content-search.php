<?php
/**
 * Template part for displaying results in search pages
 *
 * @package wpstarter
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			wpstarter_posted_on();
			wpstarter_posted_by();
			?>
		</div>
		<?php endif; ?>
	</header>

	<?php wpstarter_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<footer class="entry-footer">
		<?php wpstarter_entry_footer(); ?>
	</footer>
</article>
