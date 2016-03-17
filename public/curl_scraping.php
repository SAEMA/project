<?php

	$curl = curl_init('https://www.zomato.com/bhubaneswar');

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	 
	$page = curl_exec($curl);
	 
	if ( curl_errno($curl) ) // check for execution errors
	{
		echo 'Scraper error: ' . curl_error($curl);
		exit;
	}
	 
	curl_close($curl);

	// echo "<pre>";
	// print_r (json_encode($page));

	//exit();
	$records = preg_split('/<div class="act act--newsfeed js-activity-root feedroot stupendousact/', $page);


	//echo count($records);
	for ( $ix = 1; $ix < count($records); $ix++ )
	{
		$tmp = $records[$ix];
		// echo "<pre>";

		// print_r(htmlentities($tmp));

		$regex = array ();
		$regex[4] = '/<a class="snippet__link" href="(.*?)\/>/';
		$regex[0] = '/<a class="snippet__link" href="(.*?)"/';
		//$regex[4] = '/<div class="snippet__head"><a class="snippet__link href="(.*?)\/>/';
		$regex[1] = '/data-entity_type="RESTAURANT">(.*?)</';
		$regex[2] = '/<a class="cblack" href="(.*?)>/';
		$regex[3] = '/www.zomato.com\/(.*?)"/';
		$regex[5] = '/<span class="h-level4 zblack">(.*?)<\/span>/';
		$regex[6] = '/<span class="snippet__reviews">(.*?)<\/span>/';
		$regex[7] = '/<span class="snippet__followers">(.*?)<\/span>/';
		$regex[8] = '/<img class="snippet__image" data-original="(.*?)<\/img>/';
		//$regex[4] = '/<img class="snippet__image" data-original="(.*?) \/>/';

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
		// echo "<pre>";
		// print_r($arr_img);
		// exit();<span class="snippet__reviews">
		//$base_url = '<img alt="' . $photo . '/>';
		$str = $address[1];
		$arr = array ();
		$arr = explode("/",$str);

		

		// print_r($images_block[0]);   
		// exit();

		$r = array (

			'link' => $link[1],
			'name' => $name[1],
			'address' => $arr[0] . "," . $arr[1],
			'photo' => "<img" . $arr_img[1] . "/>",
			'person' => $person[1],
			'review' => $review[1],
			'followers' => $followers[1],
			'rating' => $rating[1]

		);
echo "<pre>";
print_r($r);


		// echo '

		// <div class="panel panel-default target">
  //               <div class="panel-heading" contenteditable="false">Restaurants</div>
  //               <div class="panel-body">

						
		// 					<div class="thumbnail">
		// 						' . $r['link']. '
		// 						<div class="caption">
		// 							<h3>
		// 								Marmaduke
		// 							</h3>
		// 							<p>
		// 								Is just another friendly dog.
		// 							</p>
		// 							<p>
									
		// 							</p>
								
		// 					</div>
		// 				</div>
		// 				</div>
		// 				</div>
		// 				</div>';
			

	}

	// foreach ( $r as $my_data)
	// {
	// 	print_r($my_data);
	// 	// echo '<div class="col-md-4">
	// 	// 					<div class="thumbnail">
	// 	// 						' . $my_data->photo. '
	// 	// 						<div class="caption">
	// 	// 							<h3>
	// 	// 								Marmaduke
	// 	// 							</h3>
	// 	// 							<p>
	// 	// 								Is just another friendly dog.
	// 	// 							</p>
	// 	// 							<p>
									
	// 	// 							</p>
	// 	// 						</div>
	// 	// 					</div>
	// 	// 				</div>';
	// }

	// echo '<img class="snippet__image" data-original="https://b.zmtcdn.com/data/pictures/7/2900587/c710766b43db75bd822de83a275281d8_res_featured_thumb.jpg" src="https://b.zmtcdn.com/data/pictures/7/2900587/c710766b43db75bd822de83a275281d8_res_featured_thumb.jpg" alt="Tyre Patty" style="display: inline-block;">';

// 	$record = preg_split('/<div class="snippet snippet-user /', $page);
// 	$temp = $record[1];
// 	$reg_ex = '/<div class="snippet__head">(.*?)<\/div>/';
// 	preg_match($reg_ex[0], $temp, $idea);
// 	print_r($idea);

// exit();
?>