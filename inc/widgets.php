<?php
/**
 * Add a sidebar.
 */
function satina_widget() {
    register_sidebar( array(
        'name'          => __( 'ناحیه کناری بلاگ' ),
        'id'            => 'satina_blog',
        'description'   => __( 'ویجت های این ناحیه در تمام پست ها و صفحات نمایش داده می شوند.' ),
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'ناحیه کناری آرشیو محصولات' ),
        'id'            => 'satina_product',
        'description'   => __( 'ویجت های این ناحیه در تمام پست ها و صفحات نمایش داده می شوند.' ),
        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'فوتر یک' ),
        'id'            => 'satina_footer_one',
        'description'   => __( 'ویجت های این ناحیه در تمام پست ها و صفحات نمایش داده می شوند.' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'فوتر دو' ),
        'id'            => 'satina_footer_two',
        'description'   => __( 'ویجت های این ناحیه در تمام پست ها و صفحات نمایش داده می شوند.' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'فوتر سه' ),
        'id'            => 'satina_footer_three',
        'description'   => __( 'ویجت های این ناحیه در تمام پست ها و صفحات نمایش داده می شوند.' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'satina_widget' );