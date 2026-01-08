<?php get_header(); ?>

<section id="hero" class="relative bg-slate-50 overflow-hidden">
    <div class="container mx-auto px-6 py-20 lg:py-32 flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2 z-10">
            <div class="hero-animate inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold mb-6">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-500 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-amber-600"></span>
                </span>
                KOLABORASI UNTUK BERTUMBUH
            </div>
            <h1 class="hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6">
                Solusi Bisnis <br/>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-700 to-amber-500 animate-gradient">Terintegrasi</span>
            </h1>
            <p class="hero-animate-delay-2 text-lg text-slate-600 mb-8 max-w-lg leading-relaxed">
                PT Kami Bantu Konsultan bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT. Kami membantu pelaku usaha dalam menerapkan prinsip pengelolaan bisnis yang sesuai standar.
            </p>
            <div class="hero-animate-delay-3 flex flex-col sm:flex-row gap-4">
                <button class="btn-ripple pulse-glow px-8 py-4 bg-blue-700 text-white font-semibold rounded hover:bg-amber-500 transition-all flex items-center justify-center gap-2 shadow-lg hover:shadow-xl">
                    Jadwalkan Konsultasi
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
                </button>
                <button class="px-8 py-4 bg-white text-slate-700 border border-slate-300 font-semibold rounded hover:bg-slate-50 transition-all">Lihat Layanan</button>
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wew.png" alt="PT Kami Bantu Konsultan" class="w-full object-cover"/>
            </div>
            <div class="float-animation absolute -bottom-6 -left-6 bg-white p-6 rounded shadow-xl border border-slate-100 max-w-xs hidden md:block" style="animation-delay:0.5s">
                <p class="text-sm text-slate-500 font-medium mb-1">Klien yang Dilayani</p>
                <p class="text-3xl font-bold text-slate-900">50+</p>
                <p class="text-xs text-slate-400 mt-1">Perusahaan &amp; Instansi</p>
            </div>
        </div>
    </div>
</section>

<section class="py-6 bg-slate-50 border-y border-slate-100">
    <div class="container mx-auto px-6 mb-4">
        <p class="text-center text-sm text-slate-500 font-medium">Dipercaya oleh berbagai perusahaan dan instansi</p>
    </div>
    <div class="marquee-container">
        <div class="marquee-content">
            <div class="flex items-center gap-16 px-8">
                <!-- Logos repeated -->
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/3/39/BI_Logo.png" alt="Bank Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Logo_of_PT_Astra_International_Tbk_terbaru_2025.png" alt="Astra International" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Logo_Bankaltimtara.png" alt="Bank Kaltimtara" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/id/c/c4/Telkom_Indonesia_2013.svg" alt="Telkom Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Logo_of_the_Ministry_of_Law_and_Human_Rights_of_the_Republic_of_Indonesia.svg" alt="kemenkumham" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/><span class="text-lg font-bold text-slate-700">KemenKumHam</span></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_%282024%29.svg" alt="komidigi" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Logo_Kota_Samarinda.png" alt="pemkot Samarinda" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/><span class="text-lg font-bold text-slate-700">Pemkot Samarinda</span></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://www.kpc.co.id/wp-content/uploads/2018/10/LogoKPC-e1540438716881.png" alt="pemkot Samarinda" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
            </div>
            <!-- Duplicate for marquee effect -->
            <div class="flex items-center gap-16 px-8">
                 <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/3/39/BI_Logo.png" alt="Bank Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Logo_of_PT_Astra_International_Tbk_terbaru_2025.png" alt="Astra International" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Logo_Bankaltimtara.png" alt="Bank Kaltimtara" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/id/c/c4/Telkom_Indonesia_2013.svg" alt="Telkom Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/e/ee/Logo_of_the_Ministry_of_Law_and_Human_Rights_of_the_Republic_of_Indonesia.svg" alt="kemenkumham" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/><span class="text-lg font-bold text-slate-700">KemenKumHam</span></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/6/65/Logo_Kementerian_Komunikasi_dan_Digital_Republik_Indonesia_%282024%29.svg" alt="komidigi" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://upload.wikimedia.org/wikipedia/commons/3/38/Logo_Kota_Samarinda.png" alt="pemkot Samarinda" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/><span class="text-lg font-bold text-slate-700">Pemkot Samarinda</span></div>
                <div class="flex flex-col items-center min-w-[150px]"><img src="https://www.kpc.co.id/wp-content/uploads/2018/10/LogoKPC-e1540438716881.png" alt="pemkot Samarinda" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"/></div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="py-8 bg-white">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6">
            <div class="max-w-2xl">
                <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Pelayanan Kami</h2>
                <p class="text-slate-600 text-lg">Kami menyediakan layanan lengkap untuk mendukung pertumbuhan bisnis Anda, dari perpajakan hingga transformasi digital.</p>
            </div>
        </div>
        <div class="grid lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 bg-gradient-to-br from-blue-900 to-slate-900 text-white p-10 rounded-2xl flex flex-col justify-between relative overflow-hidden group hover:shadow-2xl transition-all duration-300">
                <div class="absolute top-0 right-0 w-64 h-64 bg-amber-500 rounded-full blur-[80px] opacity-20 group-hover:opacity-30 transition-opacity"></div>
                <div>
                    <div class="w-14 h-14 bg-white/10 rounded-xl flex items-center justify-center mb-8 backdrop-blur-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#60a5fa" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">IT Konsultan &amp; <br/>Sistem Informasi</h3>
                    <p class="text-slate-300 leading-relaxed mb-6">Kami bekerja sama dengan PT Zahir Internasional dan Accurate untuk software ERP dan akuntansi. Transformasi digital untuk bisnis yang lebih efisien.</p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-sm text-slate-300"><svg class="text-blue-400 w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>Software Akuntansi Zahir &amp; Accurate</li>
                        <li class="flex items-center gap-3 text-sm text-slate-300"><svg class="text-blue-400 w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>Pembuatan Aplikasi Custom</li>
                        <li class="flex items-center gap-3 text-sm text-slate-300"><svg class="text-blue-400 w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>Perawatan Website &amp; Aplikasi</li>
                    </ul>
                </div>
                <a class="w-full py-3 bg-amber-500 hover:bg-amber-600 rounded text-sm font-bold transition-colors text-center inline-block text-slate-900" href="<?php echo home_url('/sistemasi-bisnis'); ?>">Konsultasi IT &amp; Sistem</a>
            </div>
            
            <div class="lg:col-span-2 grid md:grid-cols-2 gap-6">
                <!-- Jasa Perpajakan -->
                <div class="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-start justify-between mb-6">
                            <div class="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                <svg class="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="16" height="20" x="4" y="2" rx="2"></rect><line x1="8" x2="16" y1="6" y2="6"></line><line x1="16" x2="16" y1="14" y2="18"></line><path d="M16 10h.01"></path><path d="M12 10h.01"></path><path d="M8 10h.01"></path><path d="M12 14h.01"></path><path d="M8 14h.01"></path><path d="M12 18h.01"></path><path d="M8 18h.01"></path></svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Jasa Perpajakan</h3>
                        <p class="text-slate-600 text-sm mb-6 leading-relaxed">Membantu wajib pajak memenuhi kewajiban perpajakannya. Menyiapkan dan melaporkan pajak bulanan dan tahunan sesuai ketentuan perpajakan Indonesia.</p>
                        <div class="space-y-2 pt-6 border-t border-slate-200">
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> SPT Masa &amp; Tahunan</div>
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Tax Planning</div>
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Korespondensi dengan Kantor Pajak</div>
                        </div>
                    </div>
                    <a href="https://wa.me/6281346242556?text=Halo%20saya%20tertarik%20dengan%20Jasa%20Perpajakan" target="_blank" rel="noopener noreferrer" class="mt-8 w-full py-2.5 bg-blue-600 hover:bg-blue-700 rounded-lg text-white text-sm font-semibold transition-colors text-center inline-block">Hubungi Kami</a>
                </div>

                <!-- Jasa Audit -->
                <div class="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group flex flex-col justify-between">
                    <div>
                        <div class="flex items-start justify-between mb-6">
                            <div class="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                <svg class="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M8 13h2"></path><path d="M14 13h2"></path><path d="M8 17h2"></path><path d="M14 17h2"></path></svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Jasa Audit</h3>
                        <p class="text-slate-600 text-sm mb-6 leading-relaxed">Bekerja sama dengan KAP Heliantono &amp; Rekan di DKI Jakarta. Terdaftar sebagai KAP yang berhak melakukan audit di perusahaan BUMN.</p>
                        <div class="space-y-2 pt-6 border-t border-slate-200">
                             <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Audit Laporan Keuangan</div>
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Mitra Bank BUMN &amp; Swasta</div>
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Audit Internal Operasional</div>
                        </div>
                    </div>
                    <a href="https://wa.me/6281346242556?text=Halo%20saya%20tertarik%20dengan%20Jasa%20Audit" target="_blank" rel="noopener noreferrer" class="mt-8 w-full py-2.5 bg-blue-600 hover:bg-blue-700 rounded-lg text-white text-sm font-semibold transition-colors text-center inline-block">Hubungi Kami</a>
                </div>

                <!-- Perencanaan Keuangan -->
                <div class="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group flex flex-col justify-between">
                     <div>
                        <div class="flex items-start justify-between mb-6">
                            <div class="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                <svg class="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10Z"></path></svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Perencanaan Keuangan</h3>
                        <p class="text-slate-600 text-sm mb-6 leading-relaxed">Konsultasi dan perencanaan keuangan untuk pribadi maupun keluarga. Membantu klien mencapai tujuan keuangan dengan strategi yang tepat.</p>
                        <div class="space-y-2 pt-6 border-t border-slate-200">
                             <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Alokasi Aset &amp; Cashflow</div>
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Dana Darurat &amp; Pendidikan</div>
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Dana Pensiun &amp; Usaha</div>
                        </div>
                    </div>
                     <a href="https://wa.me/6281346242556?text=Halo%20saya%20tertarik%20dengan%20Perencanaan%20Keuangan" target="_blank" rel="noopener noreferrer" class="mt-8 w-full py-2.5 bg-blue-600 hover:bg-blue-700 rounded-lg text-white text-sm font-semibold transition-colors text-center inline-block">Hubungi Kami</a>
                </div>

                <!-- Studi Kelayakan Bisnis -->
                 <div class="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group flex flex-col justify-between">
                     <div>
                        <div class="flex items-start justify-between mb-6">
                            <div class="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                <svg class="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" x2="12" y1="20" y2="10"></line><line x1="18" x2="18" y1="20" y2="4"></line><line x1="6" x2="6" y1="20" y2="16"></line></svg>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-3">Studi Kelayakan Bisnis</h3>
                        <p class="text-slate-600 text-sm mb-6 leading-relaxed">Perencanaan bisnis sebagai alat penting bagi pengusaha untuk pengambilan keputusan kebijakan perusahaan dan mencari pendanaan.</p>
                        <div class="space-y-2 pt-6 border-t border-slate-200">
                             <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Analisis Pasar &amp; Kompetitor</div>
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Proyeksi Finansial (ROI)</div>
                            <div class="flex items-center gap-2 text-xs font-medium text-slate-500"><div class="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Proposal Pendanaan</div>
                        </div>
                    </div>
                     <a href="https://wa.me/6281346242556?text=Halo%20saya%20tertarik%20dengan%20Studi%20Kelayakan%20Bisnis" target="_blank" rel="noopener noreferrer" class="mt-8 w-full py-2.5 bg-blue-600 hover:bg-blue-700 rounded-lg text-white text-sm font-semibold transition-colors text-center inline-block">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="py-24 bg-slate-900 text-white relative">
    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2">
                <h2 class="text-3xl lg:text-4xl font-bold mb-6">Tentang Kami</h2>
                <p class="text-slate-300 text-lg mb-6 leading-relaxed">PT Kami Bantu Konsultan adalah perseroan perorangan yang bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan di bidang Information Technology khususnya penyedia aplikasi keuangan dan bisnis.</p>
                <p class="text-slate-400 mb-8 leading-relaxed">Didirikan atas dasar keprihatinan terhadap rendahnya literasi keuangan masyarakat, serta ketidakpahaman para pelaku ekonomi utamanya UMKM dalam tata kelola keuangan, perpajakan, dan manajemen. Kami memiliki visi menjadi perusahaan penyedia jasa yang edukatif dan solutif bagi klien dengan motto <strong class="text-white">&quot;Kolaborasi untuk Bertumbuh&quot;</strong>.</p>
                <div class="grid grid-cols-2 gap-6">
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1">50+</h4><p class="text-sm text-slate-400">Klien Aktif</p></div>
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1">30+</h4><p class="text-sm text-slate-400">Proyek IT</p></div>
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1">5+</h4><p class="text-sm text-slate-400">Tahun Pengalaman</p></div>
                    <div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1">5</h4><p class="text-sm text-slate-400">Tim Profesional</p></div>
                </div>
            </div>
            <div id="process" class="lg:w-1/2">
                <h3 class="text-2xl font-bold mb-6">Klien &amp; Mitra Kami</h3>
                <p class="text-slate-400 mb-6">Kami telah membantu klien dari berbagai perusahaan, badan organisasi, lembaga pemerintah dan perorangan.</p>
                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Bank Indonesia Kaltim</p><p class="text-xs text-slate-500">Pembuatan Website</p></div>
                    <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">PT Astra International</p><p class="text-xs text-slate-500">Aplikasi LISA</p></div>
                    <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Pemerintah Kota Samarinda</p><p class="text-xs text-slate-500">Kontrak Website</p></div>
                    <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">KemenKumHam Kaltim</p><p class="text-xs text-slate-500">E-Lasikum.id</p></div>
                    <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Diskominfo Prov. Kaltim</p><p class="text-xs text-slate-500">Aplikasi COVID</p></div>
                    <div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Bank Kaltimtara</p><p class="text-xs text-slate-500">Pelatihan MS Office</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="py-24 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Tim Profesional Kami</h2>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto">Didukung oleh para profesional bersertifikasi dengan pengalaman di bidangnya masing-masing.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all team-card text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-blue-700">WS</span>
                </div>
                <h3 class="font-bold text-slate-900 text-lg">Windu Surya Dewantara</h3>
                <p class="text-blue-600 text-sm font-medium mb-3">Partner</p>
                <ul class="text-xs text-slate-500 space-y-1 text-left inline-block"><li>• D-4 Akuntansi Manajerial Polnes</li><li>• Magister Manajemen Unmul</li><li>• Registered Financial Associated</li><li>• Brevet A-B IKPI</li></ul>
            </div>
            <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all team-card text-center">
                <div class="w-20 h-20 bg-gradient-to-br from-blue-100 to-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-blue-700">SF</span>
                </div>
                <h3 class="font-bold text-slate-900 text-lg">Surya Fajar Saputra, S.Kom, M.Kom</h3>
                <p class="text-blue-600 text-sm font-medium mb-3">Partner IT</p>
                <ul class="text-xs text-slate-500 space-y-1 text-left inline-block"><li>• S-1 Ilmu Komputer Unmul</li><li>• S-2 Ilmu Komputer Nusa Mandiri</li><li>• Spesialis Android &amp; iOS</li><li>• Working Assessor Training</li></ul>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-slate-50 rounded-3xl shadow-xl overflow-hidden flex flex-col lg:flex-row">
            <div class="lg:w-5/12 bg-gradient-to-br from-blue-900 to-blue-800 p-12 text-white flex flex-col justify-between relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-6">Hubungi Kami</h3>
                    <p class="text-blue-200 mb-10">Siap merapikan keuangan dan mensistemasi bisnis Anda? Konsultasi awal gratis.</p>
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <svg class="mt-1 text-blue-400 w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            <div><p class="font-bold text-lg">Kantor</p><p class="text-blue-200 text-sm">Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B, Kel. Temindung Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75117</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <svg class="mt-1 text-blue-400 w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            <div><p class="font-bold text-lg">Email</p><p class="text-blue-200 text-sm">KonsultanKamiBantu@gmail.com</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <svg class="mt-1 text-blue-400 w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <div><p class="font-bold text-lg">WhatsApp / Telp</p><p class="text-blue-200 text-sm">0813-4624-2556 / 0823-5242-5339</p></div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 flex gap-4 relative z-10">
                    <a href="#" class="p-2 bg-white/10 rounded hover:bg-white/20 transition"><svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg></a>
                </div>
            </div>
            <div class="lg:w-7/12 p-12">
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div><label class="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label><input type="text" class="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="John Doe"/></div>
                        <div><label class="block text-sm font-semibold text-slate-700 mb-2">Nama Perusahaan</label><input type="text" class="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="PT Sukses Mulia"/></div>
                    </div>
                    <div><label class="block text-sm font-semibold text-slate-700 mb-2">Email / WhatsApp</label><input type="text" class="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="kontak@email.com"/></div>
                    <div><label class="block text-sm font-semibold text-slate-700 mb-2">Topik Konsultasi</label><select class="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition cursor-pointer"><option>IT Konsultan &amp; Sistem Informasi</option><option>Jasa Perpajakan</option><option>Jasa Audit</option><option>Perencanaan Keuangan</option><option>Studi Kelayakan Bisnis</option><option>Digital Marketing</option></select></div>
                    <div><label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Kebutuhan</label><textarea class="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition h-32" placeholder="Ceritakan kebutuhan bisnis Anda..."></textarea></div>
                    <button class="w-full py-4 bg-amber-500 text-slate-900 font-bold rounded hover:bg-amber-600 transition shadow-lg hover:shadow-xl transform active:scale-[0.99]">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
