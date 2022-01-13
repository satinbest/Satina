<?php get_header(); ?>
<!-- start slider -->
<section class="box-slider">
    <div class="owl-carousel owl-theme" id="main_slider">
        <div class="item"><img src="<?php echo get_template_directory_uri() . '/img/03.png' ?>" alt="slide 1"/></div>
        <div class="item"><img src="<?php echo get_template_directory_uri() . '/img/03.png' ?>" alt="slide 1"/></div>
        <div class="item"><img src="<?php echo get_template_directory_uri() . '/img/03.png' ?>" alt="slide 1"/></div>
    </div>
</section>

<!--start box tv-->

<?php include_once 'inc/template/tv.php'?>

<!--start box icons-->

<div class="road">
    <div class="container">
        <h3><i class="fas fa-coffee"></i> چی میخوای یادبگیری؟</h3>

        <div class="road-content">
            <div class="box-road">
                <i class="fab fa-wordpress"></i>
                <h4><a href="#" target="_blank"> وردپرس از پایه </a></h4>
                <p>
                    اگر هیچ شناختی از وردپرس ندارید از اینجا شروع کنید بیش از 20 جلسه
                    آموزش وردپرس رایگان
                </p>
                <div class="road-more">
                    <a href="#" rel="nofollow" target="_blank">ادامه...</a>
                </div>
            </div>

            <div class="box-road">
                <i class="far fa-object-group"></i>
                <h4><a href="#" target="_blank">طراحی سایت بدون کدنویسی</a></h4>
                <p>
                    صفرتاصد طراحی سایت بدون کدنویسی را بصورت پروژه محور در قالب طراحی
                    سایت دیجی کالا به شما آموزش میدهیم
                </p>
                <div class="road-more">
                    <a href="#" rel="nofollow" target="_blank">ادامه...</a>
                </div>
            </div>

            <div class="box-road">
                <i class="fas fa-laptop-code"></i>
                <h4><a target="_blank" href="#">برنامه نویسی وردپرس</a></h4>
                <p>
                    میخوای یادبگیری خودت یه قالب مثل و وودمارت و... از صفر طراحی کنی؟
                    (دوره تخصصی طراحی قالب وردپرس)
                </p>
                <div class="road-more">
                    <a target="_blank" rel="nofollow" href="#">ادامه...</a>
                </div>
            </div>

            <div class="box-road">
                <a href="#" target="_blank"><i class="fas fa-code"></i></a>
                <h4><a href="#" target="_blank"> آموزش HTML و CSS</a></h4>
                <p>
                    اولین قدم برای ورود به دنیای برنامه نویسی و طراحی سایت یادگیری
                    HTML , CSS است در وبسافت3 رایگان یادبگیرید
                </p>
                <div class="road-more">
                    <a href="#" rel="nofollow" target="_blank">ادامه...</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- add a line -->
<div class="line"></div>

<!-- start article -->

<section class="article">
    <div class="container">
        <div class="article-head">
            <div class="article-title">
                <h2>مقالات</h2>
                <h5>بلاگ</h5>
            </div>
            <div class="article-link">
                <a href="#">مقالات بیشتر</a>
            </div>
        </div>
        <div class="article-slider">
            <div class="owl-carousel owl-theme" id="article_slider">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="item box-article">
                            <?php
                            if (!empty(has_post_thumbnail())){
                                the_post_thumbnail('article');
                            }else{
                                ?><img src="<?php echo get_template_directory_uri().'/img/no-thumbnail.jpg'?>" alt="no thumbnail"><?php
                            }
                            ?>
                            <h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
                            <p><?php the_excerpt(); ?></p>
                            <div class="btn-more">
                                <a href="<?php the_permalink(); ?>">بیشتر بخوانید</a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                endif;
                ?>

            </div>
        </div>
    </div>
</section>

<!--start box adv-->

<section class="adv">
    <div class="container">
        <div class="right-adv">
            <h2>آموزش رایگان وردپرس</h2>
            <p>آموزش صفر تا صد وردپرس از کار با پنل مدیریت وردپرس به صورت رایگان تا طراحی حرفه ای قالب وردپرس، برای
                مشاهده بر روی دکمه زیر کلیک کنید</p>
            <a href="#">آموزش وردپرس</a>
        </div>
        <div class="left-adv">
            <figure>
                <img src="./img/Server-bro.svg" alt="adv image">
            </figure>
        </div>
    </div>
</section>

<!-- start line up course -->
<div class="line"></div>

<!-- start box course -->

<section class="course">
    <div class="container">
        <div class="course-head">
            <div class="course-title">
                <h2>دوره های پرطرفدار</h2>
                <h5>آموزش</h5>
            </div>
            <div class="course-link">
                <a href="#">همه دوره ها</a>
            </div>
        </div>
        <!-- start slide course -->
        <div class="course-slider">
            <div class="owl-carousel owl-theme" id="course-slider">
                <div class="item box-course">
                    <img src="./img/d1.jpeg" alt="post 1"/>
                    <h2><a href="#" target="_blank">آموزش طراحی سایت حرفه ای به صورت پروژه محور</a></h2>
                    <div class="desc">
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="teacher">
                            <span>حسین محمدپور</span>
                            <i class="fa fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <del>145000</del>
                            <ins>110000</ins>
                        </div>
                        <div class="users">
                            <i class="fa fa-users"></i> 35
                        </div>
                    </div>
                </div>
                <div class="item box-course">
                    <img src="./img/d2.jpg" alt="post 1"/>
                    <h2><a href="#" target="_blank">آموزش طراحی سایت حرفه ای به صورت پروژه محور</a></h2>
                    <div class="desc">
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="teacher">
                            <span>حسین محمدپور</span>
                            <i class="fa fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <del>145000</del>
                            <ins>110000</ins>
                        </div>
                        <div class="users">
                            <i class="fa fa-users"></i> 35
                        </div>
                    </div>
                </div>
                <div class="item box-course">
                    <img src="./img/d1.jpeg" alt="post 1"/>
                    <h2><a href="#" target="_blank">آموزش طراحی سایت حرفه ای به صورت پروژه محور</a></h2>
                    <div class="desc">
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="teacher">
                            <span>حسین محمدپور</span>
                            <i class="fa fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <span>250000</span>
                        </div>
                        <div class="users">
                            <i class="fa fa-users"></i> 35
                        </div>
                    </div>
                </div>
                <div class="item box-course">
                    <img src="./img/d2.jpg" alt="post 1"/>
                    <h2><a href="#" target="_blank">آموزش طراحی سایت حرفه ای به صورت پروژه محور</a></h2>
                    <div class="desc">
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="teacher">
                            <span>حسین محمدپور</span>
                            <i class="fa fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <span>!رایگان</span>
                        </div>
                        <div class="users">
                            <i class="fa fa-users"></i> 35
                        </div>
                    </div>
                </div>
                <div class="item box-course">
                    <img src="./img/d1.jpeg" alt="post 1"/>
                    <h2><a href="#" target="_blank">آموزش طراحی سایت حرفه ای به صورت پروژه محور</a></h2>
                    <div class="desc">
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="teacher">
                            <span>حسین محمدپور</span>
                            <i class="fa fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <del>145000</del>
                            <ins>110000</ins>
                        </div>
                        <div class="users">
                            <i class="fa fa-users"></i> 35
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
