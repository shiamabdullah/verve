<?php ;
require_once('../model/admin/db.php');
$conn = getConnection();
	

    if(isset($_POST['edit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
		$designation = $_POST['designation'];
		$salary = $_POST['salary'];        
        $sql="UPDATE `employee` SET `username` = '$username', `designation` = '$designation', `salary` = '$salary' WHERE `employee`.`id` =  '$id';";
        $result = mysqli_query($conn, $sql);
        echo($result);
        if ($result==1){
            echo "updated <br>";
        echo    " <a href=\"../view/editEmployeesAdmin.php\"> View Updated list </a> "; }
    }

?>