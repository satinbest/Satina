<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head(); ?>

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
            <img src="<?php echo get_template_directory_uri().'/img/logo.png'?>" alt="logo website" />
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