<?php
/**
 * Template Name: Page without Title
 */
get_header(); ?>

<main class="pt-0 pb-16">
    <div class="w-full">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="container mx-auto px-6 pt-24">
                <p><?php esc_html_e( 'Sorry, no content matched your criteria.', 'konsulbisnis' ); ?></p>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
