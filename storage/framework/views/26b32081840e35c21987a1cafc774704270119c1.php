<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
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
    <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>
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
    <?php /* <link href="<?php echo e(elixir('css/app.css')); ?>" rel="stylesheet"> */ ?>
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
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Laravel
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="<?php echo e(url('/home')); ?>">Home</a></li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(url('/registration_form')); ?>">Register</a></li>
                        <?php else: ?>                   
                            <li><a href="<?php echo e(url('/profile')); ?>">Profile</a></li>
                            <li><a href="<?php echo e(url('/edit')); ?>">Edit</a></li>
                            <li><a href="<?php echo e(url('/jqgrid')); ?>">Grid display</a></li>
                            <li><a href="<?php echo e(url('/tweet')); ?>">Tweets</a></li>
                            <li><a href="<?php echo e(url('/roles')); ?>">Role</a></li>
                            <li><a href="<?php echo e(url('/add_delete')); ?>">Modify</a></li>
                            <li><a href="<?php echo e(url('/privilege')); ?>">Privilege</a></li>
                            <li><a href="<?php echo e(url('/logout')); ?>">Logout</a></li>        
                        <?php endif; ?>
                
                    </ul>
               <!--  </div> -->
            </div>
        </nav>

        <?php if(!empty(Session::get('status'))): ?>

            <div class="alert alert-danger" type="hidden"><span class="glyphicon glyphicon-exclamation-sign"><?php echo e(Session::get('status')); ?> </div></span>
                   
        <?php endif; ?>

        <?php echo $__env->yieldContent('main_content'); ?>

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="/js/grid.locale-en.js" type="text/javascript"></script>
        <script src="/js/jquery.jqGrid.min.js" type="text/javascript"></script>

        <?php /* <script src="<?php echo e(elixir('js/app.js')); ?>"></script> */ ?>     
    </body>
</html>
