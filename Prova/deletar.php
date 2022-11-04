<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
	//declaração de variáveis

	$telefone = $_POST['telefone'];

	//deleta o cadastro através de uma busca no banco de dados pelo telefone

	$query = "DELETE FROM aluno1 WHERE telefone = '$telefone'";

	$ok = mysqli_query($conn,$query);

	//condição que verifica se o cadastro foi excluído

	if($ok && mysqli_affected_rows($conn) == 0){
		echo "telefone não encontrado na tabela!!!";

	}elseif($ok && mysqli_affected_rows($conn) > 0){
		echo "Excluído com sucesso!!!";

	}else{
		echo "Não foi possível excluir!!!";
	}

	mysqli_close($conn);

?>