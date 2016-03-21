<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
 
  <div class="container">
<br>
<br>
<form action="" method="post" enctype="multipart/form-data" name="mysearch">
    <div class="row">
     

	   <div class="col-lg-6 from-group">
     
     	 <input type="text" class="form-control" id="search_from" name="search_from" placeholder="Search from..."  value="">
       <br>
       <input type="text" class="form-control" id="search_to" name="search_to" placeholder="Search to..."  value="">
       <br>

       <span class="glyphicon glyphicon-calendar"></span>
        <label>DEPARTURE DATE</label> 
          
            <input type="date" class="form-control" id="from_date" name="from_date" value="">
           
            <br>


            <span class="glyphicon glyphicon-calendar"></span>
            <label>ARRIVAL DATE</label> 
             
              <input type="date" class="form-control" id="to_date" name="to_date" value="">
           
      		<br><span class="input-group-btn">
        		<button class="btn btn-md btn-primary" type="submit" name="search" id="search">SEARCH</button>
     		 </span>
    </div>
  </div>

</form>
</div>
</body>
</html>