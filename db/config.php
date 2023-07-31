<?php 
    //Constantes de configuração da conexão com banco de dados
    define("SERVIDOR", "localhost");
    define("USUARIO","jessica");
    define("SENHA","123456");
    define("BANCO","lista_telefonica");

    $conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO) or die(mysqli_error());
?>