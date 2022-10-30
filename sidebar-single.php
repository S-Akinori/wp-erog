<aside>
  <div class="mb-4">
    <h2>カテゴリー</h2>
    <?php wp_nav_menu(array(
      'theme_location' => 'sidebar',
      'menu_class' => 'p-sidebar-menu'
    )); ?>
  </div>
  <div class="mb-4">
    <?php get_template_part('./inc/components/the-category-posts', null, ['is_flex' => true]) ?>
  </div>
  <div class="mb-4">
    <?php get_template_part('./inc/components/popular-posts', null, ['is_swiper' => false, 'is_flex' => true]) ?>
  </div>
</aside>