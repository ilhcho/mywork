<?php

session_start();

require_once('lib/twitteroauth.php');
$consumer_key = 'aVwh6BwAXQPMNFirH4r0ObX67';
$consumer_secret = '4unZ57VmaINZDh0USMab0x8e7l8dfOQNQNgHOUFgipioZ3UFe7';
 
// Request token 을 포함한 TwitterOAuth object 생성
$connection = new TwitterOAuth($consumer_key, $consumer_secret,
        $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
 
// 토큰 수령
$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
$token = $access_token['oauth_token'];
$token_secret = $access_token['oauth_token_secret'];

?>