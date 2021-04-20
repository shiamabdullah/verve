<?php
$title = 'Edit Employees';
include('sessionheader.php');
require_once('../model/admin/db.php');
$conn = getConnection();

?>



<center>
    <h1>Edit Employee list</h1>
</center>

<div id="searchbar">
    <label>Search</label>
    <input type="text" id="editEmployee" placeholder="Employee Name" onkeyup="ajax()">
</div>

<table class="data-table" border="1" align="center" cellpadding="10" width=50%>
    <thead>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>EMAIL</td>
            <td>DESIGNATION</td>
            <td>SALARY</td>
            <td>ACTIONS</td>
        </tr>
    </thead>
    <tbody id="editEmployeeResult">

        <?php $sql = "select * from employee ORDER BY id";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

            echo     "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['designation']}</td>
                        <td>{$row['salary']}</td>
                        <td>
                        <a class=\"btn btn-success\" href=\"editEmployeeAdmin.php?id={$row['id']}\" role=\"button\">Edit</a>
                        <a class=\"btn btn-success\" href=\"../controller/deleteEmployeeAdmin.php?id={$row['id']}\" role=\"button\">Delete</a>

                       
                        </td>
                    </tr>";
        }
        ?>
        <!-- <a href=\"editUserAdmin.php?id={$row['id']}\"> EDIT </a> |
                        <a href=\"../controller/deleteCustomerAdmin.php?id={$row['id']}\"> DELETE </a>     -->

    </tbody>
</table>

<script type="text/javascript">
    "use strict"

    function ajax(){
	
	const data = document.getElementById('editEmployee').value;
	const xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../view/scriptadmin/editEmployee.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('editEmployeeResult').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}
</script>


<?php
include('footer.php');
?>