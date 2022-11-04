<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
	//declaração de variáveis
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$idade = $_POST['idade'];
	$senha = $_POST['senha'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	
	//atualiza os dados na tabela
	$query = "UPDATE aluno1 SET nome ='$nome', endereco ='$endereco' WHERE telefone='$id'";

	$ok = mysqli_query($conn, $query);

	//cria uma condição que verifica se os dados foram alterados no banco 
	if($ok && mysqli_affected_rows($conn) == 0){
		echo "telefone não encontrado na tabela!!!";

	}elseif($ok && mysqli_affected_rows($conn) > 0){
		echo "Atualizado com sucesso!!!";
        
	}else{
		echo "Não foi possível atualizar!!!";
	}
	

	mysqli_close($conn);

?>	