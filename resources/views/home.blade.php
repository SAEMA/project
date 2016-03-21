
@extends('layouts.app')

@section('main_content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class = "well">
                <img src = "img/images.jpeg">
            </div>
            <div class="well">
                <div class="panel-heading">Hey there !</div>
                <div class="panel-body">
                   Register in this amazing website and feel free to explore!!
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="content">
        <div class="title">Logged in with facebook</div>
        You are logged in
        </div>

        <h4> Your name is {{ Auth::user()->name }} </h4>
        <h4> Your email is {{ Auth::user()->email }} </h4>
        <img src="{{ Auth::user()->avatar }}" height="200" width="200" />
    </div>



@endsection
