<?php
	$title = "Edit Employee";
    include('sessionheader.php');
	require_once('../model/admin/userModel.php');

	$userdata = getEmployeebyId($_GET['id']);
    //print_r($userdata);
    

?>

	<form method="post" action="../controller/updateEmployeeAdmin.php">
		<fieldset>
			<legend>EDIT EMPLOYEE</legend>
			<table class="data-table" align="center" cellpadding="8" width=50% border="1">
                <tr>
					<td>ID</td>
					<td><input type="text" name="id" value="<?php echo $userdata['id'];?>"read-only></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" id="name" value="<?php echo $userdata['username'];?>">
					<span id="nameMsg">ss</span>
				</td>
				</tr>
				<tr>
					<td>Designation</td>
					<td><input type="text" name="designation" value="<?php echo $userdata['designation'];?>"></td>
				</tr>
				
				<tr>
					<td>Salary</td>
					<td><input type="text" name="salary" value="<?php echo $userdata['salary'];?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input class="btn btn-success" type="submit" name="edit" value="Update"> 
						<a class="btn btn-success" href="editEmployeesAdmin.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
<?php
	include('footer.php');
?>