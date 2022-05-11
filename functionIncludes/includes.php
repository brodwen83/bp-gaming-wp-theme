<?php

// Loading css and javascript files
function loadingFiles()
{
  wp_enqueue_style('themecss', get_theme_file_uri("assets/css/theme.css"));
}
add_action('wp_enqueue_scripts', 'loadingFiles');
