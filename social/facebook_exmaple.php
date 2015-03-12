<?php

session_start();

// library 로드, 변수 설정 등
require_once('lib/facebookoauth.php');
$consumer_key = '854420357955995';
$consumer_secret = '760b3016d7e71c357389d6ae037a5bb3';

// Access token 을 포함한 TwitterOAuth object 생성
$connection = new FacebookOAuth($consumer_key, $consumer_secret, $_SESSION['token']);
 
// get user profile
$user = $connection->get('me');
//echo $user->name;


// get home timeline
/*
$params = array('limit'=>10);
$timeline = $connection->get('me/home',$params);

foreach ($timeline ->data as $status) {
	echo($status->name);
	echo ($status->message);
}
*/

 

$params = array('message' => 'test');
$status = $connection->post('me/feed', $params);
print_r($status)


?>