<?php 
  // if($_SESSION['age_verification'] === false && !is_404()) {
  //   wp_redirect('404');
  // }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta property="og:title" content="Myクリニック" />
  <meta property="og:description" content="クリニック向けテンプレートです" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image.png" />
  <meta property="og:site_name" content="Myクリニック" />
  <meta property="og:locale" content="ja_JP"  />
  <link rel="icon" href="/favicon.ico" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css">
  <?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="flex justify-between items-center p-4">
      <div class="c-logo"><a href="<?= home_url(); ?>"><?= get_bloginfo(); ?></a></div>
      <button class="js-menu-button flex items-center justify-center md:hidden">
        <span class="material-icons">
          menu
        </span>
      </button>
    </div>
    <div class="p-header-menu js-header-menu">
      <div class="p-4 md:hidden"><?php get_search_form(); ?></div>
      <?php wp_nav_menu(array(
        'container' => 'nav',
        'theme_location' => 'header',
        'menu_class' => 'p-header-menu__nav'
      )); ?>
    </div>
  </header>
  <!-- <?php if($_SESSION['age_verification'] === null) : ?>
  <div id="ageVerification" class="fixed top-0 left-0 w-full h-full bg-white" style="z-index: 9999;">
    <div class="flex items-center justify-center w-full h-full">
      <div class="p-4 mx-4 border w-full md:w-1/2">
        <div class="text-center text-xl">年齢確認</div>
        <div class="text-center">18歳以上ですか？</div>
        <form action="<?= get_template_directory_uri() ?>/inc/functions/verify-age.php" method="POST">
          <div class="flex mt-8">
            <div class="w-1/2 px-4">
              <button type="submit" name="age_verification" value="0" class="c-button block w-full">いいえ</button>
            </div>
            <div class="w-1/2 px-4">
              <button type="submit" name="age_verification" value="1" class="c-button bg-main block w-full">はい</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php endif; ?> -->
  <main>