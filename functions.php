<?php

require_once __DIR__ . '/inc/functions/get-popular-posts.php';
require_once __DIR__ . '/inc/functions/get-posts-by-category.php';

add_theme_support('post-thumbnails');
// add_theme_support('menus');

function register_my_menus() {
  register_nav_menus(
    array(
      'header' => __( 'Header Menu' ),
      'sidebar' => __( 'Sidebar Menu' )
     )
   );
 }
 add_action( 'init', 'register_my_menus' );

 function theme_slug_widgets_init() {
  register_sidebar( array(
      'name' => 'トップFV下', //ウィジェットの名前を入力
      'id' => 'top_fv_bottom', //ウィジェットに付けるid名を入力,
      'class' => 'p-top_fv_bottom'
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );