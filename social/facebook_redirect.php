<?php
// 변수 설정 등
$consumer_key = '854420357955995';
$consumer_secret='760b3016d7e71c357389d6ae037a5bb3';
$domain = 'http://' . $_SERVER['HTTP_HOST'] . '/';
 
// 파라미터
$args = "scope=publish_stream,offline_access,read_stream"
        . "&client_id=" . $consumer_key
        . "&redirect_uri=" . $domain . '/social/facebook_access.php';
 
// 호출 uri
$uri = "https://graph.facebook.com/oauth/authorize?" . $args;
 
// redirect
header('Location: ' . $uri);

?>