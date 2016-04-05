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
*Class that performs scraping kayak.com and getting flight details from that site using DOM *parser.
*It also returns the view.
*/
class My_FlightController extends Controller
{
    /*
    *Function that returns the view that takes user input of where to go(search box).
    */
    public function search_page()
    {
        return view('search_myflight');
    }

    /*
    *Takes the input from user and returns all flights from India to that place.
    *The place for instance say "LOndon" is matched in database and equivalent code is found
    *lon that is used in the url to fetch data.
    */
    public function my_flight_book(Request $request)
    {
        $departure_date = $request->from_date;
        $arrival_date = $request->to_date;
        $search_from = $request->search_from;
        $search_to = $request->search_to;  

        /*$db_search = $request->search_item;____ this is for searching from India Please ignore
        *Only for reference.
        */

        $url_part1 = Capital::where('input', $search_from)->first();
        $url_part2 = Capital::where('input', $search_to)->first();

        if ( $search_from == "India")
        /*This url when from India.*/ 
        {
            $total_url = 'https://www.kayak.co.in/flight-routes/India-IN0/' . $url_part2['name'];
        }
        else 
        {
            $total_url = 'https://www.kayak.co.in/flights/' . $url_part1['combo'] . '-' . $url_part2['combo'] . '/' . $departure_date . '/'. $arrival_date;  
        }

        /*Get the html returned from the following url using DOM model.*/
        $html = file_get_contents($total_url); 
          
        $flight_doc = new \DOMDocument();

        /*Disable libxml errors.*/
        libxml_use_internal_errors(TRUE); 

        if ( ! empty($html) )
        { 
            /*If any html is actually returned.*/
            $flight_doc->loadHTML($html);
            /*Remove errors for html.*/
            libxml_clear_errors(); 
              
            $flight_xpath = new \DOMXPath($flight_doc);
            /*for else part
            //target="_blank" class="results_price bookitlongerprice">
            // //div class="flighttime flightTimeDeparture"
            // $flight_row1 = $flight_xpath->query('//div[@class="airport"]');

            // if ( $flight_row1->length > 0 )
            // {
            //     $i = 0;
            //     foreach ( $flight_row1 as $row1 )
            //     {
            //         echo $row1->nodeValue;
            //         $i++;
            //     }
            // }

            //exit;--------------------------the upper commneted codes did not work as kayak prevents such action.Please ignore!*/

            /*Fetch for the duration.*/
            $durations = array();
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
            
            /*Fetch for the price.*/
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
          
            /*Fetch for the airline name.*/
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

            /*Fetch for the place ie airport.*/
            $roundtrip = array();
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
            
            /*Fetch for the duration Since it diplays a round trip data always map one loop with *two while displaying.
            */
            $duration = array();
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
            
             /*Fetch for the place ie airportlists.*/
            $stophere = array();
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



