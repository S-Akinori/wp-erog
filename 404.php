<?php get_header(); ?>
  <div class="c-fv">
    <div class="c-fv__image"><img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" /></div>
    <div class="c-fv__text-container">
      <div class="c-fv__text-container__title">
        <div class="text-center text-xl mb-4">ページが見つかりませんでした</div>
        <div class="mb-4"><?php get_search_form(); ?></div>
        <div>
          <ul class="p-tag-list">
            <?php
              $args = array(
                'orderby' => 'count',
                'order' => 'desc',
                'number' => 10
              );
              $tags = get_terms('post_tag', $args);
              foreach($tags as $tag) :
            ?>
              <li class="p-tag-list__item"><a href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>