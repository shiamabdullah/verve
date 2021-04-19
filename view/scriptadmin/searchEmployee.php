<?php 
  require('../../model/admin/db.php');
  $conn=getConnection();
 
    $employee = $_POST["s_employee"];
    $sql = "SELECT * FROM `employee` WHERE `username` LIKE '%".$employee."%'";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) 
        {
            echo 	
            "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['email']}</td>
                <td>{$row['designation']}</td>
                <td>{$row['salary']}</td>
            
             </tr>";
            
            
        }
    }
    else{
        echo "<tr><td>0 result's found</td></tr>";
    }
    
?>