<section class="tv">
    <div class="container">
        <div class="tv-head">
            <div class="tv-title">
                <h2>محتوای ویدئویی</h2>
                <h5>آرشیو محتوای ویدئویی</h5>
            </div>

            <div class="tv-link">
                <a href="#">ویدئوهای بیشتر</a>
            </div>
        </div>

        <div class="box-tv">
            <?php
            $the_query = new WP_Query(array(
                    'post_type' => 'tv',
                    'posts_per_page' => 1
            ));
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="tv-right">
                        <div class="first-post">
                            <a href="<?php the_permalink(); ?>">
                                <figure>
                                    <?php
                                    if (!empty(has_post_thumbnail())){
                                        the_post_thumbnail('tv_large');
                                    }else{
                                        ?><img src="<?php echo get_template_directory_uri().'/img/no-thumbnail.jpg'?>" alt="no thumbnail"><?php
                                    }
                                    ?>
                                    <i class="fas fa-play-circle"></i>
                                    <?php
                                       $time = get_post_meta(get_the_ID(),'satina_video_tv_time',true);
                                       if (!empty($time)){
                                        ?><span><?php echo $time; ?><i class="fas fa-play"></i></span><?php
                                       }else{
                                           echo "<p>مطلبی پیدا نشد</p>";
                                       }
                                    ?>
                                </figure>
                            </a>
                        </div>
                    </div>
                <?php
                endwhile;
            }
            wp_reset_postdata(); ?>
            <div class="tv-left">
                <?php
                $the_query = new WP_Query(array(
                    'post_type' => 'tv',
                    'posts_per_page' => 4,
                    'offset' => 1
                ));
                if ($the_query->have_posts()) {
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <div class="other-post">
                    <a href="<?php the_permalink(); ?>">
                        <figure>
                            <?php
                            if (!empty(has_post_thumbnail())){
                                the_post_thumbnail('tv_small');
                            }else{
                                ?><img src="<?php echo get_template_directory_uri().'/img/no-thumbnail.jpg'?>" alt="no thumbnail"><?php
                            }
                            ?>
                            <i class="fas fa-play"></i>
                            <?php
                            $time = get_post_meta(get_the_ID(),'satina_video_tv_time',true);
                            if (!empty($time)){
                            ?><span><?php echo $time; ?><i class="fas fa-play"></i></span><?php
                            }else{
                                echo "<p>مطلبی پیدا نشد</p>";
                            }
                            ?>
                            <h2><?php the_title(); ?></h2>
                        </figure>
                    </a>
                </div>
            <?php
                endwhile;
            }
            ?>
                <div class="more-tv">
                    <a href="#">ویدئوهای بیشتر</a>
                </div>
            </div>
        </div>
    </div>
</section>
