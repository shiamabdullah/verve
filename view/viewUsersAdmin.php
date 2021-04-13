<?php ;
$title='View Users';
include('sessionheader.php');
require_once('../model/admin/db.php');
$conn = getConnection();

?>

<style>
table, th, td {
  
  border-collapse: collapse;
}

</style>
	
	<center>
        <h1>User list</h1>
    </center>
	<table border="2" align="center" cellpadding="10" width="50%">
        <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>GENDER</td>
		</tr>
        <?php $sql = "select * from user";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
		
		{

            echo 	"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['gender']}</td>
                        
                    </tr>";
        }
    ?>
    </table>


<?php 
include('footer.php');
 ?>