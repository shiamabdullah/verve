<?php
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
		<th align="left">
			<img src="../model/media/logo.jpg" height="60px">
		</th>
		<th align="Right">
                            <h3>
								<a href="../view/homeAdmin.php" >Home</a> |
								<?php echo $_SESSION['current_user']['userid']; ?> | 
                                <a href="../controller/logout.php" >Signout</a>
                            </h3>
                            
                </th>
	</table>

</head>
<body>