<?php
	session_start();
    require_once('../model/userModel.php');

    if (isset($_POST['editSubmit']))
    {        
        $email = $_POST['email'];
        $username = $_POST['username'];
        //$password  = $_POST['password'];
        $re_password = $_POST['re_password'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        
        if ($email == "" || $username =="" || $password == "") 
        { 
            echo "Enter the all value";
        } 
        else{
            if($password==$re_password)
            {
                $user = [
                    'username'=> $username,
                  //  'password'=> $password,
                    'email'=>$email,
                    'gender'=>$gender,
                    'dob'=>$dob
                ];
                $status=updateUser($user);
                if($status)
                {
                    header('location: ../view/loginCus.html');
                }
                else
                {
                    echo "Error";
                }
            }
            else
            {
                echo "password did't match";
            }
        }
    }
?> 