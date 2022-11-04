<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

<?php
	//declaração de variáveis
	$nome = $_POST['nome'];

	//seleciona a tabela através do nome
	$query = "SELECT * FROM aluno1 WHERE Nome = '$nome'";
	

	$dados = mysqli_query($conn,$query);

	//procura os dados no banco
	if ($linha=mysqli_fetch_array($dados)){

	echo "nome: " . $linha ["nome"]."<br>";
	echo "email: " . $linha["email"]. "<br>";
	echo "idade: " 	. $linha["idade"] 	. "<br>";
	echo "telefone: " 	. $linha["telefone"] 	. "<br>";
	echo "endereco: " 	. $linha["endereco"] 	. "<br>";
	}
	
	else{
		echo "Nenhum usuário encontrado com esse nome";
		
	}
	mysqli_close($conn);
?>