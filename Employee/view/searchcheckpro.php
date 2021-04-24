<?php 
require_once('../model/userModel.php');
      
      $name=$_REQUEST['name'];
      $conn=getConnection();
      $sql = "select * from products where productName like '%{$name}%'";
    	$result = mysqli_query($conn, $sql);
      $response= "<table border='1'>
        <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>Category</td>
                <td>Price<br></td>
                <td>Stock<br></td>
        </tr>";
        while ($row=mysqli_fetch_assoc($result)) 
        { 
            $response .="
           
            <tr>
            <td> {$row['pid']} </td>
            <td>{$row['productName']}</td>
            <td> {$row['category']} </td>
            <td> {$row['sellingPrice']} </td>
            <td> {$row['stock']} </td>   
          </tr>	
          ";
        }
        $response .="</table>";
        echo $response;
?>