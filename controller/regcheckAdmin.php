<?php
	session_start();

	if(isset($_POST['signup'])){

		$username = trim($_POST['name']," ");
		$password = $_POST['password'];
		$userid = trim($_POST['username']," ");
		$repass = $_POST['repass'];
		$email = trim($_POST['email']," ");
        $dob= $_POST['dob'];
        $address= trim($_POST['address']," ");

        $allowed = array(".", "-", "_");


		if($username == "" || $password == "" || $userid == "" || $email == "" || $dob == ""  ){
			echo "null value found...";
		}
		else{
            if(strlen($username)<2){
                echo "name must be atleast 2 char\n";

            }
			 if(!ctype_alnum($username)){
                echo "name can only contain alphanumeric\n";

            }
			elseif( !ctype_alnum(str_replace($allowed, '', $userid )) ){
                echo "name can only contain alphanumeric char and characters, period,dash or underscore only \n";
            }
           
            else if(strlen($userid)<2){
                echo "name must be atleast 2 char\n";

            }
            
            else if(strlen($password)<8){
                echo " password must be 8 chars";
                }

			else if($password != $repass){

				echo "password & confirm password mismatch...";
			}

			else if(strlen($address)>30){
				echo "address must be less than 30 char";

			}
			
			
			
			else{
				
                $user = ['username'=> $username,'password'=> $password, 'userid'=> $userid, 'email'=>$email, 'dob'=>$dob,'address'=>$address];
               // print_r($user);
                $file_name='../model/admin.json';

        
				if(filesize($file_name)==0){
       			$json=json_encode($user);
        		$myfile=fopen($file_name, 'w');
        		fwrite($myfile, '['.$json.']');
				}
				else{
						$inp = file_get_contents($file_name);
						$tempArray = json_decode($inp);
						array_push($tempArray, $user);
						$jsonData = json_encode($tempArray);
						file_put_contents($file_name, $jsonData);
				}
                header('location: ../view/loginAdmin.php');
    
			}
		}
	}


?>