<?php
	session_start();

    if (isset($_POST['submit']))
    {        
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password  = $_POST['password'];
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
                $user = ['username'=> $username, 'password'=> $password, 'email'=>$email,'gender'=>$gender,'dob'=>$dob];
				$_SESSION['current_user'] = $user;
                
                $file_location='../model/customer.json';

				if(filesize($file_location)==0){
                    $myfile=fopen($file_location, 'w');
                    $json=json_encode($user);
                    fwrite($myfile, '['.$json.']');
				}
				else{
						$prevUsers = json_decode(file_get_contents($file_location));
						array_push($prevUsers, $user);
						file_put_contents($file_location, json_encode($prevUsers));
				}
				header('location: ../view/loginCus.html');
            }
            else
            {
                echo "password did't match";
            }
        }
    }
?> 