<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use App\Roles;
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
	public function my_flight_book()
	{
		$curl = curl_init('https://www.kayak.co.in/flight-routes/India-IN0/Amsterdam-Schiphol-AMS');

			curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
			 
			$page = curl_exec($curl);
			 
			if ( curl_errno($curl) ) // check for execution errors
			{
				echo 'Scraper error: ' . curl_error($curl);
				exit;
			}
			 
			curl_close($curl);

			$records = preg_split('/<div class="inner/', $page);

			// echo count($records);
			//  echo "<pre>";
			// print_r(htmlentities($page));
			//  exit;


			for ( $ix = 1; $ix < count($records); $ix++ )
			{
				$tmp = $records[$ix];
				
				$regex = array ();
				$regex[0] = '/<span class="detailsimportant">(.*?)<\/span>/';
				$regex[1] = '/<div class="airlineName">(.*?)<\/div>/';
				$reegx[2] = '/<div class="singleleg singleleg0">(.*?)<\/div>/'; 

				preg_match($regex[0], $tmp, $link);
				preg_match($regex[1], $tmp, $timing);



				print_r($link);
				print_r($timing);
					// $r = array (

				// 	'link' => $link[1]

				// );

	//				print_r($r);
				echo "hi";
				exit;


		}
	}

}