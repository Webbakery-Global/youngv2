<?php


$className = 'business_projects_overview';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}
?>


<div class="<?php echo esc_attr($className); ?> container">
    <div class="row">

        <?php
        /*
         * Loop through Categories and Display Posts within
         */
        $post_type = 'business';

        // Get all the taxonomies for this post type
        $taxonomies = get_object_taxonomies(array('post_type' => $post_type));

        foreach ($taxonomies as $taxonomy) :

            // Gets every "category" (term) in this taxonomy to get the respective posts
            $terms = get_terms($taxonomy);

            foreach ($terms as $term) : ?>

                <?php
                $args = array(
                    'post_type' => $post_type,
                    'posts_per_page' => -1,  //show all posts
                    'tax_query' => array(
                        array(
                            'taxonomy' => $taxonomy,
                            'field' => 'slug',
                            'terms' => $term->slug,
                        )
                    )

                );
                $posts = new WP_Query($args);

                if ($posts->have_posts()): ?>

                    <div class="col-sm-12 mb-5">
                        <h3><?php echo $term->name; ?></h3>
                    </div>


                    <?php while ($posts->have_posts()) : $posts->the_post();
                        global $post;
                        $slug = $post->post_name;
                        if (get_field('exit', $post->ID) === false) :
                            if ( get_field( 'toon', $post->ID ) === true ) : ?>

                        <div id="<?= $slug ?>" class="col-sm-12 project_info">
                            <div class="row">
                                <div class="col-sm-12 col-lg-6 img_column">
                                    <?= !empty($img = get_field('business_img', $post->ID)) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'class_name']) : '' ?>

                                </div>
                                <div class="col-sm-12 col-lg-6 content_column">
                                    <div class="content">
                                        <h3><?php echo get_the_title(); ?></h3>
                                       <p> <?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                                    </div>
                                    <?php if ($link_to_website = get_field('link_to_website', $post->ID)) : ?>
                                        <a class="btn btn_arrow_left" href="<?php echo esc_url($link_to_website); ?>" target="_blank"><i
                                                    class="far fa-long-arrow-alt-right"></i><?php _e('Read more information on the website', 'young'); ?>.</a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                    <?php endwhile; endif; ?>

            <?php endforeach;

        endforeach; ?>
    </div>
</div>
