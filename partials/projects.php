<?php
$terms = wp_get_post_terms(get_the_id(), 'business_category');
foreach ($terms as $term) {
    $term_link = get_term_link($term);
    ?>

    <div class="col-sm-12 col-lg-4 element-item <?php echo $term->slug ?>">
        <a href="<?php echo get_the_permalink(); ?>">
            <div class="project_box">
                <?php echo get_the_post_thumbnail( get_the_ID(), 'post_thumbnail', array( 'class' => 'logo' ) ) ?>
                <i class="arrow fa-solid fa-right-long"></i>
            </div>
        </a>
    </div>

    <?php
}
?>