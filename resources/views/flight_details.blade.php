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
 <?php $i = 0 ; $j = 0; $k = 0;?>
  <div class="container">
  
@foreach($durations AS $heading)

<div class="row">
      <div class="col-lg-4">
      </div>
    </div>

<div class="row">
      <div class="col-lg-6">
    <div class="panel panel-primary" >
      <div class="panel-heading">
           
          <h3 class="panel-title"> {{ $airline[$i] }}  </h3>
      </div>

      <div class="panel-body">
      
      
     <p class="text-info">  {{ $heading }} </p>

    Price : Rs {{ $costs[$i]}}

    <br>

      <br>
      <div class="row">
        <div class="col-lg-4">
          {{ $roundtrip[$j] }} -> {{ $roundtrip[$j+1] }} 

        </div>

        <div class="col-lg-6">
          
          {{ $duration[$k] }}
          
        </div>

        <div class="col-lg-2">
          
          {{ $stops[$k] }}
          
        </div>

      </div>

      <br>

      <div class="row">
          
        <div class="col-lg-4">
        
          {{ $roundtrip[$j+2] }} -> {{ $roundtrip[$j+3] }}     

        </div>

        <div class="col-lg-6">

          {{ $duration[$k+1] }}
          
        </div>

        <div class="col-lg-2">
          
          {{ $stops[$k+1] }}
          
        </div>
        
      </div>


      
      </div>

    </div>
  </div>
  </div>
     <?php $i++; $j = $j + 4; $k = $k + 2;?>
    @endforeach
  </div>
</body>
</html>


