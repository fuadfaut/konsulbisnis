<?php
/**
 * Register Block Patterns
 *
 * @package KonsulBisnis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function konsul_register_block_patterns() {
	if ( ! function_exists( 'register_block_pattern' ) ) {
		return;
	}

	// Register Category
	register_block_pattern_category(
		'konsulbisnis',
		array( 'label' => __( 'Konsul Bisnis', 'konsulbisnis' ) )
	);

	// 1. Hero Section Pattern
	register_block_pattern(
		'konsulbisnis/hero',
		array(
			'title'       => __( 'Hero Section', 'konsulbisnis' ),
			'description' => _x( 'Main hero section with title, description, buttons, and image.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"relative bg-slate-50 overflow-hidden","layout":{"type":"default"}} -->
				<section class="wp-block-group relative bg-slate-50 overflow-hidden">
					<!-- wp:group {"className":"container mx-auto px-6 py-20 lg:py-32","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6 py-20 lg:py-32">
						<!-- wp:columns {"className":"items-center gap-12"} -->
						<div class="wp-block-columns items-center gap-12">
							<!-- wp:column {"className":"z-10"} -->
							<div class="wp-block-column z-10">
								<!-- wp:heading {"level":1,"className":"hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6"} -->
								<h1 class="wp-block-heading hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6">Solusi Bisnis <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-700 to-amber-500 animate-gradient">Terintegrasi</span></h1>
								<!-- /wp:heading -->

								<!-- wp:paragraph {"className":"hero-animate-delay-2 text-lg text-slate-600 mb-8 max-w-lg leading-relaxed"} -->
								<p class="hero-animate-delay-2 text-lg text-slate-600 mb-8 max-w-lg leading-relaxed">PT Kami Bantu Konsultan bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT. Kami membantu pelaku usaha dalam menerapkan prinsip pengelolaan bisnis yang sesuai standar.</p>
								<!-- /wp:paragraph -->

								<!-- wp:group {"className":"hero-animate-delay-3 flex flex-col sm:flex-row gap-4","layout":{"type":"default"}} -->
								<div class="wp-block-group hero-animate-delay-3 flex flex-col sm:flex-row gap-4">
									<!-- wp:html -->
									<button class="btn-ripple pulse-glow px-8 py-4 bg-blue-700 text-white font-semibold rounded hover:bg-amber-500 transition-all flex items-center justify-center gap-2 shadow-lg hover:shadow-xl" onclick="document.getElementById(\'contact\').scrollIntoView({behavior: \'smooth\'});">
										Jadwalkan Konsultasi
										<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
									</button>
									<!-- /wp:html -->

									<!-- wp:html -->
									<button class="px-8 py-4 bg-white text-slate-700 border border-slate-300 font-semibold rounded hover:bg-slate-50 transition-all" onclick="document.getElementById(\'services\').scrollIntoView({behavior: \'smooth\'});">
										Lihat Layanan
									</button>
									<!-- /wp:html -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"className":"relative hero-image-animate"} -->
							<div class="wp-block-column relative hero-image-animate">
								<!-- wp:html -->
								<div class="float-animation absolute -top-4 -right-4 bg-white px-5 py-3 rounded-full shadow-xl border border-slate-100 flex items-center gap-3 z-10">
									<div class="w-10 h-10 bg-gradient-to-br from-blue-600 to-amber-500 rounded-full flex items-center justify-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M22 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
									</div>
									<p class="font-bold text-slate-900">Kami Siap Bantu</p>
								</div>
								<!-- /wp:html -->

								<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"relative rounded-lg overflow-hidden transform hover:scale-[1.02] transition-transform duration-500"} -->
								<figure class="wp-block-image size-full relative rounded-lg overflow-hidden transform hover:scale-[1.02] transition-transform duration-500"><img src="https://placehold.co/600x600/png" alt="PT Kami Bantu Konsultan" class="w-full object-cover"/></figure>
								<!-- /wp:image -->

								<!-- wp:html -->
								<div class="float-animation absolute -bottom-6 -left-6 bg-white p-6 rounded shadow-xl border border-slate-100 max-w-xs hidden md:block" style="animation-delay:0.5s">
									<p class="text-sm text-slate-500 font-medium mb-1">Klien yang Dilayani</p>
									<p class="text-3xl font-bold text-slate-900">50+</p>
									<p class="text-xs text-slate-400 mt-1">Perusahaan & Instansi</p>
								</div>
								<!-- /wp:html -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);

	// 2. Marquee Section
	register_block_pattern(
		'konsulbisnis/marquee',
		array(
			'title'       => __( 'Logo Marquee', 'konsulbisnis' ),
			'description' => _x( 'Scrolling marquee of client logos.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"py-6 bg-slate-50 border-y border-slate-100","layout":{"type":"default"}} -->
				<section class="wp-block-group py-6 bg-slate-50 border-y border-slate-100">
					<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6">
						<!-- wp:paragraph {"align":"center","className":"text-sm text-slate-500 font-medium mb-4"} -->
						<p class="has-text-align-center text-sm text-slate-500 font-medium mb-4">Dipercaya oleh berbagai perusahaan dan instansi</p>
						<!-- /wp:paragraph -->
						
						<!-- wp:html -->
						<div class="marquee-container">
							<div class="marquee-content" style="animation-name: marquee;">
								<div class="flex items-center gap-16 px-8">
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Bank+Indonesia" alt="Bank Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Astra" alt="Astra International" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Bank+Kaltimtara" alt="Bank Kaltimtara" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Telkom" alt="Telkom Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Kemenkumham" alt="kemenkumham" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"><span class="text-lg font-bold text-slate-700">KemenKumHam</span></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Komidigi" alt="komidigi" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Pemkot+Samarinda" alt="pemkot Samarinda" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"><span class="text-lg font-bold text-slate-700">Pemkot Samarinda</span></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=KPC" alt="KPC" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
								</div>
								<div class="flex items-center gap-16 px-8">
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Bank+Indonesia" alt="Bank Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Astra" alt="Astra International" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Bank+Kaltimtara" alt="Bank Kaltimtara" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Telkom" alt="Telkom Indonesia" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Kemenkumham" alt="kemenkumham" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"><span class="text-lg font-bold text-slate-700">KemenKumHam</span></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Komidigi" alt="komidigi" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=Pemkot+Samarinda" alt="pemkot Samarinda" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"><span class="text-lg font-bold text-slate-700">Pemkot Samarinda</span></div>
									<div class="flex flex-col items-center min-w-[150px]"><img src="https://placehold.co/150x50/png?text=KPC" alt="KPC" class="h-10 object-contain grayscale hover:grayscale-0 transition-all"></div>
								</div>
							</div>
						</div>
						<!-- /wp:html -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);

	// 3. Services Section
	register_block_pattern(
		'konsulbisnis/services',
		array(
			'title'       => __( 'Services Section', 'konsulbisnis' ),
			'description' => _x( 'Section displaying Special Service and Grid of Services via shortcodes.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"py-16 bg-white","layout":{"type":"default"}} -->
				<section class="wp-block-group py-16 bg-white" id="services">
					<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6">
						<!-- wp:group {"className":"mb-10 gap-6 animate-on-scroll","layout":{"type":"default"}} -->
						<div class="wp-block-group mb-10 gap-6 animate-on-scroll">
							<!-- wp:group {"className":"max-w-2xl","layout":{"type":"default"}} -->
							<div class="wp-block-group max-w-2xl">
								<!-- wp:heading {"level":2,"className":"text-3xl lg:text-4xl font-bold text-slate-900 mb-4"} -->
								<h2 class="wp-block-heading text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Pelayanan Kami</h2>
								<!-- /wp:heading -->

								<!-- wp:paragraph {"className":"text-slate-600 text-lg"} -->
								<p class="text-slate-600 text-lg">Kami menyediakan layanan lengkap untuk mendukung pertumbuhan bisnis Anda, dari perpajakan hingga transformasi digital.</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->

						<!-- wp:columns {"className":"gap-8"} -->
						<div class="wp-block-columns gap-8">
							<!-- wp:column {"className":"min-h-full animate-fade-in-left"} -->
							<div class="wp-block-column min-h-full animate-fade-in-left">
								<!-- wp:shortcode -->
								[konsul_special_service]
								<!-- /wp:shortcode -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:shortcode -->
								[konsul_services_grid]
								<!-- /wp:shortcode -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);

	// 4. About Section
	register_block_pattern(
		'konsulbisnis/about',
		array(
			'title'       => __( 'About & Stats Section', 'konsulbisnis' ),
			'description' => _x( 'About section with statistics and client list.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"py-24 bg-slate-900 text-white relative","layout":{"type":"default"}} -->
				<section class="wp-block-group py-24 bg-slate-900 text-white relative" id="about">
					<!-- wp:group {"className":"container mx-auto px-6 relative z-10","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6 relative z-10">
						<!-- wp:columns {"className":"gap-16 items-center"} -->
						<div class="wp-block-columns gap-16 items-center">
							<!-- wp:column {"className":"animate-fade-in-left"} -->
							<div class="wp-block-column animate-fade-in-left">
								<!-- wp:heading {"level":2,"className":"text-3xl lg:text-4xl font-bold mb-6"} -->
								<h2 class="wp-block-heading text-3xl lg:text-4xl font-bold mb-6">Tentang Kami</h2>
								<!-- /wp:heading -->

								<!-- wp:paragraph {"className":"text-slate-300 text-lg mb-6 leading-relaxed"} -->
								<p class="text-slate-300 text-lg mb-6 leading-relaxed">PT Kami Bantu Konsultan adalah perseroan perorangan yang bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan di bidang Information Technology khususnya penyedia aplikasi keuangan dan bisnis.</p>
								<!-- /wp:paragraph -->

								<!-- wp:paragraph {"className":"text-slate-400 mb-8 leading-relaxed"} -->
								<p class="text-slate-400 mb-8 leading-relaxed">Didirikan atas dasar keprihatinan terhadap rendahnya literasi keuangan masyarakat, serta ketidakpahaman para pelaku ekonomi utamanya UMKM dalam tata kelola keuangan, perpajakan, dan manajemen. Kami memiliki visi menjadi perusahaan penyedia jasa yang edukatif dan solutif bagi klien dengan motto "Kolaborasi untuk Bertumbuh".</p>
								<!-- /wp:paragraph -->

								<!-- wp:group {"className":"grid grid-cols-2 gap-6","layout":{"type":"default"}} -->
								<div class="wp-block-group grid grid-cols-2 gap-6">
									<!-- wp:html -->
									<div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1">50+</h4><p class="text-sm text-slate-400">Klien Aktif</p></div>
									<!-- /wp:html -->
									<!-- wp:html -->
									<div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1">30+</h4><p class="text-sm text-slate-400">Proyek IT</p></div>
									<!-- /wp:html -->
									<!-- wp:html -->
									<div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1">5+</h4><p class="text-sm text-slate-400">Tahun Pengalaman</p></div>
									<!-- /wp:html -->
									<!-- wp:html -->
									<div class="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors"><h4 class="text-3xl font-bold text-amber-400 mb-1">5</h4><p class="text-sm text-slate-400">Tim Profesional</p></div>
									<!-- /wp:html -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"className":"animate-fade-in-right"} -->
							<div class="wp-block-column animate-fade-in-right" id="process">
								<!-- wp:heading {"level":3,"className":"text-2xl font-bold mb-6"} -->
								<h3 class="wp-block-heading text-2xl font-bold mb-6">Klien & Mitra Kami</h3>
								<!-- /wp:heading -->

								<!-- wp:paragraph {"className":"text-slate-400 mb-6"} -->
								<p class="text-slate-400 mb-6">Kami telah membantu klien dari berbagai perusahaan, badan organisasi, lembaga pemerintah dan perorangan.</p>
								<!-- /wp:paragraph -->

								<!-- wp:shortcode -->
								[konsul_clients_grid]
								<!-- /wp:shortcode -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);

	// 5. Contact Section Pattern
	register_block_pattern(
		'konsulbisnis/contact',
		array(
			'title'       => __( 'Contact Section', 'konsulbisnis' ),
			'description' => _x( 'Contact section with details and form placeholder.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"py-24 bg-slate-100","layout":{"type":"default"}} -->
				<section class="wp-block-group py-24 bg-slate-100" id="contact">
					<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6">
						<!-- wp:columns {"className":"gap-0 max-w-6xl mx-auto rounded-3xl overflow-hidden shadow-2xl animate-on-scroll"} -->
						<div class="wp-block-columns gap-0 max-w-6xl mx-auto rounded-3xl overflow-hidden shadow-2xl animate-on-scroll">
							
							<!-- wp:column {"className":"relative overflow-hidden text-white min-h-[500px]"} -->
							<div class="wp-block-column relative overflow-hidden text-white min-h-[500px]" style="background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 50%, #172554 100%);">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"absolute inset-0 opacity-20 w-full h-full object-cover"} -->
								<figure class="wp-block-image size-full absolute inset-0 opacity-20 w-full h-full object-cover"><img src="https://placehold.co/1200x800/png" alt="" class="w-full h-full object-cover"/></figure>
								<!-- /wp:image -->

								<!-- wp:html -->
								<div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/60 to-blue-900/80"></div>
								<!-- /wp:html -->

								<!-- wp:group {"className":"relative z-10 p-10 lg:p-12 h-full flex flex-col","layout":{"type":"default"}} -->
								<div class="wp-block-group relative z-10 p-10 lg:p-12 h-full flex flex-col">
									<!-- wp:heading {"level":2,"className":"text-3xl lg:text-4xl font-bold mb-4 text-white"} -->
									<h2 class="wp-block-heading text-3xl lg:text-4xl font-bold mb-4 text-white">Hubungi Kami</h2>
									<!-- /wp:heading -->

									<!-- wp:paragraph {"className":"text-blue-100 mb-10 leading-relaxed"} -->
									<p class="text-blue-100 mb-10 leading-relaxed">Siap merapikan keuangan dan mensistemasi bisnis Anda? Konsultasi awal gratis.</p>
									<!-- /wp:paragraph -->

									<!-- wp:html -->
									<div class="space-y-6 flex-grow">
										<div class="flex items-start gap-4">
											<div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
											</div>
											<div>
												<h4 class="font-bold text-white mb-1">Kantor</h4>
												<p class="text-blue-200 text-sm leading-relaxed">Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B, Kel. Temindung Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75117</p>
											</div>
										</div>
										<div class="flex items-start gap-4">
											<div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
											</div>
											<div>
												<h4 class="font-bold text-white mb-1">WhatsApp</h4>
												<p class="text-blue-200 text-sm">0813-4624-2556</p>
											</div>
										</div>
										<div class="flex items-start gap-4">
											<div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
											</div>
											<div>
												<h4 class="font-bold text-white mb-1">Email</h4>
												<p class="text-blue-200 text-sm">KonsultanKamiBantu@gmail.com</p>
											</div>
										</div>
									</div>
									<div class="mt-8 pt-6 border-t border-white/10">
										<div class="flex items-start gap-4">
											<a href="https://kamibantu.co" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-10 h-10 bg-white/10 hover:bg-white/20 rounded-lg transition-colors shrink-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
											</a>
										</div>
									</div>
									<!-- /wp:html -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:column -->

							<!-- Contact Form Column (Placeholder or Shortcode) -->
							<!-- wp:column {"className":"bg-white p-10 lg:p-12"} -->
							<div class="wp-block-column bg-white p-10 lg:p-12">
								<!-- wp:heading {"level":3,"className":"text-2xl font-bold mb-8 text-slate-800"} -->
								<h3 class="wp-block-heading text-2xl font-bold mb-8 text-slate-800">Kirim Pesan</h3>
								<!-- /wp:heading -->

								<!-- wp:html -->
								<form action="" method="post" class="space-y-6">
									<div class="grid md:grid-cols-2 gap-6">
										<div>
											<label class="block text-sm font-medium text-slate-700 mb-2">Nama Lengkap</label>
											<input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all" placeholder="John Doe">
										</div>
										<div>
											<label class="block text-sm font-medium text-slate-700 mb-2">No. WhatsApp</label>
											<input type="tel" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all" placeholder="08123456789">
										</div>
									</div>
									<div>
										<label class="block text-sm font-medium text-slate-700 mb-2">Email</label>
										<input type="email" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all" placeholder="john@example.com">
									</div>
									<div>
										<label class="block text-sm font-medium text-slate-700 mb-2">Pesan</label>
										<textarea rows="4" class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-100 outline-none transition-all" placeholder="Ceritakan kebutuhan Anda..."></textarea>
									</div>
									<button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-lg transition-all shadow-lg hover:shadow-blue-600/30">Kirim Pesan</button>
								</form>
								<!-- /wp:html -->
							</div>
							<!-- /wp:column -->

						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);

	// 6. Sistemasi Bisnis Page Pattern

		register_block_pattern(

			'konsulbisnis/sistemasi-page',

			array(

				'title'       => __( 'Sistemasi Bisnis Page', 'konsulbisnis' ),

				'description' => _x( 'Full page layout for Sistemasi Bisnis.', 'Block pattern description', 'konsulbisnis' ),

				'content'     => '

					<!-- wp:group {"tagName":"section","className":"relative bg-slate-900 text-white overflow-hidden py-24 lg:py-32","layout":{"type":"default"}} -->

					<section class="wp-block-group relative bg-slate-900 text-white overflow-hidden py-24 lg:py-32">

						<!-- wp:html -->

						<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/10 blur-[100px] rounded-full translate-x-1/3 -translate-y-1/2 pointer-events-none"></div>

						<div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-amber-500/5 blur-[100px] rounded-full -translate-x-1/3 translate-y-1/2 pointer-events-none"></div>

						<!-- /wp:html -->

	

						<!-- wp:group {"className":"container mx-auto px-6 relative z-10 text-center max-w-4xl mx-auto","layout":{"type":"default"}} -->

						<div class="wp-block-group container mx-auto px-6 relative z-10 text-center max-w-4xl mx-auto">

							<!-- wp:html -->

							<div class="hero-animate inline-flex items-center justify-center px-6 py-2 rounded-full border border-slate-600 bg-slate-800/50 backdrop-blur-sm text-white text-xs font-bold uppercase tracking-wider mb-8">

								IT KONSULTAN & SISTEM INFORMASI

							</div>

							<!-- /wp:html -->

	

							<!-- wp:heading {"level":1,"className":"hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold mb-8 leading-[1.1]"} -->

							<h1 class="wp-block-heading hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold mb-8 leading-[1.1]">Sistemasi Bisnis &<br>Transformasi Digital</h1>

							<!-- /wp:heading -->

	

							<!-- wp:paragraph {"className":"hero-animate-delay-2 text-lg lg:text-xl text-slate-400 mb-12 leading-relaxed max-w-3xl mx-auto"} -->

							<p class="hero-animate-delay-2 text-lg lg:text-xl text-slate-400 mb-12 leading-relaxed max-w-3xl mx-auto">Kami menyediakan jasa pembukuan dengan menyusun laporan keuangan klien. Bekerja sama dengan PT Zahir Internasional dan Accurate untuk software akuntansi dan ERP.</p>

							<!-- /wp:paragraph -->

	

							<!-- wp:group {"className":"hero-animate-delay-3 flex flex-col sm:flex-row gap-4 justify-center","layout":{"type":"default"}} -->

							<div class="wp-block-group hero-animate-delay-3 flex flex-col sm:flex-row gap-4 justify-center">

								<!-- wp:html -->

								<button class="px-8 py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded-lg transition-all shadow-lg hover:shadow-amber-500/25 text-lg" onclick="document.getElementById(\'contact-form\').scrollIntoView({behavior: \'smooth\'})">

									Konsultasi Kebutuhan Sistem

								</button>

								<!-- /wp:html -->

							</div>

							<!-- /wp:group -->

						</div>

						<!-- /wp:group -->

					</section>

					<!-- /wp:group -->

	

					<!-- wp:group {"tagName":"section","className":"py-20 bg-slate-50","layout":{"type":"default"}} -->

					<section class="wp-block-group py-20 bg-slate-50">

						<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->

						<div class="wp-block-group container mx-auto px-6">

	

							<!-- wp:columns {"className":"grid md:grid-cols-2 gap-12 items-center"} -->

							<div class="wp-block-columns grid md:grid-cols-2 gap-12 items-center">

								<!-- wp:column {"className":"animate-fade-in-left relative"} -->

								<div class="wp-block-column animate-fade-in-left relative">

									<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rounded-xl shadow-2xl border border-slate-200 hover:scale-[1.02] transition-transform duration-500"} -->

									<figure class="wp-block-image size-full rounded-xl shadow-2xl border border-slate-200 hover:scale-[1.02] transition-transform duration-500"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dashboard Analytics"/></figure>

									<!-- /wp:image -->

									

									<!-- wp:html -->

									<div class="float-animation absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl border border-slate-100 max-w-xs">

										<div class="flex items-center gap-3 mb-2"><div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div><p class="text-xs text-slate-500">Sebelum Sistem</p></div>

										<p class="font-bold text-slate-800 mb-4">Stok Selisih, Laporan Telat, Owner Pusing.</p>

										<div class="flex items-center gap-3 mb-2"><div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div><p class="text-xs text-slate-500">Sesudah Sistem</p></div>

										<p class="font-bold text-slate-800">Real-time Data, Stok Akurat, Bisnis Autopilot.</p>

									</div>

									<!-- /wp:html -->

								</div>

								<!-- /wp:column -->

	

								<!-- wp:column {"className":"animate-fade-in-right"} -->

								<div class="wp-block-column animate-fade-in-right">

									<!-- wp:heading {"level":2,"className":"text-3xl font-bold text-slate-900 mb-6"} -->

									<h2 class="wp-block-heading text-3xl font-bold text-slate-900 mb-6">Tanda Bisnis Anda Butuh Sistem</h2>

									<!-- /wp:heading -->

	

									<!-- wp:html -->

									<ul class="space-y-4">

										<li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">

											<svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>

											<div>

												<h4 class="font-bold text-slate-800">Stok Gudang Tidak Sesuai</h4>

												<p class="text-sm text-slate-600">Sering terjadi selisih antara catatan admin dengan fisik barang di gudang (Stock Opname mimpi buruk).</p>

											</div>

										</li>

										<li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">

											<svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>

											<div>

												<h4 class="font-bold text-slate-800">Laporan Keuangan Telat</h4>

												<p class="text-sm text-slate-600">Owner harus menunggu akhir bulan (atau bulan depan) hanya untuk tahu laba rugi bisnis.</p>

											</div>

										</li>

										<li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">

											<svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>

											<div>

												<h4 class="font-bold text-slate-800">Ketergantungan Pada Orang</h4>

												<p class="text-sm text-slate-600">Jika staff kunci sakit atau resign, operasional berantakan karena tidak ada SOP yang tersistem.</p>

											</div>

										</li>

									</ul>

									<!-- /wp:html -->

								</div>

								<!-- /wp:column -->

							</div>

							<!-- /wp:columns -->

						</div>

						<!-- /wp:group -->

					</section>

					<!-- /wp:group -->

	

					<!-- wp:group {"tagName":"section","className":"py-20 bg-white","layout":{"type":"default"}} -->

					<section class="wp-block-group py-20 bg-white">

						<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->

						<div class="wp-block-group container mx-auto px-6">

							<!-- wp:group {"className":"text-center mb-16 max-w-2xl mx-auto","layout":{"type":"default"}} -->

							<div class="wp-block-group text-center mb-16 max-w-2xl mx-auto">

								<!-- wp:heading {"level":2,"className":"text-3xl font-bold text-slate-900 mb-4"} -->

								<h2 class="wp-block-heading text-3xl font-bold text-slate-900 mb-4">Layanan IT Kami</h2>

								<!-- /wp:heading -->

	

								<!-- wp:paragraph {"className":"text-slate-600"} -->

								<p class="text-slate-600">Kami tidak hanya menjual software, kami merancang arsitektur bisnis yang efisien. Bekerja sama dengan Zahir dan Accurate.</p>

								<!-- /wp:paragraph -->

							</div>

							<!-- /wp:group -->

	

							<!-- wp:shortcode -->

							[konsul_sistemasi_services]

							<!-- /wp:shortcode -->

						</div>

						<!-- /wp:group -->

					</section>

					<!-- /wp:group -->

	

					<!-- wp:group {"tagName":"section","className":"py-20 bg-slate-50","layout":{"type":"default"}} -->

					<section class="wp-block-group py-20 bg-slate-50">

						<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->

						<div class="wp-block-group container mx-auto px-6">

							<!-- wp:group {"className":"text-center mb-16","layout":{"type":"default"}} -->

							<div class="wp-block-group text-center mb-16">

								<!-- wp:heading {"level":2,"className":"text-3xl font-bold text-slate-900 mb-4"} -->

								<h2 class="wp-block-heading text-3xl font-bold text-slate-900 mb-4">Proyek IT Kami</h2>

								<!-- /wp:heading -->

	

								<!-- wp:paragraph {"className":"text-slate-600 max-w-2xl mx-auto"} -->

								<p class="text-slate-600 max-w-2xl mx-auto">Beberapa proyek IT yang telah kami kerjakan untuk klien dari berbagai instansi pemerintah, BUMN, dan perusahaan swasta.</p>

								<!-- /wp:paragraph -->

							</div>

							<!-- /wp:group -->

	

							<!-- wp:shortcode -->

							[konsul_sistemasi_projects]

							<!-- /wp:shortcode -->

						</div>

						<!-- /wp:group -->

					</section>

					<!-- /wp:group -->

	

					<!-- wp:group {"tagName":"section","className":"py-20 bg-slate-100","layout":{"type":"default"}} -->

					<section class="wp-block-group py-20 bg-slate-100" id="contact-form">

						<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->

						<div class="wp-block-group container mx-auto px-6">

							<!-- wp:columns {"className":"gap-0 max-w-6xl mx-auto rounded-3xl overflow-hidden shadow-2xl animate-on-scroll"} -->

							<div class="wp-block-columns gap-0 max-w-6xl mx-auto rounded-3xl overflow-hidden shadow-2xl animate-on-scroll">

								

								<!-- wp:column {"className":"relative overflow-hidden text-white min-h-[500px]"} -->

								<div class="wp-block-column relative overflow-hidden text-white min-h-[500px]" style="background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 50%, #172554 100%);">

									<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"absolute inset-0 opacity-20 w-full h-full object-cover"} -->

									<figure class="wp-block-image size-full absolute inset-0 opacity-20 w-full h-full object-cover"><img src="https://placehold.co/1200x800/png" alt="" class="w-full h-full object-cover"/></figure>

									<!-- /wp:image -->

	

									<!-- wp:html -->

									<div class="absolute inset-0 bg-gradient-to-br from-blue-900/80 via-blue-800/60 to-blue-900/80"></div>

									<div class="relative z-10 p-10 lg:p-12 h-full flex flex-col">

										<h2 class="text-3xl lg:text-4xl font-bold mb-4 text-white">Hubungi Kami</h2>

										<p class="text-blue-100 mb-10 leading-relaxed">Konsultasikan kebutuhan sistem informasi perusahaan Anda bersama kami.</p>

										<div class="space-y-6 flex-grow">

											<div class="flex items-start gap-4">

												<div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>

												<div><h4 class="font-bold text-white mb-1">Kantor</h4><p class="text-blue-200 text-sm leading-relaxed">Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B, Kel. Temindung Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75117</p></div>

											</div>

											<div class="flex items-start gap-4">

												<div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></div>

												<div><h4 class="font-bold text-white mb-1">WhatsApp</h4><p class="text-blue-200 text-sm">0813-4624-2556</p></div>

											</div>

											<div class="flex items-start gap-4">

												<div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg></div>

												<div><h4 class="font-bold text-white mb-1">Email</h4><p class="text-blue-200 text-sm">KonsultanKamiBantu@gmail.com</p></div>

											</div>

										</div>

										<div class="mt-8 pt-6 border-t border-white/10">

											<div class="flex items-start gap-4">

												<a href="https://kamibantu.co" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-10 h-10 bg-white/10 hover:bg-white/20 rounded-lg transition-colors shrink-0">

													<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>

												</a>

												<div class="flex flex-col justify-center h-10"><h4 class="font-bold text-white text-sm mb-0">Instagram</h4><a href="https://kamibantu.co" target="_blank" rel="noopener noreferrer" class="text-blue-200 text-sm hover:text-white transition-colors">@kamibantu.co</a></div>

											</div>

										</div>

									</div>

									<!-- /wp:html -->

								</div>

								<!-- /wp:column -->

	

								<!-- wp:column {"className":"bg-white p-10 lg:p-12"} -->

								<div class="wp-block-column bg-white p-10 lg:p-12">

									<!-- wp:heading {"level":2,"className":"text-2xl lg:text-3xl font-bold text-slate-900 mb-2"} -->

									<h2 class="wp-block-heading text-2xl lg:text-3xl font-bold text-slate-900 mb-2">Konsultasi via WhatsApp</h2>

									<!-- /wp:heading -->

	

									<!-- wp:paragraph {"className":"text-slate-500 mb-8"} -->

									<p class="text-slate-500 mb-8">Isi form di bawah untuk memulai konsultasi</p>

									<!-- /wp:paragraph -->

	

									<!-- wp:html -->

									<form class="space-y-6" id="contact-form-sistemasi">

										<div class="grid md:grid-cols-2 gap-6">

											<div><label for="nama_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">Nama</label><input type="text" id="nama_sistemasi" name="nama" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="Nama Anda"/></div>

											<div><label for="perusahaan_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">Perusahaan</label><input type="text" id="perusahaan_sistemasi" name="perusahaan" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="PT ABC"/></div>

										</div>

										<div><label for="whatsapp_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">WhatsApp</label><input type="text" id="whatsapp_sistemasi" name="whatsapp" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="08123456789"/></div>

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

										<div><label for="deskripsi_sistemasi" class="block text-sm font-semibold text-slate-700 mb-2">Pesan</label><textarea id="deskripsi_sistemasi" name="deskripsi" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition h-28 resize-none" placeholder="Ceritakan kebutuhan sistem Anda..."></textarea></div>

										<button type="submit" class="w-full py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded-lg transition-all shadow-lg hover:shadow-xl transform active:scale-[0.99] flex items-center justify-center gap-2">

											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor" class="text-slate-900"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>

											Kirim via WhatsApp

										</button>

									</form>

									<!-- /wp:html -->

								</div>

								<!-- /wp:column -->

	

							</div>

							<!-- /wp:columns -->

						</div>

						<!-- /wp:group -->

					</section>

					<!-- /wp:group -->

				',

				'categories'  => array( 'konsulbisnis' ),

			)

		);
	// 7. Generic Service Hero
	register_block_pattern(
		'konsulbisnis/service-hero',
		array(
			'title'       => __( 'Service Hero (Generic)', 'konsulbisnis' ),
			'description' => _x( 'Hero section for service pages.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"relative bg-slate-900 text-white overflow-hidden py-24 lg:py-32","layout":{"type":"default"}} -->
				<section class="wp-block-group relative bg-slate-900 text-white overflow-hidden py-24 lg:py-32">
					<!-- wp:html -->
					<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-blue-600/10 blur-[100px] rounded-full translate-x-1/3 -translate-y-1/2 pointer-events-none"></div>
					<div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-amber-500/5 blur-[100px] rounded-full -translate-x-1/3 translate-y-1/2 pointer-events-none"></div>
					<!-- /wp:html -->

					<!-- wp:group {"className":"container mx-auto px-6 relative z-10 text-center max-w-4xl mx-auto","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6 relative z-10 text-center max-w-4xl mx-auto">
						<!-- wp:html -->
						<div class="hero-animate inline-flex items-center justify-center px-6 py-2 rounded-full border border-slate-600 bg-slate-800/50 backdrop-blur-sm text-white text-xs font-bold uppercase tracking-wider mb-8">
							NAMA LAYANAN
						</div>
						<!-- /wp:html -->

						<!-- wp:heading {"level":1,"className":"hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold mb-8 leading-[1.1]"} -->
						<h1 class="wp-block-heading hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold mb-8 leading-[1.1]">Judul Layanan &<br>Tagline Menarik</h1>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"className":"hero-animate-delay-2 text-lg lg:text-xl text-slate-400 mb-12 leading-relaxed max-w-3xl mx-auto"} -->
						<p class="hero-animate-delay-2 text-lg lg:text-xl text-slate-400 mb-12 leading-relaxed max-w-3xl mx-auto">Deskripsi singkat mengenai layanan ini. Jelaskan bagaimana layanan ini dapat membantu memecahkan masalah klien dan memberikan nilai tambah.</p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"hero-animate-delay-3"} -->
						<div class="wp-block-buttons hero-animate-delay-3">
							<!-- wp:button {"backgroundColor":"amber-500","className":"is-style-fill px-8 py-4 text-slate-900 font-bold rounded-lg shadow-lg hover:shadow-amber-500/25 text-lg transition-all"} -->
							<div class="wp-block-button is-style-fill px-8 py-4 text-slate-900 font-bold rounded-lg shadow-lg hover:shadow-amber-500/25 text-lg transition-all"><a class="wp-block-button__link has-amber-500-background-color has-background" href="#contact">Konsultasi Sekarang</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);

	// 8. Generic Service Problems
	register_block_pattern(
		'konsulbisnis/service-problems',
		array(
			'title'       => __( 'Service Problems (Before/After)', 'konsulbisnis' ),
			'description' => _x( 'Section highlighting problems and solutions.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"py-20 bg-slate-50","layout":{"type":"default"}} -->
				<section class="wp-block-group py-20 bg-slate-50">
					<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6">
						<!-- wp:columns {"className":"grid md:grid-cols-2 gap-12 items-center"} -->
						<div class="wp-block-columns grid md:grid-cols-2 gap-12 items-center">
							<!-- wp:column {"className":"animate-fade-in-left relative"} -->
							<div class="wp-block-column animate-fade-in-left relative">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"rounded-xl shadow-2xl border border-slate-200 hover:scale-[1.02] transition-transform duration-500"} -->
								<figure class="wp-block-image size-full rounded-xl shadow-2xl border border-slate-200 hover:scale-[1.02] transition-transform duration-500"><img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Dashboard Analytics"/></figure>
								<!-- /wp:image -->
								
								<!-- wp:html -->
								<div class="float-animation absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl border border-slate-100 max-w-xs">
									<div class="flex items-center gap-3 mb-2"><div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div><p class="text-xs text-slate-500">Masalah Saat Ini</p></div>
									<p class="font-bold text-slate-800 mb-4">Deskripsi singkat masalah yang sering dialami.</p>
									<div class="flex items-center gap-3 mb-2"><div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div><p class="text-xs text-slate-500">Solusi Kami</p></div>
									<p class="font-bold text-slate-800">Hasil positif setelah menggunakan layanan.</p>
								</div>
								<!-- /wp:html -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"className":"animate-fade-in-right"} -->
							<div class="wp-block-column animate-fade-in-right">
								<!-- wp:heading {"level":2,"className":"text-3xl font-bold text-slate-900 mb-6"} -->
								<h2 class="wp-block-heading text-3xl font-bold text-slate-900 mb-6">Tanda Anda Membutuhkan Layanan Ini</h2>
								<!-- /wp:heading -->

								<!-- wp:html -->
								<ul class="space-y-4">
									<li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
										<svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
										<div>
											<h4 class="font-bold text-slate-800">Masalah Pertama</h4>
											<p class="text-sm text-slate-600">Jelaskan detail masalah pertama di sini.</p>
										</div>
									</li>
									<li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
										<svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
										<div>
											<h4 class="font-bold text-slate-800">Masalah Kedua</h4>
											<p class="text-sm text-slate-600">Jelaskan detail masalah kedua di sini.</p>
										</div>
									</li>
									<li class="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
										<svg class="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
										<div>
											<h4 class="font-bold text-slate-800">Masalah Ketiga</h4>
											<p class="text-sm text-slate-600">Jelaskan detail masalah ketiga di sini.</p>
										</div>
									</li>
								</ul>
								<!-- /wp:html -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);

	// 9. Generic Service Features Grid
	register_block_pattern(
		'konsulbisnis/service-features',
		array(
			'title'       => __( 'Service Features Grid', 'konsulbisnis' ),
			'description' => _x( 'Grid layout for service features or sub-services.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"py-20 bg-white","layout":{"type":"default"}} -->
				<section class="wp-block-group py-20 bg-white">
					<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6">
						<!-- wp:group {"className":"text-center mb-16 max-w-2xl mx-auto","layout":{"type":"default"}} -->
						<div class="wp-block-group text-center mb-16 max-w-2xl mx-auto">
							<!-- wp:heading {"level":2,"className":"text-3xl font-bold text-slate-900 mb-4"} -->
							<h2 class="wp-block-heading text-3xl font-bold text-slate-900 mb-4">Fitur Layanan Kami</h2>
							<!-- /wp:heading -->

							<!-- wp:paragraph {"className":"text-slate-600"} -->
							<p class="text-slate-600">Jelaskan apa saja yang termasuk dalam paket layanan ini.</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:columns {"className":"grid md:grid-cols-3 gap-8"} -->
						<div class="wp-block-columns grid md:grid-cols-3 gap-8">
							<!-- wp:column {"className":"bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all"} -->
							<div class="wp-block-column bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
								<!-- wp:html -->
								<div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
								<h3 class="text-xl font-bold text-slate-900 mb-2">Fitur 1</h3>
								<p class="text-slate-600">Deskripsi fitur pertama.</p>
								<!-- /wp:html -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"className":"bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all"} -->
							<div class="wp-block-column bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
								<!-- wp:html -->
								<div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
								<h3 class="text-xl font-bold text-slate-900 mb-2">Fitur 2</h3>
								<p class="text-slate-600">Deskripsi fitur kedua.</p>
								<!-- /wp:html -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"className":"bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all"} -->
							<div class="wp-block-column bg-slate-50 p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
								<!-- wp:html -->
								<div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v20M2 12h20"/></svg></div>
								<h3 class="text-xl font-bold text-slate-900 mb-2">Fitur 3</h3>
								<p class="text-slate-600">Deskripsi fitur ketiga.</p>
								<!-- /wp:html -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);

	// 10. Generic Projects Grid
	register_block_pattern(
		'konsulbisnis/service-projects',
		array(
			'title'       => __( 'Service Projects Grid', 'konsulbisnis' ),
			'description' => _x( 'Grid layout for highlighting projects or clients.', 'Block pattern description', 'konsulbisnis' ),
			'content'     => '
				<!-- wp:group {"tagName":"section","className":"py-20 bg-slate-50","layout":{"type":"default"}} -->
				<section class="wp-block-group py-20 bg-slate-50">
					<!-- wp:group {"className":"container mx-auto px-6","layout":{"type":"default"}} -->
					<div class="wp-block-group container mx-auto px-6">
						<!-- wp:group {"className":"text-center mb-16","layout":{"type":"default"}} -->
						<div class="wp-block-group text-center mb-16">
							<!-- wp:heading {"level":2,"className":"text-3xl font-bold text-slate-900 mb-4"} -->
							<h2 class="wp-block-heading text-3xl font-bold text-slate-900 mb-4">Portofolio Layanan</h2>
							<!-- /wp:heading -->

							<!-- wp:paragraph {"className":"text-slate-600 max-w-2xl mx-auto"} -->
							<p class="text-slate-600 max-w-2xl mx-auto">Beberapa klien yang telah menggunakan layanan ini.</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

						<!-- wp:columns {"className":"grid grid-cols-2 md:grid-cols-4 gap-6"} -->
						<div class="wp-block-columns grid grid-cols-2 md:grid-cols-4 gap-6">
							<!-- wp:column {"className":"bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-all flex items-center justify-center h-32"} -->
							<div class="wp-block-column bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-all flex items-center justify-center h-32">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"max-h-16 w-auto grayscale hover:grayscale-0 transition-all"} -->
								<figure class="wp-block-image size-full max-h-16 w-auto grayscale hover:grayscale-0 transition-all"><img src="' . get_template_directory_uri() . '/assets/images/placeholder-logo.png" alt="Client Logo" /></figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"className":"bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-all flex items-center justify-center h-32"} -->
							<div class="wp-block-column bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-all flex items-center justify-center h-32">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"max-h-16 w-auto grayscale hover:grayscale-0 transition-all"} -->
								<figure class="wp-block-image size-full max-h-16 w-auto grayscale hover:grayscale-0 transition-all"><img src="' . get_template_directory_uri() . '/assets/images/placeholder-logo.png" alt="Client Logo" /></figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"className":"bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-all flex items-center justify-center h-32"} -->
							<div class="wp-block-column bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-all flex items-center justify-center h-32">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"max-h-16 w-auto grayscale hover:grayscale-0 transition-all"} -->
								<figure class="wp-block-image size-full max-h-16 w-auto grayscale hover:grayscale-0 transition-all"><img src="' . get_template_directory_uri() . '/assets/images/placeholder-logo.png" alt="Client Logo" /></figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column {"className":"bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-all flex items-center justify-center h-32"} -->
							<div class="wp-block-column bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-all flex items-center justify-center h-32">
								<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"max-h-16 w-auto grayscale hover:grayscale-0 transition-all"} -->
								<figure class="wp-block-image size-full max-h-16 w-auto grayscale hover:grayscale-0 transition-all"><img src="' . get_template_directory_uri() . '/assets/images/placeholder-logo.png" alt="Client Logo" /></figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:group -->
				</section>
				<!-- /wp:group -->
			',
			'categories'  => array( 'konsulbisnis' ),
		)
	);
}
add_action( 'init', 'konsul_register_block_patterns' );

