<?php
  require_once('db.php');
  
    
  function getUserbyId($id)
  {
      $conn = getConnection();
      $sql = "SELECT * FROM `admin` WHERE `username`='{$id}'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
    
      return $row;
  }

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

  function editUser($admin)
  { 
    $email=$admin['email'];
    $name=$admin['name'];
    $username=$admin['username'];
    $dob=$admin['dob'];
    $gender=$admin['gender'];
    echo $name.$dob;
    print_r($admin);
    $conn=getConnection();
    $sql="UPDATE `admin` set name='{$name}',email='{$email}',gender='{$gender}',dob='{$dob}' where username='$username'";
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

  function uploadPhotoAdmin($fileloc,$id)
  { 
    echo $fileloc;
    echo $id;
    $conn=getConnection();
    $sql="UPDATE `admin` set imgsrc='{$fileloc}' where username='$id'";
    $result=mysqli_query($conn,$sql);
    
  
    if($result)
    {   echo 'db uploaded';
        return true;
    }
    else
    {
        return false;
    }
  }


  ?>
 