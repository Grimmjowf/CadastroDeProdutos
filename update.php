<?php
    require('conexao.php');

    mysqli_query($conexao, 'UPDATE produtos
        SET nome = "José da Silva", email = "jose@teste.com" WHERE id = 8');
?>