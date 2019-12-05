

<center>
<table border="2" bordercolor="blue">
<tr><td align='center'>
<form action="pesq.php" method="get">
Nome Livro: <input type="text" name="nome">
<input type="hidden" name="id" value="1">
&nbsp;&nbsp;<input type="submit" value="Pesquisar Nome">
</form>

<form action="pesq.php" method="get">
Telefone: <input type="text" name="fone">
<input type="hidden" name="id" value="2">
&nbsp;&nbsp;<input type="submit" value="Pesquisar Telefone">
</form>

<form action="pesq.php" method="get">
Nascimento: <input type="text" name="nasc" placeholder="dd-mm-aaaa">
<input type="hidden" name="id" value="3">
&nbsp;&nbsp;<input type="submit" value="Pesquisar Nascimento">
</form>

<form action="pesq.php" method="get">
Departamento: <select name="dep">
<option value=""></option>
<?php
require("conecta.inc.php");
$ok = conecta_bd() or die ("Não é possível conectar-se ao servidor.");
$resultado=mysqli_query($ok, "Select * from departamento order by nomed") or die ("Não é possível consultar departamentos.");
while ($linha=mysqli_fetch_array($resultado))
{
   $CodigoD=$linha["codigod"];
   $NomeD=$linha["nomed"];
   print("<option value='$CodigoD'>$NomeD</option>");
}
?>
</select>
<input type="hidden" name="id" value="4">
&nbsp;&nbsp;<input type="submit" value="Pesquisar Departamento">
</form>
</td></tr>
</table>
</center>
<hr>
<p><a href="mostraf.php">Mostrar Funcionários</a>