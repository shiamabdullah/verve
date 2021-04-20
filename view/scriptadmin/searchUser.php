<?php 
  require('../../model/admin/db.php');
  $conn=getConnection();
    $response;
    $name = $_REQUEST['name'];
    $sql = "SELECT * FROM `user` WHERE `name` LIKE '%".$name."%'";
    $result=mysqli_query($conn,$sql);
    $response ="";
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) 
        {
            echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['gender']}</td>
                        
                    </tr>";
            
            
        }
    }
    else{
        echo"<tr><td><td><td><td>0 result's found</td></td></td></td></tr>";
    }
    
?>