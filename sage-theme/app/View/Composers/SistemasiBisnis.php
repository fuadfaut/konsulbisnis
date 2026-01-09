<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class SistemasiBisnis extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'page-sistemasi-bisnis',
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
            'leader' => $this->leader(),
            'it_services' => $this->it_services(),
            'projects' => $this->projects(),
        ];
    }

    public function hero()
    {
        return [
            'title' => get_the_title(),
            'content' => apply_filters('the_content', get_the_content()),
        ];
    }

    public function leader()
    {
        $query = new WP_Query([
            'post_type' => 'team',
            'posts_per_page' => 1,
        ]);

        if ($query->have_posts()) {
            $post = $query->posts[0];
            return (object) [
                'name' => $post->post_title,
                'role' => get_post_meta($post->ID, 'role', true) ?: 'Partner IT',
            ];
        }
        return null;
    }

    public function it_services()
    {
        $query = new WP_Query([
            'post_type' => 'service',
            'posts_per_page' => 3,
            // 'category_name' => 'it', // Optional filtering
        ]);

        return array_map(function ($post) {
            return (object) [
                'title' => $post->post_title,
                'excerpt' => get_the_excerpt($post),
            ];
        }, $query->posts);
    }

    public function projects()
    {
        $query = new WP_Query([
            'post_type' => 'client',
            'posts_per_page' => 6,
        ]);

        return array_map(function ($post) {
            return (object) [
                'title' => $post->post_title,
                'content' => apply_filters('the_content', $post->post_content),
                'thumbnail' => get_the_post_thumbnail($post, 'thumbnail', ['class' => 'w-full h-full object-cover']),
                'has_thumbnail' => has_post_thumbnail($post),
                'category' => 'Klien Kami', // Or get_post_meta($post->ID, 'category', true),
            ];
        }, $query->posts);
    }
}
