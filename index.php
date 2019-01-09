<?php
$consumer_key = 'NC9j4T5f9thtslNd0jt4mO6gl'
$consumer_secret = 'cf89gV09qQKRWMMM7Eh3m54iYBpEtWGV5gC1dPRy1EIJmoxzVZ'
$access_token = '284037749-6JKOdR3MRgmIdLW4tGXsKp0UAmKlj1q99MyOSbSN'
$access_token_secret = 'G6Tlw0uVxYUgPRWjZffcvMqiIoR2htMLA5FGftHwCNseR'

require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

//connect to API
$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$connect = $connection->get("account/verify_credentials");

//get my Followers
$userProfile = $connection->get("users/lookup", {"screen_name" => meName})

//get list of followers
function pullFollowers(){
  $idolFollowers = $connection->get("")
}

?>
