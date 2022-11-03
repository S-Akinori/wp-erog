<?php

session_start();
$_SESSION['age_verification'] = $_POST['age_verification'] === '1' ? true : false;
$url = isset($_SERVER['HTTPS']) ? 'https://' . $_SERVER['HTTP_HOST'] : 'http://' . $_SERVER['HTTP_HOST'];
if($_POST['age_verification'] === '1') {
  header('Location: ' . $url);
} else {
  header('Location: ' . $url . '/404');
}

die();