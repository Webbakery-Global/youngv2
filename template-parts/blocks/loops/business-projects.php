<?php


$className = 'business_projects';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
?>


<div class="<?php echo esc_attr($className); ?> container">
    <div class="row ">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'business',  // Sort post type
            'posts_per_page' => -1, // Aantal posts
            'order' => 'DESC',
        );

        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();

            global $post;
            $slug = $post->post_name; ?>
        <?php if ( get_field( 'exit', $post->ID ) == false ) : ?>

            <div class="d-flex align-items-center business_item">
                <a href="#<?= $slug ?>">
                    <?php echo get_the_post_thumbnail($post->ID, 'post_thumbnail', array('class' => 'logo')) ?>
                </a>
            </div>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>


    </div>
</div>