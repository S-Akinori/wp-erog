<?php
$title = $args['title'] ?? '人気の動画';
$numberposts = $args['numberposts'] ?? 5;
$is_swiper = $args['is_swiper'] ?? true;
$container_class = $args['container_class'] ?? '';
$is_flex = $args['is_flex'] ?? false;
?>

<div class="popular-posts">
  <h2 class="c-title"><?= $title; ?></h2>
  <?php if($is_swiper): ?>
  <div class="swiper">
    <div class="swiper-wrapper">
        <?php
          $popular_posts = get_popular_posts($numberposts);
          foreach($popular_posts as $post):
          setup_postdata($post);
        ?>
        <div class="swiper-slide">
          <a href="<?php the_permalink() ;?> "><img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : the_field('thumbnail'); ?>"></a>
            <a href="<?php the_permalink() ;?> "><?php the_title(); ?></a>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
  <?php else: ?>
    <div>
      <div class="<?= $is_flex ? 'md:flex flex-wrap' : '' ?>">
          <?php
            $popular_posts = get_popular_posts($numberposts);
            foreach($popular_posts as $post):
            setup_postdata($post);
          ?>
          <div class="py-4 md:px-4 <?= $is_flex ? 'md:w-1/3' : '' ?>">
            <a href="<?php the_permalink() ;?> "><img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : the_field('thumbnail'); ?>"></a>
              <a href="<?php the_permalink() ;?> "><?php the_title(); ?></a>
          </div>
          <?php endforeach; ?>
      </div>
    </div>
  <?php endif; ?>
</div>