<?php

include '../db.php';

$nome = $_GET['nome'];
$datacontratacao = $_GET['datacontratacao'];

$query = "INSERT INTO funcionarios (nome, datacontratacao) 
VALUES ('$nome','$datacontratacao')";

mysqli_query($conexao, $query);
echo "inserido";
