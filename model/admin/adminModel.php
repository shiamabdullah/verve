<?php
  require_once('db.php');
  
  function validateUser($username,$password)
  {
        $conn= $conn=getConnection();
        $sql = "select * from admin where username='{$username}' and password='{$password}'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        if(count($row) > 0){
            return true;
          }
          else{
            return false;
          }
  }
  function insertUser($user)
  {
    $conn=getConnection();
    $sql="INSERT INTO `admin` (`name`, `username`, `password`, `usertype`, `gender`, `email`, `dob`, `address`, `profilephoto`) VALUES ('{$user['username']}', '{$user['userid']}', '{$user['password']}', '', '{$user['gender']}', '{$user['email']}', '{$user['dob']}', '{$user['address']}', '')";
    $result=mysqli_query($conn,$sql);
    
  
    if($result)
    {
        return true;
    }
    else
    {
        return false;
    }
  }

  
  function getUserbyId($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `admin` WHERE `username`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    
      return $row;
  }

?>
 