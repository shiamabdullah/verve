<?php ;
require_once('../model/admin/db.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	

$conn = getConnection();
	

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];        
        $sql="UPDATE `user` SET `name` = '$username', `gender` = '$gender', `email` = '$email' WHERE `user`.`id` =  '$id';";
        $result = mysqli_query($conn, $sql);
        if ($result==1){
            $_SESSION['stat']="Edited User";
            $_SESSION['stat_code']="success";
            header('location: ../view/editUsersAdmin.php');

            //echo    " <a href=\"../view/editUsersAdmin.php\"> View Updated list </a> "; 
        }
        else{ 
            $_SESSION['stat']="Couldn't User";
            $_SESSION['stat_code']="error";
            header('location: ../view/editUsersAdmin.php');

        }

    }
    else{
        echo "not updated";
    }

?>