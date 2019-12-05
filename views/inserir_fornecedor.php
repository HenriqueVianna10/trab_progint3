<?php if(!isset($_GET['editar'])){ ?>

<h1 class="main-title">Inserir Novo Fornecedor</h1>
<form method="get" action="views/processa_fornecedor.php">
    <br>
    <label>Nome</label><br>
    <input type="text" name="nome"        placeholder="Insira o nome" required>
    <br><br>
    <label>Endereço</label><br>
    <input type="text" name="endereco"  placeholder="Insira o endereço do fornecedor" required>
    <br><br>
    <label>Telefone</label><br>
    <input type="text" name="telefone"    placeholder="Insira o telefone" required>
    <br><br>
    <label>Cidade</label><br>
    <input type="text" name="cidade"       placeholder="Insira a Cidade" required><br><br>
    <input class="btn" type="submit" value="Inserir Fornecedor">
</form>

<?php } else { ?>
    <?php   while ($linha = mysqli_fetch_array($consulta_fornecedores)){ ?>
        <?php if($linha['idfornecedor'] == $_GET['editar']){ ?>

        <h1 class="main-title">Editar Fornecedor</h1>
        <form method="get" action="edita_fornecedor.php">
        <input type="hidden" name="idfornecedor" value="<?php echo $linha['idfornecedor']; ?>">
        <br>
        <label>Nome</label><br>
        <input type="text" name="nome" placeholder="Insira o nome" value="<?php echo $linha['nome'];?>">
        <br><br>
        <label>Endereço</label><br>
        <input type="text" name="endereco" placeholder="Insira o endereço do fornecedor" value="<?php echo $linha['endereco'];?>">
        <br><br>
        <label>Telefone</label><br>
        <input type="text" name="telefone" placeholder="Insira o telefone" value="<?php echo $linha['telefone'];?>">
        <br><br>
        <label>Cidade</label><br>
        <input type="text" name="cidade" placeholder="Insira a cidade" value="<?php echo $linha['cidade'];?>"><br><br>
        <input class="btn" type="submit" class="btn" value="Editar Fornecedor">
    </form>
        <?php } ?>
    <?php } ?>
<?php } ?>