<?php
add_action('admin_menu', 'ads_menu_page');
function ads_menu_page()
{
    add_menu_page('広告設定', '広告設定', 'manage_options', 'ads_menu_page', 'add_ads_menu_page', '
  dashicons-admin-generic', 4);
    add_action('admin_init', 'register_custom_setting');
}
function add_ads_menu_page()
{
    ?>
<div class="wrap">
  <h2>広告設定</h2>
  <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
    <?php
    settings_fields('custom-menu-group');
    do_settings_sections('custom-menu-group'); ?>
    <div class="metabox-holder">
      <div class="postbox">
        <h3 class='hndle'><span>広告タグ</span></h3>
        <div class="inside">
          <div class="main">
            <p class="setting_description">iframeタグを入力（改行区切り）</p>
            <textarea style="width: 100%" rows="8" id="ads" name="ads" value="<?= get_option('ads'); ?>"></textarea>
          </div>
        </div>
      </div>
    </div>
    <?php submit_button(); ?>
  </form>
</div>
<?php
}
function register_custom_setting()
{
    register_setting('custom-menu-group', 'ads');
}