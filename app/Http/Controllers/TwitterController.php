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
class TwitterController extends Controller
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
        $str .= "<div class='well'><div class = 'list-group '>";
        for ($i = 0; $i < 5; $i++)
        {
            //$str .= "<form method = 'post' action = ''>";
            $cu = $tweet[0]->trends[$i]->name;
            $arr = array();

            $arr = $tweet[0]->trends[$i]->url;
            $str .= "<a href='#soemthehdj'>$cu</a><br>";
            //$str .= "<button type ='button' id='link' value='$arr'>$cu</button><br>";
            //$str .= "</form>";
        }

        $str .="</div></div>";
        $str .= "<br>Click the above links for further details!";

    	return response()->json($str);
    }
    public function posting_find_data(Request $request)
    {
        echo $request->selection;
        exit;
    }
}