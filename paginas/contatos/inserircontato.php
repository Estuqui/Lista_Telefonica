<header>
<h3>Inserir Contato</h3>
</header>

<?php 
    $nome = mysqli_real_escape_string($conexao,$_POST["nome"]);
    $sobrenome = mysqli_real_escape_string($conexao,$_POST["sobrenome"]);
    $email = mysqli_real_escape_string($conexao,$_POST["email"]);
    $telefone = mysqli_real_escape_string($conexao,$_POST["telefone"]);
    $sql =  "INSERT INTO contatos (nome,sobrenome,email,telefone,id) VALUES('{$nome}','{$sobrenome}','{$email}','{$telefone}')";
    mysqli_query($conexao, $sql) or die("Erro ao executar a consulta" . mysqli_error($conexao));

    echo "O contato foi adicionado com sucesso";
?>