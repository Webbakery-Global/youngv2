<?php
include(get_stylesheet_directory() . '/template-parts/blocks/inc/margins.php');

$className = 'content';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div class="<?php echo esc_attr($className); ?> <?= $margint ?> <?= $marginb ?>">
    <?php if ( $content = get_field( 'content' ) ) : ?>
        <?php echo $content; ?>
    <?php endif; ?>
</div>
