<?php get_header(); ?>

<?php
// Icon class based on title
$icon_class = 'fa-briefcase'; // Default
$title_lower = strtolower(get_the_title());
if(strpos($title_lower, 'pajak') !== false || strpos($title_lower, 'perpajakan') !== false) $icon_class = 'fa-calculator';
elseif(strpos($title_lower, 'audit') !== false) $icon_class = 'fa-clipboard-check';
elseif(strpos($title_lower, 'pembukuan') !== false || strpos($title_lower, 'akuntansi') !== false) $icon_class = 'fa-book';
elseif(strpos($title_lower, 'keuangan') !== false) $icon_class = 'fa-chart-pie';
elseif(strpos($title_lower, 'it') !== false || strpos($title_lower, 'sistem') !== false || strpos($title_lower, 'teknologi') !== false) $icon_class = 'fa-laptop-code';
elseif(strpos($title_lower, 'konsultan') !== false) $icon_class = 'fa-handshake';
elseif(strpos($title_lower, 'web') !== false) $icon_class = 'fa-globe';
elseif(strpos($title_lower, 'marketing') !== false) $icon_class = 'fa-bullhorn';
?>

<!-- Single Service Header -->
<header class="relative bg-slate-900 text-white py-20 overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
    
    <div class="container mx-auto px-6 relative z-10" style="max-width: 1080px;">
        <!-- Back Button -->
        <a href="<?php echo get_post_type_archive_link('service'); ?>" class="inline-flex items-center text-slate-400 hover:text-white mb-6 text-sm transition">
            <i class="fas fa-arrow-left mr-2"></i> Kembali ke Layanan
        </a>
        
        <!-- Icon and Subtitle -->
        <div class="flex items-center gap-4 mb-4">
            <div class="w-12 h-12 rounded-lg bg-white/10 flex items-center justify-center backdrop-blur">
                <i class="fas <?php echo $icon_class; ?> text-2xl text-indigo-400"></i>
            </div>
            <span class="text-indigo-400 font-bold tracking-wide uppercase text-sm">Layanan Profesional</span>
        </div>
        
        <!-- Title -->
        <h1 class="text-4xl md:text-5xl font-bold mb-6 fade-enter"><?php the_title(); ?></h1>
        
        <!-- Excerpt/Description -->
        <?php if(has_excerpt()): ?>
            <p class="text-slate-300 text-lg max-w-2xl fade-enter" style="animation-delay: 0.1s"><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>
    </div>
</header>

<!-- Content Layout -->
<main class="bg-white py-16">
    <div class="container mx-auto px-6" style="max-width: 1080px;">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16">
            
            <!-- Main Content -->
            <div class="lg:col-span-2 fade-enter" style="animation-delay: 0.2s">
                <?php while ( have_posts() ) : the_post(); ?>
                    
                    <!-- Featured Image -->
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="mb-10 rounded-2xl overflow-hidden shadow-lg">
                            <?php the_post_thumbnail( 'large', array( 'class' => 'w-full h-auto object-cover' ) ); ?>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Description Section -->
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Deskripsi Layanan</h3>
                    <div class="text-slate-600 leading-relaxed mb-10 text-lg prose prose-lg prose-indigo max-w-none">
                        <?php the_content(); ?>
                    </div>
                    
                    <!-- Features Section - Extract from content or custom field -->
                    <?php
                    $content = get_the_content();
                    // Try to extract list items from content for features
                    if (preg_match_all('/<li[^>]*>(.*?)<\/li>/si', $content, $matches) && count($matches[1]) > 0) :
                    ?>
                    <h3 class="text-2xl font-bold text-slate-900 mb-6">Fitur Unggulan</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                        <?php
                        foreach ($matches[1] as $item) :
                            $clean_item = strip_tags($item);
                        ?>
                        <div class="flex items-start p-4 bg-white border border-slate-100 rounded-xl">
                            <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                <i class="fas fa-check text-xs"></i>
                            </div>
                            <span class="text-slate-700 font-medium"><?php echo esc_html($clean_item); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    
                <?php endwhile; ?>
            </div>

            <!-- Sidebar CTA -->
            <div class="lg:col-span-1 fade-enter" style="animation-delay: 0.3s">
                <div class="bg-white p-8 rounded-2xl border border-slate-100 shadow-xl shadow-slate-200/50 sticky top-24">
                    <h4 class="text-lg font-bold text-slate-900 mb-2">Mulai Proyek Anda</h4>
                    <p class="text-slate-500 text-sm mb-6">Dapatkan penawaran khusus untuk kebutuhan bisnis Anda.</p>
                    
                    <div class="mb-6">
                        <span class="text-sm text-slate-400 block mb-1">Konsultasi</span>
                        <span class="text-2xl font-bold text-slate-900">Gratis</span>
                    </div>

                    <a href="https://wa.me/<?php echo esc_attr(get_theme_mod('whatsapp_number', '6281346242556')); ?>?text=<?php echo urlencode('Halo, saya tertarik dengan layanan ' . get_the_title()); ?>" target="_blank" class="block w-full bg-amber-500 hover:bg-amber-600 text-slate-900 py-3 rounded-xl font-bold mb-4 text-center transition-all shadow-lg hover:shadow-xl">
                        Jadwalkan Konsultasi
                    </a>
                    <a href="<?php echo get_post_type_archive_link('service'); ?>" class="block w-full bg-blue-700 hover:bg-blue-800 text-white border border-blue-700 py-3 rounded-xl font-bold transition text-center">
                        Lihat Layanan Lain
                    </a>
                </div>
                
                <!-- Other Services Navigation -->
                <div class="mt-8 bg-white border border-slate-100 rounded-2xl p-6 shadow-sm">
                    <h3 class="font-bold text-slate-900 mb-4">Layanan Lainnya</h3>
                    <div class="flex flex-col space-y-2">
                        <?php
                        $other = new WP_Query([
                            'post_type' => 'service',
                            'posts_per_page' => 5,
                            'post__not_in' => [get_the_ID()]
                        ]);
                        if($other->have_posts()): while($other->have_posts()): $other->the_post();
                        ?>
                            <a href="<?php the_permalink(); ?>" class="group flex items-center p-2 rounded-lg hover:bg-slate-50 transition-colors">
                                <span class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-600 flex items-center justify-center text-xs mr-3 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <i class="fas fa-chevron-right"></i>
                                </span>
                                <span class="text-sm font-medium text-slate-600 group-hover:text-indigo-600"><?php the_title(); ?></span>
                            </a>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>

<?php get_footer(); ?>
