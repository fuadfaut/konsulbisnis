<?php
function konsulbisnis_scripts() {
    wp_enqueue_style( 'konsulbisnis-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'konsulbisnis_scripts' );

function konsulbisnis_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'konsulbisnis' ),
        'footer'  => __( 'Footer Menu', 'konsulbisnis' ),
    ) );
}
add_action( 'after_setup_theme', 'konsulbisnis_setup' );

function konsulbisnis_cpt() {
    register_post_type( 'service', array(
        'labels' => array(
            'name' => __( 'Layanan', 'konsulbisnis' ),
            'singular_name' => __( 'Layanan', 'konsulbisnis' ),
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-grid-view',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    ) );

    register_post_type( 'team', array(
        'labels' => array(
            'name' => __( 'Tim', 'konsulbisnis' ),
            'singular_name' => __( 'Anggota Tim', 'konsulbisnis' ),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'supports' => array( 'title', 'thumbnail', 'custom-fields' ), // Title = Name, Custom Fields for Role/Credentials
    ) );
    
    register_post_type( 'client', array(
        'labels' => array(
            'name' => __( 'Klien', 'konsulbisnis' ),
            'singular_name' => __( 'Klien', 'konsulbisnis' ),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-building',
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ), // Title = Client Name, Thumbnail = Logo, Editor = Project Description, Custom Fields = Category/Role
    ) );
}
add_action( 'init', 'konsulbisnis_cpt' );

function konsulbisnis_customize_register( $wp_customize ) {
    // --- Top Bar Section ---
    $wp_customize->add_section( 'konsulbisnis_topbar', array(
        'title'       => __( 'Header Top Bar', 'konsulbisnis' ),
        'priority'    => 30,
        'description' => 'Isi informasi kontak di bar paling atas website',
    ) );

    // Phone Number
    $wp_customize->add_setting( 'topbar_phone', array( 'default' => '0813-4624-2556' ) );
    $wp_customize->add_control( 'topbar_phone', array(
        'label'    => __( 'Nomor Telepon (Top Bar)', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_topbar',
        'type'     => 'text',
    ) );

    // Email
    $wp_customize->add_setting( 'topbar_email', array( 'default' => 'KonsultanKamiBantu@gmail.com' ) );
    $wp_customize->add_control( 'topbar_email', array(
        'label'    => __( 'Email (Top Bar)', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_topbar',
        'type'     => 'text',
    ) );

    // Instagram URL
    $wp_customize->add_setting( 'topbar_instagram', array( 'default' => '#' ) );
    $wp_customize->add_control( 'topbar_instagram', array(
        'label'    => __( 'Link Instagram', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_topbar',
        'type'     => 'url',
    ) );


    // --- Footer Section ---
    $wp_customize->add_section( 'konsulbisnis_footer', array(
        'title'       => __( 'Footer Settings', 'konsulbisnis' ),
        'priority'    => 120,
    ) );

    // Footer Description
    $wp_customize->add_setting( 'footer_desc', array( 'default' => 'PT Kami Bantu Konsultan adalah perusahaan jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT...' ) );
    $wp_customize->add_control( 'footer_desc', array(
        'label'    => __( 'Deskripsi Perusahaan', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_footer',
        'type'     => 'textarea',
    ) );

    // Footer Address
    $wp_customize->add_setting( 'footer_address', array( 'default' => 'Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B...' ) );
    $wp_customize->add_control( 'footer_address', array(
        'label'    => __( 'Alamat Lengkap', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_footer',
        'type'     => 'textarea',
    ) );

    // Footer Phone 1
    $wp_customize->add_setting( 'footer_phone1', array( 'default' => '0813-4624-2556' ) );
    $wp_customize->add_control( 'footer_phone1', array(
        'label'    => __( 'No. Telepon 1', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_footer',
        'type'     => 'text',
    ) );

    // Footer Phone 2
    $wp_customize->add_setting( 'footer_phone2', array( 'default' => '0823-5242-5339' ) );
    $wp_customize->add_control( 'footer_phone2', array(
        'label'    => __( 'No. Telepon 2', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_footer',
        'type'     => 'text',
    ) );

    // Footer Email
    $wp_customize->add_setting( 'footer_email', array( 'default' => 'KonsultanKamiBantu@gmail.com' ) );
    $wp_customize->add_control( 'footer_email', array(
        'label'    => __( 'Email Footer', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_footer',
        'type'     => 'text',
    ) );

    // Footer Copyright
    $wp_customize->add_setting( 'footer_copyright', array( 'default' => '© 2024 PT. Kami Bantu Konsultan. Hak Cipta Dilindungi Undang-Undang.' ) );
    $wp_customize->add_control( 'footer_copyright', array(
        'label'    => __( 'Teks Copyright', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_footer',
        'type'     => 'text',
    ) );


    // --- Homepage Hero Section ---
    $wp_customize->add_section( 'konsulbisnis_hero', array(
        'title'       => __( 'Homepage Hero', 'konsulbisnis' ),
        'priority'    => 40,
        'description' => 'Pengaturan tampilan Hero (Bagian Atas) di Halaman Depan',
    ) );

    // Hero Tagline (Badge)
    $wp_customize->add_setting( 'hero_tagline', array( 'default' => 'KOLABORASI UNTUK BERTUMBUH' ) );
    $wp_customize->add_control( 'hero_tagline', array(
        'label'    => __( 'Label Badge (Tagline)', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_hero',
        'type'     => 'text',
    ) );

    // Hero Title
    $wp_customize->add_setting( 'hero_title', array( 'default' => 'Solusi Bisnis' ) );
    $wp_customize->add_control( 'hero_title', array(
        'label'    => __( 'Judul Utama (Baris 1)', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_hero',
        'type'     => 'text',
    ) );

    // Hero Subtitle/Highlight
    $wp_customize->add_setting( 'hero_highlight', array( 'default' => 'Terintegrasi' ) );
    $wp_customize->add_control( 'hero_highlight', array(
        'label'    => __( 'Judul Highlight (Baris 2 - Warna Warni)', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_hero',
        'type'     => 'text',
    ) );

    // Hero Description
    $wp_customize->add_setting( 'hero_desc', array( 'default' => 'PT Kami Bantu Konsultan bergerak di bidang jasa akuntansi...' ) );
    $wp_customize->add_control( 'hero_desc', array(
        'label'    => __( 'Deskripsi Hero', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_hero',
        'type'     => 'textarea',
    ) );

    // Hero Image
    $wp_customize->add_setting( 'hero_image' );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_image', array(
        'label'    => __( 'Gambar Hero', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_hero',
        'settings' => 'hero_image',
    ) ) );

    // --- Homepage Texts (Problem, Service Title, etc) ---
    $wp_customize->add_section( 'konsulbisnis_home_text', array(
        'title'       => __( 'Homepage Texts', 'konsulbisnis' ),
        'priority'    => 41,
        'description' => 'Teks judul dan deskripsi untuk bagian-bagian di halaman depan',
    ) );
    
    // Services Section Title
    $wp_customize->add_setting( 'home_service_title', array( 'default' => 'Pelayanan Kami' ) );
    $wp_customize->add_control( 'home_service_title', array(
        'label'    => __( 'Judul Bagian Layanan', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_home_text',
        'type'     => 'text',
    ) );
    
    // Services Section Desc
    $wp_customize->add_setting( 'home_service_desc', array( 'default' => 'Kami menyediakan layanan lengkap...' ) );
    $wp_customize->add_control( 'home_service_desc', array(
        'label'    => __( 'Deskripsi Bagian Layanan', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_home_text',
        'type'     => 'textarea',
    ) );

}
add_action( 'customize_register', 'konsulbisnis_customize_register' );
?>
