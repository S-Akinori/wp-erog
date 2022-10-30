<?php get_header(); ?>
<div class="c-fv">
  <div class="c-fv__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv-top.jpg" alt="" /></div>
  <div class="c-fv__text-container">
    <div class="c-fv__text-container__title text-xl text-center"><?php single_cat_title(); ?></div>  
  </div>
</div>
  <div class="p-4 container mx-auto">
    <?php get_template_part('./inc/components/popular-posts', null) ?>
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
    </div>
    <div class="md:w-1/3 p-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
<?php get_footer(); ?>