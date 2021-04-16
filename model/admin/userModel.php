<?php
  require_once('db.php');

  function getCustomerbyId($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `user` WHERE `id`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    
      return $row;
  }


  function getEmployeebyId($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `employee` WHERE `id`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    
      return $row;
  }
  
 

?>
 