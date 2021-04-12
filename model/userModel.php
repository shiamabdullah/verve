<?php
  require_once('db.php');
  
  function validationUser($username,$password)
  {
    $conn= $conn=getConnection();
    $sql = "select * from user where name='{$username}' and password='{$password}'";
    $result = mysqli_query($conn,$sql);
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
    $sql="insert into user values('', '{$user['username']}', '{$user['password']}', '{$user['email']}','{$user['gender']}', '{$user['dob']}')";
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

  function getUserInformation($username)
  {
		$conn = getConnection();
		$sql = "SELECT * FROM `user` WHERE `name`='{$username}'";
    $result = mysqli_query($conn, $sql);
		$user = [];

		while($row = mysqli_fetch_assoc($result)){
			array_push($user, $row);
		}

		return $user;
	}
    


    function updateUser($username){
      $conn = getConnection();
      $sql = "update user set name='{$user['username']}', email='{$user['email']}',  gender='{$user['gender']}', dob='{$user['dob']}'";
      if(mysqli_query($conn, $sql)){
        return true;
      }else{
        return false;
      }
    }
  
  function getAllProduct($product){

    $conn = getConnection();
    $sql = "select * from product";
    $result = mysqli_query($conn, $sql);
    $product = [];
    while ($row = mysqli_fetch_assoc($result)) {
      array_push($product, $row);
    }
    return $product;
  }


?>
 