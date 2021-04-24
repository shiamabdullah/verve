<?php
  
require_once('db.php');

function validateUser($username, $password){
  $conn = getConnection();
  $sql = "select * from employee where name='{$username}' and password='{$password}'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  if(count($row) > 0){
    return true;
  }else{
    return false;
  }
}

function insertUser($user)
  {
    $conn=getConnection();
    $sql="insert into employee values('', '{$user['name']}', '{$user['password']}', '{$user['email']}','{$user['gender']}', '{$user['dob']}')";
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

?>