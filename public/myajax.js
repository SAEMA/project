$(document).ready(function(){

console.log("here");

    $.ajax({
                method: 'POST',
                url: 'get_auto_mail',
                success: function(value) {
                    datas = value.val;
                    
                }
                  
            });

$("#click_me").click(function(){
console.log ('hi');

console.log(typeof(datas));
//var mail_data = data;
console.log(datas);

//var json = JSON2.stringify(datas );
var saema = 'saema';

    $.ajax({
                method: 'POST',
                url: 'mail_page',
                dataType: 'html',
                data: {
                    datas: JSON.stringify(datas),
                    saema: saema,                       
                },
                success: function(response) {
                   console.log("success"); 
                   console.log(response);
                    
                }
                  
            });



 });
//datas: JSON.stringify(datas),
		
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