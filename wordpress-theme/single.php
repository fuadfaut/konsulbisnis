<?php get_header(); ?>

<main class="pt-24 pb-16">
    <div class="container mx-auto px-6 max-w-4xl">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="mb-8 text-center">
                        <div class="text-sm text-slate-500 mb-2">
                            <?php echo get_the_date(); ?> | <?php the_category( ', ' ); ?>
                        </div>
                        <h1 class="text-3xl md:text-5xl font-bold text-slate-900 mb-6"><?php the_title(); ?></h1>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="mb-8 rounded-2xl overflow-hidden shadow-lg">
                                <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto object-cover' ) ); ?>
                            </div>
                        <?php endif; ?>
                    </header>
                    
                    <div class="prose prose-lg prose-slate mx-auto">
                        <?php the_content(); ?>
                    </div>

                    <div class="mt-12 pt-8 border-t border-slate-200">
                        <div class="flex justify-between items-center">
                            <div class="text-slate-600 font-medium">
                                <?php previous_post_link( '&larr; %link' ); ?>
                            </div>
                            <div class="text-slate-600 font-medium">
                                <?php next_post_link( '%link &rarr;' ); ?>
                            </div>
                        </div>
                    </div>
                </article>

                <?php
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                ?>

            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'konsulbisnis' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
