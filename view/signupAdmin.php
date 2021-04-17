<?php 
    $title="Admin Sign Up";
	include('header.php');
?>
<form name="form" method="post" action="../controller/regCheckAdmin.php">
			
			<fieldset>
			<center>
			<h2 class="header-Reg"> Sign Up </h2>
			</center>
			<table align="center" cellpadding="10">
                <tr >
                    <td>Name<br></td>
                    <td>
                        <input type="text" id="name" name="name" value="" placeholder= "Enter Your Name" "/>
						<br>
						<span id="nameMsg"> </span>

                    </td>
                    
                </tr>
                <tr>
                    <td>User Name<br></td>
                    <td>
                        <input type="text" id="userName" name="username" value="" placeholder= "Enter your username/id" required">
						<br>
						<span id="userNameMsg"> </span>
						</td>
                </tr>
                <tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password" value="" placeholder= "Enter Your password" required ">
					<br>
					<span id="passwordMsg"> </span>
					</td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="repass" id="repass" value="" placeholder="Enter your password again"required>
					<br><span id="repassMsg"> </span>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" id="email" value="" placeholder= "Enter your email">
					<br><span id="emailMsg"> </span>
				</td>
				</tr>
				<tr>
					<td>Gender </td>

					<td>
						<input type="radio" name="gender" value="Male"> Male
                        <input type="radio" name="gender" value="Female"> Female
                        <input type="radio" name="gender" value="Other"> Other
					</td>
					</tr>
                <tr>
					<td>Date of Birth: </td>
					<td> <input type="date" name="dob" value="" /> </td>
                    <td > </td>
				</tr>
                <tr>
					<td>Address</td>
					<td> <textarea rows="6" cols="25" <input type="address" name="address" value="" placeholder= "Enter your address"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					
					<td>
						<input type="submit" class="btn btn-success" name="signup" value="Signup"> 
			
						<a class="btn btn-success" href="loginAdmin.php">Login</a>

					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	
	<!-- <script>
	


	const myArray = ["1", "2","3","4","5","6","7","8","9"];
	

	function nameValidate(){
		let name= document.getElementById("name");
		let nameMsg=document.getElementById('nameMsg');

		if((name.value.length <= 2) || (name.value.length > 20)){
			
			nameMsg.style.color="red";
			nameMsg.innerHTML="Must be between 2 and 20 chars!";

			for(x=0; x<myArray.length; x++){
				if(name.value.includes(myArray[x])){
					nameMsg.innerHTML = "name cannot include a number";
				}
			
		}
		 else if( !isNaN(name.value) ){
				nameMsg.style.color="red";
				nameMsg.innerHTML="Can't contain numbers only";

			}
		
		else{
			nameMsg.style.color="green";
				nameMsg.innerHTML="Okay";
		}
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
		
			



	</script> -->

<?php 
include('footer.php');
 ?>