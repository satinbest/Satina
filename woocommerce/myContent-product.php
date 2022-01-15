<div class="archive-box box-course">
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