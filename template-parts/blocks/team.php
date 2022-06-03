<div class="team_overview">
    <div class="container">
        <div class="row">
            <?php

            $args = array(
                'post_type' => 'teamleden',  // Sort post type
                'posts_per_page' => -1, // Aantal posts
                'order' => 'DESC',
            );
            $order = 0;
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
                $slug = get_post_field('post_name', get_the_ID());
                ?>

                <div class="col-sm-12 col-lg-4 team mb-5 position-<?= $order ?>">
                    <a class="open_<?= $slug ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'profile_img')) ?>
                        <p class="function"><?php the_field('functie', get_the_ID()); ?></p>
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <a class="btn btn_arrow_left open_<?= $slug ?>" target="_self"><i class="far fa-long-arrow-alt-right"
                                                                    aria-hidden="true"></i><?php echo __('Read more', 'young'); ?></a>

                    <div class="team_modal team_modal_<?= $slug ?>">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="function"><?php the_field('functie', get_the_ID()); ?></p>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_field('hover_info', get_the_ID()); ?>

                                    <div class="socials">
                                        <?php if ( $linkedin = get_field( 'linkedin', get_the_ID() ) ) : ?>
                                            <a href="<?php echo esc_url( $linkedin ); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        <?php endif; ?>
                                        <?php if ( $email = get_field( 'email', get_the_ID() ) ) : ?>
                                            <a href="mailto:<?php echo $email; ?>"><i class="far fa-envelope"></i></a>
                                        <?php endif; ?>
                                        <?php if ( $telefoonnummer = get_field( 'telefoonnummer', get_the_ID() ) ) : ?>
                                            <a href="tel:<?php echo esc_html( $telefoonnummer ); ?>"><i class="fas fa-phone-alt"></i></a>
                                        <?php endif; ?>
                                    </div>

                                    <?php if( $btn_link = get_field('button_link', get_the_ID() ) ) : ?>
                                    <a class="btn btn_arrow_left mt-4 " href="<?= $btn_link ?>" target="_self"><i class="far fa-long-arrow-alt-right" aria-hidden="true"></i><?php the_field('button_tekst', get_the_ID()); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <a class="close_modal">X</a>
                    </div>
                </div>

                <script>
                    $(".open_<?= $slug ?>").click(function () {
                        $(".team_modal_<?= $slug ?>").toggleClass("open");
                        $("body, html").toggleClass("no-scroll");
                    });
                </script>
                <?php
                $order++;
                wp_reset_postdata(); ?>
            <?php endwhile; ?>
            <div class="col-sm-12 col-lg-4 order-3"></div>
        </div>
    </div>
</div>
