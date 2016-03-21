<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
    <title>Laravel</title>
    
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/business-casual.css" rel="stylesheet">..
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>   
    <link href ="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css' />
    <link rel='stylesheet' type='text/css' href='http://www.trirand.com/blog/jqgrid/themes/ui.jqgrid.css' />
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>           
    <!-- Custom CSS -->
    <link href="/css/business-casual.css" rel="stylesheet">
    <!-- Fonts -->
    <link href ="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href ="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <!--for jqgrid -->   
    <script type ='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/jquery-ui-custom.min.js'></script>  
    <script type ='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/jquery-ui-custom.min.js'></script>  
    <link rel="stylesheet" type="text/css" media="screen" href="/css/theme.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/ui.jqgrid.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/redmond/theme.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/css/ui.jqgrid.css" />
    <script src="/js/grid.locale-en.js" type="text/javascript"></script>
    <script src="/js/jquery.jqGrid.min.js" type="text/javascript"></script>
    <script src="/js/grid.setcolumns.js" type="text/javascript"></script>
    <script src="/js/preview.js"></script>
    <script src= "/js/twitter.js" type="text/javascript"></script>
    <script src ="/js/role.js"</script>
   <!--  <script src = "js/admin.js" type="text/javascript"></script> -->
    <script src= "/js/twitter.js" type="text/javascript"></script>
    
    <script>
    $(function () {
            $.ajaxSetup({ 
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }  
            });
        });

    </script>
    <script src= "/js/admin.js" type="text/javascript"></script>
   <!--  <script src ="js/role.js"</script>
   -->
    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="/mystyle.css">

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="/mystyle.css">
</head>

<div class="brand">SAEMA MIFTAH</div>
   <!--  <div class="address-bar">Mancheswar</div> -->
    <body id="app-layout">
    <!--facebook login-->
   <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '{your-app-id}',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
</script>

<!--till here facebook login-->


        <nav class="navbar navbar-default">
           <!--  <div class="container"> -->
                <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                   <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button> -->
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Laravel
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/registration_form') }}">Register</a></li>
                        @else                   
                            <li><a href="{{ url('/profile') }}">Profile</a></li>
                            <li><a href="{{ url('/edit') }}">Edit</a></li>
                            <li><a href="{{ url('/jqgrid') }}">Grid display</a></li>
                            <li><a href="{{ url('/tweet') }}">Tweets</a></li>
                            <li><a href="{{ url('/roles') }}">Role</a></li>
                            <li><a href="{{ url('/add_delete') }}">Modify</a></li>
                            <li><a href="{{ url('/privilege') }}">Privilege</a></li>
                            <li><a href="{{ url('/logout') }}">Logout</a></li>        
                        @endif
                
                    </ul>
               <!--  </div> -->
            </div>
        </nav>

        @if (!empty(Session::get('status')))

            <div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign">{{Session::get('status')}} </div></span>
                   
        @endif

        @yield('main_content')

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="/js/grid.locale-en.js" type="text/javascript"></script>
        <script src="/js/jquery.jqGrid.min.js" type="text/javascript"></script>

        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}     
    </body>
</html>
