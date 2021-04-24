<?php 
  require_once('../../model/admin/db.php');
  $conn=getConnection();
  $name = $_REQUEST['name'];


    //$user = $_POST["admin_name"];
    $sql = "SELECT * FROM `admin` WHERE `username`='{$name}'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0)
    {
      echo "⚠️Name exists";

    }
    else if($name==""){
      echo "⚠️ can not be empty";
    }
    else if(!ctype_alnum($name))
  	{
		echo"⚠️can only contain alphanumeric";

	  }
	else if(strlen($name)<3){
		echo"⚠️Must be atleast two characters";
	}
    else{
      echo "✅ okay";
    }
?>