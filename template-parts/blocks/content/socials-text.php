<?php

$className = 'socials_text';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>

<div class="<?php echo esc_attr($className); ?>">
    <?php if ( have_rows( 'socials' ) ) : ?>
        <?php while ( have_rows( 'socials' ) ) :
            the_row(); ?>
            <?php if ( $url = get_sub_field( 'url', $post->ID ) ) : ?>
        <a href="<?php echo esc_url( $url ); ?>" class="social_icon_text" target="_blank">
            <?php the_sub_field( 'icon', $post->ID ); ?>
            <?php the_sub_field( 'tekst', $post->ID ); ?>
        </a>
        <?php endif; ?>

        <?php endwhile; ?>
    <?php endif; ?>


</div>
