<?php
/**
 * This is file for all of your custom functions for the project
 */

/**
 * Enables the Link Manager that existed in WordPress until version 3.5.
 */
// add_filter('pre_option_link_manager_enabled', '__return_true');




/**
 * caterogies for pages
 */
function add_taxonomies_to_pages() {
    register_taxonomy_for_object_type( 'post_tag', 'page' );
    register_taxonomy_for_object_type( 'category', 'page' );
    }
   add_action( 'init', 'add_taxonomies_to_pages' );
    if ( ! is_admin() ) {
    add_action( 'pre_get_posts', 'category_and_tag_archives' );
    
    }
   function category_and_tag_archives( $wp_query ) {
   $my_post_array = array('post','page');
    
    if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )
    $wp_query->set( 'post_type', $my_post_array );
    
    if ( $wp_query->get( 'tag' ) )
    $wp_query->set( 'post_type', $my_post_array );
   }


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
            'post_parent'    =>  $parent_id //'id_of_the_parent_page_if_it_available'
            )
        );
    echo "Created page_id=". $page_id." for page '".$title_of_the_page. "'<br/>";
    return $page_id;
}

create_page( 'How it works', 'This is how it works');
create_page( 'Contact Us', 'The contact us page');
create_page( 'About Us', 'The about us page');
create_page( 'Team', 'The team page');
$pid = create_page( 'Sample Page', 'This is sample page');
create_page( 'Sample SubPage 1', 'This is sample SubPage 1',$pid);
create_page( 'Sample SubPage 2', 'This is sample SubPage 2',$pid);
