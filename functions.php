<?php
/**
 * Required by WordPress.
 *
 * Keep this file clean and only use it for requires.
 */

// Removes thematic_blogtitle from the thematic_header phase
function remove_roots_scripts() {
    remove_action('wp_enqueue_scripts','roots_scripts', 100);
}
// Call 'remove_roots_scripts' during WP initialization
add_action('init','remove_roots_scripts');

function child_roots_scripts() {
  wp_enqueue_style('childs_app', get_stylesheet_directory_uri() . '/assets/css/app.css', false, null);

  // jQuery is loaded in header.php using the same method from HTML5 Boilerplate:
  // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '1.8.3', false);
  }

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_register_script('roots_plugins', get_template_directory_uri() . '/assets/js/plugins.js', false, null, false);
  wp_register_script('roots_main', get_template_directory_uri() . '/assets/js/main.js', false, null, false);
  wp_enqueue_script('roots_plugins');
  wp_enqueue_script('roots_main');
}

// Add our custom function to the 'thematic_header' phase
add_action('wp_enqueue_scripts', 'child_roots_scripts', 100);
