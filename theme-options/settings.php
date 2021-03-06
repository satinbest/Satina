<?php

add_action( 'cmb2_admin_init', 'satina_register_theme_options_metabox' );

function satina_register_theme_options_metabox() {

    $all_options = new_cmb2_box( array(
        'id'           => 'satina_option_metabox',
        'title'        => esc_html__( 'تنظیمات قالب ساتینا', 'satina' ),
        'object_types' => array( 'options-page' ),
        'option_key'      => 'satina_options', // The option key and admin menu page slug.
        'icon_url'        => 'dashicons-superhero',
         'menu_title'      => esc_html__( 'تنظیمات قالب', 'satina' ), // Falls back to 'title' (above).
        // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
        // 'capability'      => 'manage_options', // Cap required to view options-page.
        // 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     => esc_html__( 'Save Theme Options', 'satina' ), // The text for the options-page save button. Defaults to 'Save'.
    ) );
    //start general option
    $general = $all_options->add_field( array(
        'id'          => 'satina_general_options',
        'type'        => 'group',
         'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات عمومی', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => true,
             'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $all_options->add_group_field( $general, array(
        'name' => 'تصویر لگو',
        'id'   => 'satina_logo_option',
        'type' => 'file',
    ) );
    $all_options->add_group_field( $general, array(
        'name' => 'تصویر فایوآیکن',
        'id'   => 'satina_five_icon_option',
        'type' => 'file',
    ) );
    $all_options->add_group_field( $general, array(
        'name' => 'محدوده عرض محتوا',
        'id'   => 'satina_width_container_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پیشفرض 1366 پیکسل می باشد'
        )
    ) );
    $all_options->add_group_field( $general, array(
        'name' => 'رنگ اصلی سایت',
        'id'   => 'satina_color_main_option',
        'type'    => 'colorpicker',
        'default' => '#5caf21',
        'attributes' => array(
            'data-colorpicker' => json_encode(array(
                'palettes' => array('#5caf21','#ff834c','#4fa2c0','#0bc991')
            ))
        )
    ) );

    //start top menu option
    $topmenu = $all_options->add_field( array(
        'id'          => 'satina_topmenu_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات منوی بالا', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $all_options->add_group_field( $topmenu, array(
        'name' => 'منوی بالا',
        'id'   => 'satina_topmenu_active_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
    ) );
    $all_options->add_group_field( $topmenu, array(
        'name' => 'رنگ زمینه منوی بالا',
        'id'   => 'satina_color_topmenu_option',
        'type'    => 'colorpicker',
        'default' => '#34495e',
        'attributes' => array(
            'data-colorpicker' => json_encode(array(
                'palettes' => array('#34495e','#ff834c','#4fa2c0','#0bc991')
            )),
            'data-conditional-id'     => 'satina_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        )
    ) );
    $all_options->add_group_field(  $topmenu, array(
        'name' => 'شماره تلفن',
        'id'   => 'satina_tel_topmenu_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'مشاوره و پشتیبانی واتس اپ: 09xxxxxxxxx ',
            'data-conditional-id'     => 'satina_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        )
    ) );
    $all_options->add_group_field(  $topmenu, array(
        'name' => 'آدرس ایمیل',
        'id'   => 'satina_email_topmenu_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'آدرس ایمیل: 2ksky92@gmail.com ',
            'data-conditional-id'     => 'satina_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        )
    ) );
    $all_options->add_group_field(  $topmenu, array(
        'name' => 'نمایش/مخفی جستجو',
        'id'   => 'satina_search_topmenu_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
        'attributes' => array(
            'data-conditional-id'     => 'satina_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        )
    ) );
    $all_options->add_group_field(  $topmenu, array(
        'name' => 'نمایش/مخفی سبدخرید',
        'id'   => 'satina_cart_topmenu_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
        'attributes' => array(
            'data-conditional-id'     => 'satina_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        )
    ) );
    //start header option
    $header = $all_options->add_field( array(
        'id'          => 'satina_header_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات هدر', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $all_options->add_group_field(  $header, array(
        'name' => 'انتخاب سربرگ',
        'id'   => 'satina_header_select_option',
        'type'             => 'select',
        'show_option_none' => false,
        'default'          => 'header_one',
        'options'          => array(
            'header_one' => __( 'سربرگ یک', 'cmb2' ),
            'header_two'   => __( 'سربرگ دو', 'cmb2' ),
        ),
    ) );
    $all_options->add_group_field(  $header, array(
        'name' => 'نمایش/مخفی دکه سربرگ',
        'id'   => 'satina_header_button_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'نمایش', 'cmb2' ),
            'disable'   => __( 'مخفی', 'cmb2' ),
        ),
        'default' => 'enable',
    ) );
    $all_options->add_group_field(  $header, array(
        'name' => 'متن دکمه سربرگ',
        'id'   => 'satina_text_button_header_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پیش فرض به صورت: ورود/ثبت نام می باشد ',
            'data-conditional-id'     => 'satina_header_button_option',
            'data-conditional-value'  => 'enable',
        )
    ) );
    $all_options->add_group_field(  $header, array(
        'name' => 'لینک دکمه سربرگ',
        'id'   => 'satina_link_button_header_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'به طور مثال :https://example.com/page',
            'data-conditional-id'     => 'satina_header_button_option',
            'data-conditional-value'  => 'enable',
        )
    ) );
    //start typographi
    $typography = $all_options->add_field( array(
        'id'          => 'satina_typography_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات تایپوگرافی', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $all_options->add_group_field($typography, array(
        'name' => 'نونت بدنه سایت',
        'id'   => 'satina_font_body_option',
        'type'             => 'select',
        'show_option_none' => false,
        'default'          => 'header_one',
        'options'          => array(
            'Vazir' => __( 'وزیر', 'cmb2' ),
            'shabnam'   => __( 'شبنم', 'cmb2' ),
        ),
    ) );
    $all_options->add_group_field( $typography, array(
        'name' => 'اندازه متن',
        'id'   => 'satina_size_font_option',
        'type' => 'text',
        'description' => 'پیشفرض بر روی عدد 14 تعریف شده است. ',
        'attributes' => array(
            'placeholder' => 'مثلا: 15',
        )
    ) );
    $all_options->add_group_field($typography, array(
        'name' => 'تراز متن',
        'id'   => 'satina_text_align_option',
        'type'             => 'select',
        'description' => 'پیشفرض بر روی راست تعریف شده است.',
        'show_option_none' => false,
        'default'          => 'header_one',
        'options'          => array(
            'right' => __( 'متن از راست', 'cmb2' ),
            'left'   => __( 'متن از چپ', 'cmb2' ),
            'center'   => __( 'متن از وسط', 'cmb2' ),
            'justify'   => __( 'متن justify', 'cmb2' ),
        ),
    ) );
    $all_options->add_group_field($typography, array(
        'name' => 'رنگ متن بدنه',
        'id'   => 'satina_color_body_option',
        'type'    => 'colorpicker',
        'default' => '#303030',
        'attributes' => array(
            'data-colorpicker' => json_encode(array(
                'palettes' => array('#303030','#ff834c','#4fa2c0','#0bc991')
            )),
        )
    ) );
    $blog = $all_options->add_field( array(
        'id'          => 'satina_blog_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات بلاگ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $all_options->add_group_field($blog, array(
        'name' => 'موقعیت سایدبار',
        'id'   => 'satina_sidebar_option',
        'type'    => 'image_select',
        'default'          => 'side-left',
        'options'          => array(
            'side-left' => array('title' => 'سایدبار چپ', 'img' => get_template_directory_uri().'/img/left-side.png',),
            'side-right' => array('title' => 'سایدبار راست', 'img' => get_template_directory_uri().'/img/right-side.png',),
            'full-width' => array('title' => 'بدون سایدبار', 'img' => get_template_directory_uri().'/img/full-width.png',),
        ),
    ) );
    $all_options->add_group_field($blog, array(
        'name' => 'نمایش/مخفی مطالب مرتبط',
        'id'   => 'satina_relate_post_option',
        'type'	           => 'switch',
        'active_value'     => true,
        'inactive_value'   => false
    ) );
    $footer_tools = $all_options->add_field( array(
        'id'          => 'satina_footer_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات فوتر', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
        ),
    ) );
    $all_options->add_group_field($footer_tools, array(
        'name' => 'رنگ زمینه فوتر',
        'id'   => 'satina_footer_background_option',
        'type'    => 'colorpicker',
        'default' => '#F5F6FA',
        'attributes' => array(
            'data-colorpicker' => json_encode(array(
                'palettes' => array('#F5F6FA','#ff834c','#4fa2c0','#0bc991')
            )),
        )
    ) );
    $all_options->add_group_field($footer_tools, array(
        'name' => 'رنگ متن فوتر',
        'id'   => 'satina_footer_text_color_option',
        'type'    => 'colorpicker',
        'default' => '#4a4a4a',
        'attributes' => array(
            'data-colorpicker' => json_encode(array(
                'palettes' => array('#4a4a4a','#ff834c','#4fa2c0','#0bc991')
            )),
        )
    ) );
    $all_options->add_group_field($footer_tools, array(
        'name' => 'رنگ زمینه کپی رایت',
        'id'   => 'satina_footer_copyright_background_option',
        'type'    => 'colorpicker',
        'default' => '#163a5c',
        'attributes' => array(
            'data-colorpicker' => json_encode(array(
                'palettes' => array('#163a5c','#ff834c','#4fa2c0','#0bc991')
            )),
        )
    ) );
    $all_options->add_group_field($footer_tools, array(
        'name' => 'رنگ متن کپی رایت',
        'id'   => 'satina_footer_copyright_text_color_option',
        'type'    => 'colorpicker',
        'default' => '#e8e8e8',
        'attributes' => array(
            'data-colorpicker' => json_encode(array(
                'palettes' => array('#e8e8e8','#ff834c','#4fa2c0','#0bc991')
            )),
        )
    ) );
    $all_options->add_group_field($footer_tools, array(
        'name' => 'متن کپی رایت',
        'id'   => 'satina_message_copyright_option',
        'type' => 'text',
        'description' => 'به طور مثال :حقوق تمامی محتواهای موجود در این وب سایت محفوظ می باشد.',
        'attributes' => array(
            'placeholder' => ' متن کپی رایت مدنظر خود را وارد نمایید',
        )
    ) );
}




function satina_get_option( $key = '', $default = false ) {
    if ( function_exists( 'cmb2_get_option' ) ) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option( 'satina_options', $key, $default );
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option( 'satina_options', $default );

    $val = $default;

    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }

    return $val;
}