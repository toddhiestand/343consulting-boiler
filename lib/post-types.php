<?php

 
// Register Sample Post Type

  function be_register_sermons_post_type() {
   $labels = array(
     'name' => 'Sermons',
     'singular_name' => 'Sermon',
     'add_new' => 'Add New Sermon',
     'add_new_item' => 'Add New Sermon',
     'edit_item' => 'Edit Sermon',
     'new_item' => 'New Sermon',
     'view_item' => 'View Sermon',
     'search_items' => 'Search Sermons',
     'not_found' =>  'No Sermons found',
     'not_found_in_trash' => 'No Sermons found in trash',
     'parent_item_colon' => '',
     'menu_name' => 'Sermons'
   );
  
   $args = array(
     'labels' => $labels,
     'public' => true,
     'publicly_queryable' => true,
     'show_ui' => true, 
     'show_in_menu' => true, 
     'query_var' => true,
     'rewrite' => true,
     'capability_type' => 'post',
     // 'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
     //'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
	 'rewrite'	=> array( 'slug' => 'sermons', 'with_front' => true ), /* you can specify its url slug */   
	 'has_archive' => 'sermons', /* you can rename the slug here */
     'hierarchical' => false,
     'menu_position' => null,
	 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'sticky')
  ); 

   register_post_type( 'sermons', $args );
 }
 add_action( 'init', 'be_register_sermons_post_type' ); 



?>