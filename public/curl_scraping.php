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

	$records = preg_split('/<div class="act__heading/', $page);

	for ( $ix = 1; $ix < count($records); $ix++ )
	{
		$tmp = $records[$ix];
		$regex = array ();
		$regex[0] = '/<a class="snippet__link" href="(.*?)"/';
		$regex[1] = '/data-entity_type="RESTAURANT">(.*?)</';
		$regex[2] = '/<a class="cblack" href="(.*?)>/';
		$regex[3] = '/www.zomato.com\/(.*?)"/';

		preg_match($regex[0], $tmp, $link);
		preg_match($regex[1], $tmp, $name);
		preg_match($regex[2], $tmp, $addr);
		preg_match($regex[3], $addr[1], $address);

		$str = $address[1];
		$arr = array ();
		$arr = explode("/",$str);

		$r = array (

			'link' => $link[1],
			'name' => $name[1],
			'address' => $arr[0] . "," . $arr[1] 

		);
		echo "<pre>";
		print_r($r);    
	}

// 	$record = preg_split('/<div class="snippet snippet-user /', $page);
// 	$temp = $record[1];
// 	$reg_ex = '/<div class="snippet__head">(.*?)<\/div>/';
// 	preg_match($reg_ex[0], $temp, $idea);
// 	print_r($idea);

// exit();
?>