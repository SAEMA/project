
@extends('layouts.app')

@section('main_content')

@if (!empty(Session::get('message_for_roles')))
<div class ="well">
    {{Session::get('message_for_roles')}} 
</div>         
@endif

<h1 class = "well">ROLES FOR EACH USER</h1>
	<div class = "col-md-12 well">
		<div class = "row">

			<div class="col-md-4 ">
				<h4> USERNAME</h4>
			</div>
		
			<div class="col-md-4 ">
				<h4> ROLES</h4>
			</div>
		
			<div class="col-md-4 ">
				<h4>UPDATE</h4>
			</div>
		
		</div>
		<hr>
		
	@foreach ($roles as $user)
	<form method = "post" action = "">
	
		<div class = "row">
			<div class = "col-md-4 ">
    			{{$user->name}}
			</div>
			
			<div class = "col-md-4 ">
				<select class = "form-control" id = "reassign" name = "reassign">

				@foreach ($roles_data as $role_data)

					@if ($role_data->id == $user->privilegesid)						
						<option>{{$role_data->type}}</option>
								
					@endif	

				@endforeach	

				@foreach ($roles_data as $role_data)

					@if ($role_data->id != $user->privilegesid)						
						<option>{{$role_data->type}}</option>
								
					@endif	

				@endforeach	

				</select>
    		</div>

    		<div class="col-md-4 ">
				<button type="submit" class="btn btn-info" name="update" id="update" value="{{$user->name}}">UPDATE</button>
			</div>

    	</div>
    		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">	
    </form>
	<br>
	@endforeach

@stop
