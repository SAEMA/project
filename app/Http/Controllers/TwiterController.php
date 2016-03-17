<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twitter;
use App\User;
use App\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;

/**
*Class that handles the twitter section
*It also returns the view
*/
class TwiterController extends Controller
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
    	$tweet = Twitter::getUserTimeline(['screen_name' => $screen_name, 'count' => 5, 'format' => 'json']);
    	$tweet = json_decode($tweet);

    	$str = "<div class='well'><div class = 'list-group '>";
		$str .= "<div class='alert alert-info col-md-6' role='alert'>TWEET INFO OF  ". $screen_name." </div><br>";
    	$str .= "<button type='button' class='list-group-item'>Time and Date of Tweet: ". $tweet[0]->created_at."</button>";
        $str .= "<button type='button' class='list-group-item'>Tweet: ". $tweet[0]->text."</button>";
        $str .= "<button type='button' class='list-group-item'>Tweeted by: ". $tweet[0]->user->name."</button>";
        $str .= "<button type='button' class='list-group-item'>Screen name: ". $tweet[0]->user->screen_name."</button><br>"; 
        $str .= "<button class='btn btn-primary' type='button'>
          FOLLOWERS <span class='badge'> ". $tweet[0]->user->followers_count."</span>
         </button><br /><br>";
        $str .= "<button class='btn btn-primary' type='button'>
           FRIENDS <span class='badge'> ". $tweet[0]->user->friends_count."</span>
         </button><br /><br>";
        $str .= "<button type='button' class='list-group-item'>Listed: ". $tweet[0]->user->listed_count."</button><br />";
        $str .= "<img id='image' src=" . $tweet[0]->user->profile_image_url_https ." width='200' height='200'>";
		$str .= "<br><br>";
		$str .= "<div class='alert alert-info col-md-6' role='alert'>TWEETS OF ". $screen_name." </div><br>";

	    foreach($tweet as $value)
		{
		    $str .= "<button type='button' class='list-group-item'>Tweet: ". $value->text."</button><br />";
	 	}

		$str .= "</div></div>";	

    	return response()->json($str);
    }

}