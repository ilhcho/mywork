<?php
session_start();

// library 로드, 변수 설정 등
require_once('lib/facebookoauth.php');
$consumer_key = '854420357955995';
$consumer_secret = '760b3016d7e71c357389d6ae037a5bb3';
 
// FacebookOAuth object 생성
$connection = new FacebookOAuth($consumer_key, $consumer_secret);
 
// 토큰 수령
$access_token = $connection->getAccessToken($_REQUEST['code']);

$token = $access_token['oauth_token'];

//Usually save it to DB
$_SESSION['token']=$token

?>