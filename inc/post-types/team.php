<?php
// Register Custom Post Type
function teamleden()
{

    $labels = array(
        'name' => _x('Teamleden', 'Post Type General Name', 'young'),
        'singular_name' => _x('Team', 'Post Type Singular Name', 'young'),
        'menu_name' => __('Teamleden', 'young'),
        'name_admin_bar' => __('Teamleden', 'young'),
        'archives' => __('Item Archives', 'young'),
        'attributes' => __('Item Attributes', 'young'),
        'parent_item_colon' => __('Parent Item:', 'young'),
        'all_items' => __('Alle Teamleden', 'young'),
        'add_new_item' => __('Add New Item', 'young'),
        'add_new' => __('Voeg nieuw Teamlid toe', 'young'),
        'new_item' => __('Voeg nieuw Teamlid toe', 'young'),
        'edit_item' => __('Wijzig Teamlid', 'young'),
        'update_item' => __('Update Teamlid', 'young'),
        'view_item' => __('Bekijk Teamlid', 'young'),
        'view_items' => __('Bekijk Teamleden', 'young'),
        'search_items' => __('Zoek Team', 'young'),
        'not_found' => __('Not found', 'young'),
        'not_found_in_trash' => __('Not found in Trash', 'young'),
        'featured_image' => __('Team foto', 'young'),
        'set_featured_image' => __('Kies Team foto', 'young'),
        'remove_featured_image' => __('Verwijder Team foto', 'young'),
        'use_featured_image' => __('Team foto', 'young'),
        'insert_into_item' => __('Insert into item', 'young'),
        'uploaded_to_this_item' => __('Uploaded voor dit Team', 'young'),
        'items_list' => __('Items list', 'young'),
        'items_list_navigation' => __('Items list navigation', 'young'),
        'filter_items_list' => __('Filter items list', 'young'),
    );
    $args = array(
        'label' => __('Team', 'young'),
        'description' => __('Teamleden', 'young'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-groups'
    );
    register_post_type('teamleden', $args);

}

add_action('init', 'teamleden', 0);

?>