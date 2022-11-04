<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<!--Agrupa os labels -->
	<form method="post" action="valida.php">
		<fieldset id="fie">

			<legend>LOGIN</legend>
			<label>NOME:  </label>

			<input type="text" name="login" require> <br><br>
			<label>SENHA: </label>

			<input type="password" name="senha"> <br><br>
			
			<input type="submit" value="LOGAR">

		</fieldset>
	</form>	

	<!--Inicia a Sessão de login -->
	<?php
		session_start();
		if(!isset($_SESSION['msg']) == true){
			echo "";
			
		}else{
			echo "<p><b><i>" . $_SESSION['msg'] . "</p></b></i>";
		}
	?>
</body>
</html>