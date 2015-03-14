<?php

// menus

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('header-submenu',__( 'Header Sub-Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

$block_cat_ids = array(
  get_cat_id("Events and Retreats"),
  get_cat_id("Journeys"),
  get_cat_id("Journeys"),
  get_cat_id("Private Sessions"),
  get_cat_id("Psychic Development"),
  get_cat_id("Workshops")
);

$main_query = array (
    "post_type" => "post",
    "posts_per_page" => 1,
    "category__not_in" => $block_cat_ids
);

$event_query = array (
    "post_type" => "post",
    "posts_per_page" => 1,
    "category__in" => $block_cat_ids,
    "orderby" => "date",
    "order" => 'ASC',
);

?>
