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
                <article class="woocommerce">
                    <?php woocommerce_content(); ?>
                </article>
            </div>
        </div>
    </div>
<?php get_footer(); ?>