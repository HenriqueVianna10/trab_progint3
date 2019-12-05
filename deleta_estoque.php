<?php 
 
include 'db.php';

$idestoques =  $_GET['idestoques'];


$query = "DELETE FROM estoques WHERE idestoques = $idestoques";

mysqli_query($conexao, $query);
header('location:index.php?pagina=estoques');