<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">


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
					'photo' => "<img" . $data[0] . 'src' . $src[1] . '" class="img-thumbnail"/>',
					'person' => $person[1],
					'review' => $review[1],
					'followers' => $followers[1],
					'rating' => $rating[1]

		 		);

		?>

		<div class="row">
			<div class="col-lg-4">
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class=" panel panel-default target" role="success">

					<div class="panel-heading"><strong class=""><?php echo $r['name']; ?></strong></div>

					<div class="panel-body">
		
						<div class="row">
							<div class="col-lg-4">
								<?php echo $r['photo']; ?>
							</div>
		

		
						<div class="col-lg-8">
							<ul class="list-group">


								<li class="list-group-item text-right"><span class="pull-left"><strong class="">Followers</strong></span><?php echo $r['followers']; ?></li>

								<li class="list-group-item text-right"><span class="pull-left"><strong class="">Address</strong></span><?php echo $r['address']; ?></li>

								<li class="list-group-item text-right"><span class="pull-left"><strong class="">Review</strong></span><?php echo $r['review']; ?></li>

							</ul>

						</div>
					</div>
					<a href="<?php $r['link']; ?>"><?php echo $r['address']; ?></a>


				</div>
				</div>
			</div>
		</div>

<?php
			}	
?>



	</div>
</body>
</html>