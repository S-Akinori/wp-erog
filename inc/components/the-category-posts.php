<?php
$title = $args['title'] ?? '同じカテゴリーの動画';
$numberposts = $args['numberposts'] ?? 5;
$categories = get_the_category();
$is_flex = $args['is_flex'] ?? false;
?>

<div class="category-posts">
  <h2 class="c-title"><?= $title; ?></h2>
  <div>
    <div class="<?= $is_flex ? 'md:flex flex-wrap' : '' ?>">
        <?php
          $popular_posts = get_posts_by_category($categories[0]->term_id, $numberposts);
          foreach($popular_posts as $post):
          setup_postdata($post);
        ?>
        <div class="py-4 md:px-4 <?= $is_flex ? 'md:w-1/3' : '' ?>">
          <a href="<?php the_permalink() ;?> "><img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" width="1200" height="800" alt="<?php the_title(''); ?>"></a>
          <a href="<?php the_permalink() ;?> "><?php the_title(); ?></a>
        </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>