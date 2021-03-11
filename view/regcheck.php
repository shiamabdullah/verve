<?php
	session_start();

    if (isset($_POST['submit'])) {
        echo 'pressed';
            $type= $_POST['type'];
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password    =  $_POST['password'];
            $con_password  =  $_POST['con_password'];
            $dob = $_POST['dob'];
            $adress=$_POST['address'];
        // print_r($_POST);
    
        //name
            if (empty($name) or empty($username) or empty($email) or empty($password) or empty($con_password) or empty($dob)or empty($adress)) {
                echo "Fillup all \n";
            } 
            
            else
         
            {
                if(strlen($username)<2){
                echo "name must be atleast 2 char\n";
                
            }
            elseif( !ctype_alnum(str_replace($allowed, '', $username )) ){
                echo "name must contain alphanumeric char\n";
            }
    
            else{
                echo "name: $name";
            }
                
    
            if(strlen($password)<8){
            echo " password must be 8 chars";
            }
            else  if($password != $con_password){
                    echo "password and confirm don't match \n"; 
                }
                   
            else{
                    echo"password: $password";
                        echo"sucess";
                    $user = ['name'=> $name,'username'=> $username, 'password'=> $password, 'email'=>$email, 'gender'=>$gender, 'dob'=>$dob];
                    $_SESSION['current_user'] = $user;
                    print_r($user);
                }
        
             }

            
	}


?>