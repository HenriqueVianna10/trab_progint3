<?php 
 
include 'db.php';

$idfornecedor =  $_GET['idfornecedor'];


$query = "DELETE FROM fornecedores WHERE idfornecedor = $idfornecedor";

mysqli_query($conexao, $query);
header('location:index.php?pagina=fornecedores');