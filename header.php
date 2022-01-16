<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <?php $general = satina_get_option('satina_general_options'); ?>
    <link rel="icon" type="image/png" href="<?php echo $general[0]['satina_five_icon_option']; ?>">
    <style>
        <?php
        $container = $general[0]['satina_width_container_option'];
        $maincolor = $general[0]['satina_color_main_option'];
        if (isset($container)){
            ?>
            .container{
                width: <?php echo $container."px !important" ?>;
            }
        <?php
        }
        if (isset($maincolor)){ ?>
        .main-menu ul li ul li a:hover{
            background: <?php echo $maincolor; ?> ;
        }
        .sign a{
            background: <?php echo $maincolor; ?> ;
        }
        .tv .tv-head .tv-link a{
            color: <?php echo $maincolor; ?> ;
            border-color: <?php echo $maincolor; ?> ;
        }
        .tv .tv-head .tv-link a:hover{
            background: <?php echo $maincolor; ?>;
        }
        .more-tv a{
            background: <?php echo $maincolor; ?> ;
        }
        .road h3{
            border-color: <?php echo $maincolor; ?> ;
        }
        .road .road-content .box-road .road-more a{
            background: <?php echo $maincolor; ?> ;
        }
        .article .article-head .article-link a{
            color: <?php echo $maincolor; ?> ;
            border-color: <?php echo $maincolor; ?> ;
        }
        .article .article-head .article-link a:hover{
            background: <?php echo $maincolor; ?> ;
        }
        .box-article .btn-more a:hover{
            background: <?php echo $maincolor; ?> ;
        }
        .article-slider .owl-theme .owl-dots .owl-dot.active span,
        .owl-theme .owl-dots .owl-dot:hover span{
            background: <?php echo $maincolor; ?> ;
        }
        .course .course-head .course-link a{
            color: <?php echo $maincolor; ?> ;
            border-color: <?php echo $maincolor; ?> ;
        }
        .course .course-head .course-link a:hover{
            background: <?php echo $maincolor; ?> ;
        }
        .box-course:hover .btn-more a{
            background: <?php echo $maincolor; ?> ;
        }
        .aboute h3, .f-menu h3 {
            border-color: <?php echo $maincolor; ?> ;
        }
        .f-menu ul li a:hover{
            color: <?php echo $maincolor; ?> ;
        }
        .single-widget .wp-block-search .wp-block-search__button{
            background-color: <?php echo $maincolor; ?> ;
        }
        .single-widget h4{
            border-color: <?php echo $maincolor; ?> ;
        }
        .single-widget li a:hover{
            color: <?php echo $maincolor; ?> ;
        }
        .pageination a:hover{
            background: <?php echo $maincolor; ?> ;
        }
        .pageination span.current{
            background: <?php echo $maincolor; ?> ;
        }
        .comment-respond input[type="submit"]{
            background-color: <?php echo $maincolor; ?> ;
        }
        .comments-inner .comment .reply a:hover{
            background: <?php echo $maincolor; ?> ;
        }
        .wmt-smart-tabs ul.wmt-col-3 li.selected{
            border-color: <?php echo $maincolor; ?> ;
        }
        .wmt-pagination a.next-visible:hover, .wmt-pagination a.previous-visible:hover{
            background: <?php echo $maincolor; ?> ;
        }
        .searchbox button:hover{
            color: <?php echo $maincolor; ?> ;
        }
        .product-title header h1{
            color: <?php echo $maincolor; ?> ;
        }
        .woocommerce div.product .woocommerce-tabs ul.tabs li.active{
            border-color: <?php echo $maincolor; ?> ;
        }
        .woocommerce div.product .woocommerce-tabs ul.tabs::before{
            border-color: <?php echo $maincolor; ?> ;
        }
        .related-product h4{
            border-color: <?php echo $maincolor; ?> ;
        }
        .price-bytton{
            background: <?php echo $maincolor; ?> ;
        }
        .price-bytton:hover{
            box-shadow:0 0 7px <?php echo $maincolor; ?> ;
        }
        .list-access-dl a{
            background: <?php echo $maincolor; ?> ;
        }
        .catname-pro a:hover{
            color: <?php echo $maincolor; ?> ;
        }
        .woocommerce-message{
            border-color: <?php echo $maincolor; ?> ;
        }
        .woocommerce-message::before{
            color: <?php echo $maincolor; ?> ;
        }
        .woocommerce-error .button, .woocommerce-info .button, .woocommerce-message .button{
            background: <?php echo $maincolor; ?> ;
        }
        .woocommerce a.button.alt{
            background: <?php echo $maincolor; ?> !important;
        }
        .woocommerce button{
            background: <?php echo $maincolor; ?> !important;
        }
        .price_slider_amount .button{
            background: <?php echo $maincolor; ?> ;
        }
        .ui-slider .ui-slider-handle{
            background: <?php echo $maincolor; ?> ;
        }
        .box-course .detail .price ins{
            background: <?php echo $maincolor; ?> ;
        }
        <?php
        }

        ?>

    </style>
</head>
<body>
<!-- top menu -->
<div class="top-menu">
    <div class="container">
        <div class="topbar-right">
            <ul>
                <li>
                    <i class="fas fa-phone"></i>پشتیبانی و مشاوره در واتس اپ :
                    09386045643
                </li>
                <li><i class="fas fa-envelope"></i>ایمیل : info@phpgeek.ir</li>
            </ul>
        </div>
        <div class="topbar-left">
            <ul>
                <li class="search-icon"><i class="fas fa-search"></i></li>
                <li><i class="fas fa-shopping-bag"></i></li>
                <?php  wp_nav_menu( array( 'theme_location' => 'top-menu','container'=>'' ) ); ?>
            </ul>
        </div>
    </div>
</div>
<!-- start header -->
<header class="header">
    <div class="container relative">
        <div class="logo">
            <?php
            $logo = $general[0]['satina_logo_option'];
            if (isset($logo)){ ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo $logo?>" alt="logo website" /></a>
            <?php
            }else{ ?>
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/img/logo.png'?>" alt="logo website" /></a>
            <?php
            }
            ?>
        </div>
        <!-- nav menu -->
        <nav class="main-menu">
            <?php  wp_nav_menu( array( 'theme_location' => 'main-menu','container'=>'' ) ); ?>
        </nav>
        <!-- header button -->
        <div class="sign">
            <a href="#"><i class="fas fa-user-lock"></i>ورود / ثبت نام</a>
        </div>
        <div class="searchbox">
            <form action="<?php home_url(); ?>" method="get">
                <input type="text" name="s" id="" placeholder="جستجو کنید..." value="<?php the_search_query(); ?>">
                <button class="fas fa-search"></button>
            </form>
        </div>
    </div>
</header>