<?php

function load_scripts(){
  wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('fancybox-jquery', get_template_directory_uri() . '/css/jquery.fancybox.css');
  wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
  wp_enqueue_style('animate-min', get_template_directory_uri() . '/css/animate.min.css');
  wp_enqueue_style('bootstrap-cdn', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');

  wp_enqueue_script('jquery-2', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', [], '1.11.13', true);
  wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', [], 'null', true);
  wp_enqueue_script('fancybox-jq', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', [], 'null', true);
  wp_enqueue_script('waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', [], 'null', true);
  wp_enqueue_script('retina', get_template_directory_uri() . '/js/retina.min.js', [], 'null', true);
  wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', [], 'null', true);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], 'null', true);
}

add_action('wp_enqueue_scripts', 'load_scripts');

// Sidebars

add_action('widgets_init', 'minifolio_sidebars');

function minifolio_sidebars(){
  register_sidebar([
    'name' => 'Banner',
    'id' => 'banner',
    'description' => 'Type any text here',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ]);

  register_sidebar([
    'name' => 'About Me',
    'id' => 'about-me',
    'description' => 'Type any text here too!',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ]);

  register_sidebar([
    'name' => 'About Me - Second Area',
    'id' => 'about-me2',
    'description' => 'Please drag your widgets here',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ]);

  register_sidebar([
    'name' => 'Hire me',
    'id' => 'hire-me',
    'description' => 'Please drag your widgets here',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ]);

  register_sidebar([
    'name' => 'Contact',
    'id' => 'contact',
    'description' => 'Please drag your widgets here',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>'
  ]);
}

register_nav_menus([
  'position' => 'The Main Menu',
  'social' => 'The Social Icons Menu'
]);




