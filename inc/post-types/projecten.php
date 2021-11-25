<?php
// Register Custom Post Type
function projecten()
{

    $labels = array(
        'name' => _x('Projecten', 'Post Type General Name', 'young'),
        'singular_name' => _x('Project', 'Post Type Singular Name', 'young'),
        'menu_name' => __('Projecten', 'young'),
        'name_admin_bar' => __('Projecten', 'young'),
        'archives' => __('Item Archives', 'young'),
        'attributes' => __('Item Attributes', 'young'),
        'parent_item_colon' => __('Parent Item:', 'young'),
        'all_items' => __('Alle projecten', 'young'),
        'add_new_item' => __('Add New Item', 'young'),
        'add_new' => __('Voeg nieuw project toe', 'young'),
        'new_item' => __('Voeg nieuw project toe', 'young'),
        'edit_item' => __('Wijzig project', 'young'),
        'update_item' => __('Update project', 'young'),
        'view_item' => __('Bekijk project', 'young'),
        'view_items' => __('Bekijk projecten', 'young'),
        'search_items' => __('Zoek project', 'young'),
        'not_found' => __('Not found', 'young'),
        'not_found_in_trash' => __('Not found in Trash', 'young'),
        'featured_image' => __('Featured Image', 'young'),
        'set_featured_image' => __('Set featured image', 'young'),
        'remove_featured_image' => __('Remove featured image', 'young'),
        'use_featured_image' => __('Use as featured image', 'young'),
        'insert_into_item' => __('Insert into item', 'young'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'young'),
        'items_list' => __('Items list', 'young'),
        'items_list_navigation' => __('Items list navigation', 'young'),
        'filter_items_list' => __('Filter items list', 'young'),
    );
    $args = array(
        'label' => __('Project', 'young'),
        'description' => __('Projecten', 'young'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail', 'editor'),
        'taxonomies' => array('project_categorie'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-view-site'
    );
    register_post_type('projecten', $args);

}

add_action('init', 'projecten', 0);


// Register Custom Taxonomy
function project_categorie()
{

    $labels = array(
        'name' => _x('Projectcategorieen', 'Taxonomy General Name', 'young'),
        'singular_name' => _x('Projectcategorie', 'Taxonomy Singular Name', 'young'),
        'menu_name' => __('Project categorie', 'young'),
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
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_in_rest' => true,
    );
    register_taxonomy('project_categorie', array('projecten'), $args);

}

add_action('init', 'project_categorie', 0);

?>