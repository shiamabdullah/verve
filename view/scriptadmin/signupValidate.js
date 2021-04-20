"use strict"
function validateUsername()
{
	let userName=document.getElementById('userName').value;
	let userNameMsg=document.getElementById('userNameMsg');

	if (userName=="") 
	{
		userNameMsg.innerHTML="⚠️Name can not be empty";
		return false;
	}

	else if(!isNaN(userName))
	{
		userNameMsg.innerHTML="⚠️Name can't only contain numbers";
		return false;

	}
	else if(userName.length<2){
		userNameMsg.innerHTML="⚠️Must be atleast two characters";
		return false;
	}
	else{
		userNameMsg.innerHTML="✅ okay";
		return true;


	}
	return true;
	
	
	
}

function validateName()
{
	let userName=document.getElementById('name').value;
	let userNameMsg=document.getElementById('nameMsg');

	if (userName=="") 
	{
		userNameMsg.innerHTML="⚠️Name can not be empty";
		return false;
	}

	else if(!isNaN(userName))
	{
		userNameMsg.innerHTML="⚠️Name can't only contain numbers";
		return false;

	}
	else if(userName.length<2){
		userNameMsg.innerHTML="⚠️Must be atleast two characters";
		return false;
	}
	else{
		userNameMsg.innerHTML="✅ okay";
		return true;


	}
	return true;
	
	
	
}

function validateEmail()
{
	let email=document.getElementById('email').value;
	let emailMsg=document.getElementById('emailMsg');

	if (userName=="") 
	{
		userNameMsg.innerHTML="⚠️Name can not be empty";
		return false;
	}

	else if(!isNaN(userName))
	{
		userNameMsg.innerHTML="⚠️Name can't only contain numbers";
		return false;

	}
	else if(userName.length<2){
		userNameMsg.innerHTML="⚠️Must be atleast two characters";
		return false;
	}
	else{
		userNameMsg.innerHTML="✅ okay";
		return true;


	}
	return true;
	
	
	
}
