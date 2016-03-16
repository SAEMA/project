
@extends('layouts.app')

@section('main_content')

<h1 class="well">EDIT PAGE</h1>
<div class="row">
	<div class="col-md-12">
	</div>
</div>

<div class="col-lg-12 well">
	<form action="" method="post" enctype="multipart/form-data" name="myform">
		<div class="row">
			<div class="col-md-12">
				<input type="file" name="fileToUpload" id="fileToUpload"><br>
			 	<img id="image" src="" alt="image preview here" height="150" width="150" />
			</div>	
		</div>
		<hr>

		<div class="row">
			<div class="col-sm-4 form-group">
				<span class="glyphicon glyphicon-user"></span>
				<label>USERNAME</label>
				<input class="form-control" id="usr" type="text" name="name" maxlength=20  placeholder="Enter username Name Here.." value="{{fill($name,old('name'))}}" onchange= "caps()" ><p id="id1"></p>
			
				@if ($errors->has('name'))
				 	<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('name')!!} </div></span>
				@endif
		
			</div>
		</div>

		<div class="row">
			<div class="col-sm-4 form-group">
				<label>FIRST NAME</label>
				<input class="form-control" type="text" name="fname" maxlength=10  placeholder="Enter firstname Name Here.." id="fname" onchange="myname('id2','fname')" value="{{fill($fname,old('fname'))}}" ><p id="id2"></p>
			 
			 	@if ($errors->has('fname'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('fname')!!} </div></span>
			 	@endif

			</div>

			<div class="col-sm-4 form-group">
				<label>MIDDLE NAME</label>
				<input class="form-control" type="text" name="mname" maxlength=10 placeholder="Enter middle name Here.." id="mname" onchange="myname('id3','mname')" value="{{fill($mname,old('mname'))}}"><p id="id3"></p>
			 
			 	@if ($errors->has('mname'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('mname')!!} </div></span>
			 	@endif

			</div>
			
			<div class="col-sm-4 form-group">
				<label>LAST NAME</label>
				<input class="form-control" type="text" name="lname" maxlength=10 placeholder="Enter last name Here.." id="lname" onchange="myname('id4','lname')" value="{{fill($lname,old('lname'))}}" ><p id="id4"></p>
			 
			 	@if ($errors->has('lname'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('lname')!!} </div></span>
			 	@endif
			
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 form-group">
				<label>GENDER:{{fill($options,old('options'))}}</label>	
			</div>

			<div class="col-sm-4 form-group">
				<label>MARITAL STATUS</label>
				<select class="form-control" id="maritalstatusselector" name="maritalstatus">
					<option>Single</option> 
					<option>Married</option>
					<option>Separated</option>
					<option>Divorced</option>
					<option>Widowed</option>
				</select>
				
				@if ($errors->has('maritalstatus'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('maritalstatus')!!} </div></span>
			 	@endif
		
			</div>

			<div class="col-sm-4 form-group">
				<span class="glyphicon glyphicon-calendar"></span>
				<label>DATE OF BIRTH</label> 
					<div class='input-group date'>
						<input type="date" class="form-control" id="datePicker" name="dob" value="{{fill($dob,old('dob'))}}">
					 
					 	@if ($errors->has('dob'))
			 				<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('dob')!!} </div></span>
			 			@endif

					</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 form-group">
				<label>EMPLOYMENT</label>
				<select class="form-control" id="employment" class="employment" name="employment">
					<option>Student</option>
					<option>Self-employed</option>
					<option>Unemployed</option>
					<option>Employed</option>
				</select>
				
				@if ($errors->has('employment'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('employment')!!} </div></span>
			 	@endif
		
			</div>
			
			<div class="col-sm-4 form-group">
				<label>EMPLOYER (if employed)</label>
				<input class="form-control" type="text" placeholder="Enter employer Here.." name="employer" onchange="emp()" id="employer" value="{{fill($employer,old('employer'))}}"><p id="id6"></p>
			 	
			 	@if ($errors->has('employer'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('employer')!!} </div></span>
			 	@endif

			</div>

			<div class="col-sm-4 form-group">
				<span class="glyphicon glyphicon-phone-alt"></span>
				<label>PHONE NUMBER</label>
				<input class="form-control" type="text" maxlength=10 placeholder="Enter phone number Here.." name="phonenumber" id="phonenumber" onchange="myfne('id5','phonenumber')" value="{{fill($phonenumber,old('phonenumber'))}}"><p id="id5"></p>
			 
			 	@if ($errors->has('phonenumber'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('phonenumber')!!} </div></span>
			 	@endif
		
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-home"></span>
				<h4><strong>RESIDENTIAL ADDRESS</strong></h4>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-road"></span>
				<label>	STREET</label>
				<input class="form-control" type="text" maxlength=20 onchange="mystreet('id20','street')" id="street" placeholder="Enter street Name Here.." name="street" value="{{fill($street,old('street'))}}"><p id="id20"></p>
			
			 	@if ($errors->has('street'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('street')!!} </div></span>
			 	@endif
		
			</div>

			<div class="col-sm-6 form-group">
				<span class="glyphicon glyphicon-road">
				<label>	CITY</label>
				<input class="form-control" type="text" maxlength=20 placeholder="Enter city Name Here.." name="city" id="city" onchange="myname('id7','city')" value="{{fill($city,old('city'))}}"><p id="id7"></p>
			 
			 	@if ($errors->has('city'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('city')!!} </div></span>
			 	@endif
		
			</div>
		</div>
	
		<div class="row">
			<div class="col-sm-6 form-group">
			<span class="glyphicon glyphicon-globe"></span>
			<label>	STATE</label>
			<input class="form-control" type="text" maxlength=20 placeholder="Enter state Name Here.." name="state" id="state" onchange="myname('id9','state')" value="{{fill($state,old('state'))}}"><p id="id9"></p>
			
				@if ($errors->has('state'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('state')!!} </div></span>
			 	@endif
			
			</div>
		
		<div class="col-sm-6 form-group">
			<span class="glyphicon glyphicon-send"></span>
			<label>	ZIP</label>
			<input class="form-control" type="number" maxlength=20 placeholder="Enter zip Name Here.." name="zipp" id="zipp" onchange="myzipp('id11','zipp')"value="{{fill($zipp,old('zipp'))}}"><p id="id11"></p>
		
				@if ($errors->has('zipp'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('zipp')!!} </div></span>
			 	@endif
		
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-6 form-group">
			<span class="glyphicon glyphicon-phone">
			<label>	MOBILE NUMBER</label>
			<input class="form-control" type="text" maxlength=10 placeholder="Enter mobile number Name Here.." id="mobilenumber" onchange = "myfne('id13','mobilenumber')" name="mobilenumber" value="{{fill($mobilenumber,old('mobilenumber'))}}"><p id="id13"></p>
			
				@if ($errors->has('mobilenumber'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('mobilenumber')!!} </div></span>
			 	@endif
		
		</div>

		<div class="col-sm-6 form-group">
			<span class="glyphicon glyphicon-phone-alt"></span>
			<label>	LANDLINE NUMBER</label>
			<input class="form-control" type="text" maxlength=10 placeholder="Enter landline number Name Here.." id="landlinenumber" onchange ="myfne('id15','landlinenumber')" name="landlinenumber"  value="{{fill($landlinenumber,old('landlinenumber'))}}"><p id="id15"></p>
				
				@if ($errors->has('landlinenumber'))
			 	<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('landlinenumber')!!} </div></span>
			 	@endif
		
		</div>		
	</div>
	
	<div class="row">
		<div class="col-sm-6 form-group">
			<span class="glyphicon glyphicon-send"></span>
			<label>	FAX</label>
			<input class="form-control" type="text" maxlength=7 placeholder="Enter fax Name Here.." name="fax" id="fax" onchange ="myfax('id17','fax')"  value="{{fill($fax,old('fax'))}}"><p id="id17"></p>
				
				@if ($errors->has('fax'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('fax')!!} </div></span>
				@endif
		
		</div>		
	
		<div class="col-sm-6 form-group">
			<span class ="glyphicon glyphicon-envelope"></span>
			<label>	EMAIL ID</label>
			<input class="form-control" type="email" maxlength=50 placeholder="Enter EMAIL ID Here.." name="email" id="email" onchange="email('id19','emailid')"  value="{{fill($email,old('email'))}}"><p id="id19"></p>
				
				@if ($errors->has('email'))
			 		<div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{!!$errors->first('email')!!} </div></span>
				@endif
		
		</div>		
	</div>
	
	<span class="glyphicon glyphicon-pencil"></span>
	<label for="comment">More about you:</label>
	<textarea class="form-control" rows="5" id="more" name="yo" value="">{{fill($yo,old('yo'))}}</textarea>
	<br>
	<div class="row">
		<div class="col-sm-6 form-group">
			<button type="submit" name="submit" id="submit" class="btn btn-info" value="submit">Submit</button>				
		</div>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
	</div>
</form>
</div>

@stop