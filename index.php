<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}
else{
	$pagina = 'home';
}

switch($pagina){
	case 'livros': include 'views/livros.php'; break;
	case 'estoques': include 'views/estoques.php'; break;
	case 'funcionarios': include 'views/funcionarios.php'; break;
	case 'fornecedores': include 'views/fornecedores.php'; break;
	case 'inserir_livro': include 'views/inserir_livro.php';break;
	case 'inserir_estoque': include 'views/inserir_estoque.php';break;
	case 'inserir_fornecedor': include 'views/inserir_fornecedor.php';break;
	case 'inserir_funcionario': include 'views/inserir_funcionario.php';break;
	case 'filtrafornecedor': include 'views/filtrafornecedor.php'; break;
	case 'filtrafuncionario': include 'views/filtrafuncionario.php'; break;

	default: include 'views/home.php'; break;
}

# Rodapé
include 'footer.php';
