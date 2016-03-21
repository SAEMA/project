<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Capital;
use App\Resources;
use App\Operations;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Hash;

/**
*Class that handles the addition and deltetion of roles, resources and operations
*It also returns the view
*/
class My_FlightController extends Controller
{

	public function search_page()
	{
		return view('search_myflight');
	}

	public function my_flight_book(Request $request)
	{
		$db_search = $request->search_item;

		$url_part = Capital::where('input',$db_search)->first();
		
		
		$total_url = 'https://www.kayak.co.in/flight-routes/India-IN0/' . $url_part['name'];

		$html = file_get_contents($total_url); //get the html returned from the following url

		$flight_doc = new \DOMDocument();

		libxml_use_internal_errors(TRUE); //disable libxml errors

		if ( ! empty($html) )
		{ //if any html is actually returned

			$flight_doc->loadHTML($html);
			libxml_clear_errors(); //remove errors for html
			  
			$flight_xpath = new \DOMXPath($flight_doc);

			$durations = array();
			  //fetch for the duration 
			$flight_row = $flight_xpath->query('//div[@class="detailsinfo"]');

			if ( $flight_row->length > 0 )
			{
				$i = 0;
		     	foreach ( $flight_row as $row )
		      	{
		        	$durations[$i] = $row->nodeValue;
		        	$i++;
		      	}
		  	}
		  	

		  	$cost = array();
		  	$flight_money = $flight_xpath->query('//span[@itemprop="price"]');

		  	if ( $flight_money->length > 0 )
			{
				$i = 0;
		     	foreach ( $flight_money as $money )
		      	{
		        	$cost[$i] = $money->nodeValue;
		        	$i++;
		      	}
		  	}
		  
		  	$airline = array();
		  	$flight_img = $flight_xpath->query('//div[@class="airlineName"]');

		  	if ( $flight_img->length > 0 )
			{
				$i = 0;
		     	foreach ( $flight_img as $imgs )
		      	{
		        	$airline[$i] = $imgs->nodeValue;
		        	$i++;
		      	}
		  	}


		  	$roundtrip = array();
		  	//for place of arrival and deaprture
		  	$flight_air1 = $flight_xpath->query('//div[@class="airport"]');

		  	if ( $flight_air1->length > 0 )
			{
				$i = 0;
		     	foreach ( $flight_air1 as $airport1 )
		      	{
		        	$roundtrip[$i] = $airport1->nodeValue;
		      		$i++;
		      	}
		  	}
		  	

		  	$duration = array();
		  	//for time duration ....map with every two
		  	$flight_time = $flight_xpath->query('//div[@class="duration"]');

		  	if ( $flight_time->length > 0 )
			{
				$i = 0;
		     	foreach ( $flight_time as $time )
		      	{
		        	$duration[$i] = $time->nodeValue;
		      		$i++;
		      	}
		  	}
		  	

		  	$stophere = array();
		  	//for airportslist class="airportslist"
		  	$flight_stoppage = $flight_xpath->query('//span[@class="airportslist"]');

		  	if ( $flight_stoppage->length > 0 )
			{
				$i = 0;
		     	foreach ( $flight_stoppage as $stop )
		      	{
		        	$stophere[$i] = $stop->nodeValue;
		      		$i++;
		      	}
		  	}

		}

		return \View::make('flight_details')
			->with('durations' , $durations)
			->with('costs' , $cost)
			->with('airline' , $airline)
			->with('roundtrip' , $roundtrip)
			->with('duration' , $duration)
            ->with('stops' , $stophere);
           
	}


}



