<?php

	session_start();
	unset($_SESSION['flag']);
	header('location: ../view/index.html');

?>