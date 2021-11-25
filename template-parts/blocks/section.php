<?php

$className = 'section';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<section class="container <?php echo esc_attr($className); ?>">

</section>
