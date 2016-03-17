hi
@extends('main_content')
@section('twitter_content')



		<div class='well'><div class = 'list-group '>

		<div class='alert alert-info col-md-6' role='alert'>TWEET INFO OF  <?php $users->screen_name; ?></div><br>

		<!-- 
    	foreach($tweet AS $tweets)
    	{
    		$str .= "<button type='button' class='list-group-item'>Time and Date of Tweet: ".$items['created_at']."</button>";
	        $str .= "<button type='button' class='list-group-item'>Tweet: ". $items['text']."</button>";
	        $str .= "<button type='button' class='list-group-item'>Tweeted by: ". $items['user']['name']."</button>";
	        $str .= "<button type='button' class='list-group-item'>Screen name: ". $items['user']['screen_name']."</button><br>"; 
	        $str .= "<button class='btn btn-primary' type='button'>
	          FOLLOWERS <span class='badge'> ". $items['user']['followers_count']."</span>
	        </button><br /><br>";
	        $str .= "<button class='btn btn-primary' type='button'>
	          FRIENDS <span class='badge'> ". $items['user']['friends_count']."</span>
	        </button><br /><br>";
	        $str .= "<button type='button' class='list-group-item'>Listed: ". $items['user']['listed_count']."</button><br />";
	        $str .= "<img id='image' src=" . $items['user']["profile_image_url_https"] ." width='200' height='200'>";

    	}
 -->

 @stop