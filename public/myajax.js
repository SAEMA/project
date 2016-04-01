$(document).ready(function(){

    $.ajax({
                method: 'POST',
                url: 'get_auto_mail',
                success: function(value) {
                    datas = value.val;
                    num = value.num;
                    total = value.total;
                    
                }
                  
            });

$("#1").click(function(){

var id = this.id; 
    $.ajax({
                method: 'POST',
                url: 'mail_page',
                dataType: 'html',
                data: {
                    datas: JSON.stringify(datas),
                    num: num, 
                    id: id, 
                    total: total,                     
                },
                success: function(response) {
                    
                    $("#1").hide();
                    $("#star").html( response );
                    
                }
                  
            });



 });
//datas: JSON.stringify(datas),
		$('body').on('click', '#get_me button', function( e ) {
           
            var id = this.id;
            console.log(id);

             $.ajax({
                method: 'POST',
                url: 'mail_page',
                dataType: 'html',
                data: {
                    datas: JSON.stringify(datas),
                    num: num, 
                    id: id, 
                    total: total,                     
                },
                success: function(response) {
                    
                    $("#1").hide();
                    $("#star").html( response );
                    
                }
                  
            });




        });


            $("#get_me button").click(function(){
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