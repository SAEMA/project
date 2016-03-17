<?php

//option 1 - curl

//option 2 - fopen

//header('content-type: text/plain');

$contents = file_get_contents('https://www.zomato.com/bhubaneswar');


$contents = preg_replace('/\s(1,)/', ' ', $contents);

//print $contents . "\n";

// if ($contents === false)
// 	echo 'false';
echo "<pre>";
print_r(htmlentities($contents));
 //print "hello moto";
 exit();
$records = preg_split('/<div class="snippet__head/', $contents);

for ($ix = 1; $ix < count($records); $ix++)
{
	$tmp = $records[$ix];
	
	preg_match('/<a class="snippet__link" href="(.*?)"/', $tmp, $match_url);

	preg_match('/data-entity_type="RESTAURANT">(.*?)</', $tmp, $match_name);

	preg_match('/<a class="cblack"/', $tmp, $match_addr);
	
	print_r($match_url);
	print_r($match_name);
	print_r($match_addr);
	 // print $tmp . "\n";
	 // exit();
}


// print count($records) . "saema". "\n";

// print_r($records);