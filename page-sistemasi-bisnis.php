<?php
/* Template Name: Sistemasi Bisnis */
get_header(); 
?>

<div class="font-sans text-slate-800 antialiased overflow-x-hidden">
    <!-- Hero -->
    <!-- Hero -->
    <section class="relative bg-slate-900 text-white overflow-hidden py-24 lg:py-32">
        <!-- Background Effects -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/10 blur-[100px] rounded-full translate-x-1/3 -translate-y-1/2 pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-amber-500/5 blur-[100px] rounded-full -translate-x-1/3 translate-y-1/2 pointer-events-none"></div>
        
        <div class="container mx-auto px-6 relative z-10 text-center max-w-4xl mx-auto">
            <!-- Badge -->
            <div class="hero-animate inline-flex items-center justify-center px-6 py-2 rounded-full border border-slate-600 bg-slate-800/50 backdrop-blur-sm text-white text-xs font-bold uppercase tracking-wider mb-8">
                <?php echo esc_html( get_theme_mod( 'sistemasi_hero_badge', 'IT KONSULTAN & SISTEM INFORMASI' ) ); ?>
            </div>
            
            <!-- Headline -->
            <h1 class="hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold mb-8 leading-[1.1]">
                <?php the_title(); ?>
            </h1>
            
            <!-- Description -->
            <div class="hero-animate-delay-2 text-lg lg:text-xl text-slate-400 mb-12 leading-relaxed max-w-3xl mx-auto">
                <?php echo nl2br( esc_html( get_theme_mod( 'sistemasi_hero_desc', 'Kami menghadirkan layanan Sistemasi dan Aplikasi Bisnis melalui implementasi ERP dan aplikasi akuntansi terintegrasi. Bekerja sama dengan PT Zahir Internasional, kami mendigitalisasi proses pelaporan keuangan Anda agar lebih cepat, akurat, dan otomatis.' ) ) ); ?>
            </div>
            
            <!-- CTA -->
            <div class="hero-animate-delay-3 flex flex-col sm:flex-row gap-4 justify-center">
                <button class="px-8 py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded-lg transition-all shadow-lg hover:shadow-amber-500/25 text-lg" onclick="document.getElementById('contact-form').scrollIntoView({behavior: 'smooth'})">
                    Konsultasi Kebutuhan Sistem
                </button>
            </div>
        </div>
    </section>

    <!-- Problems (Static for now as it's purely layout structure, unless user requests editable problems) -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="animate-fade-in-left relative">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dashboard Analytics" class="rounded-xl shadow-2xl border border-slate-200 hover:scale-[1.02] transition-transform duration-500"/>
                    <div class="float-animation absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl border border-slate-100 max-w-xs">
                        <div class="flex items-center gap-3 mb-2"><div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div><p class="text-xs text-slate-500">Sebelum Sistem</p></div>
                        <p class="font-bold text-slate-800 mb-4">Stok Selisih, Laporan Telat, Owner Pusing.</p>
                        <div class="flex items-center gap-3 mb-2"><div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div><p class="text-xs text-slate-500">Sesudah Sistem</p></div>
                        <p class="font-bold text-slate-800">Real-time Data, Stok Akurat, Bisnis Autopilot.</p>
                    </div>
                </div>
                <div class="animate-fade-in-right">
                    <h2 class="text-3xl font-bold text-slate-900 mb-6"><?php echo esc_html( get_theme_mod( 'sistemasi_problem_title', 'Tanda Bisnis Anda Butuh Sistem' ) ); ?></h2>
                    <ul class="space-y-4">
                        <li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                            <svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            <div>
                                <h4 class="font-bold text-slate-800"><?php echo esc_html( get_theme_mod( 'problem_1_title', 'Stok Gudang Tidak Sesuai' ) ); ?></h4>
                                <p class="text-sm text-slate-600"><?php echo esc_html( get_theme_mod( 'problem_1_desc', 'Sering terjadi selisih antara catatan admin dengan fisik barang di gudang (Stock Opname mimpi buruk).' ) ); ?></p>
                            </div>
                        </li>
                        <li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                            <svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <div>
                                <h4 class="font-bold text-slate-800"><?php echo esc_html( get_theme_mod( 'problem_2_title', 'Laporan Keuangan Telat' ) ); ?></h4>
                                <p class="text-sm text-slate-600"><?php echo esc_html( get_theme_mod( 'problem_2_desc', 'Owner harus menunggu akhir bulan (atau bulan depan) hanya untuk tahu laba rugi bisnis.' ) ); ?></p>
                            </div>
                        </li>
                        <li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                            <svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            <div>
                                <h4 class="font-bold text-slate-800"><?php echo esc_html( get_theme_mod( 'problem_3_title', 'Ketergantungan Pada Orang' ) ); ?></h4>
                                <p class="text-sm text-slate-600"><?php echo esc_html( get_theme_mod( 'problem_3_desc', 'Jika staff kunci sakit atau resign, operasional berantakan karena tidak ada SOP yang tersistem.' ) ); ?></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid (Dynamic) -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16 max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold text-slate-900 mb-4"><?php echo esc_html( get_theme_mod( 'sistemasi_services_title', 'Layanan IT Kami' ) ); ?></h2>
                <p class="text-slate-600"><?php echo nl2br( esc_html( get_theme_mod( 'sistemasi_services_desc', 'Kami tidak hanya menjual software, kami merancang arsitektur bisnis yang efisien. Bekerja sama dengan Zahir dan Accurate.' ) ) ); ?></p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <?php
                $services_query = new WP_Query( array(
                    'post_type' => 'service',
                    'posts_per_page' => 3,
                ) );
                
                if ( $services_query->have_posts() ) :
                    while ( $services_query->have_posts() ) : $services_query->the_post();
                ?>
                <div class="p-8 border border-slate-100 rounded-2xl bg-white hover:shadow-xl transition-all group service-card animate-on-scroll">
                    <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6 text-blue-600 group-hover:bg-amber-500 group-hover:text-slate-900 transition-colors service-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3"><?php the_title(); ?></h3>
                    <div class="text-slate-600 text-sm mb-4">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                <!-- Fallback if no services are added yet -->
                <div class="col-span-3 text-center text-slate-500">
                    <p>Belum ada layanan yang ditambahkan.</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Projects (Clients CPT) -->
    <section class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900 mb-4"><?php echo esc_html( get_theme_mod( 'sistemasi_projects_title', 'Proyek IT Kami' ) ); ?></h2>
                <p class="text-slate-600 max-w-2xl mx-auto"><?php echo nl2br( esc_html( get_theme_mod( 'sistemasi_projects_desc', 'Beberapa proyek IT yang telah kami kerjakan untuk klien dari berbagai instansi pemerintah, BUMN, dan perusahaan swasta.' ) ) ); ?></p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php
                $clients_query = new WP_Query( array(
                    'post_type' => 'client',
                    'posts_per_page' => 6,
                ) );
                
                if ( $clients_query->have_posts() ) :
                    while ( $clients_query->have_posts() ) : $clients_query->the_post();
                        // Custom field for "Instansi Pemerintah" etc could be added, for now hardcoded fallback or use category
                        $category = get_post_meta( get_the_ID(), 'client_category', true ) ?: 'Klien Kami'; 
                ?>
                <div class="bg-white p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all animate-on-scroll">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center overflow-hidden">
                            <?php if ( has_post_thumbnail() ) {
                                the_post_thumbnail('thumbnail', ['class' => 'w-full h-full object-cover']); 
                            } else { ?>
                                <span class="text-blue-700 font-bold text-sm">C</span>
                            <?php } ?>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-900"><?php the_title(); ?></h4>
                            <p class="text-xs text-slate-500"><?php echo esc_html( $category ); ?></p>
                        </div>
                    </div>
                    <div class="text-sm text-slate-600">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>
            
        </div>
    </section>

    <!-- Contact Form -->
    <section id="contact-form" class="py-20 bg-slate-100">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row gap-0 max-w-6xl mx-auto rounded-3xl overflow-hidden shadow-2xl animate-on-scroll">
                <!-- Left Column - Contact Info -->
                <div class="lg:w-5/12 relative overflow-hidden text-white min-h-[500px]" style="background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 50%, #172554 100%);">
                    <!-- Background Placeholder if needed -->
                    <div class="absolute inset-0 bg-blue-900 opacity-20"></div>
                     <!-- Overlay gradient -->
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/60 to-blue-900/80"></div>
                    
                    <div class="relative z-10 p-10 lg:p-12 h-full flex flex-col">
                        <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-white"><?php echo esc_html( get_theme_mod( 'sistemasi_contact_title', 'Hubungi Kami' ) ); ?></h2>
                        <p class="text-blue-100 mb-10 leading-relaxed">
                            <?php echo nl2br( esc_html( get_theme_mod( 'sistemasi_contact_desc', 'Konsultasikan kebutuhan sistem informasi perusahaan Anda bersama kami.' ) ) ); ?>
                        </p>
                        
                        <div class="space-y-6 flex-grow">
                            <!-- Kantor -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white mb-1">Kantor</h4>
                                    <p class="text-blue-200 text-sm leading-relaxed"><?php echo nl2br( esc_html( get_theme_mod( 'footer_address', 'Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B, Kel. Temindung Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75117' ) ) ); ?></p>
                                </div>
                            </div>
                            
                            <!-- WhatsApp -->
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-white mb-1">WhatsApp</h4>
                                    <p class="text-blue-200 text-sm"><?php echo esc_html( get_theme_mod( 'footer_phone1', '0851-2494-5494' ) ); ?></p>
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
                    
                    <form class="space-y-6" id="contact-form-sistemasi">
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">Nama</label>
                                <input type="text" id="nama_sistemasi" name="nama" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="Nama Anda"/>
                            </div>
                            <div>
                                <label for="perusahaan_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">Perusahaan</label>
                                <input type="text" id="perusahaan_sistemasi" name="perusahaan" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="PT ABC"/>
                            </div>
                        </div>
                        <div>
                            <label for="whatsapp_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">WhatsApp</label>
                            <input type="text" id="whatsapp_sistemasi" name="whatsapp" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="08123456789"/>
                        </div>
                        <div>
                            <label for="topik_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">Topik</label>
                            <select id="topik_sistemasi" name="topik" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition cursor-pointer">
                                <option value="">Pilih Topik...</option>
                                <option value="IT Konsultan & Sistem Informasi">IT Konsultan & Sistem Informasi</option>
                                <option value="Aplikasi Akuntansi">Aplikasi Akuntansi (Zahir/Accurate)</option>
                                <option value="Custom Software">Custom Software Development</option>
                                <option value="Website Company Profile">Website Company Profile</option>
                                <option value="Integrasi Sistem">Integrasi Sistem</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label for="deskripsi_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">Pesan</label>
                            <textarea id="deskripsi_sistemasi" name="deskripsi" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition h-28 resize-none" placeholder="Ceritakan kebutuhan sistem Anda..."></textarea>
                        </div>
                        <button type="submit" class="w-full py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded-lg transition-all shadow-lg hover:shadow-xl transform active:scale-[0.99] flex items-center justify-center gap-2">
                             Kirim via WhatsApp
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
