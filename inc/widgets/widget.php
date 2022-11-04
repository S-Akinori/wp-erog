<?php

function theme_slug_widgets_init() {
  register_sidebar( array(
      'name' => 'ヘッダーテキスト', //ウィジェットの名前を入力
      'id' => 'header_text', //ウィジェットに付けるid名を入力,
      'class' => 'p-header-text'
  ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );