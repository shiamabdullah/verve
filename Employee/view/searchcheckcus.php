<?php 
require_once('../model/userModel.php');
      
      $name=$_REQUEST['name'];
      $conn=getConnection();
      $sql = "select * from user where name like '%{$name}%'";
    	$result = mysqli_query($conn, $sql);
      $response= "<table border='1'>
        <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>Email</td>
        </tr>";
        while ($row=mysqli_fetch_assoc($result)) 
        { 
            $response .="
           
            <tr>
            <td> {$row['id']} </td>
            <td>{$row['name']}</td>
            <td> {$row['email']} </td>  
          </tr>	
          ";
        }
        $response .="</table>";
        echo $response;
?>