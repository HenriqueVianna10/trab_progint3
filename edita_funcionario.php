<?php 

include 'db.php';

$idfuncionarios = $_GET['idfuncionarios'];
$nome = $_GET['nome'];
$datacontratacao = $_GET['datacontratacao'];



$query = "UPDATE funcionarios SET nome='$nome', datacontratacao='$datacontratacao'
WHERE idfuncionarios = $idfuncionarios";

mysqli_query($conexao, $query);
#print($query);

header('location:index.php?pagina=funcionarios');
