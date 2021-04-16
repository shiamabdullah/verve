<?php
  require_once('db.php');
  
    
  function insertProduct($product)
  { //print_r($product);
    $conn=getConnection();
    $sql="INSERT INTO `products` (`productName`, `category`, `subCategory`, `description`, `buyingPrice`, `sellingPrice`, `stock`, `displayable`, `photo1`, `photo2`, `photo3`) 
    VALUES ('{$product['productName']}', '{$product['category']}', '{$product['subCategory']}', '{$product['description']}', '{$product['buyingPrice']}', '{$product['sellingPrice']}', '{$product['stock']}', '{$product['displayable']}', '{$product['photo1']}', '{$product['photo2']}', '{$product['photo3']}')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {   $last_entry= mysqli_insert_id($conn);
      echo "<a class=\"btn btn-success\" href=\"../view/viewAddedProductAdmin.php?pid=$last_entry\" role=\"button\">View Added Product</a>                        ";
        return true;
    }
    else
    {
        return false;
    }
  }




  function fetchProduct($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `products` WHERE `pid`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      return $row;
    
    }
  function fetchProductImage2($id)
  {
      $conn = getConnection();
      $sql = "SELECT 'photo2' FROM `products` WHERE `pid`='{$id}'";
      $result = mysqli_query($conn, $sql);
      echo $result;
  }  
  ?>
 