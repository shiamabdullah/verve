<?php
	$title = "Edit Page";
    include('sessionheader.php');
	require_once('../model/admin/userModel.php');

	$userdata = getCustomerbyId($_GET['id']);
    print_r($userdata);
    

?>

	<form method="post" action="../controller/updateCustomerAdmin.php">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
                <tr>
					<td>ID</td>
					<td><input type="text" name="id" value="<?php echo $userdata['id'];?>"></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?php echo $userdata['name'];?>"></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="gender" name="gender" value="<?php echo $userdata['gender'];?>"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="<?php echo $userdata['email'];?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input class="btn btn-success" type="submit" name="edit" value="Update"> 
						<a class="btn btn-success" href="editUsersAdmin.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	include('footer.php');
?>