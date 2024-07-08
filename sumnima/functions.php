<?php
// Adding styleSheet and javascript
function add_styles_and_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}
add_action('wp_enqueue_scripts', 'add_styles_and_scripts');

// Adding theme support
function gt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
}
add_action('after_setup_theme', 'gt_init');

//adding testimonials section
function custom_testaminal(){
    register_post_type('testimonial', array(
        'rewrite'=> array('slug'=> 'testimonials'),
        'labels'=> array(
            'name'=> 'testimonials',
            'singular_name'=> 'testimonial',
            'add_new_item'=> 'Add New testimonial',
            'edit_item'=> 'Edit testimonial'
        ),
        'menu_icon'=> 'dashicons-testimonial',
        'public'=> true,
        'has_archive'=> true,
        'supports'=> array('title', 'thumbnail', 'editor', 'excerpt', 'comments')
    ));
}
add_action('init', 'custom_testaminal');

function custom_video_post_type() {
    register_post_type('video', array(
        'rewrite' => array('slug' => 'videos'),
        'labels' => array(
            'name' => 'Videos',
            'singular_name' => 'Video',
            'add_new_item' => 'Add New Video',
            'edit_item' => 'Edit Video'
        ),
        'menu_icon' => 'dashicons-video-alt3',
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'thumbnail'),
    ));
}
add_action('init', 'custom_video_post_type');



