<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "biblioteca";


$conexao = new mysqli($host, $user, $password, $database);

if ($conexao->connect_error) {
    die("Conexão Falhada" . $conn->connect_error);
} else {
   //echo "Conexão com sucesso $database";
}

?>