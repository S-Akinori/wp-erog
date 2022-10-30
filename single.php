<?php get_header(); ?>
<article>
  <div class="mx-auto container mb-12">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div>
      <div>
        <?php the_field('embed'); ?>
      </div>
      <div class="px-4">
        <h1><?php the_title(); ?></h1>
        <p><?php the_date(); ?></p>
        <div><?php the_tags('<ul class="p-tag-list"><li class="p-tag-list__item p-tag-list__item--first">', '</li><li class="p-tag-list__item">', '</li></ul>'); ?></div>
      </div>
      <div class="mt-8">
        <?php the_content(); ?>
      </div>
    </div>
    <?php endwhile; endif ?>
  </div>
  <div class="p-4 mx-auto container border-t border-main">
    <?php get_sidebar('single'); ?>
  </div>
</article>
<?php get_footer(); ?>