<?php
/**
 * Post Types
 *
 * @package Erwin Eisinga
 */

/**
 * Register Custom Post Types
 */
function erwineisinga_register_post_types() {
	register_post_type(
		'portfolio',
		array(
			'public'             => false,
			'publicly_queryable' => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => false,
			'rewrite'            => false,
			'capability_type'    => 'post',
			'has_archive'        => false,
			'menu_icon'          => 'dashicons-portfolio',
			'supports'           => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'revisions',
			),
			'labels'             => array(
				'name'                  => _x( 'Portfolio', 'post type general name', 'erwineisinga' ),
				'singular_name'         => _x( 'Portfolio', 'post type singular name', 'erwineisinga' ),
				'add_new'               => _x( 'Add new', 'project', 'erwineisinga' ),
				'add_new_item'          => __( 'Add new item', 'erwineisinga' ),
				'edit_item'             => __( 'Edit item', 'erwineisinga' ),
				'new_item'              => __( 'New item', 'erwineisinga' ),
				'view_item'             => __( 'View item', 'erwineisinga' ),
				'search_items'          => __( 'Search items', 'erwineisinga' ),
				'not_found'             => __( 'No items found', 'erwineisinga' ),
				'not_found_in_trash'    => __( 'No items found in trash', 'erwineisinga' ),
				'parent_item_colon'     => __( 'Parent item:', 'erwineisinga' ),
				'all_items'             => __( 'All items', 'erwineisinga' ),
				'archives'              => __( 'Items archives', 'erwineisinga' ),
				'insert_into_item'      => __( 'Insert into item', 'erwineisinga' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'erwineisinga' ),
				'menu_name'             => __( 'Portfolio', 'erwineisinga' ),
				'filter_items_list'     => __( 'Filter items list', 'erwineisinga' ),
				'items_list_navigation' => __( 'Items list navigation', 'erwineisinga' ),
				'items_list'            => __( 'Items list', 'erwineisinga' ),
			),
		)
	);

	register_post_type(
		'experience',
		array(
			'public'             => false,
			'publicly_queryable' => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => false,
			'rewrite'            => false,
			'capability_type'    => 'post',
			'has_archive'        => false,
			'menu_icon'          => 'dashicons-welcome-learn-more',
			'supports'           => array(
				'title',
			),
			'labels'             => array(
				'name'                  => _x( 'Experiences', 'post type general name', 'erwineisinga' ),
				'singular_name'         => _x( 'Experience', 'post type singular name', 'erwineisinga' ),
				'add_new'               => _x( 'Add new', 'project', 'erwineisinga' ),
				'add_new_item'          => __( 'Add new item', 'erwineisinga' ),
				'edit_item'             => __( 'Edit item', 'erwineisinga' ),
				'new_item'              => __( 'New item', 'erwineisinga' ),
				'view_item'             => __( 'View item', 'erwineisinga' ),
				'search_items'          => __( 'Search items', 'erwineisinga' ),
				'not_found'             => __( 'No items found', 'erwineisinga' ),
				'not_found_in_trash'    => __( 'No items found in trash', 'erwineisinga' ),
				'parent_item_colon'     => __( 'Parent item:', 'erwineisinga' ),
				'all_items'             => __( 'All items', 'erwineisinga' ),
				'archives'              => __( 'Items archives', 'erwineisinga' ),
				'insert_into_item'      => __( 'Insert into item', 'erwineisinga' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'erwineisinga' ),
				'menu_name'             => __( 'Experience', 'erwineisinga' ),
				'filter_items_list'     => __( 'Filter items list', 'erwineisinga' ),
				'items_list_navigation' => __( 'Items list navigation', 'erwineisinga' ),
				'items_list'            => __( 'Items list', 'erwineisinga' ),
			),
		)
	);
}

add_action( 'init', 'erwineisinga_register_post_types' );
