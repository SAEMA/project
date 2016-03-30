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
 <?php $i = 0 ; ?>
		<h3>My Thunderbird Mails</h3>
		<br><br><table class='table table-striped' id = 'mymail'>
		<tr><th>Date</th><th>-</th><th>From --- Subject</th><th>Seen/Unseen</th>

		
			@foreach ($result AS $overview)

					@if ( $overview->seen !=1 )

					<tr>
					<td>{{ $overview->msgno }} {{ $overview->date}}</td>
					<td> - </td>
					<td >From {{$overview->from}} --- {{$overview->subject}}</td>
					<td>Unseen</td>
					</tr>
					<tr><pre>{{ $mail_body[$i] }}</pre></tr>
					

					@else
					
					<tr>
					<td>{{ $overview->msgno }} {{ $overview->date}}</td>
					<td> - </td>
					<td>From {{$overview->from}} --- {{$overview->subject}}</td>
					<td>seen</td>
					</tr>
					<tr><pre>{{ $mail_body[$i] }}</pre></tr>
					

					@endif

			<?php $i++; ?>

			@endforeach
		

			</table>
			<br>

		<form method="POST">
		<div class="get_me">
			@for ( $i = 1; $i <= $number; $i++ )

				<button type="submit" name="submit" class="btn btn-primary"  id="{{$i}}" >{{ $i }}</button>

			@endfor
		</div>
		</form>

		

<div id="to_me1"></div>
<div id="to_me2"></div>
<div id="to_me3"></div>





</body>
</html>