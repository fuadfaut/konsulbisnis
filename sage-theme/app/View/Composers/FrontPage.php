<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'hero' => $this->hero(),
            'services' => $this->services(),
            'team' => $this->team(),
        ];
    }

    public function hero()
    {
        return [
            'tagline' => get_theme_mod('hero_tagline', 'KOLABORASI UNTUK BERTUMBUH'),
            'title' => get_theme_mod('hero_title', 'Solusi Bisnis'),
            'highlight' => get_theme_mod('hero_highlight', 'Terintegrasi'),
            'desc' => nl2br(esc_html(get_theme_mod('hero_desc', 'PT Kami Bantu Konsultan bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT. Kami membantu pelaku usaha dalam menerapkan prinsip pengelolaan bisnis yang sesuai standar.'))),
            'image' => get_theme_mod('hero_image'),
        ];
    }

    public function services()
    {
        $query = new WP_Query([
            'post_type' => 'service',
            'posts_per_page' => 10,
            'order' => 'ASC',
        ]);

        return array_map(function ($post) {
            return (object) [
                'title' => $post->post_title,
                'excerpt' => get_the_excerpt($post),
                'content' => apply_filters('the_content', $post->post_content),
                'link' => get_permalink($post),
                'is_special' => (strpos($post->post_title, 'IT') !== false || strpos($post->post_title, 'Sistem') !== false),
                'whatsapp_url' => 'https://wa.me/6281346242556?text=Halo%20saya%20tertarik%20dengan%20' . urlencode($post->post_title),
            ];
        }, $query->posts);
    }

    public function team()
    {
        $query = new WP_Query([
            'post_type' => 'team',
            'posts_per_page' => 10,
        ]);

        return array_map(function ($post) {
            return (object) [
                'name' => $post->post_title,
                'role' => get_post_meta($post->ID, 'role', true) ?: 'Tim',
                'description' => apply_filters('the_content', $post->post_content),
                'thumbnail' => get_the_post_thumbnail($post, 'thumbnail', ['class' => 'w-full h-full object-cover']),
                'initial' => substr($post->post_title, 0, 1),
                'has_thumbnail' => has_post_thumbnail($post),
            ];
        }, $query->posts);
    }
}
