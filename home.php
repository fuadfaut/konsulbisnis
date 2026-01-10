<?php get_header(); ?>

<!-- Blog Hero -->
<section class="bg-slate-900 text-white py-20 relative overflow-hidden">
    <div class="absolute inset-0 bg-blue-900/20"></div>
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-500 rounded-full blur-[100px] opacity-20"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-amber-500 rounded-full blur-[100px] opacity-20"></div>
    
    <div class="container mx-auto px-6 relative z-10 text-center">
        <h1 class="text-4xl lg:text-5xl font-bold mb-4">Blog & Artikel</h1>
        <p class="text-slate-300 text-lg max-w-2xl mx-auto">Wawasan terbaru seputar akuntansi, perpajakan, dan teknologi sistem informasi untuk kemajuan bisnis Anda.</p>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-20 bg-slate-50">
    <div class="container mx-auto px-6">
        <?php if ( have_posts() ) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col h-full border border-slate-100">
                        <div class="relative overflow-hidden aspect-video">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('medium_large', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500')); ?>
                            <?php else : ?>
                                <div class="w-full h-full bg-slate-200 flex items-center justify-center text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"/><polyline points="14 2 14 8 20 8"/></svg>
                                </div>
                            <?php endif; ?>
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 bg-white/90 backdrop-blur text-blue-700 text-xs font-bold rounded-full uppercase tracking-wider">
                                    <?php 
                                    $cats = get_the_category();
                                    echo $cats ? esc_html($cats[0]->name) : 'Umum';
                                    ?>
                                </span>
                            </div>
                        </div>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    <?php echo get_the_date(); ?>
                                </span>
                                <span>&bull;</span>
                                <span class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <?php the_author(); ?>
                                </span>
                            </div>
                            
                            <h2 class="text-xl font-bold text-slate-900 mb-3 line-clamp-2 group-hover:text-blue-600 transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            
                            <div class="text-slate-600 text-sm mb-4 line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <div class="mt-auto pt-4 border-t border-slate-100 flex justify-between items-center">
                                <a href="<?php the_permalink(); ?>" class="text-blue-600 font-semibold text-sm hover:text-amber-500 transition-colors flex items-center gap-1">
                                    Baca Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="m12 5 7 7-7 7"></path></svg>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <div class="mt-12 flex justify-center">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&larr; Sebelumnya', 'konsulbisnis' ),
                    'next_text' => __( 'Selanjutnya &rarr;', 'konsulbisnis' ),
                    'class'     => 'flex gap-2'
                ) );
                ?>
            </div>
            
        <?php else : ?>
            <div class="text-center py-20">
                <svg class="w-16 h-16 text-slate-300 mx-auto mb-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Belum ada artikel</h3>
                <p class="text-slate-500">Silakan kembali lagi nanti untuk melihat update terbaru.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
