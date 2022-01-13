<?php
add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );

function cmb2_sample_metaboxes() {
    $video = new_cmb2_box( array(
        'id'            => 'test_metabox',
        'title'         => __( 'آپلود ویدیو', 'cmb2' ),
        'object_types'  => array( 'tv', ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ) );

    $video->add_field( array(
        'name'    => 'آپلود ویدیو',
        'desc'    => 'محتوای ویدیویی خود را آپلود نمایید',
        'id'      => 'satina_video_tv',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود فایل' // Change upload button text. Default: "Add or Upload File"
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );

    $time = new_cmb2_box( array(
        'id'            => 'satina_video_tv_time_metabox',
        'title'         => __( 'تایم ویدیو', 'cmb2' ),
        'object_types'  => array( 'tv', ), // Post type
        'context'       => 'side',
        'priority'      => 'high',
        'show_names'    => true,
    ) );

    $time->add_field( array(
        'desc'    => 'تایم ویدیو را وارد نمایید (12:15)',
        'id'      => 'satina_video_tv_time',
        'type'    => 'text',
    ) );
}