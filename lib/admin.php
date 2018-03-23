<?php

// BRANDING

/**
 * Add additional custom field
 */

add_action ( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action ( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields ( $user )
{
?>
    <h3>Extra profile information</h3>
    <table class="form-table">
        <tr>
            <th><label for="twitter">Twitter</label></th>
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please enter your Twitter username.</span>
            </td>
        </tr>
        <tr>
            <th><label for="facebook">Facebook</label></th>
            <td>
                <input type="text" name="facebook" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">Please add the link to your Facebook page.</span>
            </td>
        </tr>
    </table>
<?php
}

add_action ( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action ( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id )
{
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;
    /* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
    update_user_meta( $user_id, 'twitter', $_POST['twitter'] );
    update_user_meta( $user_id, 'facebook', $_POST['facebook'] );
}


// Add custom branding to the footer of the admin
 
function modify_footer_admin () {
  echo 'Created by <a href="http://www.343design.com">343design</a>.';
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

// EDITOR AND APPEARANCE

// Add us some fancy menus

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ) 
    )
  );
}
add_action( 'init', 'register_my_menus' );

/**
 * Show Kitchen Sink in WYSIWYG Editor
 */
function mb_unhide_kitchensink($args) {
  $args['wordpress_adv_hidden'] = false;
  return $args;
}

  
// Remove all the stupid face widgets from the dashboard

  add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
 global $wp_meta_boxes;
 
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
 unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
 unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
 
 wp_add_dashboard_widget('custom_help_widget', 'Help and Support', 'custom_dashboard_help');
  }
 
 function custom_dashboard_help() {
  echo '<p>If you need help or support for your theme, please contact 343design at <a href="mailto:todd@343design.com">todd@343design.com</a></p>';
 }

// Remove unnecessary items from the admin bar
function gist_custom_admin_bar_remove() {
  global $wp_admin_bar;
  // $wp_admin_bar->remove_menu('wp-logo'); // removes the WordPres logo from the top left 
     $wp_admin_bar->remove_menu('comments'); // removes comments link
  // $wp_admin_bar->remove_menu('new-media'); // removes media link
     $wp_admin_bar->remove_menu('new-link'); // removes add a new link, link
  //   $wp_admin_bar->remove_menu('new-theme'); // removes add new theme link
}
add_action('wp_before_admin_bar_render', 'gist_custom_admin_bar_remove', 0);

// Rid ourselves of the default metaboxes on the post screen
    function remove_default_post_screen_metaboxes() {
  remove_meta_box( 'postexcerpt','post','normal' ); // Excerpt Metabox
  remove_meta_box( 'trackbacksdiv','post','normal' ); // Talkback Metabox
  remove_meta_box( 'authordiv','post','normal' ); // Author Metabox
  }
    add_action('admin_menu','remove_default_post_screen_metaboxes');
 
 // Rid ourselves of the default metaboxes on the pages screen
    function remove_default_page_screen_metaboxes() {
  remove_meta_box( 'postexcerpt','post','normal' ); // Excerpt Metabox
  remove_meta_box( 'trackbacksdiv','post','normal' ); // Talkback Metabox
  remove_meta_box( 'authordiv','post','normal' ); // Author Metabox
  }
    add_action('admin_menu','remove_default_page_screen_metaboxes');
  

?>