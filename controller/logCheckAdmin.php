<?php
require_once('../model/admin/adminModel.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
	

}	


if(!empty($_POST["remember"])) {
	setcookie ("username",$_POST["username"],time()+ 3600,"/");
	setcookie ("password",$_POST["password"],time()+ 3600,"/");
} 
else {
	setcookie("username","");
	setcookie("password","");
}
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		// $file_name='../model/admin.json';
        // $myfile = fopen($file_name, "r");
		// $data = fread($myfile, filesize($file_name));
		// $user = json_decode($data, true);


		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			// $key = array_search($username, array_column($user, 'userid'));
			//echo $key;

			// if($user[$key]['password']==$password){
			// 	$_SESSION['flag'] = true;
			// 	//echo $user[$key]['password'];
			// 	$_SESSION['current_user'] = $user[$key];
			// 	header('location: ../view/homeAdmin.php');
			// }else{
			// 	echo "invalid user...";
			// }
			$status= validateUser($username, $password);

			if($status)
			{
			   $_SESSION['flag']=true;
			   $user=getUserbyId($username);
			   $_SESSION['current_user'] = $user;
			   print_r($_SESSION['current_user']);
			   header('location: ../view/homeAdmin.php');
			}
			else
			{	
				echo "UserName or password is Incorrect!!!";
			}
		}
	}


?>

