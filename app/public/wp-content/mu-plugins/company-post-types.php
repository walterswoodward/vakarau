<?php

function company_post_types() {
  // Event Post Type:
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'events'
    ),
    'labels' => array(
    "name" => 'Events',
    'add_new_item' => 'Add New Event',
    "edit_item" => 'Edit Event',
    'all_items' => 'All Events',
    'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar-alt'
  ));
  // Project Post Type:
  register_post_type('theme', array(
    'supports' => array('title', 'editor'),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'themes'
    ),
    'labels' => array(
    "name" => 'Themes',
    'add_new_item' => 'Add New Theme',
    "edit_item" => 'Edit Theme',
    'all_items' => 'All Themes',
    'singular_name' => 'Theme'
    ),
    'menu_icon' => 'dashicons-list-view'
  ));
  // Teacher Post Type:
  register_post_type('teacher', array(
    'supports' => array('title', 'editor'),
    'public' => true,
    'has_archive' => true,
    'rewrite' => array(
      'slug' => 'teachers'
    ),
    'labels' => array(
    "name" => 'Teachers',
    'add_new_item' => 'Add New Teacher',
    "edit_item" => 'Edit Teacher',
    'all_items' => 'All Teachers',
    'singular_name' => 'Teacher'
    ),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));

  
}

add_action('init', 'company_post_types');