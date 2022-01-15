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
                <?php
                $pro = new WP_Query(array(
                    'post_type' => 'product',
                    'posts_per_page' => 5
                ));
                if ($pro->have_posts()) {
                while ($pro->have_posts()) : $pro->the_post(); ?>

                    <div class="item box-course">
                        <?php
                        if (!empty(has_post_thumbnail())){
                            the_post_thumbnail('product');
                        }else{
                            ?><img src="<?php echo get_template_directory_uri().'/img/no-thumbnail.jpg'?>" alt="no thumbnail"><?php
                        }
                        ?>
                    <h2><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></h2>
                    <div class="desc">
                        <div class="woocommerce rate">
                            <?php woocommerce_template_loop_rating(); ?>
                        </div>
                        <div class="teacher">
                            <span>
                                <?php
                                $teacher_name = get_post_meta(get_the_ID(),'satina_course_teacher_name',true);
                                if(!empty($teacher_name)){
                                    echo $teacher_name;
                                }else{
                                    echo "مدرس ندارد";
                                }
                                ?>
                            </span>
                            <i class="fa fa-chalkboard-teacher"></i>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="price">
                            <?php global $product; echo $product->get_price_html(); ?>
                        </div>
                        <div class="users">
                            <i class="fa fa-users"></i> <?php echo get_post_meta($product->id , 'total_sales' , true); ?>
                        </div>
                    </div>
                </div>

                <?php
                endwhile;
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</section>