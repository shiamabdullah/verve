<?php
  
  session_start();
  require_once('../model/userModel.php');
  
  if(!empty($_POST["remember"])) 
  {
    $username = $_POST['username'];
    $password  = $_POST['password'];
	setcookie ("username",$username,time()+60*60*7);
	setcookie ("password",$password,time()+60*60*7);
  } 
  else 
  {
	setcookie("username","");
	setcookie("password","");
  }  

   if(isset($_POST['submit']))
   { 
    $username = $_POST['username'];
    $password  = $_POST['password'];
    if($username == "" || $password == "")
    {
        echo "null input...";
    }
    else
    {
        $status= validationUser($username, $password);

        if($status)
        {
           $_SESSION['flag']=true;
           $_SESSION['username']=$username;
           header('location: ../view/homeeCus.php');
        }
        else
        {
            echo "UserName or password is Incorrect!!!";
        }
    }
}
?>


        <!-- // $file_location='../model/customer.json';
        // $myfile = fopen($file_location, 'r');
        // $flag = false;
        // $customers = json_decode(fread($myfile, filesize($file_location)),true);
        // foreach ($customers as $user){ 
        //     if($user['username'] == $username && $user['password']==$password){
        //         $_SESSION['loggedInUser'] = $user;
        //         $flag = true;
        //         break;
        //     }
        // } 

        // if($flag){
        //     $_SESSION['flag']=true;
        //     header('location: ../view/homeeCus.php');
        // }
        // else{
        //     echo "UserName or password is Incorrect!!!";
        // }
     -->
