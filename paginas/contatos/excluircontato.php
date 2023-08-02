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
  <h4 class="alert-heading">Contato excluido com sucesso!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>