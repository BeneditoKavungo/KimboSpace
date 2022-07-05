<?php
//conexao com banco de dados login

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (mysqli_connect_error()) :
  echo "Falha na conexao:" . mysqli_connect_error();
endif;
