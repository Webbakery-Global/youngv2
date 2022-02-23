<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

    <section id="single_project">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 pr-lg-3 pl-lg-0">
                    <h1 class="mb-2"><?php the_title(); ?></h1>
                    <div class="mb-5">
                        <?php the_content(); ?>
                    </div>


                </div>
                <div class="col-sm-12 col-lg-6 pr-lg-0">
                    <?= !empty($img = get_field( 'business_img' )) ? wp_get_attachment_image($img['id'], 'full', false, ['class' => 'thumbnail']) : '' ?>


                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12 col-lg-12 px-0">
                    <div class="info_block row">
                        <div class="col-sm-12 col-md-6 col-lg-3 block">
                            <?php if ($founded = get_field('founded')) : ?>
                                <h5><?php echo __('Founded', 'young'); ?></h5>
                                <p><?php echo esc_html($founded); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 block">
                            <?php if ($founders = get_field('founders')) : ?>
                                <h5><?php echo __('Founders', 'young'); ?></h5>
                                <p><?php echo esc_html($founders); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 block">
                            <?php if ($location = get_field('location')) : ?>
                                <h5><?php echo __('Location', 'young'); ?></h5>
                                <p><?php echo esc_html($location); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 block">
                            <?php if ($sector = get_field('sector')) : ?>
                                <h5><?php echo __('Sector', 'young'); ?></h5>
                                <p><?php echo esc_html($sector); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 block">
                            <?php if ($partner_involved = get_field('partner_involved')) : ?>
                                <h5><?php echo __('Partner Involved', 'young'); ?></h5>
                                <p><?php echo esc_html($partner_involved); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 block">
                            <?php if ($co_investor = get_field('co-investor')) : ?>
                                <h5><?php echo __('Co-investor', 'young'); ?></h5>
                                <p><?php echo esc_html($co_investor); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 block">
                            <?php if ($year_invested = get_field('year_invested')) : ?>
                                <h5><?php echo __('Year Invested', 'young'); ?></h5>
                                <p><?php echo esc_html($year_invested); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3 block">
                            <?php if ($website_url = get_field('website_url')) : ?>
                                <h5><?php echo __('Website', 'young'); ?></h5>
                                <a class="" href="<?php echo esc_html($website_url); ?>" target="_blank"><?php echo esc_html($website_url); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="related_projects">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-4">
                    <h3><?php echo __('Related Projects'); ?></h3>
                </div>
            </div>
            <div class="row project_overview">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'business',  // Sort post type
                    'posts_per_page' => 3, // Aantal posts
                    'order' => 'DESC',
                    'post__not_in' => array(get_the_ID()), // Voor related posts
                );

                $loop = new WP_Query($args);
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="col-sm-12 col-lg-4 element-item">
                        <a href="<?php echo get_the_permalink(); ?>">
                            <div class="project_box">
                                <?php echo get_the_post_thumbnail(get_the_ID(), 'post_thumbnail', array('class' => 'logo')) ?>
                                <i class="arrow fa-solid fa-right-long"></i>
                            </div>
                        </a>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>

            </div>
        </div>
    </section>

<?php

get_footer();
