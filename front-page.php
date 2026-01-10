<?php
/**
 * The template for displaying the front page.
 *
 * This template has been updated to support Gutenberg Blocks.
 * The original hardcoded content has been migrated to Block Patterns.
 * Please use the WordPress Block Editor to edit this page.
 *
 * @package KonsulBisnis
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) :
		the_post(); // Load the page content from the database.
		?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>

		<?php
	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
