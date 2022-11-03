<?php
  add_action('admin_menu', 'custom_menu_page');
  function custom_menu_page(){
    add_menu_page('スクレイピング', 'スクレイピング', 'administrator', 'scraping_page', 'add_scraping_page', 'dashicons-admin-generic', 4);
  }

  function add_scraping_page() {
    $videos = null;
    if($_POST['url']) {
      $videos = get_video_data($_POST['url']);
      $_SESSION['videos'] = $videos;
    } else if($_POST['token'] == session_id()) {
      foreach($_SESSION['videos'] as $video) {
        $post_data = [
          'post_title' => $video['title'],
          'post_excerpt' => $video['title'],
          'post_status' => 'publish',
        ];
        $post_id = wp_insert_post($post_data);
        $embed = '<iframe src="https://www.pornhub.com/embed/'.$video['id'].'" frameborder="0" scrolling="no" allowfullscreen></iframe>';
        update_field('duration', $video['duration'], $post_id);
        update_field('embed', $embed, $post_id);
        update_field('view', $video['views'], $post_id);
        update_field('thumbnail', $video['thumbnail'], $post_id);
      }
    }
    // $dom = new DOMDocument('1.0', 'UTF-8');
    // $html = file_get_contents("https://jp.pornhub.com/");//データを抽出したいURLを入力
    // @$dom->loadHTML($html);
    // $xpath = new DOMXpath($dom);
    // $title = $xpath->query("//title")->item(0)->nodeValue; //タイトルを抽出して出力
?>

<div class="wrap">
  <h2>スクレイピング</h2>
  <?php if($videos === null): ?>
    <form action="<?= (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" method="POST">
      <input type="text" name="url" value="https://script.google.com/macros/s/AKfycbzZ6WF7_B7uFWUjWNq8Afub88kpamuRYqYZNXC_0j_HLi8W9pbYNZuASutIKngESiI/exec" style="width: 100%">
      <button type="submit">データ取得</button>
    </form>
  <?php elseif($videos['error']): ?>
  <div><?= $videos['error']; ?></div>
  <?php else: ?>
  <div>
    <?php foreach($videos as $video): ?>
      <ul>
        <li>ID: <?= $video['id']; ?></li>
        <li>URL: <?= $video['url']; ?></li>
        <li>タイトル: <?= $video['title']; ?></li>
        <li>再生時間: <?= $video['duration']; ?></li>
        <li>サムネ: <?= $video['thumbnail']; ?></li>
        <li>再生数: <?= $video['views']; ?></li>
        <li>評価: <?= $video['rate']; ?></li>
        <li>投稿日: <?= $video['createdAt']; ?></li>
      </ul>
    <?php endforeach; ?>
    <form action="<?= (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>" method="POST">
      <input type="hidden" name="token" value="<?= session_id(); ?>">
      <button type="submit">投稿する</button>
    </form>
  </div>
  <?php endif; ?>
</div>

<?php
}