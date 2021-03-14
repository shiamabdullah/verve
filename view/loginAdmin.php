<?php 
    $title="Login Admin";
	include('header.php');

?>

<form method="post" action="../controller/logCheckAdmin.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td>
					<input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
				 	</td>
				</tr>
				<tr>
					<td>Password</td>
					<td> <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"> </td>
				</tr>

				<tr>
					<td>Remember Me</td>
					<td><input type="checkbox" name="remember"?></td>
				</tr>

				<tr>
					<td>
						<input type="submit" name="submit" value="Submit"> 
						<a href="signup.php">Signup</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

	

<?php 
include('footer.php');
 ?>