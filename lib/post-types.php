<?php

 
// Register Sample Post Type

  function be_register_video_post_type() {
   $labels = array(
     'name' => 'Video',
     'singular_name' => 'Video',
     'add_new' => 'Add New Video',
     'add_new_item' => 'Add New Video',
     'edit_item' => 'Edit Video',
     'new_item' => 'New Video',
     'view_item' => 'View Video',
     'search_items' => 'Search Videos',
     'not_found' =>  'No Videos found',
     'not_found_in_trash' => 'No Videos found in trash',
     'parent_item_colon' => '',
     'menu_name' => 'Videos'
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
	 'rewrite'	=> array( 'slug' => 'video', 'with_front' => false ), /* you can specify its url slug */   
	 'has_archive' => 'video', /* you can rename the slug here */
     'hierarchical' => false,
     'menu_position' => null,
	 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'sticky')
  ); 

   register_post_type( 'video', $args );
 }
 add_action( 'init', 'be_register_video_post_type' ); 


  function be_register_books_post_type() {
   $labels = array(
     'name' => 'Books',
     'singular_name' => 'Book',
     'add_new' => 'Add New Book',
     'add_new_item' => 'Add New Book',
     'edit_item' => 'Edit Book',
     'new_item' => 'New Book',
     'view_item' => 'View Book',
     'search_items' => 'Search Book',
     'not_found' =>  'No Book found',
     'not_found_in_trash' => 'No Book found in trash',
     'parent_item_colon' => '',
     'menu_name' => 'Books'
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
     'rewrite'  => array( 'slug' => 'books', 'with_front' => false ), /* you can specify its url slug */   
     'has_archive' => 'books', /* you can rename the slug here */
     'hierarchical' => false,
     'menu_position' => null,
     'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'sticky')
  ); 

   register_post_type( 'books', $args );
 }
 add_action( 'init', 'be_register_books_post_type' ); 





?>