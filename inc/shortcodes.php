<?php
/**
 * Custom Shortcodes for Gutenberg Blocks
 *
 * @package KonsulBisnis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Shortcode to display the Special Service (IT & Sistem) card.
 * Usage: [konsul_special_service]
 */
function konsul_special_service_shortcode() {
	$args = array(
		'post_type'      => 'service',
		'posts_per_page' => -1, // Get all to find the specific one
		'post_status'    => 'publish',
	);

	$query = new WP_Query( $args );
	$special_service = null;

	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();
			$title = get_the_title();
			// Logic matches front-page.php: find 'IT' or 'Sistem'
			if ( strpos( $title, 'IT' ) !== false || strpos( $title, 'Sistem' ) !== false ) {
				$special_service = get_post();
				break;
			}
		}
		wp_reset_postdata();
	}

	if ( ! $special_service ) {
		return '';
	}

	// Buffer output
	ob_start();
	
	// Setup global post for template tags
	global $post;
	$post = $special_service;
	setup_postdata( $post );
	?>
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
	<?php
	wp_reset_postdata();
	return ob_get_clean();
}
add_shortcode( 'konsul_special_service', 'konsul_special_service_shortcode' );

/**
 * Shortcode to display the Grid of Other Services.
 * Usage: [konsul_services_grid]
 */
function konsul_services_grid_shortcode() {
	$args = array(
		'post_type'      => 'service',
		'posts_per_page' => 10,
		'order'          => 'ASC',
		'post_status'    => 'publish',
	);

	$query = new WP_Query( $args );
	
	if ( ! $query->have_posts() ) {
		return '';
	}

	ob_start();
	?>
	<div class="grid md:grid-cols-2 gap-6 w-full">
		<?php
		while ( $query->have_posts() ) {
			$query->the_post();
			$title = get_the_title();
			
			// Skip the special service
			if ( strpos( $title, 'IT' ) !== false || strpos( $title, 'Sistem' ) !== false ) {
				continue;
			}
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
		}
		wp_reset_postdata();
		?>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'konsul_services_grid', 'konsul_services_grid_shortcode' );

/**
 * Shortcode to display the Clients Grid (About Section).
 * Usage: [konsul_clients_grid]
 */
function konsul_clients_grid_shortcode() {
	$args = array(
		'post_type'      => 'client',
		'posts_per_page' => 6,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
		'post_status'    => 'publish',
	);

	$query = new WP_Query( $args );

	ob_start();
	?>
	<div class="grid grid-cols-2 gap-4">
		<?php
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$client_name = get_the_title();
				$client_desc = get_post_meta( get_the_ID(), 'client_project_desc', true );
				?>
				<div class="p-4 bg-slate-800 rounded-lg border border-slate-700 hover:border-amber-500 transition-colors">
					<p class="font-semibold text-sm"><?php echo esc_html( $client_name ); ?></p>
					<?php if ( $client_desc ) : ?>
						<p class="text-xs text-slate-500"><?php echo esc_html( $client_desc ); ?></p>
					<?php endif; ?>
				</div>
				<?php
			}
			wp_reset_postdata();
		} else {
			// Fallback content if no clients found (mimicking front-page.php fallback)
			?>
			<div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Bank Indonesia Kaltmara</p><p class="text-xs text-slate-500">Pembuatan Website</p></div>
			<div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">PT Astra International</p><p class="text-xs text-slate-500">Aplikasi LISA</p></div>
			<div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Pemerintah Kota Samarinda</p><p class="text-xs text-slate-500">Kontrak Website</p></div>
			<div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">KemenKumHam Kaltmara</p><p class="text-xs text-slate-500">E-Lasikum.id</p></div>
			<div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Diskominfo Prov. Kaltmara</p><p class="text-xs text-slate-500">Aplikasi COVID</p></div>
			<div class="p-4 bg-slate-800 rounded-lg border border-slate-700"><p class="font-semibold text-sm">Bank Kaltmara</p><p class="text-xs text-slate-500">Pelatihan MS Office</p></div>
			<?php
		}
		?>
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
	<?php
	return ob_get_clean();
}
add_shortcode( 'konsul_clients_grid', 'konsul_clients_grid_shortcode' );

/**
 * Shortcode for Sistemasi Bisnis Services (3 Columns).
 * Usage: [konsul_sistemasi_services]
 */
function konsul_sistemasi_services_shortcode() {
	$args = array(
		'post_type'      => 'service',
		'posts_per_page' => 3,
		'post_status'    => 'publish',
	);

	$query = new WP_Query( $args );

	ob_start();
	?>
	<div class="grid md:grid-cols-3 gap-8">
		<?php
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
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
			}
			wp_reset_postdata();
		} else {
			?>
			<div class="col-span-3 text-center text-slate-500">
				<p>Belum ada layanan yang ditambahkan.</p>
			</div>
			<?php
		}
		?>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'konsul_sistemasi_services', 'konsul_sistemasi_services_shortcode' );

/**
 * Shortcode for Sistemasi Bisnis Projects (3 Columns).
 * Usage: [konsul_sistemasi_projects]
 */
function konsul_sistemasi_projects_shortcode() {
	$args = array(
		'post_type'      => 'client',
		'posts_per_page' => 6,
		'post_status'    => 'publish',
	);

	$query = new WP_Query( $args );

	ob_start();
	?>
	<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
		<?php
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				$category = 'Klien Kami'; // Default category
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
						<?php the_content(); ?>
					</div>
				</div>
				<?php
			}
			wp_reset_postdata();
		}
		?>
	</div>
	<?php
	return ob_get_clean();
}
add_shortcode( 'konsul_sistemasi_projects', 'konsul_sistemasi_projects_shortcode' );
