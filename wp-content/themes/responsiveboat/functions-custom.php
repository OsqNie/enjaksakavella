<?php

/**
 * Register `team` post type
 */
function team_post_type() {
   
   // Labels
  $labels = array(
    'name' => _x("Tiimi", "post type general name"),
    'singular_name' => _x("Tiimi", "post type singular name"),
    'menu_name' => 'Tiimiprofiilit',
    'add_new' => _x("Lisää uusi", "team item"),
    'add_new_item' => __("Lisää uusi profiili"),
    'edit_item' => __("Muokkaa profiilia"),
    'new_item' => __("Uusi Profiili"),
    'view_item' => __("Tarkastele profiilia"),
    'search_items' => __("Etsi profiileista"),
    'not_found' =>  __("Profiileja ei löytynyt"),
    'not_found_in_trash' => __("Profiileja ei löytynyt roskakorista"),
    'parent_item_colon' => ''
  );
  
  // Register post type
  register_post_type('team' , array(
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'menu_icon' => get_stylesheet_directory_uri() . '/images/team-icon.png',
    'rewrite' => false,
    'supports' => array('title', 'editor', 'thumbnail')
  ) );
}
add_action( 'init', 'team_post_type', 0 );

/**
 * Register `department` taxonomy
 */
function team_taxonomy() {
  
  // Labels
  $singular = 'Department';
  $plural = 'Departments';
  $labels = array(
    'name' => _x( $plural, "taxonomy general name"),
    'singular_name' => _x( $singular, "taxonomy singular name"),
    'search_items' =>  __("Search $singular"),
    'all_items' => __("All $singular"),
    'parent_item' => __("Parent $singular"),
    'parent_item_colon' => __("Parent $singular:"),
    'edit_item' => __("Edit $singular"),
    'update_item' => __("Update $singular"),
    'add_new_item' => __("Add New $singular"),
    'new_item_name' => __("New $singular Name"),
  );

  // Register and attach to 'team' post type
  register_taxonomy( strtolower($singular), 'team', array(
    'public' => true,
    'show_ui' => true,
    'show_in_nav_menus' => true,
    'hierarchical' => true,
    'query_var' => true,
    'rewrite' => false,
    'labels' => $labels
  ) );
}
add_action( 'init', 'team_taxonomy', 0 );