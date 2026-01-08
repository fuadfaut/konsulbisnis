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
?>
