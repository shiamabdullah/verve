<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	
	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$file_name='../model/admin.json';
        $myfile = fopen($file_name, "r");
		$data = fread($myfile, filesize($file_name));
		$user = json_decode($data, true);


		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			$key = array_search($username, array_column($user, 'userid'));
			//echo $key;

			if($user[$key]['password']==$password){
				$_SESSION['flag'] = true;
				echo $user[$key]['password'];
				$_SESSION['current_user'] = $user[$key];
				header('location: ../view/home.php');
			}else{
				echo "invalid user...";
			}
		}
	}


?>