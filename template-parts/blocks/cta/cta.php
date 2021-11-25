<?php


$className = 'cta';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<section class="<?php echo esc_attr($className); ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-10 offset-lg-1">
                <h2><?php the_field('titel'); ?></h2>
                <p><?php the_field('content'); ?></p>
                <?php
                $link = get_field('button_link');
                if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn btn_arrow_left" href="<?php echo esc_url($link_url); ?>"
                       target="<?php echo esc_attr($link_target); ?>"><i class="far fa-long-arrow-alt-right"></i><?php the_field('button'); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

