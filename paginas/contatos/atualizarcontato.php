<header>
    <h3>Atualizar Contato</h3>
</header>

<?php 
    $stmt = $conexao->prepare("UPDATE contatos SET nome = ?, sobrenome = ?, email = ?,telefone = ? WHERE id=?");
    $stmt->bind_param('ssssd',
        htmlspecialchars($_POST["nome"], ENT_QUOTES), 
        htmlspecialchars($_POST["sobrenome"], ENT_QUOTES), 
        htmlspecialchars($_POST["email"], ENT_QUOTES), 
        htmlspecialchars($_POST["telefone"], ENT_QUOTES),
        htmlspecialchars($_POST["id"], ENT_QUOTES)
    );
    $stmt->execute();

    echo "O contato foi atualizado com sucesso";
?>

<!--Função prepare usa-se para inserir-->