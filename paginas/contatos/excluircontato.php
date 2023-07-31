<header>
    <h3>Excluir Contato</h3>
</header>

<?php 

$id= mysqli_real_escape_string($conexao, $_GET["id"]);
$sql = "DELETE FROM contatos WHERE id = {$id}";

mysqli_query($conexao,$sql) or die("Erro ao excluir o contato" . mysqli_error($conexao));

echo "O contato foi excluido com sucesso";

?>