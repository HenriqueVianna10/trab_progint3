

<table class="table tables table-hover table-striped" style="border:1px solid #ccc; width: 100%">
	<form action="filtrafornecedor.php" method="get">
		<input type="text" name="idFornecedor">
		<input type="submit" hidden>
	</form>
	<thead>
		<tr>
			<th>Id Fornecedor</th>
			<th>Id Livro</th>
		</tr>
	</thead>
	<tbody>
		<?php

		if ($_GET){
			
			$idFornecedor = $_GET['idFornecedor'];
			include './db.php';
			$query = "SELECT a.titulo, b.nome from livros a, fornecedores b where b.idfornecedor = a.fornecedores_idfornecedores
				and b.idfornecedor = '$idFornecedor'";
			$filtrafornecedor1 = mysqli_query($conexao, $query);

			while($linha = mysqli_fetch_array($filtrafornecedor1)){
			echo '<tr><td>'.$linha['idfornecedor'].'</td>';
			echo '<td>'.$linha['a.titulo'].'</td>';
			echo '<td>'.$linha['b.nome'].'</td>';
			}
		}
		?>
	</tbody>

</table>