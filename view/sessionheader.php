<?php
require_once('../model/admin/adminModel.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	if(!isset($_SESSION['flag'])){
		header('location: loginAdmin.php');
	}

    ?>

<!DOCTYPE html>
<html>
<head>
	
	<title><?=$title?></title>
	<table width="100%"  >
		<th align="left" width="30%">
			<img src="../model/media/logo.jpg" height="60px">
		</th>
		<th align="center" width="50px">
			
			<img src="<?php $user=getUserbyId($_SESSION['current_user']['username']);    echo $user['imgsrc'];?>" height="200px">

		</th>
		<th align="Right" width="30%">
                            <h3>
								<a href="../view/homeAdmin.php" >Home</a> |
								<?php echo $_SESSION['current_user']['username']; ?> | 
                                <a href="../controller/logout.php" >Signout</a>
                            </h3>
                            
        </th>
	</table>

</head>
<body>

