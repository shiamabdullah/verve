<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="cssadmin/styles.css"/>

	<title><?=$title?></title>
	<table width="100%"  >
		<tr>
		<th align="center">
			<img src="../model/media/logo.jpg" height="60px">
		</th>
	
		</tr>
	</table>

</head>
<body>