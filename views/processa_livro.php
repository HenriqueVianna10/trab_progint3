<?php

include '../db.php';

$titulo = $_GET['titulo'];
$fornecedores = $_GET['fornecedores'];
$anopublicacao = $_GET['anopublicacao'];
$edicao = $_GET['edicao'];
$editora = $_GET['editora'];

$query = "INSERT INTO livros(titulo, fornecedores_idfornecedores, anopublicacao, edicao, editora) 
VALUES ('$titulo','$fornecedores','$anopublicacao','$edicao','$editora')";

mysqli_query($conexao, $query);

echo "inserido";
