
<?php 

$servidor = "127.0.0.1";
$usuario = "root";
$senha = "";
$db = "biblioteca";
$conexao = mysqli_connect($servidor, $usuario, $senha, $db);


$query = "SELECT * FROM livros";
$consulta_livros = mysqli_query($conexao, $query);

$query = "SELECT * FROM estoques";
$consulta_estoques = mysqli_query($conexao, $query);

$query = "SELECT * FROM funcionarios";
$consulta_funcionarios = mysqli_query($conexao, $query);

$query = "SELECT * FROM fornecedores";
$consulta_fornecedores = mysqli_query($conexao, $query);





