"use strict"
function validatename()
{
	var name=document.getElementById('name').value;
	if (name=="") 
	{
		document.getElementById('namemsg').innerHTML="**Name cannot be empty";
		return false;
	}
	
	else
	{
		if((name[0]>='a' && name[0]<='z') || (name[0]>='A' && name[0]<='Z'))
		{
			if (name.split(" ").length>=2) 
			{
				var counter=0;
				while(counter<name.length)
				{
					if(!((name[counter]>='A' && name[counter]<='Z') ||(name[counter]>='a' && name[counter]<='z') || name[counter]=='.' || name[counter]=='-' || name[counter]==' '))
					{
						document.getElementById('namemsg').innerHTML="Name can only contain A-Z, a-z, . and -";
						return false;
					}
					counter=counter+1;
				}
				document.getElementById('namemsg').innerHTML="";
				return true;
			}
			else{
				return true;
			}
		}
		else
		{
			document.getElementById('namemsg').innerHTML="**Must start with a alphabet";
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
			document.getElementById('emailmsg').innerHTML="**Please enter a valid email";
			return false;
		}
	}
	else
	{
		document.getElementById('emailmsg').innerHTML="**Email cannot be empty";
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
		document.getElementById('passwordmsg').innerHTML="**Password & Confirm password must be same & can't be empty";
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
		document.getElementById('gendermsg').innerHTML="Please select Gender";
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
		document.getElementById('dateofbirthmsg').innerHTML="please set year 1972 to 2016";
		return false;
	}
}

function validate()
{
	if(validatename() && document.getElementById('namemsg').innerHTML=="" && validateemail() && validategender() && validatepassword() && validatedate())
	{
		return true;	
	}
	return false;
	
}