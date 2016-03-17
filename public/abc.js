$( "#sport_id" ).change(function() 
  {
    $.getJSON("/sport/"+ $(this).val() +"/positions", function(jsonData){
        select = '<select name="position" class="form-control input-sm " required id="position" >';
          $.each(jsonData, function(i,data)
          {
               select +='<option value="'+data.position_id+'">'+data.name+'</option>';
           });
        select += '</select>';
        $("#position").html(select);
    });
  });
