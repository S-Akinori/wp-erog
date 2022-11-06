<?php get_header(); ?>
<article>
  <div class="mx-auto container my-12">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div>
      <div class="flex justify-center">
        <iframe src="https://www.ppc-direct.com/index21.html?affid=227018" width="300" height="100" frameborder="no" scrolling="no" title="バナー"></iframe>
      </div>
      <div class="video-container">
        <?php the_field('embed'); ?>
      </div>
      <div class="flex justify-center">
        <iframe src="https://www.ppc-direct.com/index21.html?affid=227018" width="300" height="100" frameborder="no" scrolling="no" title="バナー"></iframe>
      </div>
      <div class="px-4">
        <h1><?php the_title(); ?></h1>
        <p><?php the_date(); ?></p>
        <div><?php the_tags('<ul class="p-tag-list"><li class="p-tag-list__item p-tag-list__item--first">', '</li><li class="p-tag-list__item">', '</li></ul>'); ?></div>
      </div>
      <div class="mt-8 px-4">
        <?php the_content(); ?>
      </div>
      <div class="flex justify-center">
        <iframe src="https://www.ppc-direct.com/index35.html?affid=227018" width="320" height="950" frameborder="no" scrolling="no" title="バナー"></iframe>
      </div>
    </div>
    <?php endwhile; endif ?>
  </div>
  <div class="p-4 mx-auto container border-t border-main">
    <?php get_sidebar('single'); ?>
  </div>
</article>
<?php get_footer(); ?>