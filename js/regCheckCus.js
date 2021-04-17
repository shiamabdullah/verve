"use strict"
function validateusername()
{
	var username=document.getElementById('username').value;
	if (username=="") 
	{
		document.getElementById('usernamemsg').innerHTML="Name can not be empty";
		return false;
	}
	
	else
	{
		if((username[0]>='a' && username[0]<='z') || (username[0]>='A' && username[0]<='Z'))
		{
			if (username.split(" ").length>=2) 
			{
				var counter=0;
				while(counter<username.length)
				{
					if(!((username[counter]>='A' && username[counter]<='Z') ||(username[counter]>='a' && username[counter]<='z') || username[counter]=='.' || username[counter]=='-' || username[counter]==' '))
					{
						document.getElementById('usernamemsg').innerHTML="userName can only contain A-Z, a-z, . and -";
						return false;
					}
					counter=counter+1;
				}
				document.getElementById('usernamemsg').innerHTML="";
				return true;
			}
			else
			{
				document.getElementById('usernamemsg').innerHTML="Contain at least two words";
				return false;
			}
		}
		else
		{
			document.getElementById('usernamemsg').innerHTML="Must start with a letter";
			return false;
		}
	}
	return false;
}


function validateemail()
{
	var email=document.getElementById('email').value;	
	if(email!="")
	{
		if(email.split("@").length>=2)
		{
			var emailsplit=email.split("@");
			if(emailsplit[1].split(".").length>=2)
			{
				document.getElementById('emailmsg').innerHTML="";
				return true;
			}
			else
			{
				document.getElementById('emailmsg').innerHTML=".com is missing";
				return false;
			}
		}
		else
		{
			document.getElementById('emailmsg').innerHTML="Please enter valid email";
			return false;
		}
	}
	else
	{
		document.getElementById('emailmsg').innerHTML="Email cannot be empty";
		return false;
	}
}

function validatepassword()
{
	var password=document.getElementById('password').value;
	var re_password=document.getElementById('re_password').value;

	if(password==re_password && password!="")
	{
		document.getElementById('passwordmsg').innerHTML="";
		return true;
	}
	else
	{
		document.getElementById('passwordmsg').innerHTML="Password and Confirmpassword must be same and also can not be empty";
		return false;
	}
}


function validategender()
{
	var male=document.getElementById('male').checked;
	var female=document.getElementById('female').checked;
	var others=document.getElementById('others').checked;
	if ((male=="") && (female=="") &&(others=="")) 
	{
		document.getElementById('gendermsg').innerHTML="Gender Required";
		return false;
	}
	else
	{
		document.getElementById('gendermsg').innerHTML="";
		return true;
	}
}

function validatedate()
{
	var date=document.getElementById('dob').value;
	if (date!="") 
	{
		if (date.split("-")) 
		{
			var datesplit=date.split("-");
			var date1=parseInt(datesplit[0]);
			if (date1>=1972 && date1<=2016) 
			{
				document.getElementById('dateofbirthmsg').innerHTML="";
				return true;
			}
		}
		
	}
	else
	{
		document.getElementById('dateofbirthmsg').innerHTML="Date of Birth year 1972 to 2016";
		return false;
	}
}

function validate()
{
	
	if(validatename() && document.getElementById('usernamemsg').innerHTML=="" && validateemail() && validategender() && validatepassword() && validatedate())
	{
		return true;	
	}
	return false;
	
}