<?php

include '../db.php';

$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$telefone = $_GET['telefone'];
$cidade = $_GET['cidade'];

$query = "INSERT INTO fornecedores (nome, endereco, telefone, cidade) 
VALUES ('$nome','$endereco','$telefone','$cidade')";

mysqli_query($conexao, $query);
header('location:../index.php?pagina=fornecedores');

