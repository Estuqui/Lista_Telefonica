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

//Prepara e Executa a consulta
    //$sql = "SELECT * FROM contatos";
    //$rs = mysqli_query($conexao, $sql);

        //if(!$rs){
              // die("Erro na consulta: " . mysqli_error($conexao));
       // }

//Tratamento dos dados

        //while($row = mysqli_fetch_assoc($rs)){
            //echo "nome: " . $row["nome"], $row["sobrenome"],$row["email"],$row["telefone"] . "<br>";
        //}

//Encerramento da conexão

//mysqli_close($conexao);

?> 