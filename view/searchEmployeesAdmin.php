<?php ;
$title='Search Users';
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

    <div id="searchbar">
    <label>Search</label>
   <input type="text" id="searchEmployee" placeholder="Employee Name" >
  </div>
  
	<table class="data-table"  border="2" align="center" cellpadding="10" width="50%">
    <thead>
    <tr>
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>DESIGNATION</td>
			<td>SALARY</td>
		</tr>
        </thead>    
<tbody id="searchEmployeeResult">

        <?php $sql = "select * from employee ORDER BY id";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
		
		{

            echo 	"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['designation']}</td>
                        <td>{$row['salary']}</td>
                        
                    </tr>";  
        }
    ?>
    </tbody>

    </table>


<?php 
include('footer.php');
 ?>