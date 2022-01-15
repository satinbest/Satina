<?php
//Add tab teacher
add_filter( 'woocommerce_product_tabs', 'woocommerce_product_teacher' );
function woocommerce_product_teacher( $tabs ) {

    $tabs['course_teacher'] = array(
        'title' 	=> __( 'مدرس', 'woocommerce' ),
        'priority' 	=> 20,
        'callback' 	=> 'woocommerce_product_teacher_content'
    );
    unset($tabs['additional_information']);
    return $tabs;

}
function woocommerce_product_teacher_content() {
    $teacher_name = get_post_meta(get_the_ID(),'satina_course_teacher_name',true);
    if (!empty($teacher_name)){
        ?>
        <div class="course-teacher">
            <?php
            $teacher_pic = get_post_meta(get_the_ID(), 'satina_course_teacher_pic', true);
            if (!empty($teacher_pic)){
                ?>
                <div class="teacher-pic">
                    <img src="<?php echo $teacher_pic; ?>" alt="Teacher Pic">
                </div>
                <?php
            }
            ?>
            <div class="teacher-about">
                <h5><?php echo $teacher_name; ?></h5>
                <?php $teacher_about = get_post_meta(get_the_ID(),'satina_course_teacher_about',true);
                if (!empty($teacher_about)){
                    echo $teacher_about;
                }
                ?>
            </div>
        </div>
        <?php
    }
}