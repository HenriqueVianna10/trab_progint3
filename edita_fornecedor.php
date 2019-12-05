<?php 

include 'db.php';

$idfornecedor = $_GET['idfornecedor'];
$nome = $_GET['nome'];
$endereco = $_GET['endereco'];
$telefone = $_GET['telefone'];
$cidade = $_GET['cidade'];


$query = "UPDATE fornecedores SET nome='$nome', endereco='$endereco', telefone='$telefone', cidade='$cidade'
WHERE idfornecedor = $idfornecedor";

mysqli_query($conexao, $query);
#print($query);

header('location:index.php?pagina=fornecedores');
