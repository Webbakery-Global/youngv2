<?php


$className = 'news_overview';
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
            'post_type' => 'post',  // Sort post type
            'posts_per_page' => -1, // Aantal posts
            'order' => 'DESC',
        );

        $loop = new WP_Query($args);
        while ($loop->have_posts()) : $loop->the_post();
            global $post;
            $terms = get_the_terms($post->ID, 'category');
            if (!empty($terms)) :
                $term = array_shift($terms); ?>

                <div class="col-sm-12 col-lg-6 post_img mb-2 mb-lg-5">
                    <a href="<?php the_permalink(); ?>">
                    <?php echo get_the_post_thumbnail($post->ID, 'post_thumbnail', array('class' => 'logo')) ?>
                    </a>
                </div>
                <div class="col-sm-12 col-lg-6 post_content mb-5">
                    <div class="content">
                        <h5 class="subtitle"><?php echo $term->name; ?></h5>
                        <h3><?php the_title(); ?></h3>
                        <div class="text_content">

                            <p><?php echo wp_trim_words(wp_strip_all_tags(get_the_content()), 60); ?></p>
                        </div>
                    </div>
                    <a class="btn btn_arrow_left" href="<?php the_permalink(); ?>"><i
                                class="far fa-long-arrow-alt-right"></i><?php _e('Read more', 'Young'); ?>.</a>
                </div>

            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>


    </div>
</div>