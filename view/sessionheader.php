<?php
require_once('../model/admin/adminModel.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	if(!isset($_SESSION['flag'])){
		header('location: loginAdmin.php');
	}

    ?>
<?php 
	$user=getUserbyId($_SESSION['current_user']['username']); 
	$_SESSION['current_user']=$user;
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="cssadmin/styles.css"/>

	<title><?=$title?></title>
	<div class="header">

	<table class="table table-borderless success" width="100%" >
				<tr>
					<td align="left" width="30%">
					<div class="logo-images">
						<img src="../model/media/logo.jpg" height="60px">
						
					</div>		
					</td>
					<td align="center" colspan="2">
				
				<div class="profile-images">
						<img src="<?php    echo $user['imgsrc'];?> ">
			
				</div>		
			
			</td>
				
				<td align="Right" width="30%">
										  <h3>
										<a href="../view/homeAdmin.php" >Home</a> |
										<?php echo $user['username'] ?>  | 
											  <a href="../controller/logout.php" >Signout</a>
										  </h3>
										  
					  </td>
				</tr>
			</div>

	
	</table>

</head>
<body>

