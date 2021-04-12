<?php
	session_start();
	require_once('../model/admin/adminModel.php');

	if(isset($_POST['change'])){

		$username = trim($_POST['name']," ");
		$userid = trim($_POST['username']," ");
		$email = trim($_POST['email']," ");
        $dob= $_POST['dob'];
		$gender = $_POST['gender'];
        $address= trim($_POST['address']," ");

        $allowed = array(".", "-", "_");

		echo $username;
		if($username == "" || $userid == "" || $email == "" || $dob == ""  ){
			echo "null value found...";
		}
		else{
            if(strlen($username)<2){
                echo "name must be atleast 2 char\n";

            }
		
			elseif( !ctype_alnum(str_replace($allowed, '', $userid )) ){
                echo "username can only contain alphanumeric char and characters, period,dash or underscore only \n";
            }
           
            else if(strlen($userid)<2){
                echo "username must be atleast 2 char\n";

            }
            
       

			else if(strlen($address)>30){
				echo "address must be less than 30 char";

			}
			
			
			
			else{
				
                $user = ['name'=> $username,'username'=>$userid, 'gender'=>$gender, 'email'=>$email, 'dob'=>$dob,'address'=>$address];
              
				$status=editUser($user);
                if($status)
                {
                    //header('location: ../view/viewProfileAdmin.php');

                }
                else
                {
                    echo "Error";
                }
                //header('location: ../view/loginAdmin.php');
    
			}
		}
	}


?>