<?php

function company_post_types() {
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
}

add_action('init', 'company_post_types');
