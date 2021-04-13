<?php ;
require_once('../model/admin/db.php');
$conn = getConnection();
	
$id= $_GET['id'];

      
        $sql="DELETE FROM `user` WHERE `id` LIKE '{$id}';";
        $result = mysqli_query($conn, $sql);
        if ($result=1){
            echo "deleted <br>";
        echo    " <a href=\"../view/editUsersAdmin.php\"> View Updated list </a> "; }
        else{
            echo "error";
        }
            


?>