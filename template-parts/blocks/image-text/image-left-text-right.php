<?php

$className = 'image-left-text-right';
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
            <div class="col-sm-12 col-lg-6">
                <?= !empty($img = get_field('image')) ? wp_get_attachment_image($img['id'], 'medium', false, ['class' => 'class_name']) : '' ?>
            </div>
            <div class="col-sm-12 col-lg-6">
                <?php if ($content = get_field('content')) : ?>
                    <?php echo $content; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
