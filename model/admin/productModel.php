<?php
  require_once('db.php');
  
    
  function insertProduct($product)
  { print_r($product);
    $conn=getConnection();
    $sql="INSERT INTO `products` (`productName`, `category`, `subCategory`, `description`, `buyingPrice`, `sellingPrice`, `stock`, `displayable`, `photo1`, `photo2`, `photo3`) 
    VALUES ('{$product['productName']}', '{$product['category']}', '{$product['subCategory']}', '{$product['description']}', '{$product['buyingPrice']}', '{$product['sellingPrice']}', '{$product['stock']}', '{$product['displayable']}', '{$product['photo1']}', '', '')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        return true;
        echo "dpnt";
    }
    else
    {
        return false;
    }
  }

  ?>
 