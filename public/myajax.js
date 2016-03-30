$(document).ready(function(){

console.log("here");

     $.ajax({
                method: 'POST',
                url: 'get_auto_mail',
                success: function() {

                    console.log("successsful");
                }
                  
            });


		
            $(".get_me button").click(function(){
                console.log("i am here");
                var selected = this.id;
                console.log(selected);

                $.ajax({
                method: 'POST',
                url: 'test2.php',
                dataType: 'json',
                data: {
                    selected: selected, 
                    
                },
                success: function(value) {
                    console.log("success");
                    $("#to_me1").html( value.hr );
                      $("#to_me2").html( value.email );
                      $("#to_me3").html( value.fr );
                }

            });
    });

});