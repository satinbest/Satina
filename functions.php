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


//Add tab teacher
add_filter( 'woocommerce_product_tabs', 'woocommerce_product_teacher' );
function woocommerce_product_teacher( $tabs ) {

    $tabs['course_teacher'] = array(
        'title' 	=> __( 'مدرس', 'woocommerce' ),
        'priority' 	=> 10,
        'callback' 	=> 'woocommerce_product_teacher_content'
    );

    return $tabs;

}
function woocommerce_product_teacher_content() {
    $teacher_name = get_post_meta(get_the_ID(),'satina_course_teacher_name',true);
    if (!empty($teacher_name)){
        ?>
        <div class="course-teacher">
            <?php
            $teacher_pic = get_post_meta(get_the_ID(), 'satina_course_teacher_pic', true);
            if (!empty($teacher_pic)){
                ?>
                <div class="teacher-pic">
                    <img src="<?php echo $teacher_pic; ?>" alt="Teacher Pic">
                </div>
                <?php
            }
            ?>
            <div class="teacher-about">
                <h5><?php echo $teacher_name; ?></h5>
                <?php $teacher_about = get_post_meta(get_the_ID(),'satina_course_teacher_about',true);
                if (!empty($teacher_about)){
                    echo $teacher_about;
                }
                ?>
            </div>
        </div>
    <?php
    }
}

//add tab course list
add_filter( 'woocommerce_product_tabs', 'woocommerce_product_course_list' );
function woocommerce_product_course_list( $tabs ) {

    $tabs['lesson_list'] = array(
        'title' 	=> __( 'فهرست جلسات', 'woocommerce' ),
        'priority' 	=> 20,
        'callback' 	=> 'woocommerce_product_lesson_list_content'
    );

    return $tabs;
}
function woocommerce_product_lesson_list_content(){
?>
    <div class="lesson-course">
        <ul>

            <li>
                <h4>فصل اول - آموزش مقدماتی وردپرس
                <i class="fas fa-angle-down"></i>
                </h4>
                <ul>
                    <div class="meta-course">
                        <div class="time-course">
                            <i class="fas fa-clock"></i>
                            <span>مدت زمان فصل :</span>
                            <span>2 ساعت و 40 دقیقه</span>
                        </div>
                        <div class="dl-course">
                            <a href="#" target="_blank">
                                <i class="fas fa-download"></i>
                                لینک دانلود فصل
                            </a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <li>
                        <i class="fas fa-check"></i>
                        جلسه اول - آموزش اچ تی ام اس
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        جلسه اول - آموزش اچ تی ام اس
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        جلسه اول - آموزش اچ تی ام اس
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        جلسه اول - آموزش اچ تی ام اس
                    </li>
                </ul>
            </li>

            <li>
                <h4>فصل دوم - آموزش پیشرفته وردپرس
                <i class="fas fa-angle-down"></i>
                </h4>
                <ul>
                    <div class="meta-course">
                        <div class="time-course">
                            <i class="fas fa-clock"></i>
                            <span>مدت زمان فصل :</span>
                            <span>3 ساعت و 40 دقیقه</span>
                        </div>
                        <div class="dl-course">
                            <a href="#" target="_blank">
                                <i class="fas fa-download"></i>
                                لینک دانلود فصل
                            </a>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <li>
                        <i class="fas fa-check"></i>
                        جلسه اول - آموزش اچ تی ام اس
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        جلسه اول - آموزش اچ تی ام اس
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        جلسه اول - آموزش اچ تی ام اس
                    </li>
                    <li>
                        <i class="fas fa-check"></i>
                        جلسه اول - آموزش اچ تی ام اس
                    </li>
                </ul>
            </li>

        </ul>
    </div>
<?php
}

require_once 'inc/widgets.php';
require_once 'inc/tv-posttype.php';
require_once 'inc/video-tv.php';
require_once 'inc/video-product.php';
require_once 'inc/teacher-product.php';
require_once 'inc/lesson.php';

//show old widget panel
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );