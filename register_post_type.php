<?php

/**
 * POST TYPES
 *
 * @link resources..
 */

// Add your custom post types here...
// Register Jobs Post Type

function jobs() {
    $labels = array(
      'name'                  => 'Jobs',
      'singular_name'         => 'Job',
      'menu_name'             => 'Jobs',
      'name_admin_bar'        => 'Job',
      'archives'              => 'Job Archives',
      'attributes'            => 'Job Attributes',
      'parent_item_colon'     => 'Parent Job:',
      'all_items'             => 'All Jobs',
      'add_new_item'          => 'Add New Job',
      'add_new'               => 'Add New',
      'new_item'              => 'New Job',
      'edit_item'             => 'Edit Job',
      'update_item'           => 'Update Job',
      'view_item'             => 'View Job',
      'view_items'            => 'View Jobs',
      'search_items'          => 'Search Job',
      'not_found'             => 'Not found',
      'not_found_in_trash'    => 'Not found in Trash',
      'featured_image'        => 'Featured Image',
      'set_featured_image'    => 'Set featured image',
      'remove_featured_image' => 'Remove featured image',
      'use_featured_image'    => 'Use as featured image',
      'insert_into_item'      => 'Insert into Job',
      'uploaded_to_this_item' => 'Uploaded to this Job',
      'items_list'            => 'Jobs list',
      'items_list_navigation' => 'Jobs list navigation',
      'filter_items_list'     => 'Filter Jobs List',
    );
    $args = array(
        'label'                 => 'Job',
        'description'           => 'Jobs',
        'labels'                => $labels,
        'show_in_rest'          => true,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-id-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('jobs', $args);
}