<?php
    //chama a conexão com o banco de dados
    include "conexao.php";
	session_start();
	//variáveis de login e senha
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
	//pesquisa no banco o nome e a senha para realizar o login
    $result = mysqli_query($conn, "SELECT * FROM `usuario1` WHERE `NOME` = '$login' AND `SENHA` = '$senha'");
    
	//o if verifica se o $result encontrou o usuario e senha
      if(mysqli_num_rows($result) > 0){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		$_SESSION['msg'] = "Você já está logado!";
		header('location:autorizado.php');

	//caso não encontre ele retorna a mensagem de login/senha incorretos
	}else{
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		$_SESSION['msg'] = "Login/Senha incorretos!!!";
		header('location:login.php');
	}

?>