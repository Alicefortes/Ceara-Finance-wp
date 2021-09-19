<?php
// Register Custom Post Type parceiro
function create_parceiro_cpt() {

	$labels = array(
		'name' => _x( 'parceiros', 'Post Type General Name', 'ceara-finance' ),
		'singular_name' => _x( 'parceiro', 'Post Type Singular Name', 'ceara-finance' ),
		'menu_name' => _x( 'Parceiros', 'Admin Menu text', 'ceara-finance' ),
		'name_admin_bar' => _x( 'parceiro', 'Add New on Toolbar', 'ceara-finance' ),
		'archives' => __( 'parceiro Archives', 'ceara-finance' ),
		'attributes' => __( 'parceiro Attributes', 'ceara-finance' ),
		'parent_item_colon' => __( 'Parent parceiro:', 'ceara-finance' ),
		'all_items' => __( 'All parceiros', 'ceara-finance' ),
		'add_new_item' => __( 'Add New parceiro', 'ceara-finance' ),
		'add_new' => __( 'Add New', 'ceara-finance' ),
		'new_item' => __( 'New parceiro', 'ceara-finance' ),
		'edit_item' => __( 'Edit parceiro', 'ceara-finance' ),
		'update_item' => __( 'Update parceiro', 'ceara-finance' ),
		'view_item' => __( 'View parceiro', 'ceara-finance' ),
		'view_items' => __( 'View parceiros', 'ceara-finance' ),
		'search_items' => __( 'Search parceiro', 'ceara-finance' ),
		'not_found' => __( 'Not found', 'ceara-finance' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'ceara-finance' ),
		'featured_image' => __( 'Featured Image', 'ceara-finance' ),
		'set_featured_image' => __( 'Set featured image', 'ceara-finance' ),
		'remove_featured_image' => __( 'Remove featured image', 'ceara-finance' ),
		'use_featured_image' => __( 'Use as featured image', 'ceara-finance' ),
		'insert_into_item' => __( 'Insert into parceiro', 'ceara-finance' ),
		'uploaded_to_this_item' => __( 'Uploaded to this parceiro', 'ceara-finance' ),
		'items_list' => __( 'parceiros list', 'ceara-finance' ),
		'items_list_navigation' => __( 'parceiros list navigation', 'ceara-finance' ),
		'filter_items_list' => __( 'Filter parceiros list', 'ceara-finance' ),
	);
	$args = array(
		'label' => __( 'parceiro', 'ceara-finance' ),
		'description' => __( '', 'ceara-finance' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-grid-view',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'parceiro', $args );

}
add_action( 'init', 'create_parceiro_cpt', 0 );

?>