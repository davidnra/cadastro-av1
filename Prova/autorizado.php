<?php
		include"cabecalho.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<?php
		//verifica a sessao caso nao esteja logado encaminha para a página de login
			session_start();
			if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)){
				unset($_SESSION['login']);
				unset($_SESSION['senha']);
				$_SESSION['msg'] = "Faça o login para acessar essa página!";
				header('location:login.php');
			}
			$logado = $_SESSION['login'];
		?>
		<meta charset="utf-8">
		<title>SISTEMA WEB</title>
	</head>
</html>