<?php 
 
include 'db.php';

$idfuncionarios =  $_GET['idfuncionarios'];


$query = "DELETE FROM funcionarios WHERE idfuncionarios = $idfuncionarios";

mysqli_query($conexao, $query);
header('location:index.php?pagina=funcionarios');