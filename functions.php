<?php

require_once __DIR__ . '/inc/functions/get-popular-posts.php';
require_once __DIR__ . '/inc/functions/get-posts-by-category.php';
require_once __DIR__ . '/inc/functions/get-video-data.php';
require_once __DIR__ . '/inc/admin/scraping.php';
// require_once __DIR__ . '/inc/functions/verify-age.php';

require_once __DIR__ . '/inc/widgets/widget.php';

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

function init_session_start() {
  // セッションが開始されていなければここで開始
  if( session_status() !== PHP_SESSION_ACTIVE ) {
    session_start();
  }
}

add_action( 'init', 'init_session_start' );

// カスタムヘッダー -------------------------
$custom_header = array(
  'random-default' => false,
  'width' => 1920,
  'height' => 1080,
  'flex-height' => true,
  'flex-width' => false,
  'default-text-color' =>'',
  'header-text' => true,
  'uploads' => true,
  'default-image' => get_stylesheet_directory_uri() . '/assets/images/fv-top.jpg',
);
add_theme_support('custom-header', $custom_header);