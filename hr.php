<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="mystyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>           
    <!--//<script src="jquerywithoutfunc">-->
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <!--for jqgrid-->
    <script type='text/javascript' src='http://www.trirand.com/blog/jqgrid/js/jquery-ui-custom.min.js'></script>        

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
    <link rel="stylesheet" type="text/css" media="screen" href="/newproject/project/css/redmond/theme.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/newproject/project/css/ui.jqgrid.css" />
    <script src="js/grid.locale-en.js" type="text/javascript"></script>
    <script src="js/jquery.jqGrid.min.js" type="text/javascript"></script>
    <script src="js/grid.setcolumns.js" type="text/javascript"></script>
    <script src="myjq.js"></script>
    <script src="preview.js"></script>-->
    <script src="validatelogin.js"></script>
    <script src="editemailval.js"></script>
    <script src="myjs.js"></script>   
    </head>
<body>
    <div class="brand">MINDFIRE SOLUTIONS</div>
    <div class="address-bar">Mancheswar</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
               <a class="navbar-brand" href="#">mindfire solutions</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                   	<?php if(!$_SESSION["username"])
                   		{ ?>
                    <li>
                        <a href="details.php">Registration</a>
                    </li>
                    <li>
			            <a href="login.php">LogIn</a>
			        </li>
			        <?php } 
			        else if($_SESSION["username"] ){ ?>
                   	<li>
		               <a href="profile.php">Profile</a>
			        </li>
			        <li>
			            <a href="edit.php">Edit page</a>
			        </li>
			        <li>
			            <a href="logout.php">Logout</a>
			        </li>
			        <?php } ?>			               
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div class="container">

