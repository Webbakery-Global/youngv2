<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 px-lg-0">

                <div class="button-group projects filters-button-group">
                    <button class="button is-checked" data-filter="*"><?php _e('All', 'young'); ?></button>
                    <?php if ($terms = get_terms(array(
                        'post_type' => 'business',
                        'taxonomy' => 'business_category',
                        'hide_empty' => true,
                    ))) :
                        foreach ($terms as $term) : ?>
                            <button id="postfilters" class="button button_<?php echo strtolower($term->slug) ?>"
                                    data-filter=".<?php echo strtolower($term->slug) ?>"><?php echo $term->name ?></button>
                        <?php
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
            <div class="offset-lg-2"></div>
        </div>
    </div>
    <div class="container project_overview">
        <div class="all_partners isotope">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'business',
                'taxonomy' => 'business_category',
                'post_status' => 'publish',
                'posts_per_page' => -1,

            );

            $query = new WP_Query($args); ?>
            <?php
            if ($query->have_posts()) :
                $count = (int)0; ?>
                <div id="cc_posts_wrap" class="row">
                    <?php
                    while ($query->have_posts()) : $count++;
                        $query->the_post();
                        ?>

                        <?php get_template_part('partials/projects', 'content'); ?>

                        <?php wp_reset_postdata(); ?>
                    <?php endwhile;
                    ?>
                </div> <!-- end isotope-list -->

            <?php endif; ?>

        </div>
    </div>

</section>