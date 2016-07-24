<?php
class KohonkPost{
	function __construct()
	{
		add_action('init', array($this, 'register_logotype'));
	}
	function register_logotype()
	{
		$post_type = 'logotype';
		$labels = array(
			'name' => __('Logotypes', 'tdo-custom'),
			'singular_name' => __('Logotype', 'tdo-custom'),
			'add_new' => __('Add New', 'tdo-custom'),
			'add_new_item' => __('Add New Logotype', 'tdo-custom'),
			'edit_item' => __('Edit Logotype', 'tdo-custom'),
			'new_item' => __('New Logotype', 'tdo-custom'),
			'all_items' => __('All Logotypes', 'tdo-custom'),
			'view_item' => __('View Logotype', 'tdo-custom'),
			'search_items' => __('Search Logotypes', 'tdo-custom'),
			'not_found' => __('No Logotypes found', 'tdo-custom'),
			'not_found_in_trash' => __('No Logotypes found in Trash', 'tdo-custom'),
			'menu_name' => __('Logotypes', 'tdo-custom'),
		);
		$slug = 'logotyping';
		$supports = array(
			'editor',
		);
		$taxonomies = array();
		$rewrite = array(
			'slug' => $slug,
			'with_front' => false,
			'feeds' => true,
			'pages' => true,
			'ep_mask' => EP_PERMALINK,
		);
		$args = array(
			'labels' => $labels,
			'description' => __('', 'kohonk-plague'),
			'public' => true,
			'exclude_from_search' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_nav_menus' => true,
			'show_in_menu' => true,
			'show_in_admin_bar' => true,
			'menu_position' => 5, // below Posts
			'menu_icon' => 'dashicons-translation',
			// 'capability_type' =>,
			// 'capabilities' =>,
			// 'map_meta_cap' =>,
			'hierarchical' => false,
			'supports' => $supports,
			// register_meta_box_cb
			'taxonomies' => $taxonomies,
			'has_archive' => true,
			// 'permalink_epmask' =>,
			'rewrite' => $rewrite,
			'query_var' => $slug,
			'show_in_rest' => true,
			'can_export' => true,
			'rest_base' => $slug,
			// 'rest_controller_class' => WP_REST_Posts_Controller,
		);
		register_post_type($post_type, $args);
	}
}
?>
