$(document).ready(function(){
	
	$("#edit").click(function(e){
		var check = 0;
		//array declaration
		var error = new Array();

		error[0] = isempty('#username','#id1'); 
		error[1] = isempty('#password','#id2');
		error[2] = isempty('#fname','#id3');
		error[3] = isempty('#mname','#id4');
		error[4] = isempty('#lname','#id5');
		error[41] = isempty('#employer','#id6');
		error[5] = isempty('#phonenumber','#id7'); 
		error[6] = isempty('#street','#id8'); 
		error[7] = isempty('#ostreet','#id9'); 
		error[8] = isempty('#city','#id10');
		error[9] = isempty('#ocity','#id11');
		error[10] = isempty('#state','#id12');
		error[11] = isempty('#ostate','#id13');
		error[12] = isempty('#zipp','#id14');
		error[13] = isempty('#ozipp','#id15');
		error[14] = isempty('#mobilenumber','#id16');  
		error[15] = isempty('#omobilenumber','#id17');  
		error[16] = isempty('#landlinenumber','#id18');  
		error[17] = isempty('#olandlinenumber','#id19');  
		error[18] = isempty('#fax','#id20');
		error[19] = isempty('#ofax','#id21');
		error[20] = isempty('#emailid','#id22'); 
		error[21] = isempty('#oemailid','#id23');
		//for numbers only
		error[22] = numbers('#mobilenumber','#id16');
		error[23] = numbers('#omobilenumber','#id17');
		error[24] = numbers('#landlinenumber','#id18');
		error[25] = numbers('#olandlinenumber','#id19');
		error[26] = numbers('#phonenumber','#id7');
		//for length
		error[27] = checklength('#phonenumber','#id7');
		error[28] = checklength('#mobilenumber','#id16');
		error[29] = checklength('#omobilenumber','#id17');
		error[30] = checklength('#landlinenumber','#id18');
		error[31] = checklength('#olandlinenumber','#id19');
		//for alpha
		error[32] = isalpha('#fname','#id3');
		error[33] = isalpha('#mname','#id4');
		error[34] = isalpha('#lname','#id5');
		error[35] = isalpha('#city','#id10');
		error[36] = isalpha('#ocity','#id11');
		error[37] = isalpha('#state','#id12');
		error[38] = isalpha('#ostate','#id13');
		error[42] = isalpha('#employer','#id6');
		//for street
		error[39] = street('#street','#id8');
		error[40] = street('#ostreet','#id9');
		//checking on client side
		for(var i=0 ; i<error.length ;i++)
		{
			if(error[i] === false)
			{
				check++;
			}
		}
		if(check !== 0)
		{
		return false;
	}
	else 
		return true; 
	
	});
});

		function isempty(name,id){

			var temp = $.trim($(name).val());
			//validation for not empty
			if(temp.length == 0){
				check = 1;
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'Do not leave it empty' +
 			 				'</div>';
				$(id).html(error);
				$(name).focus();
				return false;
			}
			else 
				return true;
		}
		function isalpha(name,id){
			var rexp = /^[A-Za-z]+$/;
			var temp = $(name).val();
			//validation for only alphabets
			console.log(temp.match(rexp));
			if(!temp.match(rexp)){
				check = 1;
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'alphabets only' +
 			 				'</div>';
 			 	$(id).html(error);
				$(name).focus();
			return false;
			}
			else 
				return true;
		}
		function numbers(name,id){
			
			var temp = $(name).val();
			if(isNaN(temp))
			{	
				check = 1;
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'numbers only' +
 			 				'</div>';
 			 	$(id).html(error);
				$(name).focus();
			return false;
			}
			else 
				return true;

		}		
		function street(name,id){

			var rexp = /^[0-9A-Za-z]+$/;
			var temp = $(name).val();
			//validation for only alphabets
			if(!temp.match(rexp)){
				check = 1;
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'no special characters please' +
 			 				'</div>';
 			 	$(id).html(error);
				$(name).focus();

			return false;
			}
			else 
				return true;

		}	
		function checklength(name,id){

			var temp = $(name).val();
			if(temp.length > 10){
				check = 1;
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'numbers must be 10 numbers' +
 			 				'</div>';
 			 	$(id).html(error);
				$(name).focus();
			return false;
			}
			else 
				return true;
		}	


	