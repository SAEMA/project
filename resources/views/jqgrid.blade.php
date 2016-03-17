
@extends('layouts.app')

@section('main_content')

<br>
<form id="hey" action = "#">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<table id="list_records" ></table>
	<div id="perpage"></div><br />
</form>

@stop