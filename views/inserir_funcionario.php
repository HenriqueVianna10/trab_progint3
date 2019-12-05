<?php if(!isset($_GET['editar'])){ ?>

<h1 class="main-title">Inserir Novo Funcionário</h1>
<form method="get" action="views/processa_funcionario.php">
    <br>
    <label>Nome</label><br>
    <input type="text" name="nome"placeholder="Insira o nome" required>
    <br><br>
    <label>Data Contratação</label><br>
    <input type="text" name="datacontratacao"   placeholder="Insira a data de contratacao" required><br><br>
    <input class="btn" type="submit" value="Inserir Funcionário">
</form>

<?php } else { ?>
    <?php   while ($linha = mysqli_fetch_array($consulta_funcionarios)){ ?>
        <?php if($linha['idfuncionarios'] == $_GET['editar']){ ?>

        <h1 class="main-title">Editar Funcionário</h1>
    <form method="get" action="edita_funcionario.php">
        <input type="hidden" name="idfuncionarios" value="<?php echo $linha['idfuncionarios']; ?>">
        <br>
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Insira o nome do funcionario" value="<?php echo $linha['nome'];?>">
        <br><br>
        <label>Data Contratação</label><br>
        <input type="text" name="datacontratacao" placeholder="Insira a data de contratação" value="<?php echo $linha['datacontratacao'];?>">
        <br><br>
        <input class="btn" type="submit" value="Editar Funcionário">
    </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
