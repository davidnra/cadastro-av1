<?php
	//finaliza a sessão
	session_start();
	session_destroy();
	header('location:login.php');
?>