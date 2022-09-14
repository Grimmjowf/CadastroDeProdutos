<?php
    require('conexao.php');
    
    $id = $_GET['id'];
    mysqli_query($conexao, "DELETE FROM usuarios WHERE id = $id");
?>
<a href="select.php">Listagem</a>