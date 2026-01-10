<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'inter_5972bc34-module__OU16Qa__className font-sans text-slate-800 bg-white antialiased' ); ?>>
<?php wp_body_open(); ?>

<main class="min-h-screen bg-white">
    <!-- Top Bar -->
    <div class="bg-slate-900 text-slate-300 py-2 text-xs md:text-sm border-b border-slate-800">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex gap-4">
                <span class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <?php echo esc_html( get_theme_mod( 'topbar_phone', '0813-4624-2556' ) ); ?>
                </span>
                <span class="flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                    <?php echo esc_html( get_theme_mod( 'topbar_email', 'KonsultanKamiBantu@gmail.com' ) ); ?>
                </span>
            </div>
            <div class="hidden md:flex gap-3">
                <a href="https://kamibantu.co" class="hover:text-white" target="_blank">Instagram</a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav id="navbar" class="sticky top-0 w-full z-50 transition-all duration-300 border-b border-transparent py-5 bg-white">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <div class="flex items-center gap-3 cursor-pointer" onclick="window.location.href='<?php echo home_url('/'); ?>'">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="w-10 h-10 rounded"/>';
                } else {
                    // Fallback logo if user hasn't uploaded one yet
                    echo '<img src="' . get_template_directory_uri() . '/assets/images/logo.png" alt="' . get_bloginfo( 'name' ) . '" class="w-10 h-10 rounded"/>';
                }
                ?>
                <div class="leading-tight">
                    <h1 class="text-xl font-bold text-slate-900 tracking-tight"><?php bloginfo( 'name' ); ?></h1>
                    <p class="text-[10px] font-medium text-slate-500 tracking-widest uppercase"><?php bloginfo( 'description' ); ?></p>
                </div>
            </div>
            
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600 list-none m-0 p-0',
                    'fallback_cb'    => false,
                ) );
            } else {
                // Fallback static menu for initial view before setup
                ?>
                <div class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                    <a href="<?php echo home_url('/'); ?>" class="hover:text-blue-700 transition-colors">Beranda</a>
                    <a href="#services" class="hover:text-blue-700 transition-colors">Layanan</a>
                    <a href="#about" class="hover:text-blue-700 transition-colors">Tentang</a>
                    <a href="#contact" class="px-5 py-2.5 bg-blue-700 hover:bg-blue-800 text-white rounded font-medium transition-all shadow-md hover:shadow-lg">Hubungi Kami</a>
                </div>
                <?php
            }
            ?>
            <button id="mobile-menu-btn" class="md:hidden text-slate-900" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="mobile-menu">
                <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="4" x2="20" y1="12" y2="12"></line><line x1="4" x2="20" y1="6" y2="6"></line><line x1="4" x2="20" y1="18" y2="18"></line></svg>
                <svg id="menu-icon-close" class="hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="18" x2="6" y1="6" y2="18"></line><line x1="6" x2="18" y1="6" y2="18"></line></svg>
            </button>
        </div>
        <nav id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white border-t border-slate-100 shadow-xl p-6 flex-col gap-4 md:hidden" role="navigation" aria-label="Mobile navigation">
            <a href="<?php echo home_url('/'); ?>" class="text-left font-medium text-slate-700 py-2 border-b border-slate-50 focus:outline-none focus:text-blue-700">Beranda</a>
            <a href="#services" class="text-left font-medium text-slate-700 py-2 border-b border-slate-50 focus:outline-none focus:text-blue-700">Layanan</a>
            <a href="#about" class="text-left font-medium text-slate-700 py-2 border-b border-slate-50 focus:outline-none focus:text-blue-700">Tentang</a>
            <a href="#contact" class="text-left font-bold text-blue-700 py-2 focus:outline-none focus:underline">Hubungi Kami</a>
        </nav>
    </nav>
