
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

// $query = "SELECT a.titulo, b.nome from livros a, fornecedores b where b.idfornecedor = a.fornecedores_idfornecedores
// and b.idfornecedor = '$idFornecedores'";
// $filtrafornecedor = mysqli_query($conexao, $query);

$query = "SELECT f.nome, l.titulo, e.idestoques from funcionarios f, livros l, estoques e 
where f.idfuncionarios = e.funcionarios_idfuncionarios and l.idlivros = e.livros_idlivros";
$filtrafuncionario = mysqli_query($conexao, $query);




