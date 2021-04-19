<?php 
  require_once('../model/userModel.php');
  
    $conn=getConnection();
    $product = $_POST["s_product"];
    $sql = "SELECT * FROM `products` WHERE `productName` LIKE '%".$product."%'";
    $result=mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) 
        {           
            echo 	
            "<tr>
            <td> {$row['pid']} </td>
            <td>{$row['productName']}</td>
            <td> {$row['category']} </td>
           
            <td> {$row['sellingPrice']} </td>
            <td> {$row['stock']} </td>            
          </tr>	
          ";          
        }
    }
    else{
        echo "<tr><td>0 result's found</td></tr>";
    }
    
?>