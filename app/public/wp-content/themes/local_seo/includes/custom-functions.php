<?php
/**
 * This is file for all of your custom functions for the project
 */

/**
 * Enables the Link Manager that existed in WordPress until version 3.5.
 */
// add_filter('pre_option_link_manager_enabled', '__return_true');






/**
 * auto page creation
 */

function create_page($title_of_the_page,$content,$parent_id = NULL ) 
{
    $objPage = get_page_by_title($title_of_the_page, 'OBJECT', 'page');
    if( ! empty( $objPage ) )
    {
        //echo "Page already exists:" . $title_of_the_page . "<br/>";
        return $objPage->ID;
    }
    
    $cat=get_cat_ID( 'test' );
    echo $cat;

    $page_id = wp_insert_post(
            array(
            'comment_status' => 'close',
            'ping_status'    => 'close',
            'post_author'    => 1,
            'post_title'     => ucwords($title_of_the_page),
            'post_name'      => strtolower(str_replace(' ', '-', trim($title_of_the_page))),
            'post_status'    => 'publish',
            'post_content'   => $content,
            'post_type'      => 'page',
            'post_parent'    =>  $parent_id, //'id_of_the_parent_page_if_it_available'
            )
        );
    echo "Created page_id=". $page_id." for page '".$title_of_the_page. "'<br/>";
    return $page_id;
}



create_page( 'Über uns', '');
create_page( 'Impressum', '');
create_page( 'AGB', '');
create_page( 'Kontakt', '');






/**
 * auto post creation helper Function 
 */


function create_post($title_of_the_page,$content,$cat_id = NULL, $post_type = NULL ) 
{
    $objPost = get_page_by_title($title_of_the_page, 'OBJECT', $post_type);
    if( ! empty( $objPost ) )
    {
        echo "Page already exists:" . $title_of_the_page . "<br/>";
        return $objPost->ID;
    }
    
    $page_id = wp_insert_post(
            array(
            'comment_status' => 'close',
            'ping_status'    => 'close',
            'post_author'    => 1,
            'post_title'     => ucwords($title_of_the_page),
            'post_name'      => strtolower(str_replace(' ', '-', trim($title_of_the_page))),
            'post_status'    => 'publish',
            'post_content'   => $content,
            'post_type'      => $post_type,
            'post_category' => array($cat_id),
            )
        );
    echo "Created page_id=". $page_id." for page '".$title_of_the_page. "'<br/>";
    return $page_id;
}




function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Einsatzgebiete
	 */

	$labels = [
		"name" => __( "Einsatzgebiete", "local_seo" ),
		"singular_name" => __( "Einsatzgebiete", "local_seo" ),
	];

	
	$args = [
		"label" => __( "Einsatzgebiete", "local_seo" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'Einsatzgebiete', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "einsatzgebiete",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "einsatzgebiete", [ "landingpages" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


//$business_field = 'Entrümpelungen';
$location = '1010 Wien'; 
$post_type = 'Landing Pages';
//create_post( $business_field . ' ' . $location , '', '2', 'Landing Pages');

//$pid = create_post( 'Sample Page', 'This is sample page');
//create_post( $business_field . ' ' . $location , $pid, '', 'Landing Pages');