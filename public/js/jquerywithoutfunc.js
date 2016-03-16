$(document).ready(function(){
	//on edit click
	$("edit").click(function(){ 
		var username = $.trim($('username').val());
		var fname = $.trim($('#fname').val());
		var mname = $.trim($('#mname').val());
		var lname = $.trim($('#lname').val());
		var password = $.trim($('#password').val());
		var employer = $.trim($('#employer').val());
		var phonenumber = $.trim($('#phonenumber').val());
		var street = $.trim($('#street').val());
		var ostreet = $.trim($('#ostreet').val());
		var city = $.trim($('#city').val());
		var ocity = $.trim($('#ocity').val());
		var state = $.trim($('#state').val());
		var ostate = $.trim($('#ostate').val());
		var zipp = $.trim($('#zipp').val());
		var ozipp = $.trim($('#ozipp').val());
		var mobilenumber = $.trim($('#mobilenumber').val());
		var omobilenumber = $.trim($('#omobilenumber').val());
		var landlinenumber = $.trim($('#landlinenumber').val());
		var olandlinenumber = $.trim($('#olandlinenumber').val());
		var fax = $.trim($('#fax').val());
		var ofax = $.trim($('#ofax').val());
		var emailid = $.trim($('#emailid').val());
		var oemailid = $.trim($('#oemailid').val());			
		//array declaration
		var error = new Array();
		//initiaising the array
		for (i = 0; i < 24; i++)
		{
			error[i] = "";
		}
		//validation for user name
		if(username=="")
		{
			error[0]="please don't leave it blank";
		}
		else if(!username.match( /^[a-zA-Z]*$/))
		{
			error[0]="Enter alphabets only";
		}	
		//validating for first name
		if(fname=="")
		{
			error[1]="please don't leave it blank";
		}
		else if(!fname.match( /^[a-zA-Z]*$/))
		{
			error[1]="Enter alphabets only";
		}
		//validating for middle name
		if(mname=="")
		{
			error[2]="please don't leave it blank";
		}
		else if(!mname.match( /^[a-zA-Z]*$/))
		{
			error[2]="Enter alphabets only";
		}
		//validating for last name 
		if(lname=="")
		{
			error[3]="please don't leave it blank";
		}
		else if(!lname.match( /^[a-zA-Z]*$/))
		{
			error[3]="Enter alphabets only";
		}
		//validating for password
		if(password=="")
		{
			error[4]="please don't leave it blank";
		}
		else if(password.length >6)
		{
			error[4]="password must be 5 characters only!";
		}
		//validating for employer
		if(!employer.match( /^[a-zA-Z]*$/))
		{
			error[5]="alphabets only!";
		}
		//validating for phone number
		if(phonenumber=="")
		{
			error[6]="can't be blank";
		}
		else if(!phonenumber.match( /^([0-9]{10})*$/))
		{
			error[6]="only digits";
			
		}
		else if(!phonenumber.length > 10 || !phonenumber.length < 10)
		{
			error[6]="only 10 digits please!";
		}
		//validating for street
		if(street=="")
		{
			error[7]="please don't leave it blank";
		}
		else if(!street.match( /^[0-9a-zA-Z]*$/))
		{
			error[7]="no special characters please!";
		}
		//validating for office street
		if(ostreet=="")
		{
			error[8]="please don't leave it blank";
		}
		else if(!ostreet.match( /^[0-9a-zA-Z]*$/))
		{
			error[8]="no special characters please!";
		}
		//validating for city
		if(city=="")
		{
			error[9]="please don't leave it blank";
		}
		else if(!city.match( /^[a-zA-Z]*$/))
		{
			error[9]="no special characters please!";
		}
		//validating for office city
		if(ocity=="")
		{
			error[10]="please don't leave it blank";
		}
		else if(!ocity.match( /^[a-zA-Z]*$/))
		{
			error[10]="no special characters please!";
		}
		//validating for state
		if(state=="")
		{
			error[11]="please don't leave it blank";
		}
		else if(!city.match( /^[a-zA-Z]*$/))
		{
			error[11]="no special characters please!";
		}
		//validating for office state
		if(ostate=="")
		{
			error[12]="please don't leave it blank";
		}
		else if(!ostate.match( /^[a-zA-Z]*$/))
		{
			error[12]="no special characters please!";
		}
		//validating for zip
		if(zipp=="")
		{
			error[13]="can't be blank";
		}
		else if(!zipp.match( /^([0-9]{10})*$/))
		{
			error[13]="only digits";
			
		}
		else if(!zipp.length > 10 || !zipp.length < 10)
		{
			error[13]="only 10 digits please!";
		}
		//validating for office zip
		if(ozipp=="")
		{
			error[14]="can't be blank";
		}
		else if(!ozipp.match( /^([0-9]{10})*$/))
		{
			error[14]="only digits";
			
		}
		else if(!ozipp.length > 10 || !ozipp.length < 10)
		{
			error[14]="only 10 digits please!";
		}
		//validating for mobile number
		if(mobilenumber=="")
		{
			error[15]="can't be blank";
		}
		else if(!mobilenumber.match( /^([0-9]{10})*$/))
		{
			error[15]="only digits";
			
		}
		else if(!mobilenumber.length > 10 || !mobilenumber.length < 10)
		{
			error[15]="only 10 digits please!";
		}
		//validating for office mobile number
		if(omobilenumber=="")
		{
			error[16]="can't be blank";
		}
		else if(!omobilenumber.match( /^([0-9]{10})*$/))
		{
			error[16]="only digits";
			
		}
		else if(!omobilenumber.length > 10 || !omobilenumber.length < 10)
		{
			error[16]="only 10 digits please!";
		}
		//validating for landline number
		if(landlinenumber=="")
		{
			error[17]="can't be blank";
		}
		else if(!landlinenumber.match( /^([0-9]{10})*$/))
		{
			error[17]="only digits";
			
		}
		else if(!landlinenumber.length > 10 || !landlinenumber.length < 10)
		{
			error[17]="only 10 digits please!";
		}
		//validating for office landline number
		if(olandlinenumber=="")
		{
			error[18]="can't be blank";
		}
		else if(!olandlinenumber.match( /^([0-9]{10})*$/))
		{
			error[18]="only digits";
			
		}
		else if(!olandlinenumber.length > 10 || !olandlinenumber.length < 10)
		{
			error[18]="only 10 digits please!";
		}
		//validating for fax
		if(fax=="")
		{
			error[19]="can't be blank";
		}
		else if(!fax.match( /^([0-9]{10})*$/))
		{
			error[19]="only digits";
		}
		//validating for office fax
		if(ofax=="")
		{
			error[20]="can't be blank";
		}
		else if(!ofax.match( /^([0-9]{10})*$/))
		{
			error[20]="only digits";
			
		}
		//validating for email id
		if(emailid=="")
		{
			error[21]="can't be blank";
		}
		else if(!emailid.match( /^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i))
		{
			error[21]="Not a Valid email id";
			
		}
		//validating for office email id
		if(oemailid=="")
		{
			error[22]="can't be blank";
		}
		else if(!oemailid.match( /^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i))
		{
			error[22]="Not a Valid email id";
			
		}
		//now check for errors
		if(error != "")
		{
			$("#username").text(error[0]);
			$("#fname").text(error[1]);
			$("#mname").text(error[2]);
			$("#lname").text(error[3]);
			$("#password").text(error[4]);
			$("#employer").text(error[5]);
			$("#phonenumber").text(error[6]);
			$("#street").text(error[7]);
			$("#ostreet").text(error[8]);
			$("#city").text(error[9]);
			$("#focity").text(error[10]);
			$("#state").text(error[11]);
			$("#ostate").text(error[12]);
			$("#zipp").text(error[13]);
			$("#ozipp").text(error[14]);
			$("#mobilenumber").text(error[15]);
			$("#omobilenumber").text(error[16]);
			$("#landlinenumber").text(error[17]);
			$("#olandlinenumber").text(error[18]);
			$("#fax").text(error[19]);
			$("#ofax").text(error[20]);
			$("#emailid").text(error[21]);
			$("#oemailid").text(error[22]);
			return false;
		}
		else
			return true;
				
	});	
});
