<header class="text-center mt-3">
    <h3>Remoção de Contato <i class="bi bi-person-fill-exclamation"></i></h3>
</header>

<?php 
    $id= mysqli_real_escape_string($conexao, $_GET["id"]);
    $sql = "DELETE FROM contatos WHERE id = {$id}";

    mysqli_query($conexao,$sql) or die("Erro ao excluir o contato" . mysqli_error($conexao));
    //echo "O contato foi excluido com sucesso";
?>

<div class="alert alert-success mt-5" role="alert">
    <h4 class="alert-heading">Contato excluído com sucesso!</h4>
    <hr>
    <p class="mb-0">
        Para retornar a página inicial <a href="index.php?menuop=home" class="alert-link">clique aqui</a>.
    </p>
    <p class="mb-0">
        Para retornar a página de contatos <a href="index.php?menuop=contatos" class="alert-link">clique aqui</a>.
    </p>

</div>