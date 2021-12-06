<?php


$className = 'full_header';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>
<?php if (get_field('afbeelding') == "img") : ?>
    <div class="<?php echo esc_attr($className); ?> d-flex align-items-center "
         style="background-image:url(<?php echo esc_url(get_field('header_img')); ?>)">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-12 col-lg-7">
                    <div class="content">
                        <?php if ($text_over_header = get_field('text_over_header')) : ?>
                            <?php echo $text_over_header; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="arrows">
            <div class="container relative">

                <?php
                $link = get_field('button_link');
                if ($link) : ?>
                    <a class="btn btn_arrow_left down white" href="<?php echo esc_url($link); ?>"><i
                                class="far fa-long-arrow-alt-down"></i><?php the_field('button_text'); ?></a>

                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (get_field('afbeelding') == "video") : ?>
    <div class="<?php echo esc_attr($className); ?> d-flex align-items-center ">
        <video class="header_video" autoplay muted loop>
            <source src="<?php the_field('video');?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container ">
            <div class="row ">
                <div class="col-sm-12 col-lg-7">
                    <div class="content">
                        <?php if ($text_over_header = get_field('text_over_header')) : ?>
                            <?php echo $text_over_header; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
        <div class="arrows">
            <div class="container relative">

                <?php
                $link = get_field('button_link');
                if ($link) : ?>
                    <a class="btn btn_arrow_left down white" href="<?php echo esc_url($link); ?>"><i
                                class="far fa-long-arrow-alt-down"></i><?php the_field('button_text'); ?></a>

                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>