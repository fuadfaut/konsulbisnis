<?php get_header(); ?>

<!-- Blog Hero -->
<section class="fade-enter bg-slate-50" style="padding-top: 100px; padding-bottom: 16px;">
    <div class="container mx-auto px-6 lg:px-8" style="max-width: 1080px;">
        <div class="mb-8 border-b border-slate-200 pb-8 flex flex-col md:flex-row justify-between items-end gap-4">
            <div>
                <span class="text-blue-600 font-bold tracking-wider uppercase text-xs mb-3 block">Our Journal</span>
                <h1 class="text-3xl md:text-4xl font-bold text-slate-900">Wawasan & Artikel</h1>
            </div>
            
            <!-- Category Filter & Search -->
            <div class="flex flex-wrap gap-2 items-center">
                <?php
                $current_cat = isset($_GET['cat']) ? intval($_GET['cat']) : 0;
                $categories = get_categories(array('hide_empty' => true));
                ?>
                <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="<?php echo $current_cat === 0 ? 'bg-slate-900 text-white' : 'bg-white border border-slate-200 text-slate-600 hover:bg-slate-50'; ?> px-4 py-2 rounded-full text-sm font-medium transition-colors">All</a>
                <?php foreach(array_slice($categories, 0, 4) as $cat) : ?>
                    <a href="<?php echo get_category_link($cat->term_id); ?>" class="<?php echo $current_cat === $cat->term_id ? 'bg-slate-900 text-white' : 'bg-white border border-slate-200 text-slate-600 hover:bg-slate-50'; ?> px-4 py-2 rounded-full text-sm font-medium transition-colors"><?php echo esc_html($cat->name); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="pb-24 bg-slate-50">
    <div class="container mx-auto px-6 lg:px-8" style="max-width: 1080px;">
        <?php if ( have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="bg-white rounded-2xl overflow-hidden border border-slate-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 cursor-pointer flex flex-col h-full group">
                        <!-- Image Header - Fixed Height 200px -->
                        <a href="<?php the_permalink(); ?>" class="block relative" style="height: 200px; overflow: hidden;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 200px; object-fit: cover; transition: transform 0.7s;" class="group-hover:scale-105">
                            <?php else: ?>
                                <div style="width: 100%; height: 200px; background-color: #f8fafc; display: flex; align-items: center; justify-content: center; color: #cbd5e1;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg>
                                </div>
                            <?php endif; ?>
                            <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) :
                            ?>
                            <div style="position: absolute; top: 16px; left: 16px;">
                                <span style="background: rgba(255,255,255,0.95); backdrop-filter: blur(4px); padding: 6px 12px; border-radius: 8px; font-size: 11px; font-weight: 700; color: #2563eb; box-shadow: 0 1px 3px rgba(0,0,0,0.1); letter-spacing: 0.025em;"><?php echo esc_html( $categories[0]->name ); ?></span>
                            </div>
                            <?php endif; ?>
                        </a>
                        
                        <!-- Body -->
                        <div class="p-6 flex-1 flex flex-col">
                            <!-- Meta -->
                            <div class="flex items-center text-xs text-slate-400 mb-3 gap-3 font-medium">
                                 <span class="flex items-center"><i class="far fa-calendar-alt mr-1.5"></i> <?php echo get_the_date('d M Y'); ?></span>
                                 <span class="w-1 h-1 bg-slate-300 rounded-full"></span>
                                 <span class="flex items-center"><i class="far fa-clock mr-1.5"></i> <?php echo ceil(str_word_count(get_the_content()) / 200); ?> min read</span>
                            </div>
                            
                            <!-- Title -->
                            <h3 class="text-xl font-bold text-slate-900 mb-3 leading-snug group-hover:text-blue-600 transition-colors line-clamp-2">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            
                            <!-- Excerpt - flex-grow untuk push footer ke bawah -->
                            <p class="text-slate-500 text-sm line-clamp-3 leading-relaxed" style="flex: 1 1 auto; margin-bottom: 16px;">
                                <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                            </p>
                            
                            <!-- Footer - selalu di bawah dengan spacing konsisten -->
                            <div style="margin-top: auto; padding-top: 16px; border-top: 1px solid #e2e8f0; display: flex; align-items: center; gap: 12px;">
                                <div class="author-avatar" style="width: 32px; height: 32px; border-radius: 9999px; background-color: #f1f5f9; overflow: hidden; flex-shrink: 0;">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', '', array('style' => 'width: 32px; height: 32px; border-radius: 9999px;') ); ?>
                                </div>
                                <span style="font-size: 14px; font-weight: 500; color: #475569;"><?php the_author(); ?></span>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center pb-8">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-arrow-left mr-2"></i> Sebelumnya',
                    'next_text' => 'Selanjutnya <i class="fas fa-arrow-right ml-2"></i>',
                    'class'     => 'blog-pagination'
                ) );
                ?>
            </div>

        <?php else : ?>
            <div class="text-center py-24">
                <div class="bg-slate-50 w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 text-slate-300">
                    <i class="fas fa-newspaper text-3xl"></i>
                </div>
                <h3 class="text-lg font-bold text-slate-900 mb-2">Belum ada artikel</h3>
                <p class="text-slate-500 max-w-sm mx-auto">Artikel blog akan segera hadir. Cek kembali nanti untuk pembaruan dan wawasan terbaru kami.</p>
                <a href="<?php echo home_url('/'); ?>" class="inline-block mt-6 px-6 py-3 bg-blue-700 hover:bg-amber-500 text-white font-semibold rounded-lg transition-colors">
                    Kembali ke Beranda
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
