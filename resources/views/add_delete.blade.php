@extends('layouts.app')

@section('main_content')

@if ( ! empty(Session::get('operation')))
    <div class ="well">
    {{Session::get('operation')}} 
   	</div>         
@endif

<h1 class="well">ADD OR REMOVE ROLES</h1>
	<div class="col-md-12 well">
		<form method="post" action ="">
			<div class="row">
				<div class="col-md-6 form-group">
					<label>ROLES</label>						
					<select class="form-control" id="roles" name="roles">

						@foreach ($roles_present as $role_present)

							<option>{{$role_present->type}}</option>

						@endforeach

					</select>
				</div>

				<div class="col-md-6 form-group">
					<label>ADD ROLES</label>
					<input class="form-control" type="text" name="newroles" id="newroles" placeholder="Add new roles here." >
				</div>

				<div class="col-md-6 form-group">
					<button type="submit" class="btn btn-info" name="deleteroles" id="deleteroles" value="deleteroles">DELETE</button>
				</div>

				<div class="col-md-6 form-group">
					<button type="submit" class="btn btn-info" name="addroles" id="addroles" value="addroles">ADD</button>

				</div>
			</div>
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">	
		</form>	
	</div>

<br><br><br>
<h4>.</h4>
<br><br><br><br><br>

<h1 class="well">ADD OR REMOVE OPERATIONS</h1>
	<div class="col-md-12 well">
		<form method="post" action ="">
			<div class="row">
				<div class="col-md-6 form-group">
					<label>OPEARTIONS</label>						
					<select class="form-control" id="operation" name="operation">

						@foreach ($operations_present as $operation_present)

							<option>{{$operation_present->actions}}</option>

						@endforeach

					</select>
				</div>
				
				<div class="col-md-6 form-group">
					<label>ADD OPERATIONS</label>
					<input class="form-control" type="text" name="newoperation" id="newoperation" placeholder="Add new operations here." >
				</div>

				<div class="col-md-6 form-group">
					<button type="submit" class="btn btn-info" name="deleteoperation" id="deleteoperation" value="deleteoperation">DELETE</button>				
				</div>

				<div class="col-md-6 form-group">
					<button type="submit" class="btn btn-info" name="addoperation" id="addoperation" value="addoperation">ADD</button>
				</div>

			</div>
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">	
		</form>	
	</div>

<br><br><br>
<h4>.</h4>
<br><br><br><br><br>

<h1 class="well">ADD OR REMOVE RESOURCES</h1>
	<div class="col-md-12 well">
		<form method="post" action ="">
			<div class="row">
				<div class="col-md-6 form-group">
					<label>RESOURCES</label>						
					<select class="form-control" id="resources" name="resources">
						@foreach ($resources_present as $resource_present)

							<option>{{$resource_present->name}}</option>

						@endforeach

					</select>
				</div>
				
				<div class="col-md-6 form-group">
					<label>ADD RESOURCES</label>
					<input class="form-control" type="text" name="newresources" id="newresources" placeholder="Add new resources here." >
				</div>
				
				<div class="col-md-6 form-group">
					<button type="submit" class="btn btn-info" name="deleteresources" id="deleteresources" value="deleteresources">DELETE</button>
				</div>

				<div class="col-md-6 form-group">
					<button type="submit" class="btn btn-info" name="addresources" id="addresources" value="addresources">ADD</button>
				</div>
			</div>
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">	
		</form>	
	</div>
@stop