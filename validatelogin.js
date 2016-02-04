$(document).ready(function(){
	$("#login").click(function()
	{
		var username = $.trim($("#usr").val());
		var password = $.trim($("#pwd").val());
		//array for storing errors
		var err = ["",""];
		//validation for username
		if(username === "")
    	{	          	
            err[0]="do not leave it empty";
            $("#us1").text(err[0]);
    	}
    	else if(!username.match( /^[a-zA-Z]*$/))
    	{	
    		err[0]="no numbers";
    		$("#us1").text(err[0]);
    	}
    	if(password === "")
        {   
            err[1]="Password cannot be blank";
            $("#us2").text(err[1]);
        }
        if (err[0]!=="" || err[1]!=="" )
        {
    		return false;
        } 
    else {
    		$.ajax({
  				method: 'POST',
                url: 'loginserverval.php',
                dataType: 'json',
                data: {
                    username: username, 
                    password: password 
                },
                success: function(msg) {
                    //console.log(msg.admin == 5);
                	if (msg.idi == "success" ) 
                	{
                       if(msg.admin == 5)
                       {
                        window.location.replace('admin.php');
                       }
                       else {  
                		window.location.replace('profile.php');
                        }
                    } 
                	else 
                	{  
                		$("#us3").html(msg.idi1);          	
               		}
           		}
            });
         }
	});
});
