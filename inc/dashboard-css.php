<?php
add_action( 'admin_enqueue_scripts', 'load_admin_style' );
function load_admin_style() {
        wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/admin/admin.min.css', false, '1.0.0' );
}
?>