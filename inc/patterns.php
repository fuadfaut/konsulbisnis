<?php
/**
 * Register Block Patterns
 */

function konsulbisnis_register_patterns() {
    if ( ! function_exists( 'register_block_pattern' ) ) {
        return;
    }

    $pattern_category = 'konsulbisnis';
    register_block_pattern_category(
        $pattern_category,
        array( 'label' => __( 'KonsulBisnis', 'konsulbisnis' ) )
    );

    // Hero Pattern
    register_block_pattern(
        'konsulbisnis/hero',
        array(
            'title'       => __( 'Hero Section', 'konsulbisnis' ),
            'categories'  => array( $pattern_category ),
            'content'     => '
                <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
                <div class="wp-block-group alignfull has-white-background-color has-background animate-on-scroll" style="padding-top:5rem;padding-right:1.5rem;padding-bottom:5rem;padding-left:1.5rem">
                    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                    <div class="wp-block-columns alignwide are-vertically-aligned-center">
                        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                            <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.75rem","lineHeight":"1.1","fontWeight":"800"}}} -->
                            <h1 class="wp-block-heading" style="font-size:3.75rem;font-weight:800;line-height:1.1">Solusi Bisnis <br><span class="has-inline-color has-vivid-cyan-blue-color">Terintegrasi</span></h1>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem"}},"className":"text-slate-600 mb-8"} -->
                            <p class="text-slate-600 mb-8" style="font-size:1.125rem">PT Kami Bantu Konsultan bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT. Kami membantu pelaku usaha dalam menerapkan prinsip pengelolaan bisnis yang sesuai standar.</p>
                            <!-- /wp:paragraph -->

                            <!-- wp:buttons -->
                            <div class="wp-block-buttons">
                                <!-- wp:button {"backgroundColor":"vivid-cyan-blue","textColor":"white","style":{"border":{"radius":"4px"}}} -->
                                <div class="wp-block-button"><a class="wp-block-button__link has-white-color has-vivid-cyan-blue-background-color has-text-color has-background wp-element-button" style="border-radius:4px">Jadwalkan Konsultasi</a></div>
                                <!-- /wp:button -->

                                <!-- wp:button {"backgroundColor":"white","textColor":"dark-gray","style":{"border":{"radius":"4px","width":"1px"}},"className":"is-style-outline"} -->
                                <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-dark-gray-color has-white-background-color has-text-color has-background wp-element-button" style="border-radius:4px;border-width:1px">Lihat Layanan</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                            <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
                            <figure class="wp-block-image size-large"><img src="https://placehold.co/600x400" alt="Hero Image"/></figure>
                            <!-- /wp:image -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            ',
        )
    );

    // Services Section Pattern
    register_block_pattern(
        'konsulbisnis/services',
        array(
            'title'       => __( 'Services Section', 'konsulbisnis' ),
            'categories'  => array( $pattern_category ),
            'content'     => '
                <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
                <div class="wp-block-group alignfull has-white-background-color has-background animate-on-scroll" style="padding-top:4rem;padding-bottom:4rem">
                    <!-- wp:heading {"textAlign":"center","level":2} -->
                    <h2 class="wp-block-heading has-text-align-center">Pelayanan Kami</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","className":"mb-10"} -->
                    <p class="has-text-align-center mb-10">Kami menyediakan layanan lengkap untuk mendukung pertumbuhan bisnis Anda.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:columns {"align":"wide"} -->
                    <div class="wp-block-columns alignwide">
                        <!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
                        <div class="wp-block-column" style="border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                            <!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading">Jasa Akuntansi</h3>
                            <!-- /wp:heading -->
                            <!-- wp:paragraph -->
                            <p>Penyusunan laporan keuangan standar PSAK.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
                        <div class="wp-block-column" style="border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                            <!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading">Konsultan Pajak</h3>
                            <!-- /wp:heading -->
                            <!-- wp:paragraph -->
                            <p>Perencanaan dan pelaporan pajak perusahaan.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
                        <div class="wp-block-column" style="border-width:1px;padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem">
                            <!-- wp:heading {"level":3} -->
                            <h3 class="wp-block-heading">IT Consultant</h3>
                            <!-- /wp:heading -->
                            <!-- wp:paragraph -->
                            <p>Implementasi software akuntansi dan ERP.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            ',
        )
    );

    // Call to Action / Contact Pattern
    register_block_pattern(
        'konsulbisnis/cta',
        array(
            'title'       => __( 'Call to Action', 'konsulbisnis' ),
            'categories'  => array( $pattern_category ),
            'content'     => '
                <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"6rem","bottom":"6rem"}},"color":{"background":"#1e293b","text":"#ffffff"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group alignfull has-text-color has-background animate-on-scroll" style="background-color:#1e293b;color:#ffffff;padding-top:6rem;padding-bottom:6rem">
                    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
                    <div class="wp-block-columns alignwide are-vertically-aligned-center">
                        <!-- wp:column {"width":"60%"} -->
                        <div class="wp-block-column" style="flex-basis:60%">
                            <!-- wp:heading {"level":2} -->
                            <h2 class="wp-block-heading">Siap Merapikan Bisnis Anda?</h2>
                            <!-- /wp:heading -->
                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem"}}} -->
                            <p style="font-size:1.25rem">Konsultasikan kebutuhan Anda bersama tim ahli kami. Kami siap membantu Anda bertumbuh.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                        
                        <!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                            <div class="wp-block-buttons">
                                <!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"black","style":{"typography":{"fontWeight":"700"}}} -->
                                <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-luminous-vivid-amber-background-color has-text-color has-background wp-element-button" style="font-weight:700">Hubungi Kami</a></div>
                                <!-- /wp:button -->
                            </div>
                            <!-- /wp:buttons -->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            ',
        )
    );

    // Services Section Pattern (IT Special)
    register_block_pattern(
        'konsulbisnis/services-it',
        array(
            'title'       => __( 'Services Grid (IT)', 'konsulbisnis' ),
            'categories'  => array( $pattern_category ),
            'content'     => '
                <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"5rem","left":"1.5rem","right":"1.5rem"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
                <div class="wp-block-group alignfull has-white-background-color has-background animate-on-scroll" style="padding-top:5rem;padding-right:1.5rem;padding-bottom:5rem;padding-left:1.5rem">
                    <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}}} -->
                    <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700">Layanan IT Kami</h2>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","className":"mb-16","style":{"typography":{"fontSize":"1.125rem"}}} -->
                    <p class="has-text-align-center mb-16" style="font-size:1.125rem">Kami tidak hanya menjual software, kami merancang arsitektur bisnis yang efisien.<br>Bekerja sama dengan Zahir.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
                    <div class="wp-block-columns alignwide">
                        
                        <!-- wp:column {"style":{"border":{"width":"1px","radius":"12px","color":"#e2e8f0"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"className":"hover:shadow-xl transition-shadow"} -->
                        <div class="wp-block-column hover:shadow-xl transition-shadow" style="border-color:#e2e8f0;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
                            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:image {"width":48,"height":48,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                <figure class="wp-block-image size-full is-style-default is-resized"><img src="https://placehold.co/48x48/blue/white?text=Icon" alt="" style="object-fit:cover;width:48px;height:48px"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"className":"mt-6 mb-3"} -->
                            <h3 class="wp-block-heading mt-6 mb-3" style="font-size:1.25rem;font-weight:700">Studi Kelayakan Bisnis</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"slate-600"} -->
                            <p class="has-slate-600-color has-text-color" style="font-size:0.875rem;line-height:1.6">Perencanaan bisnis sebagai alat penting bagi pengusaha untuk pengambilan keputusan kebijakan perusahaan dan mencari pendanaan. Analisis Pasar & Kompetitor, Proyeksi Finansial (ROI).</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"style":{"border":{"width":"1px","radius":"12px","color":"#e2e8f0"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"className":"hover:shadow-xl transition-shadow"} -->
                        <div class="wp-block-column hover:shadow-xl transition-shadow" style="border-color:#e2e8f0;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
                            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:image {"width":48,"height":48,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="https://placehold.co/48x48/blue/white?text=Icon" alt="" style="object-fit:cover;width:48px;height:48px"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"className":"mt-6 mb-3"} -->
                            <h3 class="wp-block-heading mt-6 mb-3" style="font-size:1.25rem;font-weight:700">Perencanaan Keuangan</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"slate-600"} -->
                            <p class="has-slate-600-color has-text-color" style="font-size:0.875rem;line-height:1.6">Konsultasi dan perencanaan keuangan untuk pribadi maupun keluarga. Membantu klien mencapai tujuan keuangan dengan strategi yang tepat. Alokasi Aset & Cashflow.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"style":{"border":{"width":"1px","radius":"12px","color":"#e2e8f0"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"className":"hover:shadow-xl transition-shadow"} -->
                        <div class="wp-block-column hover:shadow-xl transition-shadow" style="border-color:#e2e8f0;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
                            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:image {"width":48,"height":48,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="https://placehold.co/48x48/blue/white?text=Icon" alt="" style="object-fit:cover;width:48px;height:48px"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"className":"mt-6 mb-3"} -->
                            <h3 class="wp-block-heading mt-6 mb-3" style="font-size:1.25rem;font-weight:700">Jasa Audit</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"slate-600"} -->
                            <p class="has-slate-600-color has-text-color" style="font-size:0.875rem;line-height:1.6">Bekerja sama dengan KAP Heliantono & Rekan di DKI Jakarta. Terdaftar sebagai KAP yang berhak melakukan audit di perusahaan BUMN dan Swasta.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                        
                    </div>
                    <!-- /wp:columns -->

                    <!-- wp:spacer {"height":"2rem"} -->
                    <div style="height:2rem" aria-hidden="true" class="wp-block-spacer"></div>
                    <!-- /wp:spacer -->

                    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"2rem","left":"2rem"}}}} -->
                    <div class="wp-block-columns alignwide">
                        
                        <!-- wp:column {"style":{"border":{"width":"1px","radius":"12px","color":"#e2e8f0"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"className":"hover:shadow-xl transition-shadow"} -->
                        <div class="wp-block-column hover:shadow-xl transition-shadow" style="border-color:#e2e8f0;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
                            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:image {"width":48,"height":48,"scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-default"} -->
                                <figure class="wp-block-image size-full is-style-default is-resized"><img src="https://placehold.co/48x48/blue/white?text=Icon" alt="" style="object-fit:cover;width:48px;height:48px"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"className":"mt-6 mb-3"} -->
                            <h3 class="wp-block-heading mt-6 mb-3" style="font-size:1.25rem;font-weight:700">Implementasi ERP</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"slate-600"} -->
                            <p class="has-slate-600-color has-text-color" style="font-size:0.875rem;line-height:1.6">Pemasangan dan konfigurasi sistem Enterprise Resource Planning (ERP) untuk mengintegrasikan seluruh operasional bisnis Anda dari hulu ke hilir.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"style":{"border":{"width":"1px","radius":"12px","color":"#e2e8f0"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"className":"hover:shadow-xl transition-shadow"} -->
                        <div class="wp-block-column hover:shadow-xl transition-shadow" style="border-color:#e2e8f0;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
                            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:image {"width":48,"height":48,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="https://placehold.co/48x48/blue/white?text=Icon" alt="" style="object-fit:cover;width:48px;height:48px"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"className":"mt-6 mb-3"} -->
                            <h3 class="wp-block-heading mt-6 mb-3" style="font-size:1.25rem;font-weight:700">Training & SOP</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"slate-600"} -->
                            <p class="has-slate-600-color has-text-color" style="font-size:0.875rem;line-height:1.6">Pelatihan intensif untuk karyawan dan pembuatan Standard Operating Procedure (SOP) yang jelas untuk menjaga konsistensi kualitas kerja.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column {"style":{"border":{"width":"1px","radius":"12px","color":"#e2e8f0"},"spacing":{"padding":{"top":"2.5rem","right":"2.5rem","bottom":"2.5rem","left":"2.5rem"}}},"className":"hover:shadow-xl transition-shadow"} -->
                        <div class="wp-block-column hover:shadow-xl transition-shadow" style="border-color:#e2e8f0;border-width:1px;border-radius:12px;padding-top:2.5rem;padding-right:2.5rem;padding-bottom:2.5rem;padding-left:2.5rem">
                            <!-- wp:group {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                            <div class="wp-block-group">
                                <!-- wp:image {"width":48,"height":48,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
                                <figure class="wp-block-image size-full is-resized"><img src="https://placehold.co/48x48/blue/white?text=Icon" alt="" style="object-fit:cover;width:48px;height:48px"/></figure>
                                <!-- /wp:image -->
                            </div>
                            <!-- /wp:group -->

                            <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"className":"mt-6 mb-3"} -->
                            <h3 class="wp-block-heading mt-6 mb-3" style="font-size:1.25rem;font-weight:700">Audit IT</h3>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.875rem","lineHeight":"1.6"}},"textColor":"slate-600"} -->
                            <p class="has-slate-600-color has-text-color" style="font-size:0.875rem;line-height:1.6">Pemeriksaan keamanan dan infrastruktur IT untuk memastikan sistem Anda berjalan aman, stabil, dan optimal dalam mendukung bisnis.</p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:column -->
                        
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            ',
        )
    );

    // Dark Hero Pattern (Sistemasi Bisnis)
    register_block_pattern(
        'konsulbisnis/hero-dark',
        array(
            'title'       => __( 'Hero Section (Dark)', 'konsulbisnis' ),
            'categories'  => array( $pattern_category ),
            'content'     => '
                <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem","left":"1.5rem","right":"1.5rem"}},"color":{"background":"#0f172a"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group alignfull has-background animate-on-scroll" style="background-color:#0f172a;padding-top:8rem;padding-right:1.5rem;padding-bottom:8rem;padding-left:1.5rem">
                    <!-- wp:group {"style":{"layout":{"type":"flex","justifyContent":"center"}}} -->
                    <div class="wp-block-group" style="display:flex;justify-content:center">
                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"600"},"border":{"radius":"9999px","width":"1px"},"spacing":{"padding":{"top":"0.5rem","right":"1rem","bottom":"0.5rem","left":"1rem"}},"color":{"text":"#ffffff"}},"borderColor":"white"} -->
                        <p class="has-border-color has-white-border-color has-text-color" style="color:#ffffff;border-width:1px;border-radius:9999px;font-size:0.75rem;font-weight:600;padding-top:0.5rem;padding-right:1rem;padding-bottom:0.5rem;padding-left:1rem;display:inline-block">IT KONSULTAN & SISTEM INFORMASI</p>
                        <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"4rem","fontWeight":"800","lineHeight":"1.2"},"spacing":{"margin":{"top":"1.5rem","bottom":"1.5rem"}}},"textColor":"white"} -->
                    <h1 class="wp-block-heading has-text-align-center has-white-color has-text-color" style="font-size:4rem;font-weight:800;line-height:1.2;margin-top:1.5rem;margin-bottom:1.5rem">Sistemasi Bisnis</h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"3rem"}}},"textColor":"gray-300","className":"max-w-3xl mx-auto"} -->
                    <p class="has-text-align-center max-w-3xl mx-auto has-text-color" style="color:#cbd5e1;font-size:1.125rem;line-height:1.6;margin-bottom:3rem">Kami menyediakan jasa pembukuan dengan menyusun laporan keuangan klien. Bekerja sama dengan PT Zahir Internasional dan Accurate untuk software akuntansi dan ERP.</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"black","style":{"border":{"radius":"8px"},"typography":{"fontWeight":"600"},"spacing":{"padding":{"top":"1rem","right":"2rem","bottom":"1rem","left":"2rem"}}}} -->
                        <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-luminous-vivid-amber-background-color has-text-color has-background wp-element-button" style="border-radius:8px;font-weight:600;padding-top:1rem;padding-right:2rem;padding-bottom:1rem;padding-left:2rem">Konsultasi Kebutuhan Sistem</a></div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->
                </div>
                <!-- /wp:group -->
            ',
        )
    );

}
add_action( 'init', 'konsulbisnis_register_patterns' );
