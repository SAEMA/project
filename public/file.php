<?php

//option 1 - curl

//option 2 - fopen

header('content-type: text/plain');

$contents = file_get_contents('https://www.zomato.com/bhubaneswar');


$contents = preg_replace('/\s(1,)/', ' ', $contents);

//print $contents . "\n";

// if ($contents === false)
// 	echo 'false';
// echo "<pre>";
// print_r(htmlentities($contents));
 print "hello moto";
$records = preg_split('/<a class="snippet__link/', $contents);

for ($ix = 1; $ix < count($records); $ix++)
{
	$tmp = $records[$ix];
	preg_match('/href="(.*?)"/', $tmp, $match_url);

	print $tmp . "\n";
	exit();
}


print count($records) . "\n";

print_r($records);