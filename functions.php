<?php

function load_scripts()
{
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js', array(), '5.0.0', true);
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css', array(), '5.0.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'load_scripts');

function wp_config()
{
    register_nav_menus(
        array(
            'my_main_menu' => 'Main Menu',
            'my_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );

    add_theme_support('custom-header',  $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image'));
}

add_action('after_setup_theme', 'wp_config', 0);

function wp_sidebars()
{
    register_sidebar(array(
        'name' => 'Home Page Sidebar',
        'id' => 'sidebar-home-page',
        'description' => 'Sidebar to be used on Home Page',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Blog Page Sidebar',
        'id' => 'sidebar-blog-page',
        'description' => 'Sidebar to be used on Blog Page',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Service 1',
        'id' => 'sidebar-service-1',
        'description' => 'First Services Area.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Service 2',
        'id' => 'sidebar-service-2',
        'description' => 'Second Services Area.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Service 3',
        'id' => 'sidebar-service-3',
        'description' => 'Third Services Area.',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}

add_action('widgets_init', 'wp_sidebars');
