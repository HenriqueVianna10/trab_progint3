<?php 

include 'db.php';

$idlivros = $_GET['idlivros'];
$titulo = $_GET['titulo'];
$anopublicacao = $_GET['anopublicacao'];
$edicao = $_GET['edicao'];
$editora = $_GET['editora'];


$query = "UPDATE livros SET titulo='$titulo', anopublicacao='$anopublicacao', edicao='$edicao', editora='$editora'
WHERE idlivros = $idlivros";

mysqli_query($conexao, $query);
#print($query);

header('location:index.php?pagina=livros');
