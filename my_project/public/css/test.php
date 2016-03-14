
<?php

//ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/

$settings = array(
    'oauth_access_token' => "4922466929-IlexNNEw9ADDhKN6gf0X0besMP0yWAhGVQVwYgq",
    'oauth_access_token_secret' => "NHYNzUgsIvQe896daccHiWVO8j7KVn5vqrdKaAHnLcSDR",
    'consumer_key' => "WdUNYvgwB6Uq6DOUnUcd50YFq",
    'consumer_secret' => "jH3CzZa9nz0MILRSGF1USRAUA29m683CosVnxtHJoiF3rq8YXy"
    );
$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";
$requestMethod = "GET";

$user = 'SAEMADI';
$count = 10;

$getfield = "?screen_name=$user&count=$count";

$twitter = new TwitterAPIExchange($settings);
$string = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);


// $getfield = "?screen_name=$user&count=$count";
// $twitter = new TwitterAPIExchange($settings);
// $string = json_decode($twitter->setGetfield($getfield)
//     ->buildOauth($url, $requestMethod)
//     ->performRequest(),$assoc = TRUE);

if($string["errors"][0]["message"] != "") 
{
    echo "<h3>Sorry, there was a problem.</h3><p>Twitter 
    returned the following error message:</p><p><em>".$string[errors][0]["message"]."</em></p>";
    exit();
}

// echo "<pre>";
// print_r($string);

foreach($string as $items)
    {
        echo "Time and Date of Tweet: ".$items['created_at']."<br />";
        echo "Tweet: ". $items['text']."<br />";
        echo "Tweeted by: ". $items['user']['name']."<br />";
        echo "Screen name: ". $items['user']['screen_name']."<br />";
        echo "Followers: ". $items['user']['followers_count']."<br />";
        echo "Friends: ". $items['user']['friends_count']."<br />";
        echo "Listed: ". $items['user']['listed_count']."<br /><hr />";
        echo "my image" ;//. $items['profile_image_url']."<br /><hr />";
        echo "<img id='image' src=" . $items['user']["profile_image_url"] ." width='200' height='200'>";
             // echo $items['profile_image_url'] //=> http://pbs.twimg.com/profile_images/699820606393597952/kknYNlz2_normal.jpg
             //  echo $items['profile_image_url_https'] //=> https://pbs.twimg.com/profile_images/699820606393597952/kknYNlz2_normal.jpg

   }
   echo "<br>";
   echo "my tweets<br>";
foreach($string as $item)
{
    echo "Tweet: ". $item['text']."<br />";   
}

?>