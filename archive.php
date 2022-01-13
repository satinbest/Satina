<?php get_header(); ?>

<!--start main single page-->

<div class="single-page">
    <div class="container">
        <div class="main-single">
            <section class="category-post">
                <div class="category-head">
                    <h4>آخرین مطالب از <span style="color: #5EA92A;"><?php echo get_the_archive_title(); ?></span></h4>
                </div>
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
            </section>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>