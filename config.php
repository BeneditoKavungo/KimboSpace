<?php

$Hostname = 'localhost';
$User = 'root';
$Password = '';
$database = 'cadastro';

$conexao = new mysqli($Hostname, $User, $Password, $database);

  //testar se a conexao deu certo
// if ($conexao->connect_errno) {
//   echo 'ERRO';
// } else {
//   echo 'Conexao efectuada com sucesso!';
// }
