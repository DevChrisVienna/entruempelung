<?php

/**
 * auto post type creation helper function
 */


function cptui_register_my_cpts() {

	/**
	 * Post Type: Landing Pages.
	 */

	$labels = [
		"name" => __( "Landing Pages", "local_seo" ),
		"singular_name" => __( "Landing Pages", "local_seo" ),
	];

	$args = [
		"label" => __( "Landing Pages", "local_seo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ "slug" => "LandingPages", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "page-attributes", "post-formats" ],
        "show_in_graphql" => false,
        'post_parent' => $pid
	];

    register_post_type( "LandingPages", $args );
    
}

add_action( 'init', 'cptui_register_my_cpts' );
