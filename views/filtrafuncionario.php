<table class="table tables table-hover table-striped" style="border:1px solid #ccc; width: 100%">
	<thead>
		<tr>
			<th>Id Funcionario</th>
			<th>Id Livro</th>
            <th>Id Estoque</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($linha = mysqli_fetch_array($filtrafuncionario)){
                echo '<tr><td>'.$linha['funcionarios_idfuncionarios'].'</td>';
                echo '<tr><td>'.$linha['idestoques'].'</td>';
				echo '<td>'.$linha['idlivro'].'</td></tr>';
			}
		?>
	</tbody>

</table>
