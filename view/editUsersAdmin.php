<?php ;
$title='Edit Users';
include('sessionheader.php');
require_once('../model/admin/db.php');
$conn = getConnection();

?>
 

	
	<center>
        <h1>User list</h1>
    </center>

    <div id="searchbar">
    <label>Search</label>
   <input type="text" id="editUser" placeholder="username" onkeyup="ajax()" >

    </div>

	<table class="data-table" align="center" cellpadding="8" width=50% >
    <thead>   
    <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>GENDER</td>
			<td>ACTION</td>
		</tr>
        </thead>
        <tbody id="editUserResult">
        <?php $sql = "select * from user";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
		
		{

            echo 	"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['gender']}</td>
                        <td>
                        <a class=\"btn btn-success\" href=\"editUserAdmin.php?id={$row['id']}\" role=\"button\">Edit</a>
                        <a class=\"btn btn-success\" href=\"../controller/deleteCustomerAdmin.php?id={$row['id']}\" role=\"button\">Delete</a>
                        </td>
                    </tr>";
        }
    ?>
    </tbody>
    </table>
    <script type="text/javascript">
"use strict"

function ajax(){
	
	const data = document.getElementById('editUser').value;
	const xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../view/scriptadmin/editUser.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('editUserResult').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}
</script>


<?php 
include('footer.php');
 ?>