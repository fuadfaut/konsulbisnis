<?php get_header(); ?>

<section id="hero" class="relative bg-slate-50 overflow-hidden">
    <div class="container mx-auto px-6 py-20 lg:py-32 flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2 z-10">

            <h1 class="hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6">
                <?php echo esc_html( get_theme_mod( 'hero_title', 'Solusi Bisnis' ) ); ?> <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-700 to-amber-500 animate-gradient"><?php echo esc_html( get_theme_mod( 'hero_highlight', 'Terintegrasi' ) ); ?></span>
            </h1>
            <p class="hero-animate-delay-2 text-lg text-slate-600 mb-8 max-w-lg leading-relaxed">
                <?php echo nl2br( esc_html( get_theme_mod( 'hero_desc', 'PT Kami Bantu Konsultan bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT. Kami membantu pelaku usaha dalam menerapkan prinsip pengelolaan bisnis yang sesuai standar.' ) ) ); ?>
            </p>
            <div class="hero-animate-delay-3 flex flex-col sm:flex-row gap-4">
                <?php if ( get_theme_mod( 'hero_btn1_show', true ) ) : ?>
                <button class="btn-ripple pulse-glow px-8 py-4 bg-blue-700 text-white font-semibold rounded hover:bg-amber-500 transition-all flex items-center justify-center gap-2 shadow-lg hover:shadow-xl" onclick="window.location.href='<?php echo esc_url( get_theme_mod( 'hero_btn1_url', '#contact' ) ); ?>'">
                    <?php echo esc_html( get_theme_mod( 'hero_btn1_text', 'Jadwalkan Konsultasi' ) ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
                </button>
                <?php endif; ?>
                
                <?php if ( get_theme_mod( 'hero_btn2_show', true ) ) : ?>
                <button class="px-8 py-4 bg-white text-slate-700 border border-slate-300 font-semibold rounded hover:bg-slate-50 transition-all" onclick="window.location.href='<?php echo esc_url( get_theme_mod( 'hero_btn2_url', '#services' ) ); ?>'">
                    <?php echo esc_html( get_theme_mod( 'hero_btn2_text', 'Lihat Layanan' ) ); ?>
                </button>
                <?php endif; ?>
            </div>
        </div>
        <div class="lg:w-1/2 relative hero-image-animate">
            <div class="float-animation absolute -top-4 -right-4 bg-white px-5 py-3 rounded-full shadow-xl border border-slate-100 flex items-center gap-3 z-10">
                <div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-amber-500 rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <p class="font-bold text-slate-900">Kami Siap Bantu</p>
            </div>
            <div class="relative rounded-lg overflow-hidden transform hover:scale-[1.02] transition-transform duration-500">
                <?php
                $hero_image = get_theme_mod( 'hero_image' );
                if ( $hero_image ) {
                    echo '<img src="' . esc_url( $hero_image ) . '" alt="' . get_bloginfo( 'name' ) . '" class="w-full object-cover"/>';
                } else {
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/wew.png" alt="PT Kami Bantu Konsultan" class="w-full object-cover"/>';
                }
                ?>
            </div>
            <div class="float-animation absolute -bottom-6 -left-6 bg-white p-6 rounded shadow-xl border border-slate-100 max-w-xs hidden md:block" style="animation-delay:0.5s">
                <p class="text-sm text-slate-500 font-medium mb-1">Klien yang Dilayani</p>
                <p class="text-3xl font-bold text-slate-900">50+</p>
                <p class="text-xs text-slate-400 mt-1">Perusahaan & Instansi</p>
            </div>
        </div>
    </div>
</section>

<section class="py-6 bg-slate-50 border-y border-slate-100">
    <div class="container mx-auto px-6 mb-4">
        <p class="text-center text-sm text-slate-500 font-medium">Dipercaya oleh berbagai perusahaan dan instansi</p>
    </div>
    <div class="marquee-container">
        <div class="marquee-content" style="animation-name: marquee;">
            <div class="flex items-center gap-16 px-8">
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/BI_Logo.png" alt="Bank Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_of_PT_Astra_International_Tbk_terbaru_2025.png" alt="Astra International" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_Bankaltimtara.png" alt="Bank Kaltimtara" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Telkom_Indonesia_2013.svg" alt="Telkom Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_of_the_Ministry_of_Law_and_Human_Rights_of_the_Republic_of_Indonesia.svg" alt="kemenkumham" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"><span class="text-lg font-bold text-slate-700">KemenKumHam</span></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_-282024-29.svg" alt="komidigi" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_Kota_Samarinda.png" alt="pemkot Samarinda" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"><span class="text-lg font-bold text-slate-700">Pemkot Samarinda</span></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoKPC-e1540438716881.png" alt="KPC" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
            </div>
            <div class="flex items-center gap-16 px-8">
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/BI_Logo.png" alt="Bank Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_of_PT_Astra_International_Tbk_terbaru_2025.png" alt="Astra International" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_Bankaltimtara.png" alt="Bank Kaltimtara" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Telkom_Indonesia_2013.svg" alt="Telkom Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_of_the_Ministry_of_Law_and_Human_Rights_of_the_Republic_of_Indonesia.svg" alt="kemenkumham" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"><span class="text-lg font-bold text-slate-700">KemenKumHam</span></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_-282024-29.svg" alt="komidigi" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo_Kota_Samarinda.png" alt="pemkot Samarinda" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"><span class="text-lg font-bold text-slate-700">Pemkot Samarinda</span></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LogoKPC-e1540438716881.png" alt="KPC" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6 animate-on-scroll">
            <div class="max-w-2xl">
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4"><?php echo esc_html( get_theme_mod( 'home_service_title', 'Pelayanan Kami' ) ); ?></h2>
                <p class="text-slate-600 text-lg"><?php echo nl2br( esc_html( get_theme_mod( 'home_service_desc', 'Kami menyediakan layanan lengkap untuk mendukung pertumbuhan bisnis Anda, dari perpajakan hingga transformasi digital.' ) ) ); ?></p>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-8">
            <?php
            $services_query = new WP_Query( array(
                'post_type' => 'service',
                'posts_per_page' => 10,
                'order' => 'ASC',
            ) );

            $special_service = null;
            $other_services = array();

            if ( $services_query->have_posts() ) {
                while ( $services_query->have_posts() ) {
                    $services_query->the_post();
                    // Identify special service by title keywords
                    $title = get_the_title();
                    if ( ! $special_service && ( strpos( $title, 'IT' ) !== false || strpos( $title, 'Sistem' ) !== false ) ) {
                        $special_service = $post;
                    } else {
                        $other_services[] = $post;
                    }
                }
                wp_reset_postdata();
            }

            // --- LEFT COLUMN (Special Card) ---
            if ( $special_service ) :
                // Setup global post data for template tags to work
                global $post;
                $post = $special_service;
                setup_postdata( $post );
                ?>
                <div class="lg:w-1/3 min-h-full animate-fade-in-left">
                    <div class="h-full bg-gradient-to-br from-blue-900 to-slate-900 text-white p-10 rounded-2xl flex flex-col justify-between relative overflow-hidden group hover:shadow-2xl transition-all duration-300">
                        <div class="absolute top-0 right-0 w-64 h-64 bg-amber-500 rounded-full blur-[80px] opacity-20 group-hover:opacity-30 transition-opacity"></div>
                        <div class="relative z-10">
                            <div class="w-14 h-14 bg-white/10 rounded-xl flex items-center justify-center mb-8 backdrop-blur-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
                            </div>
                            <h3 class="text-3xl font-bold mb-6"><?php the_title(); ?></h3>
                            <?php edit_post_link( '✎ Edit Layanan', '<div class="mb-4 text-sm text-amber-300 font-bold hover:underline">', '</div>' ); ?>
                            <div class="text-slate-300 leading-relaxed mb-8 service-content">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <a class="relative z-10 w-full py-4 bg-amber-500 hover:bg-amber-600 rounded-lg text-slate-900 font-bold text-center transition-all shadow-lg hover:shadow-amber-500/50" href="<?php echo home_url('/sistemasi-bisnis'); ?>">Konsultasi IT & Sistem</a>
                    </div>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>

            <?php // --- RIGHT COLUMN (Grid of Other Services) --- ?>
            <div class="<?php echo $special_service ? 'lg:w-2/3' : 'w-full'; ?> grid md:grid-cols-2 gap-6">
                <?php
                foreach ( $other_services as $post ) :
                    setup_postdata( $post );
                    ?>
                    <div class="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group flex flex-col justify-between h-full animate-on-scroll">
                        <div>
                            <div class="flex items-start justify-between mb-6">
                                <div class="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                    <svg class="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2"></rect><line x1="8" x2="16" y1="6" y2="6"></line><line x1="16" x2="16" y1="14" y2="18"></line><path d="M16 10h.01"></path><path d="M12 10h.01"></path><path d="M8 10h.01"></path><path d="M12 14h.01"></path><path d="M8 14h.01"></path><path d="M12 18h.01"></path><path d="M8 18h.01"></path></svg>
                                </div>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3"><?php the_title(); ?></h3>
                            <?php edit_post_link( '✎ Edit', '<span class="text-xs text-blue-500 hover:underline mb-2 block">', '</span>' ); ?>
                            <div class="text-slate-600 text-sm mb-6 leading-relaxed [&>ul]:space-y-2 [&>p]:mb-3 [&>ul>li]:flex [&>ul>li]:items-start [&>ul>li]:gap-2 [&>ul>li]:before:content-['✓'] [&>ul>li]:before:text-blue-500 [&>ul>li]:before:font-bold">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <a href="https://wa.me/6281346242556?text=Halo%20saya%20tertarik%20dengan%20<?php echo urlencode( get_the_title() ); ?>" target="_blank" rel="noopener noreferrer" class="mt-auto w-full py-2.5 bg-blue-600 hover:bg-blue-700 rounded-lg text-white text-sm font-semibold transition-colors text-center inline-block">Hubungi Kami</a>
                    </div>
                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>

<?php if ( get_theme_mod( 'about_show', true ) ) : ?>
<section id="about" class="py-24 bg-slate-900 text-white relative">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2 animate-fade-in-left">
                <h2 class="text-3xl lg:text-4xl font-bold mb-6"><?php echo esc_html( get_theme_mod( 'about_title', 'Tentang Kami' ) ); ?></h2>
                <p class="text-slate-300 text-lg mb-6 leading-relaxed"><?php echo nl2br( esc_html( get_theme_mod( 'about_desc', 'PT Kami Bantu Konsultan adalah perseroan perorangan yang bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan di bidang Information Technology khususnya penyedia aplikasi keuangan dan bisnis.' ) ) ); ?></p>
                <p class="text-slate-400 mb-8 leading-relaxed"><?php echo nl2br( esc_html( get_theme_mod( 'about_desc_2', 'Didirikan atas dasar keprihatinan terhadap rendahnya literasi keuangan masyarakat, serta ketidakpahaman para pelaku ekonomi utamanya UMKM dalam tata kelola keuangan, perpajakan, dan manajemen. Kami memiliki visi menjadi perusahaan penyedia jasa yang edukatif dan solutif bagi klien dengan motto "Kolaborasi untuk Bertumbuh".' ) ) ); ?></p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1"><?php echo esc_html( get_theme_mod( 'stat_clients_num', '50+' ) ); ?></h4><p class="text-sm text-slate-400">Klien Aktif</p></div>
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1"><?php echo esc_html( get_theme_mod( 'stat_projects_num', '30+' ) ); ?></h4><p class="text-sm text-slate-400">Proyek IT</p></div>
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1"><?php echo esc_html( get_theme_mod( 'stat_experience_num', '5+' ) ); ?></h4><p class="text-sm text-slate-400">Tahun Pengalaman</p></div>
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1"><?php echo esc_html( get_theme_mod( 'stat_team_num', '5' ) ); ?></h4><p class="text-sm text-slate-400">Tim Profesional</p></div>
                </div>
            </div>
            <div id="process" class="lg:w-1/2 animate-fade-in-right">
                <h3 class="text-2xl font-bold mb-6">Klien & Mitra Kami</h3>
                <p class="text-slate-400 mb-6">Kami telah membantu klien dari berbagai perusahaan, badan organisasi, lembaga pemerintah dan perorangan.</p>
                <div class="grid grid-cols-2 gap-4">
                    <?php
                    $about_clients_query = new WP_Query( array(
                        'post_type' => 'client',
                        'posts_per_page' => 6,
                        'orderby' => 'menu_order',
                        'order' => 'ASC',
                    ) );

                    if ( $about_clients_query->have_posts() ) :
                        while ( $about_clients_query->have_posts() ) : $about_clients_query->the_post();
                            $client_name = get_the_title();
                            $client_desc = get_post_meta( get_the_ID(), 'client_project_desc', true );
                            ?>
                            <div class="p-4 bg-slate-800 rounded-lg border border-slate-700 hover:border-amber-500 transition-colors">
                                <p class="font-semibold text-sm"><?php echo esc_html( $client_name ); ?></p>
                                <?php if ( $client_desc ) : ?>
                                    <p class="text-xs text-slate-500"><?php echo esc_html( $client_desc ); ?></p>
                                <?php endif; ?>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else :
                        ?>
                        <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Bank Indonesia Kaltmara</p><p class="text-xs text-slate-500">Pembuatan Website</p></div>
                        <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">PT Astra International</p><p class="text-xs text-slate-500">Aplikasi LISA</p></div>
                        <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Pemerintah Kota Samarinda</p><p class="text-xs text-slate-500">Kontrak Website</p></div>
                        <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">KemenKumHam Kaltmara</p><p class="text-xs text-slate-500">E-Lasikum.id</p></div>
                        <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Diskominfo Prov. Kaltmara</p><p class="text-xs text-slate-500">Aplikasi COVID</p></div>
                        <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Bank Kaltmara</p><p class="text-xs text-slate-500">Pelatihan MS Office</p></div>
                    <?php endif; ?>
                </div>
                <?php
                $total_clients = wp_count_posts( 'client' )->publish;
                if ( $total_clients > 6 ) :
                ?>
                    <div class="mt-4 text-center">
                        <a href="<?php echo get_post_type_archive_link( 'client' ); ?>" class="text-amber-400 hover:text-amber-300 text-sm font-semibold transition-colors">
                            Lihat Semua Klien (<?php echo $total_clients; ?>) →
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<section id="contact" class="py-24 bg-slate-100">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-0 max-w-6xl mx-auto rounded-3xl overflow-hidden shadow-2xl animate-on-scroll">
            <!-- Left Column - Contact Info with Image -->
            <div class="lg:w-5/12 relative overflow-hidden text-white min-h-[500px]" style="background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 50%, #172554 100%);">
                <!-- Background Image -->
                <div class="absolute inset-0 opacity-20">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/follow.svg" alt="" class="w-full h-full object-cover"/>
                </div>
                
                <!-- Overlay gradient for readability -->
                <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/60 to-blue-900/80"></div>
                
                <div class="relative z-10 p-10 lg:p-12 h-full flex flex-col">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-white"><?php echo esc_html( get_theme_mod( 'contact_title', 'Hubungi Kami' ) ); ?></h2>
                    <p class="text-blue-100 mb-10 leading-relaxed">
                        <?php echo nl2br( esc_html( get_theme_mod( 'contact_desc', 'Siap merapikan keuangan dan mensistemasi bisnis Anda? Konsultasi awal gratis.' ) ) ); ?>
                    </p>
                    
                    <!-- Contact Details -->
                    <div class="space-y-6 flex-grow">
                        <!-- Kantor -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">Kantor</h4>
                                <p class="text-blue-200 text-sm leading-relaxed"><?php echo esc_html( get_theme_mod( 'footer_address', 'Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B, Kel. Temindung Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75117' ) ); ?></p>
                            </div>
                        </div>
                        
                        <!-- WhatsApp -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">WhatsApp</h4>
                                <p class="text-blue-200 text-sm"><?php echo esc_html( get_theme_mod( 'footer_phone1', '0813-4624-2556' ) ); ?></p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">Email</h4>
                                <p class="text-blue-200 text-sm"><?php echo esc_html( get_theme_mod( 'footer_email', 'KonsultanKamiBantu@gmail.com' ) ); ?></p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <div class="flex items-start gap-4">
                            <a href="https://kamibantu.co" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-10 h-10 bg-white/10 hover:bg-white/20 rounded-lg transition-colors shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                            </a>
                            <div class="flex flex-col justify-center h-10">
                                <h4 class="font-bold text-white text-sm mb-0">Instagram</h4>
                                <a href="https://kamibantu.co" target="_blank" rel="noopener noreferrer" class="text-blue-200 text-sm hover:text-white transition-colors">@kamibantu.co</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Form -->
            <div class="lg:w-7/12 bg-white p-10 lg:p-12">
                <div class="mb-8">
                    <h2 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-2">Konsultasi via WhatsApp</h2>
                    <p class="text-slate-500">Isi form di bawah untuk memulai konsultasi</p>
                </div>
                
                <form class="space-y-6" id="contact-form-main">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama" class="block text-sm font-semibold text-slate-700 mb-2">Nama</label>
                            <input type="text" id="nama" name="nama" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="Nama Anda"/>
                        </div>
                        <div>
                            <label for="perusahaan" class="block text-sm font-semibold text-slate-700 mb-2">Perusahaan</label>
                            <input type="text" id="perusahaan" name="perusahaan" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="PT ABC"/>
                        </div>
                    </div>
                    <div>
                        <label for="kontak" class="block text-sm font-semibold text-slate-700 mb-2">WhatsApp</label>
                        <input type="text" id="kontak" name="kontak" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="08123456789"/>
                    </div>
                    <div>
                        <label for="topik" class="block text-sm font-semibold text-slate-700 mb-2">Topik</label>
                        <select id="topik" name="topik" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition cursor-pointer">
                            <option value="">Pilih Topik...</option>
                            <option value="IT Konsultan & Sistem Informasi">IT Konsultan & Sistem Informasi</option>
                            <option value="Jasa Perpajakan">Jasa Perpajakan</option>
                            <option value="Jasa Audit">Jasa Audit</option>
                            <option value="Perencanaan Keuangan">Perencanaan Keuangan</option>
                            <option value="Studi Kelayakan Bisnis">Studi Kelayakan Bisnis</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                        </select>
                    </div>
                    <div>
                        <label for="deskripsi" class="block text-sm font-semibold text-slate-700 mb-2">Pesan</label>
                        <textarea id="deskripsi" name="deskripsi" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition h-28 resize-none" placeholder="Ceritakan kebutuhan Anda..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded-lg transition-all shadow-lg hover:shadow-xl transform active:scale-[0.99] flex items-center justify-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="text-slate-900"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Kirim via WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

