<?php
/*
* Plugin Name: Custom Taxonomy
* Description: A short example showing how to add a taxonomy.
* Version: 1.0
* Author: developer.wordpress.org
* Author URI: https://codex.wordpress.org/
*/

// disable direct file access
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}




function wporg_register_taxonomy_course()
{
    $labels = [
        'name'              => _x('CTaxonomy', 'taxonomy general name'),
'singular_name'     => _x('SCTaxonomy', 'taxonomy singular name'),
'search_items'      => __('Search Courses'),
'all_items'         => __('All'),
'parent_item'       => __('Parent'),
'parent_item_colon' => __('Parent:'),
'edit_item'         => __('Edit'),
'update_item'       => __('Update'),
'add_new_item'      => __('Add New'),
'new_item_name'     => __('New'),
'menu_name'         => __('CTAxonomy'),
];
$args = [
'hierarchical'      => true, // make it hierarchical (like categories)
'labels'            => $labels,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true,
'rewrite'           => ['slug' => 'ctaxonomy'],
];
register_taxonomy('ctaxonomy', ['post'], $args);
}
add_action('init', 'wporg_register_taxonomy_course');
