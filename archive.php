<?php get_header(); ?>
<div class="c-fv">
  <div class="c-fv__image"><img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" /></div>
  <div class="c-fv__text-container">
    <div class="c-fv__text-container__title">
      <div class="mb-4 text-center text-xl"><?php single_cat_title(); ?></div>
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
  <div class="flex justify-center">
    <iframe src="https://www.ppc-direct.com/index21.html?affid=227018" width="300" height="100" frameborder="no" scrolling="no" title="バナー"></iframe>
  </div>
  <div class="p-4 container mx-auto">
    <?php get_template_part('./inc/components/popular-posts', null) ?>
  </div>
  <div class="flex justify-center">
    <iframe src="https://www.ppc-direct.com/index21.html?affid=227018" width="300" height="100" frameborder="no" scrolling="no" title="バナー"></iframe>
  </div>
  <div class="container p-4 mx-auto md:flex">
    <div class="md:w-2/3">
      <div class="flex flex-wrap">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="p-post-box md:w-1/2">
          <div>
            <div>
              <a href="<?php the_permalink() ?>"><img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" width="1200" height="800" alt="<?php the_title(); ?>"></a>
            </div>
            <div>
              <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
              <p><?php the_date() ?></p>
              <p><?php echo esc_html(get_the_excerpt()); ?></p>
            </div>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <?php if(function_exists("pagination")) {
          pagination();
      } ?>
      <div class="flex justify-center">
        <iframe src="https://www.ppc-direct.com/index35.html?affid=227018" width="320" height="950" frameborder="no" scrolling="no" title="バナー"></iframe>
      </div>
    </div>
    <div class="md:w-1/3 p-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>