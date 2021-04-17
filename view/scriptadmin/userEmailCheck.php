<?php 
  require_once('../../model/admin/db.php');
  $conn=getConnection();
 
if(isset($_POST["user_email"])){
    $email = $_POST["user_email"];
    $sql = "SELECT * FROM `user` WHERE `email`='{$email}'";
    $result=mysqli_query($conn,$sql);
    echo mysqli_num_rows($result);
  }

?>