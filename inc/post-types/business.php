<?php
// Register Custom Post Type
function business()
{

    $labels = array(
        'name' => _x('Venture Capital', 'Post Type General Name', 'young'),
        'singular_name' => _x('Venture Capital', 'Post Type Singular Name', 'young'),
        'menu_name' => __('Venture Capital', 'young'),
        'name_admin_bar' => __('Business', 'young'),
        'archives' => __('Item Archives', 'young'),
        'attributes' => __('Item Attributes', 'young'),
        'parent_item_colon' => __('Parent Item:', 'young'),
        'all_items' => __('All Venture Capital', 'young'),
        'add_new_item' => __('Add New Item', 'young'),
        'add_new' => __('Voeg nieuw Capital toe', 'young'),
        'new_item' => __('Voeg nieuw Capital toe', 'young'),
        'edit_item' => __('Wijzig Capital', 'young'),
        'update_item' => __('Update Capital', 'young'),
        'view_item' => __('Bekijk Capital', 'young'),
        'view_items' => __('Bekijk Capital', 'young'),
        'search_items' => __('Zoek Capital', 'young'),
        'not_found' => __('Not found', 'young'),
        'not_found_in_trash' => __('Not found in Trash', 'young'),
        'featured_image' => __('Logo', 'young'),
        'set_featured_image' => __('Kies een logo', 'young'),
        'remove_featured_image' => __('Verwijder logo', 'young'),
        'use_featured_image' => __('Gebruik als logo', 'young'),
        'insert_into_item' => __('Insert into item', 'young'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'young'),
        'items_list' => __('Items list', 'young'),
        'items_list_navigation' => __('Items list navigation', 'young'),
        'filter_items_list' => __('Filter items list', 'young'),
    );
    $args = array(
        'label' => __('Venture Capital', 'young'),
        'description' => __('Venture Capital', 'young'),
        'labels' => $labels,
        'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields', ),
        'taxonomies' => array('business_category'),
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
        'menu_icon' => 'dashicons-welcome-view-site'
    );
    register_post_type('business', $args);

}

add_action('init', 'business', 0);


// Register Custom Taxonomy
function business_category()
{

    $labels = array(
        'name' => _x('Venture Capital categorieen', 'Taxonomy General Name', 'young'),
        'singular_name' => _x('Venture Capital categorie', 'Taxonomy Singular Name', 'young'),
        'menu_name' => __('Venture Capital categorie', 'young'),
        'all_items' => __('Alle categorieën', 'young'),
        'parent_item' => __('Parent Item', 'young'),
        'parent_item_colon' => __('Parent Item:', 'young'),
        'new_item_name' => __('Nieuwe categorie', 'young'),
        'add_new_item' => __('Add New Item', 'young'),
        'edit_item' => __('Edit Item', 'young'),
        'update_item' => __('Update Item', 'young'),
        'view_item' => __('View Item', 'young'),
        'separate_items_with_commas' => __('Separate items with commas', 'young'),
        'add_or_remove_items' => __('Add or remove items', 'young'),
        'choose_from_most_used' => __('Choose from the most used', 'young'),
        'popular_items' => __('Popular Items', 'young'),
        'search_items' => __('Search Items', 'young'),
        'not_found' => __('Not Found', 'young'),
        'no_terms' => __('No items', 'young'),
        'items_list' => __('Items list', 'young'),
        'items_list_navigation' => __('Items list navigation', 'young'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('business_category', array('business'), $args);

}

add_action('init', 'business_category', 0);

