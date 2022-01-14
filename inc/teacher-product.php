<?php
add_action( 'cmb2_admin_init', 'cmb2_satina_metabox_product_teacher' );

function cmb2_satina_metabox_product_teacher() {
    $teacher_pro = new_cmb2_box( array(
        'id'            => 'satina_product_metabox_teacher',
        'title'         => __( 'ویدیو معرفی دوره', 'cmb2' ),
        'object_types'  => array( 'product', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ) );

    $teacher_pro->add_field( array(
        'name'    => 'تصویر مدرس',
        'id'      => 'satina_course_teacher_pic',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود تصویر' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );
    $teacher_pro->add_field( array(
        'name'    => 'نام و نام خانوادگی',
        'desc'    => 'نام و نام خانوادگی مدرس را وارد نمایید',
        'id'      => 'satina_course_teacher_name',
        'type'    => 'text',
    ) );
    $teacher_pro->add_field( array(
        'name'    => 'رزومه مدرس',
        'desc'    => 'دراین قسمت رزومه مدرس مدنظر خود را وارد نمایید',
        'id'      => 'satina_course_teacher_about',
        'type'    => 'textarea',
    ) );
}