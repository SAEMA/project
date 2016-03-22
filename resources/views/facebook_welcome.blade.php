
@extends('layouts.app')

@section('main_content')

@if (!empty(Session::get('message')))

    <div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{{Session::get('message')}} </div></span>
                   
@endif

<div class="container">
	<div class="well">
		<div class="content">

			@if ( Auth::user()->avatar != "" )

			<div class="title">Logged in with facebook</div>
			@else

			<div class="title">You are logged in</div>
			@endif

		</div>

		<h4> Your name is {{ Auth::user()->name }} </h4>
		<h4> Your email is {{ Auth::user()->email }} </h4>

		@if ( Auth::user()->avatar == "" )
			<img id="profilePic" src="img/{{ Auth::user()->fileToUpload }}" class="img-thumbnail"> 

		@else
			<img src="{{ Auth::user()->avatar }}" height="200" width="200" />

		@endif


		@if ( Auth::user()->avatar != "" )
		
		<br>

		<form action="" method="post" enctype="multipart/form-data">							
			<div class="col-lg-12 form-group">			
				<input class="form-control" type="password" name="password" id="password" maxlength= 6  placeholder="Password must be max 5 characters ." value="">

				<br>

				<input class="form-control" type="password" name="retypepassword" id="retypepassword" maxlength= 6  placeholder="Password must be max 5 characters ." value="">
			</div>

			<button type="submit" name="submit" id="submit" class="btn btn-info" value="submit">Submit</button>	

			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		
		</form>

		@endif

	</div>
	<br>

</div>
<br>

@stop