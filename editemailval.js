//for emailid
$(document).ready(function(){
	$("#emailid").blur(function()
	{
		var email = $.trim( $("#emailid").val());
		if (email == "")
		{
			var error1 = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'Email id not filled!' +
 			 				'</div>';
                		$("#us4").html(error1); 
		}
		else {
		$.ajax({
  				method: 'POST',
                url: 'emailserverval.php',
                dataType: 'json',
                data: {
                    email:email
                },
                success: function(msg) {
                	if (msg.emailid == "1") 
                	{
                		var error1 = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'Email id has already been claimed!' +
 			 				'</div>';
                		$("#us4").html(error1); 
                	} 
                	else
                	{	var error1="";
                		$("#us4").html(error1);
           			}
           		}
           	});
           }
	});
	//for office emailid
	$("#oemailid").blur(function()
	{
		var oemail = $.trim( $("#oemailid").val());
		if (oemail == "")
		{
			var error2 = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'OFFICE Email id not filled!' +
 			 				'</div>';
                		$("#us5").html(error2); 
		}
		else {
		$.ajax({
  				method: 'POST',
                url: 'oemailserverval.php',
                dataType: 'json',
                data: {
                    oemail:oemail            
       	        },
                success: function(msg) {
                	if (msg.oemailid == "1") 
                	{
                		var error2 = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'OFFICE Email id has already been claimed!' +
 			 				'</div>';
                		$("#us5").html(error2); 
                	} 
                	else
                	{	
                		var error2="";
                		$("#us5").html(error2);
           			}
           		}
           	});	
		}
	});
});