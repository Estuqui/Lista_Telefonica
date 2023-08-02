<header class="text-center mt-3">
    <h3>Atualização de Contato <i class="bi bi-person-fill-gear"></i> </h3>
</header>


<?php //Função prepare usa-se para inserir 
    $stmt = $conexao->prepare("UPDATE contatos SET nome = ?, sobrenome = ?, email = ?,telefone = ? WHERE id=?");
    $stmt->bind_param('ssssd',
        htmlspecialchars($_POST["nome"], ENT_QUOTES), 
        htmlspecialchars($_POST["sobrenome"], ENT_QUOTES), 
        htmlspecialchars($_POST["email"], ENT_QUOTES), 
        htmlspecialchars($_POST["telefone"], ENT_QUOTES),
        htmlspecialchars($_POST["id"], ENT_QUOTES)
    );
    $stmt->execute();

    //echo "O contato foi atualizado com sucesso";
?>

<div class="alert alert-success mt-5" role="alert">
  <h4 class="alert-heading">Contato atualizado com sucesso!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>


