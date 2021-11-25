<?php
// Pagina Widget
add_action('wp_dashboard_setup', 'support_dashboard_widget');

function support_dashboard_widget()
{
    global $wp_meta_boxes;
    $current_user = wp_get_current_user();
    // Support widget
    wp_add_dashboard_widget('custom_help_widget', 'Welkom ' . $current_user->display_name . ' ', 'support_dashboard_help');

    // Edit Projecten
    wp_add_dashboard_widget('projecten_help_widget', 'Snelle links ', 'projecten_help_widget');

}

function support_dashboard_help()
{
    echo '<p>Kom je ergens niet uit en heb je support nodig?</p> ';
    echo '<p>Telefoonummer: <a style="text-decoration:none;font-weight:700; color:#000;" href="tel:085 130 8976">085 130 8976</a></p> ';
    echo '<p>Email: <a style="text-decoration:none;font-weight:700; color:#000;" href="mailto:support@webbakery.nl">support@webbakery.nl</a></p> ';
}

function projecten_help_widget()
{
    $url = get_site_url();
    echo '<div class="link_block">';
    // Pagina
    echo '<a href="' . $url . '/wp-admin/edit.php?post_type=page" class="post_type_block mb-2">';
    echo '<span class="dashicons dashicons-admin-page"></span>';
    echo "Pagina's";
    echo '</a>';
    // Projecten
    echo '<a href="' . $url . '/wp-admin/edit.php?post_type=projecten" class="post_type_block mb-2">';
    echo '<span class="dashicons dashicons-welcome-view-site"></span>';
    echo 'Projecten ';
    echo '</a>';
    // Vacatures
    echo '<a href="' . $url . '/wp-admin/edit.php?post_type=vacatures" class="post_type_block mb-2">';
    echo '<span class="dashicons dashicons-welcome-learn-more"></span>';
    echo 'Vacatures ';
    echo '</a>';
    // Team
    echo '<a href="' . $url . '/wp-admin/edit.php?post_type=team" class="post_type_block mb-2">';
    echo '<span class="dashicons dashicons-groups"></span>';
    echo 'Team ';
    echo '</a>';
    echo '</div>';

}


?>