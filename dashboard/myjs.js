
function validform()
{
	var ph = document.myform.phonenumber;
	var message = (fnvalid(ph));



	if(message==0)
	{
		
	}
	else alert(message);
}
function fnvalid(ph)
{
	if(isNaN(ph))
	{
		return "PHONE NUMBER MUST BE A NUMBER";
	}
	else 
		return "";
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
}
function myfname()
{
	var x = document.getElementById("fname");
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById("id2").innerHTML = "";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id2").innerHTML ="do not leave it empty!";
	}
	else
	{
		document.getElementById("id2").innerHTML = "no numbers please!";
	}
}
function mymname()
{
	var x = document.getElementById("mname");
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById("id3").innerHTML = "";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id3").innerHTML ="do not leave it empty!";
	}
	else
	{
		document.getElementById("id3").innerHTML = "no numbers please!";
	}
}
function mylname()
{
	var x = document.getElementById("lname");
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById("id4").innerHTML = "";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id4").innerHTML ="do not leave it empty!";
	}
	else
	{
		document.getElementById("id4").innerHTML = "no numbers please!";
	}
}
function myfne()
{
	var x = document.getElementById("phonenumber");
	if(isNaN(x.value))
	{
		document.getElementById("id5").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id5").innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 10)
	{
		document.getElementById("id5").innerHTML="must be 10 numbers";
	}
	else 
	{
		document.getElementById("id5").innerHTML="";
	}
}
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
	
}
function mycity()
{
	var x = document.getElementById("city");
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById("id7").innerHTML = "";
	}
	else
	{
		document.getElementById("id7").innerHTML = "hey city can't be numeric!";
	}
	
}
function myocity()
{
	var x = document.getElementById("ocity");
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById("id8").innerHTML = "";
	}
	else
	{
		document.getElementById("id8").innerHTML = "hey office city can't be numeric!";
	}
	
}
function mystate()
{
	var x = document.getElementById("state");
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById("id9").innerHTML = "";
	}
	else
	{
		document.getElementById("id9").innerHTML = "hey state can't be numeric!";
	}
	
}
function myostate()
{
	var x = document.getElementById("ostate");
	var alpha = /^[A-Za-z]+$/;
	if(x.value.match(alpha))
	{

		document.getElementById("id10").innerHTML = "";
	}
	else
	{
		document.getElementById("id10").innerHTML = "hey office state can't be numeric!";
	}
	
}
function myzipp()
{
	var x = document.getElementById("zipp");
	if(isNaN(x.value))
	{
		document.getElementById("id11").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id11").innerHTML ="do not leave it empty!";
	}
	else 
	{
		document.getElementById("id11").innerHTML="";
	}
}
function myozipp()
{
	var x = document.getElementById("ozipp");
	if(isNaN(x.value))
	{
		document.getElementById("id12").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id12").innerHTML ="do not leave it empty!";
	}
	else 
	{
		document.getElementById("id12").innerHTML="";
	}
}
function mymob()
{
	var x = document.getElementById("mobilenumber");
	if(isNaN(x.value))
	{
		document.getElementById("id13").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id13").innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 10)
	{
		document.getElementById("id13").innerHTML="must be 10 numbers";
	}
	else 
	{
		document.getElementById("id13").innerHTML="";
	}
}
function myomob()
{
	var x = document.getElementById("omobilenumber");
	if(isNaN(x.value))
	{
		document.getElementById("id14").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id14").innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 10)
	{
		document.getElementById("id14").innerHTML="must be 10 numbers";
	}
	else 
	{
		document.getElementById("id14").innerHTML="";
	}
}
function mylandline()
{
	var x = document.getElementById("landlinenumber");
	if(isNaN(x.value))
	{
		document.getElementById("id15").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id15").innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 10)
	{
		document.getElementById("id15").innerHTML="must be 10 numbers";
	}
	else 
	{
		document.getElementById("id15").innerHTML="";
	}
}
function myolandline()
{
	var x = document.getElementById("olandlinenumber");
	if(isNaN(x.value))
	{
		document.getElementById("id16").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id16").innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 10)
	{
		document.getElementById("id16").innerHTML="must be 10 numbers";
	}
	else 
	{
		document.getElementById("id16").innerHTML="";
	}
}
function myfax()
{
	var x = document.getElementById("fax");
	if(isNaN(x.value))
	{
		document.getElementById("id17").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id17").innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 10)
	{
		document.getElementById("id17").innerHTML="must be 10 numbers";
	}
	else 
	{
		document.getElementById("id17").innerHTML="";
	}
}
function myofax()
{
	var x = document.getElementById("ofax");
	if(isNaN(x.value))
	{
		document.getElementById("id18").innerHTML="only numbers please!";
	}
	else if(x.value ==="" || x.value === null)
	{
		document.getElementById("id18").innerHTML ="do not leave it empty!";
	}
	else if(x.value.length < 10)
	{
		document.getElementById("id18").innerHTML="must be 10 numbers";
	}
	else 
	{
		document.getElementById("id18").innerHTML="";
	}
}

