
@extends('layouts.app')

@section('main_content')

<h1 class="well">PRIVILEGE FOR EACH TYPE OF USER</h1>
	<div class="col-md-12 well">
	
		<form method="post" action="">
			<input type="hidden" name="_token" value="{{ csrf_token()}}">
			<div class="row">
				<div class="col-md-6 form-group">
					<label>ROLES</label>						
					<select class="form-control" id="privilege" name="privilege">
						<option>--</option>

							@foreach ($roles_present as $role_present)

								<option>{{$role_present->type}}</option>

							@endforeach

					</select>
				</div>
			</div>
		</form>	
		
		<div class="row">
			<div id="display"></div>
		</div>
	</div>

@stop