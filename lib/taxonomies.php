<?php

// REGISTER TAXONOMY for Preachers

  function be_register_preacher_taxonomy() {
   $labels = array(
     'name' => 'Preachers',
     'singular_name' => 'Preacher',
     'search_items' =>  'Search Preachers',
     'all_items' => 'All Preachers',
     'parent_item' => 'Parent Preacher',
     'parent_item_colon' => 'Parent Preacher:',
     'edit_item' => 'Edit Preacher',
     'update_item' => 'Update Preacher',
     'add_new_item' => 'Add New Preacher',
     'new_item_name' => 'New Preacher Name',
     'menu_name' => 'Preachers'
   );  

   register_taxonomy( 'preacher', array('sermons'), 
     array(
       'hierarchical' => true,
       'labels' => $labels,
       'show_ui' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'sermons/preacher' ),
     )
   );
 }
 add_action( 'init', 'be_register_preacher_taxonomy' );


 function be_register_series_taxonomy() {
   $labels = array(
     'name' => 'Series',
     'singular_name' => 'Series',
     'search_items' =>  'Search Series',
     'all_items' => 'All Series',
     'parent_item' => 'Parent Series',
     'parent_item_colon' => 'Parent Series:',
     'edit_item' => 'Edit Series',
     'update_item' => 'Update Series',
     'add_new_item' => 'Add New Series',
     'new_item_name' => 'New Series Name',
     'menu_name' => 'Series'
   );  

   register_taxonomy( 'series', array('sermons'), 
     array(
       'hierarchical' => true,
       'labels' => $labels,
       'show_ui' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'sermons/series' ),
     )
   );
 }
 add_action( 'init', 'be_register_series_taxonomy' );



 // REGISTER TAXONOMY for Topic

  function be_register_topics_taxonomy() {
   $labels = array(
     'name' => 'Topic',
     'singular_name' => 'Topic',
     'search_items' =>  'Search Topics',
     'all_items' => 'All Topics',
     'parent_item' => 'Parent Topics',
     'parent_item_colon' => 'Parent Topic:',
     'edit_item' => 'Edit Topic',
     'update_item' => 'Update Topic',
     'add_new_item' => 'Add New Topic',
     'new_item_name' => 'New Topic Name',
     'menu_name' => 'Topics'
   );  

   register_taxonomy( 'topics', array('sermons'), 
     array(
       'hierarchical' => true,
       'labels' => $labels,
       'show_ui' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'sermons/topic' ),
     )
   );
 }
 add_action( 'init', 'be_register_topics_taxonomy' );




 // REGISTER TAXONOMY for Passage

  function be_register_passage_taxonomy() {
   $labels = array(
     'name' => 'Book of Bible',
     'singular_name' => 'Book',
     'search_items' =>  'Search Books',
     'all_items' => 'All Books',
     'parent_item' => 'Parent Books',
     'parent_item_colon' => 'Parent Book:',
     'edit_item' => 'Edit Book',
     'update_item' => 'Update Book',
     'add_new_item' => 'Add New Book',
     'new_item_name' => 'New Book Name',
     'menu_name' => 'Books of Bible'
   );  

   register_taxonomy( 'passage', array('sermons'), 
     array(
       'hierarchical' => true,
       'labels' => $labels,
       'show_ui' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'sermons/passage' ),
     )
   );
 }
 add_action( 'init', 'be_register_passage_taxonomy' );

 ?>