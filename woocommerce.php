<?php get_header(); ?>
    <div class="single-page">
        <div class="container">
            <div class="main-single main-pro">
                <div class="product-title">
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                </div>
                <div class="product-thumbnail">
                    <figure>
                        <?php
                        $video_pro = get_post_meta(get_the_ID(),'satina_video_product',true);
                        $poster = get_post_meta(get_the_ID(),'satina_video_product_poster',true);
                        if (!empty($video_pro)){
                            $attr = array(
                                'src' => $video_pro,
                                'width' => '1200',
                                'height' => '750',
                                'poster' => $poster
                            );
                            echo wp_video_shortcode($attr);
                        }else{
                            the_post_thumbnail();
                        }
                        ?>
                    </figure>
                </div>
                <article class="product-single woocommerce">
                    <div class="content-single">
                        <?php woocommerce_content(); ?>
                    </div>
                </article>
                <div class="related-product woocommerce">
                    <?php echo do_shortcode('[related_products per_page = 3 columns = 3]'); ?>
                </div>

            </div>
        </div>
    </div>
<?php get_footer(); ?>