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
    

?>
 