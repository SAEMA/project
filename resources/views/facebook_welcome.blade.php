
@extends('layouts.app')

@section('main_content')

<div class="container">
	<div class="content">
		<div class="title">Logged in with facebook</div>
		You are logged in
		</div>

		<h4> Your name is {{ Auth::user()->name }} </h4>
		<h4> Your email is {{ Auth::user()->email }} </h4>
		<img src="{{ Auth::user()->avatar }}" height="200" width="200" />
	</div>



@stop