$(document).ready(function(){
    

    $("#tweets").change(function(e) {

    var selected = $(this).val();
    console.log(selected);
    if(selected === '--') 
    {
      return ;
    }
    else
    {    
        $.ajax({
                method: 'POST',
                url: 'send_twitter_data',
                dataType: 'json',
                data: {
                    selected: selected,
                    
                },
                success: function(msg) 
                {

                    $("#displaytweets").html(msg);
                }
        });

    }
  });

    
    var token = $('meta[name="csrf-token"]').attr('content');

    var selected = $( "#tweets option:selected" ).val();
 
    console.log(selected);

    setTimeout(function() {
        try 
        {
            $('#tweets').trigger('change', $( "#tweets option:selected" ).val()); 
        } 
        catch(tweetErr) 
        {
            console.log(tweetErr);
        }
      
    }, 2000);




    var selected = $( ".list-group a " ).val();
    setTimeout(function(){
        try
        {
            var selected = $('#test0').text();
            

            $('body .list-group a' ).trigger( "click", selected );
            console.log(selected);
        }
        catch(twitterError)
        {
            console.log(twitterError);
        }

    }, 4000);

    
}); 


//please  remember always that it fetches the previous ajax value so instead of the
//commented line below write the uncommented line
$('body').on('click', '.list-group a', function( e ) {
//$(".list-group a").click(function(e){

    console.log($(this).text());
    var selection = $(this).text();

    $.ajax({
        
                method: 'POST',
                url: 'fetch_data',
                dataType: 'json',
                data: {
                    selection: selection, 
                    
                },
                success: function(msg) 
                {
                    $("#place").html(msg.val);
                }
        });


});

$('body').on('click', '.saema a', function( e ) {

console.log($(this).text());
var selection = $(this).text();



    $('.naema').html('<a class="twitter-timeline" id= "naema" href="https://twitter.com/Tarun_dayal12" data-widget-id="708272352669270016" data-screen-name='+

    selection + '>Tweets by @Tarun</a>');

    twttr.widgets.load();

 });
