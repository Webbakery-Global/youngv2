<?php


$className = 'button';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div class="<?php echo esc_attr($className); ?>">
<?php
$link = get_field('button_link');
if ($link) :
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self'; ?>

    <?php if (get_field('button_style') == "arrow_left") : ?>
    <a class="btn btn_arrow_left" href="<?php echo esc_url($link_url); ?>"
       target="<?php echo esc_attr($link_target); ?>"><i
                class="far fa-long-arrow-alt-right"></i><?php the_field('button_text'); ?></a>
    <?php endif; ?>

    <?php if (get_field('button_style') == "underline") : ?>
    <a class="btn btn_underline" href="<?php echo esc_url($link_url); ?>"
       target="<?php echo esc_attr($link_target); ?>"><?php the_field('button_text'); ?></a>
    <?php endif; ?>

    <?php if (get_field('button_style') == "arrow_right") : ?>
    <a class="btn btn_arrow_right" href="<?php echo esc_url($link_url); ?>"
       target="<?php echo esc_attr($link_target); ?>"><?php the_field('button_text'); ?><i class="far fa-chevron-double-right"></i></a>
    <?php endif; ?>
<?php endif; ?>
</div>
