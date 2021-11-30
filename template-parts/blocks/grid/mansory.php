<?php

$className = 'mansory';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div class="<?php echo esc_attr($className); ?>">
    <div class="masonry-grid ">

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'projecten',  // Sort post type
            'posts_per_page' => 9, // Aantal posts
            'order' => 'ASC',
        );

        $loop = new WP_Query($args);
        $blockNumber = 1;
        while ($loop->have_posts()) : $loop->the_post();
            $post_id = get_the_ID();

            ?>
            <div class="col-sm-12 col-lg-4  mansory_block masonry-column">
                <div class="block block_<?php echo $blockNumber++; ?>">
                    <?php echo get_the_post_thumbnail($post_id, 'large', array('class' => 'project_thubmnail')) ?>
                    <div class="title_box"><i class="far fa-plus"></i>
                        <span class="title"><?php the_title(); ?></span>
                    </div>
                    <?php if ($content = get_the_content()) : ?>
                    <div class="content">
                        <?php the_content(); ?>
                        <a class="btn btn_arrow_right" href="<?php the_permalink(); ?>"><?php _e('More information', 'young'); ?><i
                                    class="far fa-chevron-double-right"></i></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
    </div>
</div>

<script>
    $('.masonry-grid').isotope({
        itemSelector: '.masonry-column',
        percentPosition: true,
        masonry: {
            // use outer width of grid-sizer for columnWidth
            // columnWidth: '.grid-sizer'
        }
    })

    $(document).ready(function () {
        $(".block_1").click(function () {
            $(".block_1").toggleClass("active");
        });
        $(".block_2").click(function () {
            $(".block_2").toggleClass("active");
        });
        $(".block_3").click(function () {
            $(".block_3").toggleClass("active");
        });
        $(".block_4").click(function () {
            $(".block_4").toggleClass("active");
        });
        $(".block_5").click(function () {
            $(".block_5").toggleClass("active");
        });
        $(".block_6").click(function () {
            $(".block_6").toggleClass("active");
        });
        $(".block_7").click(function () {
            $(".block_7").toggleClass("active");
        });
        $(".block_8").click(function () {
            $(".block_8").toggleClass("active");
        });
        $(".block_9").click(function () {
            $(".block_9").toggleClass("active");
        });
    });
</script>