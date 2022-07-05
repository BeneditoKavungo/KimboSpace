<?php

include_once("config.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
header('Location: cadastro.php');


$sql = "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$senha')";
$salvar = mysqli_query($conexao, $sql);

mysqli_close($conexao);

//Processamento de dados cadastrados no formulario
