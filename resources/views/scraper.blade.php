<div class="container-fluid">
	<div class="container container-pad" id="property-listings">
		<div class="row">
			<div class="col-md-12">
			<h1>hey</h1>
			<p>web scraping</p>
		</div>
	</div>
	<div class="row">
		<div calss="col-md-12">
		@if ($contents)
		@foreach($contents AS $content)
		<div class="media">
			<a class="pull-left" href="{{ $content['url'] }}" target="_parent">
			<div class="clearfix visible-on"></div>

			<div class="media-body fnt-smaller">
				<a href="#" target="_parent"></a>

				<h4 class="media-heading">
					<a href="{{ $content['url'] }}" target="_parent">
					{{ $content['title'] }}
					</a>
				</h4>

		@endforeach
		@endif