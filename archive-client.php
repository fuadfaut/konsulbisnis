<?php get_header(); ?>

<!-- Clients Hero -->
<section class="bg-white pt-32 pb-20">
    <div class="container mx-auto px-6 text-center" style="max-width: 1080px;">
        <span class="text-indigo-600 font-bold tracking-wider text-sm uppercase mb-4 block">Portofolio & Studi Kasus</span>
        <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Kisah Sukses <span class="text-gradient">Klien Kami</span></h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">Kami bangga menjadi bagian dari pertumbuhan bisnis mitra kami. Berikut adalah beberapa proyek yang telah kami selesaikan.</p>
    </div>
</section>

<!-- Clients List -->
<section class="pb-20 bg-white">
    <div class="container mx-auto px-6" style="max-width: 1080px;">
        <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php while ( have_posts() ) : the_post(); 
                    $category = get_post_meta( get_the_ID(), 'client_category', true ) ?: 'Business';
                ?>
                    <article class="group relative bg-slate-900 rounded-3xl overflow-hidden h-[400px] cursor-pointer shadow-lg hover:shadow-2xl transition-all duration-500">
                        <!-- Background Image -->
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-110 opacity-60 group-hover:opacity-40" 
                                 style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>')">
                            </div>
                        <?php else: ?>
                            <div class="absolute inset-0 bg-slate-800"></div>
                        <?php endif; ?>
                        
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                        
                        <!-- Content -->
                        <div class="absolute bottom-0 left-0 p-8 w-full">
                            <div class="transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="inline-block px-3 py-1 bg-white/10 backdrop-blur-md text-white/90 text-xs font-medium rounded-full mb-4 border border-white/20">
                                    <?php echo esc_html($category); ?>
                                </span>
                                <h2 class="text-2xl md:text-3xl font-bold text-white mb-3"><?php the_title(); ?></h2>
                                <div class="text-slate-300 text-sm line-clamp-2 mb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 delay-100">
                                    <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 15); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-white font-semibold border-b border-white pb-1 group-hover:border-indigo-400 group-hover:text-indigo-400 transition-colors">
                                    Lihat Studi Kasus <i class="fas fa-arrow-right ml-2 text-xs"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="mt-16 flex justify-center">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-chevron-left"></i>',
                    'next_text' => '<i class="fas fa-chevron-right"></i>',
                    'class'     => 'flex gap-3 text-slate-600 font-medium'
                ) );
                ?>
            </div>

        <?php else : ?>
            <div class="text-center py-20 bg-slate-50 rounded-3xl">
                <i class="fas fa-folder-open text-4xl text-slate-300 mb-4"></i>
                <p class="text-slate-500">Belum ada studi kasus yang ditampilkan.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
