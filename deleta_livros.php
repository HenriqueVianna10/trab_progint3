<?php 
 
include 'db.php';

$idlivros =  $_GET['idlivros'];


$query = "DELETE FROM livros WHERE idlivros = $idlivros";

mysqli_query($conexao, $query);
header('location:index.php?pagina=livros');
