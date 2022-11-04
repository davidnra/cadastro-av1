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

	//insere os dados na tabela
	$query = "INSERT INTO aluno1 (nome,email,idade,senha, telefone,endereco) VALUES ('$nome','$email','$idade', '$senha','$telefone', '$endereco')";
	
	$ok = mysqli_query($conn,$query);

	//verifica se os dados foram inseridos caso contrário retorna erro
	if($ok){
		echo "Cadastrado com sucesso!!!";
		
	}else{
		echo "Não cadastrado!!!";
	}

	mysqli_close($conn);
?>