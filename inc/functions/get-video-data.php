<?php

function get_video_data($url = '') {
	$res = wp_remote_get($url);
	if(!$json->errors) {
		$videos = json_decode($res['body'], true);
  } else {
    $videos = ['error' => 'エラーが発生しました'];
	}
	return $videos;
}