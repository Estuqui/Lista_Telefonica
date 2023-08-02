<header>
    <h3>Inserir Contato</h3>
</header>

<?php 
    $stmt = $conexao->prepare("INSERT INTO contatos (nome,sobrenome,email,telefone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', 
        htmlspecialchars($_POST["nome"], ENT_QUOTES), 
        htmlspecialchars($_POST["sobrenome"], ENT_QUOTES), 
        htmlspecialchars($_POST["email"], ENT_QUOTES), 
        htmlspecialchars($_POST["telefone"], ENT_QUOTES)
    );
    $stmt->execute();

    echo "O contato foi adicionado com sucesso";
?>

<!--Função prepare usa-se para inserir-->