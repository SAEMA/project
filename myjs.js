function forall()
{
	var message = "";
	message += caps();
	message += emp();
	
	message += pwd();
	message += myname('id2','fname');
	message += myname('id3','mname');
	message += myname('id4','lname');
	message += myfne('id5','phonenumber');
	message += mystreet('id20','street');
	message += mystreet('id21','ostreet');
	message += myname('id7','city');
	message += myname('id8','ocity');
	message += myname('id9','state');
	message += myname('id10','ostate');
	message += myfne('id13','mobilenumber');
	message += myfne('id14','omobilenumber');
	message += myfne('id15','landlinenumber');
	message += myfne('id16','olandlinenumber');
	message += myfax('id17','fax');
	message += myfax('id18','ofax');
	message += email('id19','emailid');
	message += email('id22','oemailid');
	if(message === "" || message === null)
	{
		return true;
	}
	else
	{
		return false;
	}


}

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
}
//for string

 function email(id,name)
{
	var x = document.getElementById(name);
	var alpha= '/^[a-z0-9_-]+@[a-z0-9._-]+\.[a-z]+$/i';
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
