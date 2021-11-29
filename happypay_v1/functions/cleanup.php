<?php
/**
 * Cleanup
 * 
 */


/**
 * Less stuff in <head>
 * 
 */
if ( ! function_exists('happypay_cleanup_head') ) {
  function happypay_cleanup_head() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
  }
}
add_action('init', 'happypay_cleanup_head');


/**
 * Show less info to users on failed login for security.
 * (Will not let a valid username be known.)
 * 
 */
if ( ! function_exists('show_less_login_info') ) {
  function show_less_login_info() {
    return "<strong>ERROR</strong>: Stop guessing!";
  }
}
add_filter( 'login_errors', 'show_less_login_info' );


/**
 * Do not generate and display WordPress version
 * 
 */
if ( ! function_exists('happypay_remove_generator') ) {
  function happypay_remove_generator()  {
    return '';
  }
}
add_filter( 'the_generator', 'no_generator' );


/**
 * Remove Query Strings From Static Resources
 * 
 */
/*if ( ! function_exists('happypay_remove_script_version') ) {
  function happypay_remove_script_version( $src ) {
    if ( current_user_can('manage_options') ) {
      return $src;
    }
    if( strpos( $src, '?ver=' ) ) {
      $src = remove_query_arg( 'ver', $src );
      return $src;
    }
  }
}
add_filter( 'script_loader_src', 'happypay_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', 'happypay_remove_script_version', 15, 1 );*/


/**
 * Comment Reply Button
 * 
 */
function replace_reply_link_class($class){
  $class = str_replace("class='comment-reply-link", "class='comment-reply-link btn btn-primary", $class);
  return $class;
}
add_filter('comment_reply_link', 'replace_reply_link_class');


/**
 * Remove all dashboard widgets
 * 
 */
function remove_dashboard_widgets() {
  global $wp_meta_boxes;
  
  unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
  unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
  unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
  unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
  unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts'] );
  unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
  unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
  unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );

  remove_action('welcome_panel', 'wp_welcome_panel');
  remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );


/**
 * Disable Emoji mess
 * 
 */
function disable_wp_emojicons() {
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
  add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  return is_array( $plugins ) ? array_diff( $plugins, array( 'wpemoji' ) ) : array();
}


/**
 * 
 * 
 */
