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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="cssadmin/styles.css"/>

	<title><?=$title?></title>
	<table width="100%" >
		<td align="left" width="30%">
			<img src="../model/media/logo.jpg" height="60px">
		</td>
		<td align="center" width="40px">
			
<div class="profile-images">
				<img src="<?php $user=getUserbyId($_SESSION['current_user']['username']);    echo $user['imgsrc'];?>">
	
</div>		</td>
		<td align="Right" width="30%">
                            <h3>
								<a href="../view/homeAdmin.php" >Home</a> |
								<?php echo $_SESSION['current_user']['username']; ?> | 
                                <a href="../controller/logout.php" >Signout</a>
                            </h3>
                            
        </td>
	</table>

</head>
<body>

