<?php get_header(); ?>

<!-- Clients Hero -->
<section class="bg-white pt-32 pb-12">
    <div class="container mx-auto px-6 text-center" style="max-width: 1200px;">
        <span class="text-blue-600 font-bold tracking-wider text-sm uppercase mb-4 block">Portofolio & Studi Kasus</span>
        <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-6">Kisah Sukses <span class="text-gradient">Klien Kami</span></h1>
        <p class="text-lg text-slate-600 max-w-2xl mx-auto">Kami bangga menjadi bagian dari pertumbuhan bisnis mitra kami. Berikut adalah beberapa proyek yang telah kami selesaikan.</p>
    </div>
</section>

<!-- Client Logos Grid - 8 Columns -->
<section class="pt-8 pb-20 bg-white">
    <div class="container mx-auto px-6" style="max-width: 1200px;">
        <?php
        // Query all clients
        $all_clients = new WP_Query( array(
            'post_type' => 'client',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC',
        ) );

        if ( $all_clients->have_posts() ) :
        ?>
        
        <!-- Logo Grid - 8 columns on desktop -->
        <div class="client-logo-grid">
            <?php while ( $all_clients->have_posts() ) : $all_clients->the_post(); ?>
                <a href="<?php the_permalink(); ?>" 
                   class="client-logo-item group" 
                   title="<?php the_title_attribute(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" 
                             alt="<?php the_title_attribute(); ?>" 
                             class="client-logo-img">
                    <?php else : ?>
                        <span class="client-logo-text"><?php the_title(); ?></span>
                    <?php endif; ?>
                    
                    <!-- Hover Overlay with Name -->
                    <div class="client-logo-overlay">
                        <span class="client-logo-name"><?php the_title(); ?></span>
                    </div>
                </a>
            <?php endwhile; 
            wp_reset_postdata();
            ?>
        </div>
        
        <?php else : ?>
            <div class="text-center py-20 bg-slate-50 rounded-3xl">
                <i class="fas fa-building text-4xl text-slate-300 mb-4"></i>
                <p class="text-slate-500">Belum ada klien yang ditampilkan.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Featured Case Studies - 3 Latest -->
<section class="py-16 bg-slate-50">
    <div class="container mx-auto px-6" style="max-width: 1200px;">
        <div class="text-center mb-12">
            <span class="text-blue-600 font-bold tracking-wider text-xs uppercase mb-2 block">Studi Kasus Terbaru</span>
            <h2 class="text-3xl font-bold text-slate-900 mb-4">Proyek yang Telah Kami Kerjakan</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">Detail kerjasama kami dengan mitra bisnis</p>
        </div>
        
        <?php 
        // Query for 3 latest case study cards
        $case_study_clients = new WP_Query( array(
            'post_type' => 'client',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ) );
        
        if ( $case_study_clients->have_posts() ) : ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php while ( $case_study_clients->have_posts() ) : $case_study_clients->the_post(); 
                    $category = get_post_meta( get_the_ID(), 'client_category', true ) ?: 'Business';
                ?>
                    <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100">
                        <!-- Thumbnail -->
                        <a href="<?php the_permalink(); ?>" class="block relative overflow-hidden" style="height: 180px;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium_large'); ?>" 
                                     alt="<?php the_title_attribute(); ?>" 
                                     class="w-full h-full object-contain bg-slate-50 p-6 transition-transform duration-500 group-hover:scale-105">
                            <?php else: ?>
                                <div class="w-full h-full bg-slate-100 flex items-center justify-center">
                                    <i class="fas fa-building text-3xl text-slate-300"></i>
                                </div>
                            <?php endif; ?>
                            <span class="absolute top-4 left-4 px-3 py-1 bg-blue-600 text-white text-xs font-semibold rounded-full">
                                <?php echo esc_html($category); ?>
                            </span>
                        </a>
                        
                        <!-- Content -->
                        <div class="p-6">
                            <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-blue-600 transition-colors">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p class="text-slate-500 text-sm mb-4 line-clamp-2">
                                <?php echo has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 15); ?>
                            </p>
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-blue-600 font-semibold text-sm hover:text-blue-700 transition-colors">
                                Lihat Detail <i class="fas fa-arrow-right ml-2 text-xs"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile; 
                wp_reset_postdata();
                ?>
            </div>
        <?php else : ?>
            <div class="text-center py-12">
                <p class="text-slate-500">Belum ada studi kasus yang ditampilkan.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<style>
/* Client Logo Grid - 8 columns layout */
.client-logo-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
}

@media (min-width: 640px) {
    .client-logo-grid {
        grid-template-columns: repeat(5, 1fr);
    }
}

@media (min-width: 768px) {
    .client-logo-grid {
        grid-template-columns: repeat(6, 1fr);
    }
}

@media (min-width: 1024px) {
    .client-logo-grid {
        grid-template-columns: repeat(8, 1fr);
        gap: 20px;
    }
}

/* Logo Item */
.client-logo-item {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    aspect-ratio: 1 / 1;
    padding: 16px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    overflow: hidden;
    text-decoration: none;
    transition: all 0.3s ease;
    cursor: pointer;
}

.client-logo-item:hover {
    background: #fff;
    border-color: #3b82f6;
    box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.15);
    transform: translateY(-4px);
}

/* Logo Image */
.client-logo-img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: all 0.3s ease;
    filter: grayscale(30%);
    opacity: 0.85;
}

.client-logo-item:hover .client-logo-img {
    filter: grayscale(0%);
    opacity: 1;
    transform: scale(1.05);
}

/* Text fallback for no image */
.client-logo-text {
    font-size: 11px;
    font-weight: 600;
    color: #64748b;
    text-align: center;
    line-height: 1.3;
}

/* Hover Overlay */
.client-logo-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(to top, rgba(15, 23, 42, 0.9), transparent);
    padding: 12px 8px 8px;
    opacity: 0;
    transform: translateY(100%);
    transition: all 0.3s ease;
}

.client-logo-item:hover .client-logo-overlay {
    opacity: 1;
    transform: translateY(0);
}

.client-logo-name {
    display: block;
    font-size: 10px;
    font-weight: 600;
    color: white;
    text-align: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
</style>

<?php get_footer(); ?>
