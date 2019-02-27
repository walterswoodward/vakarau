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
  // register_nav_menu('headerMenuLocation', 'Header Menu Location'); // See main-navigation class in header.php
  // register_nav_menu('footerLocationOne', 'Footer Location One'); // See fist nav-list in footer.php
  register_nav_menu('footerLocationTwo', 'Footer Location Two'); // See second nav-list in footer.php
  add_theme_support('title-tag');
}

add_action('after_setup_theme', 'company_features');

function company_adjust_queries ($query) {
  // You can adjust queries here OR write completely custom queries above your
  // while loops in archive-xxxxx file.  As you can see below, we determined
  // that for event and theme it would be best to adjust the queries provided
  // out of the box
  
  // !is_admin() ensures that only the frontend queries are adjusted
  // is_post_type_archive('event') points specifically to the archive event page
  // The last one is just kind of a safety check - only adjust the default query
  // for e.g. 'theme' or 'event'
  
  if (!is_admin() AND is_post_type_archive('theme') AND $query->is_main_query()){
    $query->set('post_per_page', '-1');
    $query->set('orderby', 'title');
    $query->set('order', 'ASC');
  }

  if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
      array(
        'key' => 'event_date',
        'compare' => '>=',
        "value" => $today,
        'type' => 'numeric'
      )
    ));
  }
}

add_action('pre_get_posts', 'company_adjust_queries');