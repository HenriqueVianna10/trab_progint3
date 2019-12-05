<a class="btn" href="?pagina=inserir_estoque">Inserir no Estoque</a>
<table class="table tables table-hover table-striped"  style="border:1px solid #ccc; width: 100%" id="estoques">
	<thead>
		<tr>
			<th>Id Estoque</th>
			<th>Id Livro</th>
			<th>Id Funcionário</th>
			<th>Total de Livros</th>
			<th>Total Recebidos</th>
			<th>Última Atualização</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>

	<?php
		while($linha = mysqli_fetch_array($consulta_estoques)){
			echo '<tr><td>'.$linha['idestoques'].'</td>';
			echo '<td>'.$linha['livros_idlivros'].'</td>';
			echo '<td>'.$linha['funcionarios_idfuncionarios'].'</td>';
			echo '<td>'.$linha['quant_total'].'</td>';
			echo '<td>'.$linha['quant_recebida'].'</td>';
			echo '<td>'.$linha['dataatualizacao'].'</td>';
			?>
			<td><a class="functions-td" href="?pagina=inserir_estoque&editar=<?php echo $linha['idestoques'];?>">Editar</a></td>
			<td><a class="functions-td" href="deleta_estoque.php?idestoques=<?php echo $linha['idestoques'];?>">Deletar</a></td></tr>

		<?php
			}
		?>
	</tbody>

</table>

