<?php

$servidor = "localhost";
$usuario = "root";  // Corrigido para o nome de usuário do MySQL
$senha ="";
$banco = "listaTarefa";  // Adicione o nome do banco de dados

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

  if(!$conexao) {
      die("Falha na conexão: " . mysqli_connect_error());
  } // não pode fechar a conexão,se for executada

?>
