<?php

function theme_scripts() {
  wp_register_script('theme_plugins', get_stylesheet_directory_uri() . '/assets/js/canvas_blur.js', false, null, false);
  wp_enqueue_script('theme_plugins');
}

add_action('wp_enqueue_scripts', 'theme_scripts', 100);
