<?php get_header(); ?>

<main class="pt-24 pb-16">
    <div class="container mx-auto px-6">
        <header class="mb-12 text-center">
            <h1 class="text-4xl font-bold text-slate-900 mb-4"><?php single_post_title(); ?></h1>
        </header>

        <?php if ( have_posts() ) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'bg-white rounded-xl shadow-sm border border-slate-100 overflow-hidden hover:shadow-lg transition-all' ); ?>>
                        <?php if ( has_post_thumbnail() ) : ?>
                            <a href="<?php the_permalink(); ?>" class="block h-48 overflow-hidden">
                                <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-full object-cover transform hover:scale-105 transition-transform duration-500' ) ); ?>
                            </a>
                        <?php endif; ?>
                        
                        <div class="p-6">
                            <div class="text-xs text-slate-500 mb-2">
                                <?php echo get_the_date(); ?>
                            </div>
                            <h2 class="text-xl font-bold text-slate-900 mb-3 line-clamp-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-amber-500 transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="text-slate-600 text-sm mb-4 line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-sm font-semibold text-blue-600 hover:text-blue-700">
                                Baca Selengkapnya <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="mt-12 flex justify-center gap-2">
                <?php
                the_posts_pagination( array(
                    'prev_text' => '&larr;',
                    'next_text' => '&rarr;',
                    'class'     => 'flex gap-2'
                ) );
                ?>
            </div>

        <?php else : ?>
            <p class="text-center text-slate-500"><?php esc_html_e( 'Belum ada artikel.', 'konsulbisnis' ); ?></p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
