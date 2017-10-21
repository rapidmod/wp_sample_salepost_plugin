<?php
/**
  * Plugin Name: Sale Post
  * Plugin URI: https://rapidmod.com/wordpress/how-to-create-a-wordpress-plugin-in-a-few-simple-steps
  * Description: Creates a custom sale type post.
  * Version: 0.1
  * Author: Rapidmod.com
  * Author URI: http://rapidmod.com/
  * License: GPLv2
  * License URI
***/


function init_rapidmod_salepost() {
	register_post_type( 'rapidmod_salepost',
		array(
			'labels' => array(
				'name' => 'Item',
				'singular_name' => 'Sale Item',
				'add_new' => 'Add New',
				'add_new_item' => 'Add New Sale Item',
				'edit' => 'Edit',
				'edit_item' => 'Edit Sale Item',
				'new_item' => 'New Sale Item',
				'view' => 'View',
				'view_item' => 'View Sale Item',
				'search_items' => 'Search Sale Items',
				'not_found' => 'No Sale Items found',
				'not_found_in_trash' => 'No Sale Items found in Trash',
				'parent' => 'Parent Sale Item'
			),

			'public' => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			'menu_position' => 15,
			'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
			'has_archive' => true
		)
	);
}
add_action( 'init', 'init_rapidmod_salepost' );
?>
