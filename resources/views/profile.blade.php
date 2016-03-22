
@extends('layouts.app')

@section('main_content')

<h1 class="well">WELCOME {{Auth::user()->name}}</h1>
	<div class="col-lg-12 well">				
		<form action="profile.php" method="post" enctype="multipart/form-data">							
			<div class="col-lg-12 form-group">							
				
				@if ( Auth::user()->avatar == "" )
				<img id="profilePic" src="img/{{ Auth::user()->fileToUpload }}" class="img-thumbnail"> 

				@else
				<img src="{{ Auth::user()->avatar }}" height="200" width="200" />

				@endif
				<br>
				<hr>
				<div class="row">
					<div class="col-lg-4 ">
						<label>USERNAME: {{ Auth::user()->name }}</label>								
					</div>							
					<div class="col-lg-4 ">
						<label></label>							
					</div>									
					<div class="col-lg-4 ">
						<label>FIRST NAME: {{ Auth::user()->fname }}</label>
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-lg-4 ">
						<label>MIDDLE NAME: {{ Auth::user()->mname }} </label>
					</div>														
					<div class="col-lg-4 ">
						<label>LAST NAME: {{ Auth::user()->lname }}</label>		
					</div>
					<div class="col-lg-4 ">
						<label>GENDER: {{ Auth::user()->options }}</label>								 
					</div>
				</div>

				<br>
				<div class="row">
					<div class="col-lg-4 ">
						<label> MARITAL STATUS:{{Auth::user()->maritalstatus}} </label>
					</div>
					<div class="col-lg-4 ">
						<label> DATE OF BIRTH:{{Auth::user()->dob}} </label>
					</div>
					<div class="col-lg-4 ">
						<label> EMPLOYMENT: {{Auth::user()->employment}}</label>
					</div>
				</div>
				
				<br>
				<div class="row">
					<div class="col-lg-4 ">
						<label> EMPLOYER: {{ Auth::user()->employer}} </label>
					</div>
					<div class="col-lg-4 ">
						<label> PHONE NUMBER: {{ Auth::user()->phonenumber }} </label>
					</div>
					<div class="col-lg-4 ">
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-lg-6 ">
						<h3>RESIDENTIAL ADDRESS</h3>
					</div>		
				</div>

				<div class="row">
					<div class="col-lg-6 ">
						<label> STREET: {{Auth::user()->street}} </label>
					</div>	
					<div class="col-lg-6 ">
						<label> CITY:{{Auth::user()->city}}  </label>
					</div>	
				</div>
					
				<br>
				<div class="row">
					<div class="col-lg-6 ">
						<label> STATE: {{Auth::user()->state}} </label>
					</div>	
					<div class="col-lg-6 ">
						<label> ZIP:{{Auth::user()->zipp}}  </label>
					</div>
				</div>
					
				<br>
				<div class="row">
					<div class="col-lg-6 ">
						<label> MOBILE NUMBER:{{Auth::user()->mobilenumber}}  </label>
					</div>	
					<div class="col-lg-6 ">
						<label> LANDLINE NUMBER:{{Auth::user()->landlinenumber}}  </label>
					</div>	
				</div>
					
				<br>
				<div class="row">
					<div class="col-lg-6 ">
						<label> FAX: {{Auth::user()->fax}} </label>
					</div>	
					<div class="col-lg-6 ">
						<label> EMAIL ID:{{Auth::user()->email}} </label>
					</div>	
				</div>
					
				<br>
					<label> ABOUT YOU: {{Auth::user()->yo}} </label>										
				<br>								
			</div>
		</form>
		<br>
	</div>
</div>

@stop