<?php

// menus

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('header-submenu',__( 'Header Sub-Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

$block_cat_ids = array(
  get_cat_id("events-and-retreats"),
  get_cat_id("Events and Retreats"),
  get_cat_id("events-and-retreat"),
  get_cat_id("Events and Retreat"),
  get_cat_id("journeys"),
  get_cat_id("Journeys"),
  get_cat_id("journey"),
  get_cat_id("Journeys"),
  get_cat_id("private-sessions"),
  get_cat_id("Private Sessions"),
  get_cat_id("private-session"),
  get_cat_id("Private Session"),
  get_cat_id("psychic-development"),
  get_cat_id("psychic-development"),
  get_cat_id("Psychic Development"),
  get_cat_id("workshops"),
  get_cat_id("Workshops"),
  get_cat_id("workshop"),
  get_cat_id("Workshop")
);

$main_query = new WP_Query(array (
    "post_type" => "post",
    "posts_per_page" => 1,
    "category__not_in" => $block_cat_ids
));

function sidebar_query($main_post_id){
  global $block_cat_ids;
  return new WP_Query(array (
      "post_type" => "post",
      "post__not_in" => array($main_post_id),
      "category__not_in" => $block_cat_ids
  ));
}

$event_query = new WP_Query(array (
    "post_type" => "post",
    "posts_per_page" => 1,
    "category__in" => $block_cat_ids
));

?>
