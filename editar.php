<?php 
    $id = $_GET['id']; 

    require('conexao.php');
    $resultado = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $id");
    $registro  = mysqli_fetch_assoc($resultado);
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="card m-4 bg-secondary"> 
      <div class="card-body">
        <form action="update.php" method="post">
          <div class="mb-3">
            <label for="marca" class="form-label">Marca:</label>
            <input type="text" class="form-control" id="marca" name="marca" value="<?=$registro['marca']?>">
          </div>
          <div class="mb-3">
            <label for="preco" class="form-label">Preço:</label>
            <input type="text" class="form-control" id="preco" name="preco" value="<?=$registro['preco']?>">
          </div>
          <div class="mb-3">
            <label for="estoque" class="form-label">Estoque:</label>
            <input type="text" class="form-control" id="estoque" name="estoque" value="<?=$registro['estoque']?>">
          </div>
          <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" class="form-control" id="descricao" name="descricao"  value="<?=$registro['descricao']?>"> 
          </div>
          <div class="mb-3 ">
        <input type="submit"  class="form-control w-25 bg-primary">
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
