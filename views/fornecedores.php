<a class="btn" href="?pagina=inserir_fornecedor">Inserir Fornecedor</a>
<table class="table tables table-hover table-striped" style="border:1px solid #ccc; width: 100%">
	<thead>
		<tr>
			<th>Id Fornecedor</th>
			<th>Nome</th>
			<th>Endereço</th>
			<th>Telefone</th>
			<th>Cidade</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($linha = mysqli_fetch_array($consulta_fornecedores)){
				echo '<tr><td>'.$linha['idfornecedor'].'</td>';
				echo '<td>'.$linha['nome'].'</td>';
				echo '<td>'.$linha['endereco'].'</td>';
				echo '<td>'.$linha['telefone'].'</td>';
				echo '<td>'.$linha['cidade'].'</td>';
			
			?>
			<td><a class="functions-td" href="?pagina=inserir_fornecedor&editar=<?php echo $linha['idfornecedor'];?>">Editar</a></td>
			<td><a class="functions-td" href="deleta_fornecedor.php?idfornecedor=<?php echo $linha['idfornecedor'];?>">Deletar</a></td></tr>

		<?php
		    }
		?>
	</tbody>

</table>