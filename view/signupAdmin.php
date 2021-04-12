<?php 
    $title="Admin Sign Up";
	include('header.php');
?>
<link rel="stylesheet" href="cssadmin/styles.css"/>
<form method="post" action="../controller/regCheckAdmin.php">
			<center>
			<h2> Sign Up </h2>
			</center>
			<fieldset>
			<table align="center" cellpadding="10">
                <tr >
                    <td>Name<br></td>
                    <td>
                        <input type="text" name="name" value="" placeholder= "Enter Your Name"/>
                    </td>
                </tr>
                <tr>
                    <td>User Name<br></td>
                    <td>
                        <input type="text" name="username" value="" placeholder= "Enter your username/id">
                    </td>
                </tr>
                <tr>
					<td>Password</td>
					<td><input type="password" name="password" value="" placeholder= "Enter Your password"></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="repass" value="" placeholder="Enter your password again" ></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="" placeholder= "Enter your email"></td>
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
						<input type="submit" name="signup" value="Signup"> 
						<a href="login.php">Login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	</div>


<?php 
include('footer.php');
 ?>