function caps()
{
	var x = document.getElementById("usr");
	x.value = x.value.toUpperCase();
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{
		document.getElementById("id1").innerHTML = "";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id1").innerHTML ="do not leave it empty!";
	}
	else
	{
		document.getElementById("id1").innerHTML = "no numbers please!";
	}
}//for username
function emp()
{
	var x = document.getElementById("employer");
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById("id6").innerHTML = "";
	}
	else
	{
		document.getElementById("id6").innerHTML = "hey employer name can't be numeric!";
	}
	
}//for employer if present
function myfne(id,name)
{
	var x = document.getElementById(name);
	if(isNaN(x.value))
	{
		document.getElementById(id).innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById(id).innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 10)
	{
		document.getElementById(id).innerHTML="must be 10 numbers";
	}
	else 
	{
		document.getElementById(id).innerHTML="";
	}
}//for fne num ,landline mobile etc
function myname(id,name)
{
	var x = document.getElementById(name);
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById(id).innerHTML = "";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById(id).innerHTML ="do not leave it empty!";
	}
	else
	{
		document.getElementById(id).innerHTML = "no numbers please!";
	}
}//for string
function email(id,name)
{
	var x = document.getElementById(name);
	var alpha= /^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i;
	if(x.value.match(alpha))
	{
		document.getElementById(id).innerHTML = "";
	}
	else if(x.value==="" || x.value === null)
	{
		document.getElementById(id),innerHTML="do not leave it empty!"; 
	}
	else
	{
		document.getElementById(id).innerHTML="Please enter a valid email id";
	}
} //for emailid
function myzipp(id,name)
{
	var x = document.getElementById(name);
	if(isNaN(x.value))
	{
		document.getElementById(id).innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById(id).innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 7)
	{
		document.getElementById(id).innerHTML="must be 7 numbers";
	}
	else 
	{
		document.getElementById(id).innerHTML="";
	}
}//for fax
function mystreet(id,name)
{
	var x = document.getElementById(name);
	var alpha = /^[0-9A-Za-z]+$/;
	isempty(id,x);
	if(x.value.match(alpha))
	{

		document.getElementById(id).innerHTML = "";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById(id).innerHTML ="do not leave it empty!";
	}
	
	else
	{
		document.getElementById(id).innerHTML = "no special characters please!";
	}
	
}//mystreet
function pwd()
{
	var pwd = document.getElementById("password");
	var retype = document.getElementById("retypepassword");
	
	 if(pwd.value != retype.value)
	{
		document.getElementById("id24").innerHTML="retyped password does not match";
	}
	
}//for retyped pwd
function myfax(id,name)
{
	var x = document.getElementById(name);
	if(isNaN(x.value))
	{
		document.getElementById(id).innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById(id).innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 5)
	{
		document.getElementById(id).innerHTML="must be 5 numbers";
	}
	else 
	{
		document.getElementById(id).innerHTML="";
	}
}