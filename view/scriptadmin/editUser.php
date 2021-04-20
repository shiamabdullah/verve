<?php 
  require('../../model/admin/db.php');
  $conn=getConnection();
 
  $name = $_REQUEST['name'];
    $sql = "SELECT * FROM `user` WHERE `name` LIKE '%".$name."%'";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) 
        {
            echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['gender']}</td>
                        <td>
                        <a class=\"btn btn-success\" href=\"editUserAdmin.php?id={$row['id']}\" role=\"button\">Edit</a>
                        </td>
                        
                    </tr>";
            
            
        }
    }
    else{
        echo "<tr><td>0 result's found</td></tr>";
    }
    
?>