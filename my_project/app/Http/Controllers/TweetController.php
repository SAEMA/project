<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Twitter;
use App\User;
use App\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;
use App\TwitterAPIExchange;

/**
*Class that handles the twitter section
*It also returns the view
*/
class TweetController extends Controller
{
	#
	#Function that returns the view of the twitter with dropdown 
	#
	public function return_view()
    {
        if(\Auth::check()) 
        {
            return \View::make('twitter_page')
            ->with('users' , User::all());
        } 
        else 
        {
            \Session::flash('status', 'Please login!');
            return redirect('login');
        }    	
    }
    #
	#Function that returns the twitter data
	#
    public function send_data(Request $request)
    {
     	$screen_name = $request->selected; 
        $woeid = "";
        switch ($screen_name)
        {
            case 'America (NewYork)': 
                $woeid = 2459115;
                break;

            case 'Australia (Canberra)': 
                $woeid = 1100968;
                break;

            case 'India (Mumbai)': 
                $woeid = 2295411;
                break;

            case 'India': 
                $woeid = 23424848;
                break;             

            case 'Egypt (Cairo)': 
                $woeid = 1521894;
                break;

            case 'United Kingdom (London)': 
                $woeid = 44418;
                break;
                
        }

        $tweet = Twitter::getTrendsPlace(['id' => $woeid, 'exclude' => '#', 'count' => 10, 'format' => 'json']);
        $tweet = json_decode($tweet);	

        $str = "";
        $str .= '<div class = "list-group">';
        for ($i = 0; $i < 5; $i++)
        {
            $cu = $tweet[0]->trends[$i]->name;
            $arr = array();
            $arr = $tweet[0]->trends[$i]->url;
           // $str .= '<a href="' . $arr. '" id="test'.$i.'">' . $cu . '</a><br>';
       		$str .= '<a href="#" id="test'.$i.'">' . $cu . '</a><br>';
        }

        $str .="</div>";
       // $str .= "<br>Click the above links for further details!";

    	return response()->json($str);
    }


    public function posting_find_data(Request $request)
    {
    	$hash_tag = $request->selection;

		$url = 'https://api.twitter.com/1.1/search/tweets.json';
	
		$getfield = '?q=' . $hash_tag;
		$requestMethod = 'GET';

		$response = Twitter::setGetfield($getfield) ->buildOauth($url, $requestMethod)
                    ->performRequest();

        $response = json_decode($response);
        // echo "<pre>";
        // print_r( $response);
        // exit;

        $str = "";

        for ($i = 0; $i<3; $i++)
        {

	        $substitute = "<div class = 'saema'><a href='#'>" . $response->statuses[$i]->user->screen_name . "</a></div>";

	        $str .= "<div class='jumbotron' role='alert'>";


	        $str .= "<img id='image' src=" . $response->statuses[$i]->user->profile_image_url_https ." width='40' height='40' padding->";

	        $str .= "TWEET INFO OF  ". $substitute." <br><br><hr>";

	        $str .= "TWEET INFO OF  ". $response->statuses[$i]->text." <hr></div><br>";

		} 
         
         //end loop here

        $arr = array();
        $arr['val'] = $str;
 		$arr['temp'] = $response->statuses[0]->user->screen_name;
		return response()->json($arr);
		   
    }

}

