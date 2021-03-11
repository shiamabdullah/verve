<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = $_POST['name'];
		$password = $_POST['password'];
		$userid = $_POST['username'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
        $dob= $_POST['dob'];
        $address= $_POST['address'];

        $allowed = array(".", "-", "_");



		if($username == "" || $password == "" || $userid == "" || $email == "" || $dob == ""  ){
			echo "null value found...";
		}else{
            if(strlen($username)<2){
                echo "name must be atleast 2 char\n";

            }
           
            if(strlen($userid)<2){
                echo "name must be atleast 2 char\n";

            }
            elseif( !ctype_alnum(str_replace($allowed, '', $userid )) ){
                echo "name must contain alphanumeric char\n";
            }

            else if(strlen($password)<8){
                echo " password must be 8 chars";
                }

			else if($password != $repass){

				echo "password & confirm password mismatch...";
			}else{
				
                $user = ['username'=> $username,'password'=> $password, 'userid'=> $userid, 'email'=>$email, 'dob'=>$dob,'address'=>$address];
                print_r($user);
                echo "validated";
			}
		}
	}


?>