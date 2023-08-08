<header class="text-center mt-3">
    <h3>Inserir Contato <i class="bi bi-person-plus-fill"></i></h3>
</header>

<?php //Função prepare usa-se para inserir
    $stmt = $conexao->prepare("INSERT INTO contatos (nome,sobrenome,email,telefone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('ssss', 
        htmlspecialchars($_POST["nome"], ENT_QUOTES), 
        htmlspecialchars($_POST["sobrenome"], ENT_QUOTES), 
        htmlspecialchars($_POST["email"], ENT_QUOTES), 
        htmlspecialchars($_POST["telefone"], ENT_QUOTES)
    );
    $stmt->execute();

    //echo "O contato foi adicionado com sucesso";
?>

<div class="alert alert-success mt-5" role="alert">
    <h4 class="alert-heading">Contato adicionado com sucesso!</h4>
    <hr>
    <p class="mb-0">
        Para retornar a página inicial <a href="index.php?menuop=home" class="alert-link">clique aqui</a>.
    </p>
    <p class="mb-0">
        Para retornar a página de contatos <a href="index.php?menuop=contatos" class="alert-link">clique aqui</a>.
    </p>

</div>