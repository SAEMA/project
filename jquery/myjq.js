$(document).ready(function(){
	
	$("#edit").click(function(e){

		isempty('#username','#id1'); 
		isempty('#password','#id2');
		isempty('#fname','#id3');
		isempty('#mname','#id4');
		isempty('#lname','#id5');
		isempty('#phonenumber','#id7'); 
		isempty('#street','#id8'); 
		isempty('#ostreet','#id9'); 
		isempty('#city','#id10');
		isempty('#ocity','#id11');
		isempty('#state','#id12');
		isempty('#ostate','#id13');
		isempty('#zipp','#id14');
		isempty('#ozipp','#id15');
		isempty('#mobilenumber','#id16');  
		isempty('#omobilenumber','#id17');  
		isempty('#landlinenumber','#id18');  
		isempty('#olandlinenumber','#id19');  
		isempty('#fax','#id20');
		isempty('#ofax','#id21');
		isempty('#emailid','#id22'); 
		isempty('#oemailid','#id23');
		//for numbers only
		numbers('#mobilenumber','#id16');
		numbers('#omobilenumber','#id17');
		numbers('#landlinenumber','#id18');
		numbers('#olandlinenumber','#id19');
		numbers('#phonenumber','#id7');
		//for length
		checklength('#phonenumber','#id7');
		checklength('#mobilenumber','#id16');
		checklength('#omobilenumber','#id17');
		checklength('#landlinenumber','#id18');
		checklength('#olandlinenumber','#id19');
		//for alpha
		isalpha('#fname','#id3');
		isalpha('#mname','#id4');
		isalpha('#lname','#id5');
		isalpha('#city','#id10');
		isalpha('#ocity','#id11');
		isalpha('#state','#id12');
		isalpha('#ostate','#id13');
		//for street
		street('#street','#id8');
		street('#ostreet','#id9');
		return false;
	});
});

		function isempty(name,id)
		{

			var temp = $.trim($(name).val());

			//validation for not empty
			if(temp.length == 0)
			{

				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'Do not leave it empty' +
 			 				'</div>';
				$(id).html(error);
				$(name).focus();
			
			}

		}
		function isalpha(name,id)
		{
			var rexp = /^[A-Za-z]+$/;
			var temp = $(name).val();
			//validation for only alphabets
			console.log(temp.match(rexp));
			if(!temp.match(rexp))
			{
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'alphabets only' +
 			 				'</div>';
 			 	$(id).html(error);
				$(name).focus();
			}
		}
		function numbers(name,id)
		{
			var temp = $(name).val();
			if(isNaN(temp))
			{
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'numbers only' +
 			 				'</div>';
 			 	$(id).html(error);
				$(name).focus();
			}

		}		
		function street(name,id)
		{
			var rexp = /^[0-9A-Za-z]+$/;
			var temp = $(name).val();
			//validation for only alphabets
			if(!temp.match(rexp))
			{
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'no special characters please' +
 			 				'</div>';
 			 	$(id).html(error);
				$(name).focus();

			}

		}	
		function checklength(name,id)
		{
			var temp = $(name).val();
			if(temp.length > 10)
			{
				var error = '<div class="alert-danger" role="alert">' +
			 				'<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>' +
			 				'<span class="sr-only">Error:</span>' +
 		  	 				'numbers must be 10 numbers' +
 			 				'</div>';
 			 	$(id).html(error);
				$(name).focus();
			}
		}	


	