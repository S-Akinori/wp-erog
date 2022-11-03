<?php get_header(); ?>
  <div class="c-fv">
    <div class="c-fv__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv-top.jpg" alt="" /></div>
    <div class="c-fv__text-container">
      <div class="c-fv__text-container__title">
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
  <div class="p-4 container mx-auto">
    <?php get_template_part('./inc/components/popular-posts', null) ?>
  </div>
  <div class="container mx-auto md:flex">
    <div class="md:w-2/3">
      <div class="flex flex-wrap">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="p-post-box md:w-1/2">
          <div>
            <div class="relative">
              <a href="<?php the_permalink() ?>"><img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : the_field('thumbnail'); ?>" width="1200" height="800" alt="<?php the_title(); ?>"></a>
              <div class="absolute right-0 bottom-0 bg-white text-sm px-2 py-1"><?php the_field('duration'); ?></div>
            </div>
            <div>
              <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
              <div class="flex justify-between mb-2">
                <div class="text-sm"><?php the_date() ?></div>
                <div class="text-sm bg-main px-2"><?php the_field('view'); ?>views</div>
              </div>
              <p><?php echo esc_html(get_the_excerpt()); ?></p>
            </div>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php if(function_exists("pagination")) {
          pagination();
      } ?>
    </div>
    <div class="md:w-1/3 p-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>