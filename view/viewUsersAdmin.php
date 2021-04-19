<?php ;
$title='View Users';
include('sessionheader.php');
require_once('../model/admin/db.php');
$conn = getConnection();

?>



  

	<table class="data-table"  align="center" cellpadding="8" width=50% border="1">
        <!-- <input type="text" id="searchUser" placeholder="Seach by userId" > -->
      <thead>
            <tr>
          <td>ID</td>
          <td>NAME</td>
          <td> EMAIL</td>
          <td>GENDER</td>
            </tr>
      </thead>
      <tbody id="result">

        <?php $sql = "select * from user";
    	$result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result))
		{

            $output= 	"<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['gender']}</td>
                        
                    </tr>";
            echo $output;

        }
    ?>
    </tbody>
    </table>


<?php 
include('footer.php');
 ?>