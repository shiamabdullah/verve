<?php 
    $title="Login Admin";
	include('header.php');

?>
<link rel="stylesheet" href="cssadmin/styles.css"/>
<form method="post" action="../controller/logCheckAdmin.php">

		<fieldset >
			<table align="center"  cellpadding="10" >
			<legend>LOGIN</legend>
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
						<input class="btn btn-success" type="submit" name="submit" value="Submit"> 
						<a class="btn btn-success" href="signup.php" role="button">Signup</a>

					</td>
				</tr>
			</table>
		</fieldset>
		</table>

	</form>

	

<?php 
include('footer.php');
 ?>