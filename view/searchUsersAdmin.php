<?php ;
$title='Search Users';
include('sessionheader.php');
require_once('../model/admin/db.php');
$conn = getConnection();

?>



</style>
	
	<center>
        <h2>User list</h2>
    </center>
  <div id="search-bar">
    <label>Search</label>
   <input type="text" id="searchUser" placeholder="username" >

  
  </div>
  

	<table class="data-table"  align="center" cellpadding="8" width=100%>
        <!-- <input type="text" id="searchUser" placeholder="Seach by userId" > -->
      <thead>
     

      </tr>
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