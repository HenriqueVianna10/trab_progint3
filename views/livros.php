<a class="btn" href="?pagina=inserir_livro">Inserir Novo Livro</a>
<table class="table tables table-hover table-striped" id="livros">
	<thead>
		<tr>
			<th>ID Livro</th>
			<th>ID Fornecedor</th>
			<th>Titulo</th>
			<th>Ano Publicação</th>
			<th>Edição</th>
			<th>Editora</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			while($linha = mysqli_fetch_array($consulta_livros)){
				echo '<tr><td >'.$linha['idlivros'].'</td>';
				echo '<td>'.$linha['fornecedores_idfornecedores'].'</td>';
				echo '<td>'.$linha['titulo'].'</td>';
				echo '<td>'.$linha['anopublicacao'].'</td>';
				echo '<td>'.$linha['edicao'].'</td>';
				echo '<td>'.$linha['editora'].'</td>';
		?>
			<td><a class="functions-td" href="?pagina=inserir_livro&editar=<?php echo $linha['idlivros'];?>">Editar</a></td>
			<td><a class="functions-td" href="deleta_livros.php?idlivros=<?php echo $linha['idlivros'];?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>