$(document).ready(function(){
		
		$("#role").change(function(e) {
	    var selected = $(this).val();
	    if(selected === '--') 
	    	 {  $("#display").text("") ;}
	    	else 
                console.log("hi");
	    		$.ajax({
                method: 'POST',
                url: 'y.php',
                dataType: 'json',
                data: {
                    selected: selected, 
                    
                },
                success: function(value) {
                	
                      $("#display").html( value );
                }
            });


	    });
	});

//my dynamic function that will change the value in database

function my_dynamic_functions(checked,role,resource_info,action_id)
{
 	console.log(checked);
 	console.log(role);
 	console.log(resource_info);
 	console.log(action_id);
 	$.ajax({
                method: 'POST',
                url: 'p.php',
                dataType: 'json',
                data: {
                    checked : checked,
                    role : role,
                    resource_info : resource_info,
                    action_id : action_id, 
                    
                },
                 success: function(value) {
                 console.log (value);    
               
                }
            });

}


