<?php 
  require_once('../../model/admin/db.php');
  $conn=getConnection();
 
if(isset($_POST["admin_email"])){
    $email = $_POST["admin_email"];
    $sql = "SELECT * FROM `admin` WHERE `email`='{$email}'";
    $result=mysqli_query($conn,$sql);
    echo mysqli_num_rows($result);
  }

?>