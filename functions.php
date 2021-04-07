<?php


// Includes our custom taxonomies
// require_once(__DIR__ . '/_lib/taxonomies.php');

// Includes our custom post types
// require_once(__DIR__ . '/_lib/post-types.php');

// Includes our custom post types
// require_once(__DIR__ . '/_lib/blocks.php');


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


// Add ACF Options page if it exists
if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
}

// Add us some fancy menus

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
      'mobile-menu' => __( 'Mobile Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// remove dashboard widgets
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
 
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
    unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
    unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
 
}

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '
  <h3>Welcome</h3>
  <p>Your website was built with love and care by <strong>Liminal Creative, Inc.</strong>.</p>
  <h3>Support</h3>
  <p> If you ever need any help with your website, please contact us at <a href="mailto:hello@liminalcreative.com">hello@liminalcreative.com</a>. </p>
  <p>You can visit us online at <a target="_blank" href="https://liminalcreative.com">https://liminalcreative.com</a>.</p>
  '
  ;
}

 
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );

remove_action('welcome_panel', 'wp_welcome_panel');

// register da scripts that we often use
function enqueue_scripts() {

  // register the styles
  wp_register_style( 'reset', get_template_directory_uri() . '/_assets/styles/reset.css', array(), '', 'all' );
  wp_register_style( 'style', get_template_directory_uri() . '/style.css', array(), '', 'all' );
  wp_register_style( 'flexboxgrid', get_template_directory_uri() . '/_assets/css/flexgrid.css', array(), '', 'all' );
  wp_register_style( 'mobile', get_template_directory_uri() . '/_assets/css/mobile.css', array(), '', 'all' );
  wp_register_style( 'fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), '', 'all' );
  wp_register_style( 'pushy', get_template_directory_uri() . '/_assets/css/pushy.css', array(), '', 'all' );
  wp_register_style( 'menu', get_template_directory_uri() . '/_assets/css/menu.css', array(), '', 'all' );
  wp_register_style( 'flickity', get_template_directory_uri() . '/_assets/css/flickity.css', array(), '1.1.5', 'all' );

  // register the scripts 
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, '1.10.1');
  wp_register_script( 'flickityscript', get_template_directory_uri() . '/_assets/scripts/flickity.pkgd.min.js', array(), true,true );
  wp_register_script( 'fancybox-js', get_template_directory_uri() . '/_assets/scripts/jquery.fancybox.min.js', array(), true,true );
  wp_register_script( 'pushy', get_template_directory_uri() . '/_assets/scripts/pushy.js', array(), true,true );
  wp_register_script( 'pin', get_template_directory_uri() . '/_assets/scripts/pin.js', array(), true,true );

  // enqueue the enqueue the styles
  wp_enqueue_style('reset');
  wp_enqueue_style('style');
  wp_enqueue_style('pushy');
  wp_enqueue_style('flexboxgrid');  
  wp_enqueue_style('flickity');
  wp_enqueue_style('menu');
  wp_enqueue_style('fancybox-css');
  wp_enqueue_style('mobile');
  
  // enqueue the scripts
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'pushy' );
  wp_enqueue_script( 'flickityscript' );
  wp_enqueue_script( 'fancybox-js' );
  wp_enqueue_script( 'pin' );

}

add_action('wp_enqueue_scripts', 'enqueue_scripts');

// Add RSS links to the header
add_theme_support('automatic-feed-links');

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
   global $post;
  return '[...] <div class="read-more"><a class="button" href="'. get_permalink($post->ID) . '"> Read More</a></div>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Add some featured images and sizes
 if ( function_exists( 'add_theme_support' ) ) {
 add_theme_support( 'post-thumbnails' );
 set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

// additional image sizes
 add_image_size( 'image-square', 300, 300, true ); // 150 pixels wide (and unlimited height)
 add_image_size( 'image-wide', 640, 340, true ); // 400 pixels wide (and unlimited height)
 add_image_size( 'image-single', 640, 420, true ); // 400 pixels wide (and unlimited height)
 add_image_size( 'image-portrait', 220, 640, true ); // 400 pixels wide (and unlimited height)
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
  echo 'Created by <a href="http://liminalcreative.com">Liminal Creative, Inc.</a>';
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