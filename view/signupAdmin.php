<?php 
    $title="Admin Sign Up";
	include('header.php');
?>
<form method="post" action="../controller/regCheckAdmin.php">
		<fieldset>
			<legend>Sign Up</legend>
			<table>
                <tr >
                    <td>Name<br></td>
                    <td>
                        <input type="text" name="name" value="" />
                    </td>
                </tr>
                <tr>
                    <td>User ID<br></td>
                    <td>
                        <input type="text" name="username" value="">
                    </td>
                </tr>
                <tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td><input type="password" name="repass" value=""></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
                <tr>
					<td>Date of Birth: </td>
					<td> <input type="date" name="dob" value="" /> </td>
                    <td > </td>
				</tr>
                <tr>
					<td>Address</td>
					<td><input type="address" name="address" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Submit"> 
						<a href="login.php">Login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>


<?php 
include('footer.php');
 ?>