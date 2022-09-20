<?php
  require('conexao.php');






$id = $_POST['id'];
  $descricao = $_POST['descricao'];
  $marca = $_POST['marca'];
  $preco   = $_POST['preco'];
  $estoque   = $_POST['estoque'];





$sql = "UPDATE produtos SET marca = '$marca',  preco = '$preco', estoque = '$estoque', descricao = '$descricao' WHERE id = $id";
  
mysqli_query($conexao, $sql)


  ?>

  <a href="select.php">Voltar</a>