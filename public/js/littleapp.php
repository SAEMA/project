<?php
ini_set('display_errors', 1);
require_once ('TwitterAPIExchange.php');
 
/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "4922466929-IlexNNEw9ADDhKN6gf0X0besMP0yWAhGVQVwYgq",

    'oauth_access_token_secret' => "NHYNzUgsIvQe896daccHiWVO8j7KVn5vqrdKaAHnLcSDR",

    'consumer_key' => "2TCEFmu49mzNaHQszJ9MP7Gds",
    'consumer_secret' => "kEefxWQdOZzuuIFxvhhFpbvaG9ix1a5r33FQb66uDo932ekNng"
);

$url = " https://api.twitter.com/1.1/statuses/user_timeline.json";
//$getfield = '?username=SAEMA&count=5';

$requestMethod = "GET";
$getfield = '?screen_name=@SAEMADI&count=5';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();


?>