<?php include "cabecalho.php"; ?>
<!--aciona o arquivo criar.php para armazenar os dados cadastrados-->

<form action="criar.php" method="POST">
    
	<label>Nome</label>
	<input type="text" name="nome" id="nome" maxlength="30"><br><br>

	<label>Email</label>
	<input type="text" name="email" id="email" maxlength="30"><br><br>
    
	<label>Idade</label>
	<input type="text" name="idade" id="idade" maxlength="20"><br><br>

	<label>senha</label>
	<input type="text" name="senha" id="senha" maxlength="20" require><br><br>

	<label>Telefone</label>
	<input type="text" name="telefone" id="telefone" maxlength="50"><br><br>

	<label>Endereço</label>
	<input type="text" name="endereco" id="endereco" maxlength="50"><br><br>


	<input type="submit" value="Enviar" id="enviarbtn">

</form>	