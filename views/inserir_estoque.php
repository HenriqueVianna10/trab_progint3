<?php if(!isset($_GET['editar'])){ ?>

<h1 class="main-title">Inserir No Estoque</h1>
<form method="get" action="views/processa_estoque.php">
    <br>
    <label>Nome Livro</label><br>
    <select class="form-control" name="livros_idlivros" required>
        <option></option>
        <?php
          $query = "SELECT idlivros, titulo FROM livros";
          $resultado = mysqli_query($conexao, $query);
          while($row = mysqli_fetch_array($resultado)){
              echo '<option value="'.$row['idlivros'].'">'.$row['titulo'].'</option>';
          }
          ?>
    </select>
    <br><br>
    <label>Funcionário</label><br>
    <select class="form-control" name="funcionarios_idfuncionarios" required>
        <option></option>
        <?php
          $query = "SELECT idfuncionarios, nome FROM funcionarios";
          $resultado = mysqli_query($conexao, $query);
          while($row = mysqli_fetch_array($resultado)){
              echo '<option value="'.$row['idfuncionarios'].'">'.$row['nome'].'</option>';
          }
          ?>
    </select>
    <br><br>
    <label>Quantidade Total</label><br>
    <input type="text" name="quant_total" placeholder="Insira a quantidade" required>
    <br><br>
    <label>Quantidade Recebida</label><br>
    <input type="text" name="quant_recebida"   placeholder="Insira a quantidade recebida" required>
    <br><br>
    <label>Data de Atualização</label><br>
    <input type="text" name="dataatualizacao"       placeholder="Insira a data de atualização" required><br><br>
    <input type="submit" class="btn" value="Inserir Livro">
</form>

<?php } else { ?>
    <?php   while ($linha = mysqli_fetch_array($consulta_estoques)){ ?>
        <?php if($linha['idestoques'] == $_GET['editar']){ ?>

        <h1 class="main-title">Editar Livro</h1>
    <form method="get" action="edita_estoque.php">
        <input type="hidden" name="idestoques" value="<?php echo $linha['idestoques']; ?>">
        <br>
        <label>Nome Livro</label><br>
        <input type="text" name="livros_idlivros" placeholder="Insira o id do livro" value="<?php echo $linha['livros_idlivros'];?>">
        <br><br>
        <label>Id funcionário</label><br>
        <select class="form-control" name="funcionarios_idfuncionarios">
        <option></option>
        <?php
          $query = "SELECT idfuncionarios, nome FROM funcionarios";
          $resultado = mysqli_query($conexao, $query);
          while($row = mysqli_fetch_array($resultado)){
              echo '<option value="'.$row['idfuncionarios'].'">'.$row['nome'].'</option>';
          }
          ?>
        </select>
        <br><br>
        <label>Quantidade Total</label><br>
        <input type="text" name="quant_total" placeholder="Insira a quantidade" value="<?php echo $linha['quant_total'];?>">
        <br><br>
        <label>Quantidade Recebida</label><br>
        <input type="text" name="quant_recebida"  placeholder="Insira a Quantidade Recebida" value="<?php echo $linha['quant_recebida'];?>">
        <br><br>
        <label>Data de Atualização</label><br>
        <input type="text" name="dataatualizacao" placeholder="Insira a data de atualização" value="<?php echo $linha['dataatualizacao'];?>"><br><br>
        <input type="submit" class="btn"  value="Editar Livro">
    </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
