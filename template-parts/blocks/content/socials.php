<?php

$className = 'socials';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}

if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

?>
<span class="d-none">Socials</span>
<div class="<?php echo esc_attr($className); ?>">
    <?php if ( $linkedin = get_field( 'linkedin' ) ) : ?>
        <a href="<?php echo esc_url( $linkedin ); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
    <?php endif; ?>
    <?php if ( $email = get_field( 'email' ) ) : ?>
        <a href="mailto:<?php echo $email; ?>"><i class="far fa-envelope"></i></a>
    <?php endif; ?>
    <?php if ( $telefoonnummer = get_field( 'telefoonnummer' ) ) : ?>
        <a href="tel:<?php echo esc_html( $telefoonnummer ); ?>"><i class="fas fa-phone-alt"></i></a>
    <?php endif; ?>
</div>
