<?php
// adding custom logo
function bp_gaming_theme_setup()
{
  // Add <title> tag support
  add_theme_support('title-tag');

  // Add custom-logo support
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'bp_gaming_theme_setup');
