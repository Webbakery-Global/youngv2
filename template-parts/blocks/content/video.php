<?php


$className = 'video_block';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>
<div class="<?php echo esc_attr($className); ?>">
    <video class="half_video" playsinline autoplay muted loop>
        <source src="<?php the_field('video_url');?>" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    </div>
