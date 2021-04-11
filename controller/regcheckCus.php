<?php
	session_start();
    require_once('../model/userModel.php');

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
                $customer = [
                    'username'=> $username,
                    'password'=> $password,
                    'email'=>$email,
                    'gender'=>$gender,
                    'dob'=>$dob
                ];
				//$_SESSION['current_user'] = $customer;
                
                // $file_location='../model/customer.json';

				// if(filesize($file_location)==0){
                //     $myfile=fopen($file_location, 'w');
                //     $json=json_encode($customer);
                //     fwrite($myfile, '['.$json.']');
				// }
				// else{
                //     $customers = json_decode(file_get_contents($file_location),true);
                //     $flag = false;
                //     if(isset($_SESSION['loggedInUser'])){
                //         $loggedInUser = $_SESSION['loggedInUser'];
                //     }
                    
                //     foreach ($customers as $user => $entry){ 
                //         if($entry['username'] == $loggedInUser['username']){
                //             $customer[$user]['username'] == $customer['username'];
                //             $customer[$user]['email'] == $customer['username'];
                //             $customer[$user]['dob'] == $customer['username'];
                //             $customer[$user]['password'] == $customer['password'];
                //             $_SESSION['loggedInUser'] = $customer;
                //             $flag = true;
                //             break;
                //         }
                //     }
                //     if($flag){ 
				// 		file_put_contents($file_location, json_encode($customers));
                //     }
                //     else{
                
				// 		array_push($customers, $customer);
				// 		file_put_contents($file_location, json_encode($customers));
                //     }
				// }
                //$conn=mysqli_connect('localhost','root','','webtech');

                $status=insertUser();
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