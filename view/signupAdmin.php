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
                        <input type="text" id="name" name="userName" value="" placeholder= "Enter Your Name" onkeyup="validateName();" "/>
						<br>
						<span id="nameMsg"> </span>

                    </td>
                    
                </tr>
                <tr>
                    <td>User Name<br></td>
                    <td>
                        <input type="text" id="userName" name="username" value="" placeholder= "Enter your username/id" onkeyup="validateUsername();"required">
						<br>
						<span id="userNameMsg"> ss</span>
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
					<td><input type="email" name="email" id="email" value="" placeholder= "Enter your email" onkeyup="validateEmail();">
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
	
	<script src="../view/scriptadmin/signupValidate.js"></script>
<?php 
include('footer.php');
 ?>