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
    //support theme from woocommerce
    add_theme_support('woocommerce');
    //set size thumbnail for slider article
    add_image_size('article',313,181,true);
    //add size for first post tv
    add_image_size('tv_large',820,548,true);
    //add sise 4 post tv
    add_image_size('tv_small',265,165,true);
    //image slider for product
    add_image_size('product',400,190,true);
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

//remove relate post in page products
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


require_once 'admin/content-tab-lesson.php' ;
require_once 'admin/content-tab-about-teacher.php' ;
require_once 'inc/widgets.php';
require_once 'inc/tv-posttype.php';
require_once 'inc/video-tv.php';
require_once 'inc/video-product.php';
require_once 'inc/teacher-product.php';
require_once 'inc/lesson.php';
require_once 'inc/remove-field-checkout.php';
require_once 'theme-options/settings.php';

//add رایگان
function satina_price_zero( $price, $product ){

    if ( '0' === $product->get_price()  ) {
        $price = '!رایگان';
    }
    return $price;
}
add_filter( 'woocommerce_get_price_html', 'satina_price_zero', 100, 2 );

//show old widget panel
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );