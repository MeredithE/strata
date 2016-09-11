<?php
function strata_styles() {
	wp_enqueue_style( 'strata-stylesheet', get_stylesheet_directory_uri() . '/style.css');
  wp_enqueue_style( 'strata-font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style('strata-google-font', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic');
}

add_action('wp_enqueue_scripts','strata_styles');

function create_custom_post_types() {
   register_post_type('recent_work',
    array(
      'labels' => array(
        'name' => __('Recent Work'),
        'singular_name' => __('Recent Work')
        ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'recent_work'),
    )
  );
}

add_action('init', 'create_custom_post_types');
