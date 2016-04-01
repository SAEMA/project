<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thunder Mail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="myajax.js"></script>
</head>
<body>

 
		<h3>My Thunderbird Mails</h3>
		<br><br><table class='table table-striped' id = 'mymail'>
		<tr><th>Date</th><th>-</th><th>From --- Subject</th><th>Seen/Unseen</th>

		
			@for ($i = 0 ; $i < 10 ; $i++)

					@if ( $seen[$i] !=1 )

					<tr>
					<td>{{ $msgno[$i] }} {{ $date[$i] }}</td>
					<td> - </td>
					<td >From {{ $from[$i] }} --- {{$subject[$i]}}</td>
					<td>Unseen</td>
					</tr>
					
					

					@else
					
					<tr>
					<td>{{ $msgno[$i] }} {{ $date[$i] }}</td>
					<td> - </td>
					<td >From {{ $from[$i] }} --- {{$subject[$i]}}</td>
					<td>Seen</td>
					</tr>
					
					

					@endif

			

			@endfor
		

			</table>
			<br>

		<form method="POST">
		<div class="get_me">
			

				
		</div>
		</form>

		

<div id="to_me1"></div>
<div id="to_me2"></div>
<div id="to_me3"></div>





</body>
</html>