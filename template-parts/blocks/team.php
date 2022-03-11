<div class="team_overview">
    <div class="container">
        <div class="row">
            <?php

            $args = array(
                'post_type' => 'teamleden',  // Sort post type
                'posts_per_page' => -1, // Aantal posts
                'order' => 'DESC',
            );

            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $slug = get_post_field('post_name', get_the_ID());
                ?>

                <div class="col-sm-12 col-lg-4 team">
                    <a class="open_<?= $slug ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'profile_img')) ?>
                        <p class="function"><?php the_field('functie', get_the_ID()); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <a class="btn btn_arrow_left" target="_self"><i class="far fa-long-arrow-alt-right"
                                                                    aria-hidden="true"></i>Lees meer</a>

                    <div class="team_modal team_modal_<?= $slug ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="function"><?php the_field('functie', get_the_ID()); ?></p>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_field('hover_info', get_the_ID()); ?>
                                </div>
                            </div>
                        </div>
                        <a class="close_modal">X</a>
                    </div>
                </div>

                <script>
                    $(".open_<?= $slug ?>").click(function () {
                        $(".team_modal_<?= $slug ?>").toggleClass("open");
                    });
                </script>
                <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        </div>
    </div>
</div>
