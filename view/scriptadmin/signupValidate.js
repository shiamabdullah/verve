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

	if (email=="") 
	{
		emailMsg.innerHTML="⚠️Email can not be empty";
		return false;
	}
	else if (email.indexOf("@") === -1) {
		emailMsg.innerHTML="⚠️email doesn't have @ character";
		return false;
	}
	else {
		emailMsg.innerHTML="✅ okay";
		return true;

	}
	return true;


	}


	function validatePassword()
{
	let password=document.getElementById('password').value;
	let passwordMsg=document.getElementById('passwordMsg');

	if (password=="") 
	{
		passwordMsg.innerHTML="⚠️password can not be empty";
		return false;
	}
	if (password.length<8) 
	{
		passwordMsg.innerHTML="⚠️password must be atleast 8 chars";
		return false;
	}

	else {
		passwordMsg.innerHTML="✅ okay";
		return true;

	}
	return true;


	}


	function validateRepass()
{	let password=document.getElementById('password').value;
	let repass=document.getElementById('repass').value;
	let repassMsg=document.getElementById('repassMsg');
	console.log(password);
	if (repass=="") 
	{
		repassMsg.innerHTML="⚠️password can not be empty";
		return false;
	}
	if (repass!=password) 
	{
		repassMsg.innerHTML="⚠️doesn't match with password";
		return false;
	}

	else {
		repassMsg.innerHTML="✅ okay";
		return true;

	}
	return true;


	}

	

