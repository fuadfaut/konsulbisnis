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
    add_theme_support( 'title-tag' );
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
            'add_new' => __( 'Tambah Anggota', 'konsulbisnis' ),
            'add_new_item' => __( 'Tambah Anggota Tim Baru', 'konsulbisnis' ),
            'edit_item' => __( 'Edit Anggota Tim', 'konsulbisnis' ),
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-groups',
        'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
        'show_in_rest' => true,
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

    // --- About Section ---
    $wp_customize->add_section( 'konsulbisnis_about', array(
        'title'       => __( 'About Section', 'konsulbisnis' ),
        'priority'    => 45,
        'description' => 'Pengaturan teks untuk bagian Tentang Kami',
    ) );

    $wp_customize->add_setting( 'about_title', array( 'default' => 'Tentang Kami' ) );
    $wp_customize->add_control( 'about_title', array(
        'label'    => __( 'Judul', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_about',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'about_desc', array( 'default' => 'PT Kami Bantu Konsultan adalah perseroan perorangan yang bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan di bidang Information Technology khususnya penyedia aplikasi keuangan dan bisnis.' ) );
    $wp_customize->add_control( 'about_desc', array(
        'label'    => __( 'Deskripsi Paragraf 1', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_about',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'about_desc_2', array( 'default' => 'Didirikan atas dasar keprihatinan terhadap rendahnya literasi keuangan masyarakat, serta ketidakpahaman para pelaku ekonomi utamanya UMKM dalam tata kelola keuangan, perpajakan, dan manajemen. Kami memiliki visi menjadi perusahaan penyedia jasa yang edukatif dan solutif bagi klien dengan motto "Kolaborasi untuk Bertumbuh".' ) );
    $wp_customize->add_control( 'about_desc_2', array(
        'label'    => __( 'Deskripsi Paragraf 2', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_about',
        'type'     => 'textarea',
    ) );

    // --- Contact Section ---
    $wp_customize->add_section( 'konsulbisnis_contact_text', array(
        'title'       => __( 'Contact Section Texts', 'konsulbisnis' ),
        'priority'    => 50,
    ) );

    $wp_customize->add_setting( 'contact_title', array( 'default' => 'Hubungi Kami' ) );
    $wp_customize->add_control( 'contact_title', array(
        'label'    => __( 'Judul Kontak', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_contact_text',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'contact_desc', array( 'default' => 'Siap merapikan keuangan dan mensistemasi bisnis Anda? Konsultasi awal gratis.' ) );
    $wp_customize->add_control( 'contact_desc', array(
        'label'    => __( 'Deskripsi Kontak', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_contact_text',
        'type'     => 'textarea',
    ) );

    // --- Sistemasi Bisnis Page ---
    $wp_customize->add_section( 'konsulbisnis_sistemasi', array(
        'title'       => __( 'Sistemasi Bisnis Page', 'konsulbisnis' ),
        'priority'    => 55,
    ) );

    $wp_customize->add_setting( 'sistemasi_hero_badge', array( 'default' => 'IT KONSULTAN & SISTEM INFORMASI' ) );
    $wp_customize->add_control( 'sistemasi_hero_badge', array(
        'label'    => __( 'Hero Badge', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_sistemasi',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'sistemasi_hero_desc', array( 'default' => 'Kami menyediakan jasa pembukuan dengan menyusun laporan keuangan klien. Bekerja sama dengan PT Zahir Internasional dan Accurate untuk software akuntansi dan ERP.' ) );
    $wp_customize->add_control( 'sistemasi_hero_desc', array(
        'label'    => __( 'Hero Description', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_sistemasi',
        'type'     => 'textarea',
    ) );

    $wp_customize->add_setting( 'sistemasi_contact_title', array( 'default' => 'Hubungi Kami' ) );
    $wp_customize->add_control( 'sistemasi_contact_title', array(
        'label'    => __( 'Contact Title', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_sistemasi',
        'type'     => 'text',
    ) );

    $wp_customize->add_setting( 'sistemasi_contact_desc', array( 'default' => 'Konsultasikan kebutuhan sistem informasi perusahaan Anda bersama kami.' ) );
    $wp_customize->add_control( 'sistemasi_contact_desc', array(
        'label'    => __( 'Contact Description', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_sistemasi',
        'type'     => 'textarea',
    ) );

    // Problems Section
    $wp_customize->add_setting( 'sistemasi_problem_title', array( 'default' => 'Tanda Bisnis Anda Butuh Sistem' ) );
    $wp_customize->add_control( 'sistemasi_problem_title', array(
        'label'    => __( 'Problem Section Title', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_sistemasi',
        'type'     => 'text',
    ) );

    // Problem 1
    $wp_customize->add_setting( 'problem_1_title', array( 'default' => 'Stok Gudang Tidak Sesuai' ) );
    $wp_customize->add_control( 'problem_1_title', array( 'label' => 'Problem 1 Title', 'section' => 'konsulbisnis_sistemasi', 'type' => 'text' ) );
    $wp_customize->add_setting( 'problem_1_desc', array( 'default' => 'Sering terjadi selisih antara catatan admin dengan fisik barang di gudang (Stock Opname mimpi buruk).' ) );
    $wp_customize->add_control( 'problem_1_desc', array( 'label' => 'Problem 1 Desc', 'section' => 'konsulbisnis_sistemasi', 'type' => 'textarea' ) );

    // Problem 2
    $wp_customize->add_setting( 'problem_2_title', array( 'default' => 'Laporan Keuangan Telat' ) );
    $wp_customize->add_control( 'problem_2_title', array( 'label' => 'Problem 2 Title', 'section' => 'konsulbisnis_sistemasi', 'type' => 'text' ) );
    $wp_customize->add_setting( 'problem_2_desc', array( 'default' => 'Owner harus menunggu akhir bulan (atau bulan depan) hanya untuk tahu laba rugi bisnis.' ) );
    $wp_customize->add_control( 'problem_2_desc', array( 'label' => 'Problem 2 Desc', 'section' => 'konsulbisnis_sistemasi', 'type' => 'textarea' ) );

    // Problem 3
    $wp_customize->add_setting( 'problem_3_title', array( 'default' => 'Ketergantungan Pada Orang' ) );
    $wp_customize->add_control( 'problem_3_title', array( 'label' => 'Problem 3 Title', 'section' => 'konsulbisnis_sistemasi', 'type' => 'text' ) );
    $wp_customize->add_setting( 'problem_3_desc', array( 'default' => 'Jika staff kunci sakit atau resign, operasional berantakan karena tidak ada SOP yang tersistem.' ) );
    $wp_customize->add_control( 'problem_3_desc', array( 'label' => 'Problem 3 Desc', 'section' => 'konsulbisnis_sistemasi', 'type' => 'textarea' ) );

    // Services Section (Sistemasi Page)
    $wp_customize->add_setting( 'sistemasi_services_title', array( 'default' => 'Layanan IT Kami' ) );
    $wp_customize->add_control( 'sistemasi_services_title', array( 'label' => 'Services Section Title', 'section' => 'konsulbisnis_sistemasi', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'sistemasi_services_desc', array( 'default' => 'Kami tidak hanya menjual software, kami merancang arsitektur bisnis yang efisien. Bekerja sama dengan Zahir dan Accurate.' ) );
    $wp_customize->add_control( 'sistemasi_services_desc', array( 'label' => 'Services Section Desc', 'section' => 'konsulbisnis_sistemasi', 'type' => 'textarea' ) );

    // Projects Section (Sistemasi Page)
    $wp_customize->add_setting( 'sistemasi_projects_title', array( 'default' => 'Proyek IT Kami' ) );
    $wp_customize->add_control( 'sistemasi_projects_title', array( 'label' => 'Projects Section Title', 'section' => 'konsulbisnis_sistemasi', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'sistemasi_projects_desc', array( 'default' => 'Beberapa proyek IT yang telah kami kerjakan untuk klien dari berbagai instansi pemerintah, BUMN, dan perusahaan swasta.' ) );
    $wp_customize->add_control( 'sistemasi_projects_desc', array( 'label' => 'Projects Section Desc', 'section' => 'konsulbisnis_sistemasi', 'type' => 'textarea' ) );

}
add_action( 'customize_register', 'konsulbisnis_customize_register' );

// ==========================================
// Team Member Meta Box for Role & Credentials
// ==========================================
function konsulbisnis_team_meta_boxes() {
    add_meta_box(
        'team_details',
        __( 'Detail Anggota Tim', 'konsulbisnis' ),
        'konsulbisnis_team_meta_box_callback',
        'team',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'konsulbisnis_team_meta_boxes' );

function konsulbisnis_team_meta_box_callback( $post ) {
    wp_nonce_field( 'konsulbisnis_team_meta', 'konsulbisnis_team_meta_nonce' );
    
    $role = get_post_meta( $post->ID, 'team_role', true );
    $credentials = get_post_meta( $post->ID, 'team_credentials', true );
    ?>
    <table class="form-table">
        <tr>
            <th><label for="team_role"><?php _e( 'Jabatan / Posisi', 'konsulbisnis' ); ?></label></th>
            <td>
                <input type="text" id="team_role" name="team_role" value="<?php echo esc_attr( $role ); ?>" class="regular-text" placeholder="Contoh: CEO, Konsultan IT, Tax Specialist" />
                <p class="description"><?php _e( 'Jabatan atau posisi di perusahaan', 'konsulbisnis' ); ?></p>
            </td>
        </tr>
        <tr>
            <th><label for="team_credentials"><?php _e( 'Kredensial / Sertifikasi', 'konsulbisnis' ); ?></label></th>
            <td>
                <input type="text" id="team_credentials" name="team_credentials" value="<?php echo esc_attr( $credentials ); ?>" class="regular-text" placeholder="Contoh: CPA, BKP, Bersertifikat BNSP" />
                <p class="description"><?php _e( 'Sertifikasi profesional atau gelar yang relevan', 'konsulbisnis' ); ?></p>
            </td>
        </tr>
    </table>
    <?php
}

function konsulbisnis_save_team_meta( $post_id ) {
    // Check nonce
    if ( ! isset( $_POST['konsulbisnis_team_meta_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( $_POST['konsulbisnis_team_meta_nonce'], 'konsulbisnis_team_meta' ) ) {
        return;
    }
    // Check autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    // Check permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }
    
    // Save role
    if ( isset( $_POST['team_role'] ) ) {
        update_post_meta( $post_id, 'team_role', sanitize_text_field( $_POST['team_role'] ) );
    }
    // Save credentials
    if ( isset( $_POST['team_credentials'] ) ) {
        update_post_meta( $post_id, 'team_credentials', sanitize_text_field( $_POST['team_credentials'] ) );
    }
}
add_action( 'save_post_team', 'konsulbisnis_save_team_meta' );

// ==========================================
// Add Post Thumbnails Support
// ==========================================
function konsulbisnis_add_theme_support() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'konsulbisnis_add_theme_support' );

// ==========================================
// WhatsApp Number Setting in Customizer
// ==========================================
function konsulbisnis_whatsapp_customize( $wp_customize ) {
    $wp_customize->add_setting( 'whatsapp_number', array(
        'default' => '6281346242556',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'whatsapp_number', array(
        'label'    => __( 'Nomor WhatsApp (dengan kode negara)', 'konsulbisnis' ),
        'section'  => 'konsulbisnis_topbar',
        'type'     => 'text',
        'description' => 'Contoh: 6281346242556 (tanpa + atau spasi)',
    ) );
}
add_action( 'customize_register', 'konsulbisnis_whatsapp_customize' );
?>
