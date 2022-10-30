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
      <div class="c-logo"><a href="<?= home_url(); ?>">Logo</a></div>
      <button class="js-menu-button flex items-center justify-center">
        <span class="material-icons">
          menu
        </span>
      </button>
    </div>
    <?php wp_nav_menu(array(
      'theme_location' => 'header',
      'menu_class' => 'p-header-menu'
    )); ?>
  </header>
  <main>