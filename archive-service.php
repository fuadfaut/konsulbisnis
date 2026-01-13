<?php get_header(); ?>

<!-- Hero Section -->
<section class="fade-enter mx-auto px-6 lg:px-8 mb-20 mt-8" style="max-width: 1080px;">
    <div class="text-center max-w-3xl mx-auto">
        <span class="inline-block py-1 px-3 rounded-full bg-amber-50 text-amber-600 text-xs font-bold uppercase tracking-wider mb-4 border border-amber-200">Layanan Profesional</span>
        <h1 class="text-4xl md:text-6xl font-bold text-slate-900 mb-6 tracking-tight leading-tight">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-700 to-amber-500">Pelayanan Kami</span>
        </h1>
        <p class="text-lg text-slate-500 mb-10 leading-relaxed">
            Kami menyediakan layanan lengkap untuk mendukung pertumbuhan bisnis Anda, dari perpajakan hingga transformasi digital.
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="mx-auto px-6 lg:px-8 pb-20" style="max-width: 1080px;">
    <?php if ( have_posts() ) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while ( have_posts() ) : the_post();
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
                <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm hover:shadow-lg transition-all duration-300 flex flex-col h-full">
                    <!-- Icon -->
                    <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600 text-xl mb-6">
                        <i class="fas <?php echo $icon_class; ?>"></i>
                    </div>
                    
                    <!-- Title -->
                    <h3 class="text-xl font-bold text-slate-900 mb-3"><?php the_title(); ?></h3>
                    
                    <!-- Description -->
                    <div class="text-slate-500 text-sm leading-relaxed mb-6">
                        <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                    </div>
                    
                    <!-- Divider -->
                    <div class="border-t border-dashed border-slate-200 my-4"></div>
                    
                    <!-- Features List from Content -->
                    <div class="service-features text-sm text-slate-600 mb-6 flex-grow">
                        <?php
                        $content = get_the_content();
                        // Try to extract list items from content
                        if (preg_match_all('/<li[^>]*>(.*?)<\/li>/si', $content, $matches)) {
                            echo '<ul class="space-y-2">';
                            $count = 0;
                            foreach ($matches[1] as $item) {
                                if ($count >= 3) break; // Limit to 3 items
                                $clean_item = strip_tags($item);
                                echo '<li class="flex items-start gap-2"><span class="text-slate-400">•</span><span>' . esc_html($clean_item) . '</span></li>';
                                $count++;
                            }
                            echo '</ul>';
                        }
                        ?>
                    </div>
                    
                    <!-- Button -->
                    <a href="<?php the_permalink(); ?>" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-xl text-center transition-colors mt-auto block">
                        Lihat Layanan
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
        
        <div class="mt-12 flex justify-center">
            <?php
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => '<i class="fas fa-arrow-left mr-2"></i>',
                'next_text' => '<i class="fas fa-arrow-right ml-2"></i>',
                'class'     => 'flex gap-4'
            ) );
            ?>
        </div>

    <?php else : ?>
        <p class="text-center text-slate-500 py-20">Belum ada layanan yang ditambahkan.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
