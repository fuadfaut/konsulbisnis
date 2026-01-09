<?php

/**
 * Theme setup.
 */

namespace App;

use Illuminate\Support\Facades\Vite;

/**
 * Inject styles into the block editor.
 *
 * @return array
 */
add_filter('block_editor_settings_all', function ($settings) {
    $style = Vite::asset('resources/css/editor.css');

    $settings['styles'][] = [
        'css' => "@import url('{$style}')",
    ];

    return $settings;
});

/**
 * Inject scripts into the block editor.
 *
 * @return void
 */
add_filter('admin_head', function () {
    if (! get_current_screen()?->is_block_editor()) {
        return;
    }

    $dependencies = json_decode(Vite::content('editor.deps.json'));

    foreach ($dependencies as $dependency) {
        if (! wp_script_is($dependency)) {
            wp_enqueue_script($dependency);
        }
    }

    echo Vite::withEntryPoints([
        'resources/js/editor.js',
    ])->toHtml();
});

/**
 * Use the generated theme.json file.
 *
 * @return string
 */
add_filter('theme_file_path', function ($path, $file) {
    return $file === 'theme.json'
        ? public_path('build/assets/theme.json')
        : $path;
}, 10, 2);

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'footer_navigation' => __('Footer Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Register Custom Post Types.
 */
add_action('init', function () {
    register_post_type('service', [
        'labels' => [
            'name' => __('Layanan', 'sage'),
            'singular_name' => __('Layanan', 'sage'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-grid-view',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
    ]);

    register_post_type('team', [
        'labels' => [
            'name' => __('Tim', 'sage'),
            'singular_name' => __('Anggota Tim', 'sage'),
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title', 'thumbnail', 'custom-fields'],
    ]);

    register_post_type('client', [
        'labels' => [
            'name' => __('Klien', 'sage'),
            'singular_name' => __('Klien', 'sage'),
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
    ]);
});

/**
 * Register Customizer settings.
 */
add_action('customize_register', function ($wp_customize) {
    // --- Top Bar Section ---
    $wp_customize->add_section('konsulbisnis_topbar', [
        'title' => __('Header Top Bar', 'sage'),
        'priority' => 30,
        'description' => 'Isi informasi kontak di bar paling atas website',
    ]);

    $wp_customize->add_setting('topbar_phone', ['default' => '0813-4624-2556']);
    $wp_customize->add_control('topbar_phone', [
        'label' => __('Nomor Telepon (Top Bar)', 'sage'),
        'section' => 'konsulbisnis_topbar',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('topbar_email', ['default' => 'KonsultanKamiBantu@gmail.com']);
    $wp_customize->add_control('topbar_email', [
        'label' => __('Email (Top Bar)', 'sage'),
        'section' => 'konsulbisnis_topbar',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('topbar_instagram', ['default' => '#']);
    $wp_customize->add_control('topbar_instagram', [
        'label' => __('Link Instagram', 'sage'),
        'section' => 'konsulbisnis_topbar',
        'type' => 'url',
    ]);

    // --- Footer Section ---
    $wp_customize->add_section('konsulbisnis_footer', [
        'title' => __('Footer Settings', 'sage'),
        'priority' => 120,
    ]);

    $wp_customize->add_setting('footer_desc', ['default' => 'PT Kami Bantu Konsultan adalah perusahaan jasa akuntansi...']);
    $wp_customize->add_control('footer_desc', [
        'label' => __('Deskripsi Perusahaan', 'sage'),
        'section' => 'konsulbisnis_footer',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('footer_address', ['default' => 'Jl. Jend A.Yani...']);
    $wp_customize->add_control('footer_address', [
        'label' => __('Alamat Lengkap', 'sage'),
        'section' => 'konsulbisnis_footer',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('footer_phone1', ['default' => '0813-4624-2556']);
    $wp_customize->add_control('footer_phone1', [
        'label' => __('No. Telepon 1', 'sage'),
        'section' => 'konsulbisnis_footer',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('footer_phone2', ['default' => '0823-5242-5339']);
    $wp_customize->add_control('footer_phone2', [
        'label' => __('No. Telepon 2', 'sage'),
        'section' => 'konsulbisnis_footer',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('footer_email', ['default' => 'KonsultanKamiBantu@gmail.com']);
    $wp_customize->add_control('footer_email', [
        'label' => __('Email Footer', 'sage'),
        'section' => 'konsulbisnis_footer',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('footer_copyright', ['default' => '© 2024 PT. Kami Bantu Konsultan.']);
    $wp_customize->add_control('footer_copyright', [
        'label' => __('Teks Copyright', 'sage'),
        'section' => 'konsulbisnis_footer',
        'type' => 'text',
    ]);

    // --- Homepage Hero Section ---
    $wp_customize->add_section('konsulbisnis_hero', [
        'title' => __('Homepage Hero', 'sage'),
        'priority' => 40,
        'description' => 'Pengaturan tampilan Hero (Bagian Atas) di Halaman Depan',
    ]);

    $wp_customize->add_setting('hero_tagline', ['default' => 'KOLABORASI UNTUK BERTUMBUH']);
    $wp_customize->add_control('hero_tagline', [
        'label' => __('Label Badge (Tagline)', 'sage'),
        'section' => 'konsulbisnis_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('hero_title', ['default' => 'Solusi Bisnis']);
    $wp_customize->add_control('hero_title', [
        'label' => __('Judul Utama (Baris 1)', 'sage'),
        'section' => 'konsulbisnis_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('hero_highlight', ['default' => 'Terintegrasi']);
    $wp_customize->add_control('hero_highlight', [
        'label' => __('Judul Highlight (Baris 2)', 'sage'),
        'section' => 'konsulbisnis_hero',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('hero_desc', ['default' => 'PT Kami Bantu Konsultan bergerak di bidang jasa akuntansi...']);
    $wp_customize->add_control('hero_desc', [
        'label' => __('Deskripsi Hero', 'sage'),
        'section' => 'konsulbisnis_hero',
        'type' => 'textarea',
    ]);

    $wp_customize->add_setting('hero_image');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', [
        'label' => __('Gambar Hero', 'sage'),
        'section' => 'konsulbisnis_hero',
        'settings' => 'hero_image',
    ]));

    // --- Homepage Texts ---
    $wp_customize->add_section('konsulbisnis_home_text', [
        'title' => __('Homepage Texts', 'sage'),
        'priority' => 41,
    ]);

    $wp_customize->add_setting('home_service_title', ['default' => 'Pelayanan Kami']);
    $wp_customize->add_control('home_service_title', [
        'label' => __('Judul Bagian Layanan', 'sage'),
        'section' => 'konsulbisnis_home_text',
        'type' => 'text',
    ]);

    $wp_customize->add_setting('home_service_desc', ['default' => 'Kami menyediakan layanan lengkap...']);
    $wp_customize->add_control('home_service_desc', [
        'label' => __('Deskripsi Bagian Layanan', 'sage'),
        'section' => 'konsulbisnis_home_text',
        'type' => 'textarea',
    ]);
});

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});
