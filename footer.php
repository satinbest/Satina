<footer>
    <div class="container">
        <div class="aboute">
            <?php
            if ( is_active_sidebar( 'satina_footer_one' ) ) { ?>
                <?php dynamic_sidebar('satina_footer_one'); ?>
            <?php } ?>
        </div>

        <div class="f-menu">
            <?php
            if ( is_active_sidebar( 'satina_footer_two' ) ) { ?>
                <?php dynamic_sidebar('satina_footer_two'); ?>
            <?php } ?>
        </div>

        <div class="f-menu">
            <?php
            if ( is_active_sidebar( 'satina_footer_three' ) ) { ?>
                <?php dynamic_sidebar('satina_footer_three'); ?>
            <?php } ?>
        </div>
    </div>

    <div class="copy-right">
        <div class="container">
            <?php
            $footer_tools = satina_get_option('satina_footer_options');
            $text_copyright = $footer_tools[0]['satina_message_copyright_option'];
            if (isset($text_copyright)){
                echo "<p>$text_copyright</p>";
            }else{ ?>
            <p> حقوق تمامی محتواهای موجود در این وب سایت محفوظ می باشد. </p>
            <?php
            }
            ?>
            <div class="social">
                <a href="#"><i class="fab fa-facebook"></i> </a>
                <a href="#"><i class="fab fa-twitter"></i> </a>
                <a href="#"><i class="fab fa-telegram"></i> </a>
                <a href="#"><i class="fab fa-linkedin"></i> </a>
                <a href="#"><i class="fab fa-youtube"></i> </a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>