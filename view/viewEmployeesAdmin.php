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
        <h1>Employee list</h1>
    </center>
	<table border="2" align="center" cellpadding="10" width="40%">
        <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>SALARY</td>
		</tr>
        <?php $sql = "select * from users";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
		
		{

            echo 	"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['salary']}</td>
                        
                    </tr>";
        }
    ?>
    </table>


<?php 
include('footer.php');
 ?>