<?php

include '../db.php';

$livros_idlivros = $_GET['livros_idlivros'];
$funcionarios_idfuncionarios = $_GET['funcionarios_idfuncionarios'];
$quant_total = $_GET['quant_total'];
$quant_recebida = $_GET['quant_recebida'];
$dataatualizacao = $_GET['dataatualizacao'];

$query = "INSERT INTO estoques (livros_idlivros, funcionarios_idfuncionarios, quant_total, quant_recebida, dataatualizacao) 
VALUES ('$livros_idlivros','$funcionarios_idfuncionarios','$quant_total','$quant_recebida','$dataatualizacao')";

mysqli_query($conexao, $query);
header('location:../index.php?pagina=estoques');
