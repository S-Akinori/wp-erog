<?php

function get_popular_posts($numberposts = 3) {
  $category_id = 9;
  $args = array(
    'numberposts' => $numberposts,
    'category' => $category_id, 
  );
  return get_posts($args);
}