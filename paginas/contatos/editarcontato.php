<?php 
    $id = $_GET["id"]; //Recebe o que está na barra de endereço//
    $sql = "SELECT * FROM contatos WHERE id = {$id}"; //Guarda a consulta SQL//
    $rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados" . mysqli_error($conexao));
    $dados = mysqli_fetch_assoc($rs); //Procura pelo índice associativo//
?>

<header>
    <h3>Editar Contato</h3>
</header>

<div>
    <form action="index.php?menuop=atualizarcontato" method="POST">
</div>

    <div> <!-- Aqui os dados salvos no banco de dados já aparecerão para serem alterados // Dados ficam salvo no input -->
        <label for="id">ID</label>
        <input type="text" name="id" value="<?php $dados["id"]?>">
    </div>
    
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?php $dados["nome"]?>">
    </div>

    <div>
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" value="<?php $dados["sobrenome"]?>">
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" value="<?php $dados["email"]?>">
    </div>

    <div>
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" value="<?php $dados["telefone"]?>">
    </div>

    <div>
        <button type="submit" value="Atualizar" name="botaoatualizar"> Atualizar </button>
    </div>

    </form>
</div>