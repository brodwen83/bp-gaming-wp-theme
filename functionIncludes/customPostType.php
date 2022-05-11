<?php

add_theme_support('post-thumbnails');

// init custom post type
function bp_gaming_articles_custom_post_type()
{

  $args = array(
    'labels' => array('name' => 'Articles', 'singular_name' => 'Article'),
    'hierarchical' => true,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'public' => true,
    'has_archives' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
  );

  register_post_type('articles', $args);
}
add_action('init', 'bp_gaming_articles_custom_post_type');
