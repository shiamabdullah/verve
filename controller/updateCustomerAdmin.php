<?php ;
require_once('../model/admin/db.php');
$conn = getConnection();
	

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];        
        $sql="UPDATE `user` SET `name` = '$username', `gender` = '$gender', `email` = '$email' WHERE `user`.`id` =  '$id';";
        $result = mysqli_query($conn, $sql);
        if ($result=1){
            echo "updated <br>";
        echo    " <a href=\"../view/editUsersAdmin.php\"> View Updated list </a> "; }
    }

?>