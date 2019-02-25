<?php

// This function is necessary for index.php to access style.css
function vakarau_files() {
  wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime()); 
}

// This is I believe what is called a "hook" -- It basically injects this bit of
// code write before the word press scripts run, that runs vakarau_files() --
// -- gives access to style.css file
// imports google-fonts, font-awesome, and compressed JS code
add_action('wp_enqueue_scripts', 'vakarau_files');

function company_features() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location'); // See main-navigation class in header.php
  register_nav_menu('footerLocationOne', 'Footer Location One'); // See fist nav-list in footer.php
  register_nav_menu('footerLocationTwo', 'Footer Location Two'); // See second nav-list in footer.php
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'company_features');