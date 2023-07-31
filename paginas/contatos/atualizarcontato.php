<header>
<h3>Atualizar Contato</h3>
</header>

<?php 

    $id = mysqli_real_escape_string($conexao,$_POST["id"]);
    $nome = mysqli_real_escape_string($conexao,$_POST["nome"]);
    $sobrenome = mysqli_real_escape_string($conexao,$_POST["sobrenome"]);
    $email = mysqli_real_escape_string($conexao,$_POST["email"]);
    $telefone = mysqli_real_escape_string($conexao,$_POST["telefone"]);
    $sql =  "UPDATE contatos SET nome = '{$nome}', sobrenome = '{$sobrenome}', email = '{$email}',telefone = '{$telefone}' WHERE {$id}";
    $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta" . mysqli_error($conexao));

    echo "O contato foi atualizado com sucesso";


?>