<?php 
    $title="Sign Up";
	include('header.php');
?>

<form method="post" action="../controller/logCheckAdmin.php">
		<fieldset>
			<legend>LOGIN</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td></td>
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