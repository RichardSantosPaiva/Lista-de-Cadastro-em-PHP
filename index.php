
<?php
	//Conectando ao banco
	include_once("conectaBD.php");
	//Tabela no BD
    $tabela = "tarefa";
    $campos ="nomeTarefa, descricao, dia";

	//se o botão for pressionado
	if (isset($_GET['cadastrar'])) {
		//traz as variáveis do formulário
	    $nomeTarefa = $_GET['tarefaUsuario'];
        $descricao = $_GET['descricaoUsuario'];
        $dataTarefa = $_GET['dataTarefa'];
		
		//Script para inserir um registro na tabela no Banco de Dados
        $sql = "INSERT INTO $tabela ($campos) VALUES ('$nomeTarefa', '$descricao', '$dataTarefa')";

		// executando instrução SQL
		$instrucao = mysqli_query($conexao,$sql);
		
			//concluindo operação
			if (!$instrucao) {
				die(' Query Inválida: ' . mysqli_error($conexao));
		
			} else {
				mysqli_close($conexao);
				echo "Produto cadastrado com Sucesso!     <a href='index.php'>Voltar</a>";
				exit;
			}
	}	
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/estilo.css">
        <title>Document</title>
</head>
<body>
        
     <form action="" method="GET">
        <h2>Lista de Tarefa</h2>
        <input type="text" name="tarefaUsuario" placeholder="digite um item">
        <input type="date" name="dataTarefa">
        <textarea name="descricaoUsuario" placeholder="descreva a tarefa"></textarea>
        <button type="submit" name="cadastrar">Enviar</button>
     </form>

    </body>
</html>