<?php
  require_once('db.php');
  function addToCart($username,$pid){
    $conn=getConnection();
    $sql="insert into cart values('', '$username', '$pid')";
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
  function addToWish($username,$pid){
    $conn=getConnection();
    $sql="insert into wish values('', '$username', '$pid')";
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
  function validationUser($username,$password)
  {
     $conn=getConnection();
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
    


    function updateUser($user){
      $conn = getConnection();
      $sql = "update user SET name='{$user['username']}', email='{$user['email']}', dob='{$user['dob']}' where name='{$_SESSION['username']}'";;
      $result=mysqli_query($conn, $sql);
      //echo $sql;
      if($result){
        $_SESSION['username'] = $user['username'];
        return true;
      }else{
        return false;
      }
    }
  
  // function getAllProduct($product){

  //   $conn = getConnection();
  //   $sql = "select * from product";
  //   $result = mysqli_query($conn, $sql);
  //   $row = mysqli_fetch_assoc($result);
  //   if($row)
  //   {
  //     return true;
  //   }
  //   else
  //   {
  //     return false;
  //   }
  // }
  function searchData($productName){
    $conn = getConnection();
    $sql = "select productName from product where productName LIKE :productName ";
    $result=mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;

  }


?>
 