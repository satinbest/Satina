<?php
add_action( 'cmb2_admin_init', 'cmb2_satina_metabox_product_lesson' );

function cmb2_satina_metabox_product_lesson() {
    $lesson_pro = new_cmb2_box( array(
        'id'            => 'satina_product_metabox_lesson',
        'title'         => __( 'فهرست جلسات دوره', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ) );
    $group_course = $lesson_pro->add_field( array(
        'id'          => 'satina_group_lesson',
        'type'        => 'group',
        'options'     => array(
            'group_title'       => __( 'سرفصل', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'افزودن سرفصل جدید', 'cmb2' ),
            'remove_button'     => __( 'حذف سرفصل', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'مطمئنی میخوای حذف کنی؟', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $lesson_pro->add_group_field( $group_course, array(
        'name' => 'عنوان سرفصل',
        'id'   => 'satina_course_chapter_title',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'فصل اول : معرفی قالب ساتینا'
        )
    ) );
    $lesson_pro->add_group_field( $group_course, array(
        'name' => 'لینک دانلود کل فصل',
        'id'   => 'satina_course_chapter_link',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'https://dl.example.com/file.zip'
        )
    ) );
    $lesson_pro->add_group_field( $group_course, array(
        'name' => 'مدت زمان فصل',
        'id'   => 'satina_course_chapter_time',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => '2 ساعت و 40 دقیقه'
        )
    ) );
    $lesson_pro->add_group_field( $group_course, array(
        'name' => 'عنوان درس را وارد کنید',
        'id'   => 'satina_course_chapter_lesson',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'درس اول'
        ),
        'repeatable' => true
    ) );
}