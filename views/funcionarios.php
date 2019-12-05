<a class="btn" href="?pagina=inserir_funcionario">Inserir Funcionario</a>
<table class="table tables table-hover table-striped" style="border:1px solid #ccc; width: 100%">
	<thead>
		<tr>
			<th>Id Funcionário</th>
			<th>Nome</th>
			<th>Data Contratação</th>
			<th>Editar</th>
			<th>Deletar</th>
		</tr>
	</thead>
	<tbody>


	<?php
		while($linha = mysqli_fetch_array($consulta_funcionarios)){
            echo '<tr><td>'.$linha['idfuncionarios'].'</td>';
            echo '<td>'.$linha['nome'].'</td>';
			echo '<td>'.$linha['datacontratacao'].'</td>';
			?>
			<td><a class="functions-td" href="?pagina=inserir_funcionario&editar=<?php echo $linha['idfuncionarios'];?>">Editar</a></td>
			<td><a class="functions-td" href="deleta_funcionario.php?idfuncionarios=<?php echo $linha['idfuncionarios'];?>">Deletar</a></td></tr>
		<?php
		    }
		?>
	
	</tbody>
</table>