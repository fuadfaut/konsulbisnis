<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); 
    $category = get_post_meta( get_the_ID(), 'client_category', true );
?>

<!-- Client Hero -->
<header class="relative bg-slate-900 h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>')"></div>
    <?php endif; ?>
    <div class="absolute inset-0 bg-slate-900/80 backdrop-blur-sm"></div>
    
    <div class="container mx-auto px-6 relative z-10 text-center text-white">
        <?php if($category): ?>
            <span class="inline-block py-1 px-4 rounded-full bg-white/10 border border-white/20 mb-6 backdrop-blur-md text-sm font-semibold tracking-wide">
                <?php echo esc_html($category); ?>
            </span>
        <?php endif; ?>
        
        <h1 class="text-4xl md:text-6xl font-bold mb-6"><?php the_title(); ?></h1>
        
        <?php if(has_excerpt()): ?>
            <p class="text-lg text-slate-300 max-w-3xl mx-auto leading-relaxed"><?php echo get_the_excerpt(); ?></p>
        <?php endif; ?>
    </div>
</header>

<!-- Stats Section (Mockup based on design) -->
<div class="relative z-20 -mt-16 container mx-auto px-6 mb-20 fade-enter">
    <div class="bg-white rounded-3xl shadow-xl p-8 lg:p-12 border border-slate-100 flex flex-col md:flex-row gap-8 justify-around items-center text-center">
        <div>
            <div class="text-4xl font-bold text-indigo-600 mb-1">100%</div>
            <div class="text-slate-500 text-sm font-medium uppercase tracking-wide">Kepuasan Klien</div>
        </div>
        <div class="hidden md:block w-px h-16 bg-slate-100"></div>
        <div>
            <div class="text-4xl font-bold text-indigo-600 mb-1">24/7</div>
            <div class="text-slate-500 text-sm font-medium uppercase tracking-wide">Support</div>
        </div>
        <div class="hidden md:block w-px h-16 bg-slate-100"></div>
        <div>
            <div class="text-4xl font-bold text-indigo-600 mb-1">5+</div>
            <div class="text-slate-500 text-sm font-medium uppercase tracking-wide">Tahun Kerjasama</div>
        </div>
    </div>
</div>

<main class="pb-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <!-- Content -->
            <article class="prose prose-lg prose-indigo max-w-none text-slate-600">
                <?php 
                $project_desc = get_post_meta( get_the_ID(), 'client_project_desc', true );
                if($project_desc): 
                ?>
                    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-10 rounded-r-lg">
                        <h4 class="text-indigo-900 font-bold mb-2 not-prose">Project Overview</h4>
                        <p class="text-indigo-800 m-0 text-base"><?php echo esc_html($project_desc); ?></p>
                    </div>
                <?php endif; ?>

                <?php the_content(); ?>
            </article>

            <!-- Navigation -->
            <div class="border-t border-slate-200 mt-16 pt-10 flex justify-between items-center">
                <div class="text-left">
                    <?php previous_post_link('%link', '<span class="text-sm text-slate-500 block mb-1">Previous Client</span><span class="font-bold text-slate-900 hover:text-indigo-600">%title</span>'); ?>
                </div>
                <!-- <a href="<?php echo get_post_type_archive_link('client'); ?>" class="text-slate-400 hover:text-indigo-600 transition-colors">
                    <i class="fas fa-th-large text-2xl"></i>
                </a> -->
                <div class="text-right">
                    <?php next_post_link('%link', '<span class="text-sm text-slate-500 block mb-1">Next Client</span><span class="font-bold text-slate-900 hover:text-indigo-600">%title</span>'); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- CTA Section -->
<section class="bg-slate-900 py-24 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-96 h-96 bg-indigo-600 rounded-full blur-[150px] opacity-20"></div>
    <div class="container mx-auto px-6 relative z-10 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Ingin Hasil Serupa?</h2>
        <p class="text-slate-300 max-w-2xl mx-auto mb-10">Mari diskusikan kebutuhan bisnis Anda dan temukan solusi terbaik bersama kami.</p>
        <a href="https://wa.me/<?php echo get_theme_mod('topbar_phone'); ?>" target="_blank" class="inline-flex items-center bg-white text-slate-900 font-bold py-4 px-8 rounded-xl hover:bg-indigo-50 transition-all transform hover:scale-105 shadow-xl">
            Konsultasi Sekarang <i class="fas fa-arrow-right ml-3"></i>
        </a>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
