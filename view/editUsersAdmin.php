<?php ;
$title='Edit Users';
include('sessionheader.php');
require_once('../model/admin/db.php');
$conn = getConnection();

?>


	
	<center>
        <h1>User list</h1>
    </center>
	<table border="1" align="center" cellpadding="10" width=50%>
        <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>ACTION</td>
		</tr>
        <?php $sql = "select * from user";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
		
		{

            echo 	"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>
                        <a href=\"editUserAdmin.php?id={$row['id']}\"> EDIT </a> |
                        <a href=\"../controller/deleteCustomerAdmin.php?id={$row['id']}\"> DELETE </a>
                        </td>
                    </tr>";
        }
    ?>
    </table>


<?php 
include('footer.php');
 ?>