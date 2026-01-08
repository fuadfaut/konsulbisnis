<?php get_header(); ?>

<main class="pt-24 pb-16">
    <div class="container mx-auto px-6">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="mb-8">
                        <h1 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4"><?php the_title(); ?></h1>
                    </header>
                    
                    <div class="prose prose-slate max-w-none">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no content matched your criteria.', 'konsulbisnis' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
