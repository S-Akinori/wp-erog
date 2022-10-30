<?php

function get_posts_by_category($category_id, $numberposts = 5) {
  $args = array(
    'numberposts' => $numberposts,
    'category' => $category_id, 
  );
  return get_posts($args);
}