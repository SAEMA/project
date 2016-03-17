
@extends('layouts.app')

@section('main_content')

<h1 class = "well">TWEETS</h1>

<div class = "col-md-12 well">
	<form method = "post" action = "" name="my_form">
	 <meta name="csrf-token" content="{{ csrf_token() }}" />
		<div class = "row">
			<div class = "col-md-6 form-group">
				<label>TWEETS</label>						
				<select class = "form-control" id = "tweets" name = "tweets">
					<!-- <option>-</option> -->
					<option value="India (Mumbai)" selected="selected">India (Mumbai)</option>
					<option value="India">India</option>
					<option value="America (NewYork)">America (NewYork)</option>
					<option value="Australia (Canberra)">Australia (Canberra)</option>
					<option value="Egypt (Cairo)">Egypt (Cairo)</option>
					<option value="United Kingdom (London)">United Kingdom (London)</option>
				</select>
			</div>
			<div class = "col-md-6 form-group">
				<div id="displaytweets">
	 
				@yield('twitter_content')

				</div>
			</div>
		</div>

		<div class = "row">
			<div class = "col-md-6 form-group">

			<div id="place">

			@widget('recentTrends')

			</div>
		</div>
		<div class = "col-md-6 form-group">

			<div class = "naema">
			<a class="twitter-timeline" id= "naema" href="https://twitter.com/SAEMADI" data-widget-id="708272352669270016" data-screen-name="AnsariAbulaala">Tweets by @SAEMADI</a>

			</div>
		</div>
	</div>

		
	</form>
</div>


<script>

!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

</script>	


@stop