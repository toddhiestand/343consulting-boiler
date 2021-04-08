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

?>