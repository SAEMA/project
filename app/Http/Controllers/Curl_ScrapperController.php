<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class CurlScrapperController extends Controller
{


    public function return_view()
    {

    	$curl = curl_init('https://www.zomato.com/bhubaneswar');

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	 
		$page = curl_exec($curl);
	 
		if ( curl_errno($curl) ) // check for execution errors
		{
			echo 'Scraper error: ' . curl_error($curl);
			exit;
		}
	 
			curl_close($curl);

			
			$records = preg_split('/<div class="act act--newsfeed js-activity-root feedroot stupendousact/', $page);


			
			for ( $ix = 1; $ix < count($records); $ix++ )
			{
				$tmp = $records[$ix];
				
				$regex = array ();
				$regex[4] = '/<a class="snippet__link" href="(.*?)\/>/';
				$regex[0] = '/<a class="snippet__link" href="(.*?)"/';
			
				$regex[1] = '/data-entity_type="RESTAURANT">(.*?)</';
				$regex[2] = '/<a class="cblack" href="(.*?)>/';
				$regex[3] = '/www.zomato.com\/(.*?)"/';
				$regex[5] = '/<span class="h-level4 zblack">(.*?)<\/span>/';
				$regex[6] = '/<span class="snippet__reviews">(.*?)<\/span>/';
				$regex[7] = '/<span class="snippet__followers">(.*?)<\/span>/';
				$regex[8] = '/<img class="snippet__image" data-original="(.*?)<\/img>/';
				

				preg_match($regex[0], $tmp, $link);
				preg_match($regex[1], $tmp, $name);
				preg_match($regex[2], $tmp, $addr);
				preg_match($regex[3], $addr[1], $address);

				preg_match($regex[4], $tmp, $photo);
				preg_match($regex[5], $tmp, $person);
				preg_match($regex[6], $tmp, $review);
				preg_match($regex[7], $tmp, $followers);
				preg_match($regex[8], $tmp, $rating);

				$arr_img = array ();
				$str = $photo[1];
				$arr_img = explode("<img", $str);
				

				$extract = $arr_img[1];
				$src = explode("data-original", $extract);

				$data = explode("src", $extract);
				
				$str = $address[1];
				$arr = array ();
				$arr = explode("/",$str);

				

				$r = array (

					'link' => $link[1],
					'name' => $name[1],
					'address' => $arr[0] . "," . $arr[1],
					'photo' => "<img" . $data[0] . 'src' . $src[1] . '"/>',
					'person' => $person[1],
					'review' => $review[1],
					'followers' => $followers[1],
					'rating' => $rating[1]

				);
		// echo "<pre>";
		// print_r($r);
	
			}
			return view('myscrapper'); 
			// return \View::make('myscrapper')
   //          ->with('data' , $r);

    }
}
