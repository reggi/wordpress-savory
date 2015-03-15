<?php

// menus

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('header-submenu',__( 'Header Sub-Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );

function string_limit_words($string, $word_limit){
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}

function filter_search($query) {
    if ($query->is_search) {
	     $query->set('post_type', array('post', 'event'));
    };
    return $query;
};
add_filter('pre_get_posts', 'filter_search');

?>
