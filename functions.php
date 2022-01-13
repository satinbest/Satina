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

//start post type tv
function post_type_satina_tv() {
    $labels = array(
        'name'               => __( 'ویدیو ها' ),
        'singular_name'      => __( 'ویدیو' ),
        'menu_name'          => __( 'محتوای ویدیویی' ),
        'name_admin_bar'     => __( 'محتوای ویدیویی' ),
        'add_new'            => __( ' افزودن جدید' ),
        'add_new_item'       => __( 'پست مخصوص ویدیوهای آموزشی' ),
        'new_item'           => __( 'پست جدید' ),
        'edit_item'          => __( 'ویرایش پست' ),
        'view_item'          => __( 'مشاهده پست' ),
        'all_items'          => __( 'همه ویدیوها' ),
        'search_items'       => __( 'جستجو در بین ویدیوها' ),
        'parent_item_colon'  => __( 'مادر' ),
        'not_found'          => __( 'مطلب یافت نشد' ),
        'not_found_in_trash' => __( 'مطلب در زباله دان یافت نشد' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'menu_icon'             => 'dashicons-video-alt3',
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'taxonomies' => array('post_tag'),
        //'taxonomies' => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'tv', $args );
}
add_action( 'init', 'post_type_satina_tv' );

//start taxonomy
function satina_tv_tax() {
    $labels = array(
        'name'              => _x( 'دسته بندی', 'دسته بندی' ),
        'singular_name'     => _x( 'دسته بندی پست ها ', 'دسته بندی' ),
        'search_items'      => __( 'جستجویه دسته' ),
        'all_items'         => __( 'تمام دسته ها' ),
        'parent_item'       => __( 'زیر دسته' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'ویرایش دسته' ),
        'update_item'       => __( 'بروزرسانی دسته' ),
        'add_new_item'      => __( 'افزودن دسته جدید' ),
        'new_item_name'     => __( 'نام جدید دسته' ),
        'menu_name'         => __( 'دسته بندی' ),
    );

    $ar = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );

    register_taxonomy( 'cat_satina_tv', 'tv' , $ar );
}
add_action( 'init', 'satina_tv_tax');
