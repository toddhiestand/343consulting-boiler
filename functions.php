<?php


// Includes our custom taxonomies
require_once(__DIR__ . '/lib/taxonomies.php');

// Includes our custom post types
require_once(__DIR__ . '/lib/post-types.php');

// Includes our custom post types
// require_once(__DIR__ . '/lib/fields.php');


// Register our sidebars
if ( function_exists('register_sidebar') ) {
register_sidebar(array(
    'name' => 'Sidebar',
    'id' => 'sidebar',
    'description' => __('Main Sidebar'),
    'before_widget' => '<aside id="%1$s" class="sidebar-section">',
    'after_widget' => '</aside>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    )); 

    register_sidebar(array(
    'name' => 'Single Sidebar',
    'id' => 'singlesidebar',
    'description' => __('Main Sidebar'),
    'before_widget' => '<aside id="%1$s" class="sidebar-section">',
    'after_widget' => '</aside>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    ));  


}



// Add us some fancy menus

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );



// register da scripts that we often use
function enqueue_scripts() {

  wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '', 'all' );
  wp_register_style( 'grid', get_template_directory_uri() . '/css/responsive.gs.24col.css', array(), '', 'all' );
  wp_register_style( 'ss-air', get_template_directory_uri() . '/fonts/ss-air/ss-air.css', array(), '', 'all' );
  // wp_register_style( 'ss-pika', get_template_directory_uri() . '/fonts/symbolset/ss-pika.css', array(), '', 'all' );
  wp_register_style( 'ss-social', get_template_directory_uri() . '/fonts/ss-social-circle/ss-social-circle.css', array(), '', 'all' );
  wp_register_style( 'bxcss', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '', 'all' );
  wp_register_style( 'pushy', get_template_directory_uri() . '/css/pushy.css', array(), '', 'all' );
  wp_register_style( 'mobile', get_template_directory_uri() . '/css/mobile.css', array(), '', 'all' );
  wp_register_style( 'menu', get_template_directory_uri() . '/css/menu.css', array(), '', 'all' );

  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, '1.10.1');
  wp_register_script( 'pushy', get_template_directory_uri() . '/scripts/pushy.js', array(), true,'1.0',true,true );
  wp_register_script( 'modernizer', get_template_directory_uri() . '/scripts/modernizr-2.6.2.min.js', array(), true );
  wp_register_script( 'bxjs', get_template_directory_uri() . '/scripts/jquery.bxslider.js', array(), true,true );
  wp_register_script( 'pin', get_template_directory_uri() . '/scripts/pin.js', array(), true,true );

  wp_enqueue_style('style');
  wp_enqueue_style('grid');
  wp_enqueue_style('ss-social');
  // wp_enqueue_style('ss-pika');
  wp_enqueue_style('ss-air');
  wp_enqueue_style('bxcss');
  wp_enqueue_style('pushy');
  wp_enqueue_style('menu');
  wp_enqueue_style('mobile');

  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'modernizer' );
  wp_enqueue_script( 'pushy' );
  wp_enqueue_script( 'bxjs' );
  wp_enqueue_script( 'pin' );

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// Add RSS links to the header
add_theme_support('automatic-feed-links');



// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
  return '[...] <div class="read-more"><a class="button small" href="'. get_permalink($post->ID) . '"> Read More</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');



// Add some featured images and sizes
 if ( function_exists( 'add_theme_support' ) ) {
 add_theme_support( 'post-thumbnails' );
 set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
 add_image_size( 'image-square', 300, 300, true ); // 150 pixels wide (and unlimited height)
 add_image_size( 'image-wide', 640, 220, true ); // 400 pixels wide (and unlimited height)
 add_image_size( 'image-single', 640, 420, true ); // 400 pixels wide (and unlimited height)
}



// Get rid of self-pings
 function no_self_ping( &$links ) {
     $home = get_option( 'home' );
     foreach ( $links as $l => $link )
         if ( 0 === strpos( $link, $home ) )
             unset($links[$l]);
 }
 add_action( 'pre_ping', 'no_self_ping' );


// Add custom branding to the footer of the admin
 
function modify_footer_admin () {
  echo 'Created by <a href="http://www.343consulting.com">343 Consulting</a>.';
}

add_filter('admin_footer_text', 'modify_footer_admin');

// LOGIN STYLE
function custom_login() { 
echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/lib/login.css" />'; 
}
add_action('login_head', 'custom_login');

// delete links for all versions of wordpress
 function delete_comment_link($id) {
     if (current_user_can('edit_post')) {
         echo '| <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&c='.$id.'">del</a> ';
         echo '| <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?action=cdc&dt=spam&c='.$id.'">spam</a>';
     }
 }


?>
