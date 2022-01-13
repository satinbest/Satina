<?php
//add css and js file
function add_theme_scripts() {
//add css files
    wp_enqueue_style('all', get_template_directory_uri().'/assets/css/all.css',array(),false, 'all');
    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css',array(),false, 'all');
    wp_enqueue_style('owl.carousel.default', get_template_directory_uri().'/assets/css/owl.theme.default.css',array(),false, 'all');
    wp_enqueue_style('style', get_stylesheet_uri(),array(),false, 'all');
//add js files
    wp_enqueue_script('jq',get_template_directory_uri().'/assets/js/jquery.min.js',array(),false,true);
    wp_enqueue_script('owl.carousel',get_template_directory_uri().'/assets/js/owl.carousel.js',array('jquery'),false,true);
    wp_enqueue_script('main',get_template_directory_uri().'/assets/js/main.js',array('jquery'),false,true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
//add theme support title & feeds & menu
function satina_setup_theme(){
    //add theme support title
    add_theme_support('title-tag');
    //add theme support feeds
    add_theme_support('automatic-feed-links');
    //support thumbnails in theme
    add_theme_support('post-thumbnails');
    //set size thumbnail for slider article
    add_image_size('article',313,181,true);
    //add theme support menu
    register_nav_menus(
        array(
            'main-menu' => __( 'جایگاه فهرست اصلی' ),
            'top-menu' => __( 'جایگاه فهرست بالای سایت' )
        )
    );
}
add_action('after_setup_theme','satina_setup_theme');
//control show word in slider article
function custom_excerpt_length(){
    return 20;
}
add_filter('excerpt_length','custom_excerpt_length',999);

