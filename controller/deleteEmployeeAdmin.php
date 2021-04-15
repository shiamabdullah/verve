<?php ;
require_once('../model/admin/db.php');
$conn = getConnection();
	
$id= $_GET['id'];

      
        $sql="DELETE FROM `employee` WHERE `id` LIKE '{$id}';";
        $result = mysqli_query($conn, $sql);
        if ($result=1){
            echo "deleted <br>";
        echo    " <a href=\"../view/editEmployeesAdmin.php\"> View Updated list </a> "; }
        else{
            echo "error";
        }
            


?>