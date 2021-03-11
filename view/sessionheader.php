<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}	if(!isset($_SESSION['flag'])){
		header('location: login.html');
	}

    ?>
<!DOCTYPE html>
<html>
<head>
	
	<title><?=$title?></title>
	<table width="100%"  >
		<tr>
		<th align="center">
			<img src="../model/media/logo.jpg" height="60px">
		</th>
	
		</tr>
	</table>

n</head>
<body>