<?php
	$title = "Edit Page";
    include('sessionheader.php');
	require_once('../model/admin/userModel.php');

	$userdata = getCustomerbyId($_GET['id']);
    //print_r($userdata);
    

?>

	<form method="post" action="../controller/updateCustomerAdmin.php">
		<fieldset class="data-entry">
			<legend>EDIT User</legend>
			<table class="data-table" align="center" cellpadding="8" width=50% border="1">
                <tr>
					<td>ID</td>
					<td><input type="text" name="id" id="name" value="<?php echo $userdata['id'];?>">
					<br>
						<span id="nameMsg"></span>
				</td>
				
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" id="name" value="<?php echo $userdata['name'];?>">
					<br>
						<span id="nameMsg"></span>
					</td>
				</tr>

					<td>Gender</td>
					<td><input type="gender" name="gender" value="<?php echo $userdata['gender'];?>"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="email" id="userEmail" name="email" value="<?php echo $userdata['email'];?>">
					<br>
						<span id="userEmailMsg"></span></td>
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