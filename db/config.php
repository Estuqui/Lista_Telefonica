<?php 
//Conexão com o banco de dados 
    $servidor = "localhost";
    $nome = "jessica";
    $senha = "123456";
    $banco = "lista_telefonica";
    
    $conexao = mysqli_connect($servidor,$nome,$senha,$banco);

    if(!$conexao){
        die("Falha na conexão: " . mysqli_connect_error());
    }
?>