<?php
/**
  * Plugin Name: Sale Post
  * Plugin URI: https://rapidmod.com/wordpress/how-to-create-a-wordpress-plugin-in-a-few-simple-steps
  * Description: Creates a custom sale type post.
  * Version: 0.1
  * Author: Rapidmod.com
  * Author URI: http://rapidmod.com/
  * License: GPLv2
  * License URI: https://www.gnu.org/licenses/gpl-2.0.html
***/

<LABEL> = Sale Item
<PLURAL> = Sale Items

function init_<VENDOR>_<PLUGIN_NAME>() {
	register_post_type( '<VENDOR>_<PLUGIN_NAME>',
		array(
			'labels' => array(
				'name' => '<LABEL>',
				'singular_name' => '<LABEL>',
				'add_new' => 'Add New <Label>',
				'add_new_item' => 'Add New <LABEL>',
				'edit' => 'Edit <LABEL>',
				'edit_item' => 'Edit <LABEL>',
				'new_item' => 'New <LABEL>',
				'view' => 'View <LABEL>',
				'view_item' => 'View <LABEL>',
				'search_items' => 'Search <PLURAL>',
				'not_found' => 'No <PLURAL> found',
				'not_found_in_trash' => 'No <PLURAL> found in Trash',
				'parent' => 'Parent <LABEL>'
			),

			'public' => true,
			'menu_position' => 15,
			'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
			'taxonomies' => array( '' ),
			'has_archive' => true
		)
	);
}
add_action( 'init', 'init_<VENDOR>_<PLUGIN_NAME>' );
?>
