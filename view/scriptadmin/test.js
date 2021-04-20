<script>
	
	const myArray = ["1", "2","3","4","5","6","7","8","9"];
	

	function nameValidate(){
		let name= document.getElementById("name");
		let nameMsg=document.getElementById('nameMsg');

		if((name.value.length <= 2) || (name.value.length >= 20)){
			
			nameMsg.style.color="red";
			nameMsg.innerHTML="Must be between 2 and 20 chars!";

			// for(x=0; x<myArray.length; x++){
			// 	if(name.value.includes(myArray[x])){
			// 		nameMsg.innerHTML = "name cannot include a number";
			// 	}
			
		}
		//  if( !isNaN(name.value) ){
		// 		nameMsg.style.color="red";
		// 		nameMsg.innerHTML="Can't contain numbers only";

		// 	}
		
		// else{
		// 	nameMsg.style.color="green";
		// 		nameMsg.innerHTML="Okay";
		// }
	}

	function passwordValidate(){
		let password= document.getElementById("password");
		let passwordMsg=document.getElementById('passwordMsg');

		if((password.value.length < 8)){
			
			passwordMsg.style.color="red";
			passwordMsg.innerHTML="Must be atleast 8 characters";

		
		}
		 
		else{
			passwordMsg.style.color="green";
			passwordMsg.innerHTML="Okay";
		}
	}

	function repassValidate(){
		let repass= document.getElementById("repass");
		let repass=document.getElementById('repass');
		let password= document.getElementById("password");

		console.log(password+repass);
	}
		
			



	</script>
