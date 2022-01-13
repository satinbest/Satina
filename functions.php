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