$(document).ready(function(){
    
    $("#tweets").change(function(e) {
    var selected = $(this).val();
    if(selected === '--') 
    {
      return ;
    }
    else
    {   
        $.ajax({
                method: 'POST',
                url: 'test.php',
                dataType: 'json',
                data: {
                    selected: selected, 
                    
                },
                success: function(msg) {
               
                     $("#displaytweets").html(msg.tweets);
                }
              });
    }
  });
});