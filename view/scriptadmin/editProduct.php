<?php 
  require('../../model/admin/db.php');
  $conn=getConnection();
 
    $product = $_POST["e_product"];
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
            <td>{$row['subCategory']} </td>
            <td>{$row['description']} </td>
            <td> {$row['buyingPrice']} </td>
            <td> {$row['sellingPrice']} </td>
            <td> {$row['stock']} </td>
            <td> {$row['displayable']}</td>
            <td> {$row['discount']}</td>
            <td>
            <a class=\"btn btn-success\" href=\"editUserAdmin.php?id={$row['pid']}\" role=\"button\">Edit</a>

            
            </td>

           
            
          </tr>	
          ";
            
            
        }
    }
    else{
        echo "<tr><td>0 result's found</td></tr>";
    }
    
?>