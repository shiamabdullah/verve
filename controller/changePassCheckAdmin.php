<?php
	session_start();
	require_once('../model/admin/adminModel.php');

	if(isset($_POST['change'])){

		$username = trim($_POST['username']," ");
		$previousPassword = trim($_POST['previousPassword']," ");
		$newPassword = trim($_POST['newPassword']," ");
        $confirmPassword= $_POST['confirmPassword'];

		//echo $username,$previousPassword,$newPassword,$confirmPassword;
		
        $status= validateUser($username, $previousPassword);
       if($status){
           if(strlen($newPassword)>=8 and $newPassword===$confirmPassword)
           {
                $status=updatePassword($username,$newPassword);
                //echo $status;
                if($status){
                    $_SESSION['stat']="Updated Password";
                    $_SESSION['stat_code']="Okay";
                    header('location: ../view/viewProfileAdmin.php');

                }
                    $_SESSION['stat']="Not Updated Try again";
                    $_SESSION['stat_code']="Error";
                    header('location: ../view/viewProfileAdmin.php');
                
           }
       }
        
        
    
		
	}


?>