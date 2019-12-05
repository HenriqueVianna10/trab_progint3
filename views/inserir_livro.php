<?php if(!isset($_GET['editar'])){ ?>

<h1 class="main-title">Inserir Novo Livro</h1>
<form method="get" action="views/processa_livro.php">
    <br>
    <label>Titulo</label><br>
    <input type="text" name="titulo"  placeholder="Insira o nome do livro" required>
    <br><br>
    <label>Fornecedor</label><br>
    <select class="form-control" name="fornecedores" required>
        <option></option>
        <?php
          $query = "SELECT idfornecedor, nome FROM fornecedores";
          $resultado = mysqli_query($conexao, $query);
          while($row = mysqli_fetch_array($resultado)){
              echo '<option value="'.$row['idfornecedor'].'">'.$row['nome'].'</option>';
          }
          ?>
    </select>
    <br><br>
    <label>Ano da Publicação</label><br>
    <input type="text"  name="anopublicacao" placeholder="Insira o ano de publicação" required>
    <br><br>
    <label>Edição</label><br>
    <input type="text"  name="edicao"        placeholder="Insira a edicao" required>
    <br><br>
    <label>Editora</label><br>
    <input type="text"  name="editora"       placeholder="Insira a editora" required><br><br>
    <input type="submit" class="btn" value="Inserir Livro">
</form>

<?php } else { ?>
    <?php   while ($linha = mysqli_fetch_array($consulta_livros)){ ?>
        <?php if($linha['idlivros'] == $_GET['editar']){ ?>

        <h1 class="main-title">Editar Livro</h1>
    <form method="get" action="edita_livro.php">
        <input type="hidden" require name="idlivros" value="<?php echo $linha['idlivros']; ?>">
        <br>
        <label>Titulo</label><br>
        <input type="text" require name="titulo" placeholder="Insira o nome do livro" value="<?php echo $linha['titulo'];?>">
        <br><br>
        <label>Fornecedor</label><br>
        <select class="form-control" name="fornecedores">
        <option></option>
        <?php
          $query = "SELECT idfornecedor, nome FROM fornecedores";
          $resultado = mysqli_query($conexao, $query);
          while($row = mysqli_fetch_array($resultado)){
              echo '<option value="'.$row['idfornecedor'].'">'.$row['nome'].'</option>';
          }
          ?>
        </select>
        <br><br>
        <label>Ano da Publicação</label><br>
        <input type="text" require name="anopublicacao" placeholder="Insira o ano de publicação" value="<?php echo $linha['anopublicacao'];?>">
        <br><br>
        <label>Edição</label><br>
        <input type="text" require name="edicao"  placeholder="Insira a edicao" value="<?php echo $linha['edicao'];?>">
        <br><br>
        <label>Editora</label><br>
        <input type="text" require name="editora" placeholder="Insira a editora" value="<?php echo $linha['editora'];?>"><br><br>
        <input type="submit" class="btn" value="Editar Livro">
    </form>
        <?php } ?>
    <?php } ?>
<?php } ?>
