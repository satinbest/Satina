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