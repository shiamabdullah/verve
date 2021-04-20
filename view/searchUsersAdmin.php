<?php ;
$title='Search Users';
include('sessionheader.php');
require_once('../model/admin/db.php');
$conn = getConnection();

?>


	<center>
        <h2>User list</h2>
    </center>

  <div id="searchbar">
    <label>Search</label>
   <input type="text" id="searchUser" placeholder="username" onkeyup="ajax()">

  </div>
  

	<table class="data-table"  align="center" cellpadding="8" width=75%>
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
      <tbody id="searchUserResult">
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

<script type="text/javascript">
"use strict"

function ajax(){
	
	const data = document.getElementById('searchUser').value;
	const xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../view/scriptadmin/searchUser.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('searchUserResult').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}
</script>

<?php 
include('footer.php');
 ?>