<?php 

include 'db.php';

$idestoques = $_GET['idestoques'];
$livros_idlivros = $_GET['livros_idlivros'];
$funcionarios_idfuncionarios = $_GET['funcionarios_idfuncionarios'];
$quant_total= $_GET['quant_total'];
$quant_recebida = $_GET['quant_recebida'];
$dataatualizacao = $_GET['dataatualizacao'];



$query = "UPDATE estoques SET livros_idlivros='$livros_idlivros', funcionarios_idfuncionarios='$funcionarios_idfuncionarios', quant_total='$quant_total', quant_recebida='$quant_recebida',dataatualizacao='$dataatualizacao'
WHERE idestoques = $idestoques";

mysqli_query($conexao, $query);
#print($query);

header('location:index.php?pagina=estoques');
