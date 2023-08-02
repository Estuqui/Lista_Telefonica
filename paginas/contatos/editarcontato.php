<?php
    $id = htmlspecialchars($_GET['id']);
    $stmt = $conexao->query("SELECT * FROM contatos WHERE id = {$id}");
    $result = $stmt->fetch_object();
?>

<header class="text-center mt-3">
    <h3>Editar Contato <i class="bi bi-person-fill-gear"></i> </h3>
</header>


<form action="index.php?menuop=atualizarcontato" method="POST">
    <input hidden name="id" type="text" value="<?=$_GET["id"]?>">

    <div class="form-group">
        <label for="nome">Nome</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            </div>
            <input type="text" class="form-control" name="nome" placeholder="Insira o nome" value="<?=$result->nome?>">
        </div>

        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                </div>
                <input type="text" class="form-control" name="sobrenome" placeholder="Insira o sobrenome"
                    value="<?=$result->sobrenome?>">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="Insira o E-mail"
                        value="<?=$result->email?>">
                </div>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="bi bi-telephone-plus-fill"></i></div>
                    </div>
                    <input type="tel" class="form-control" name="telefone" placeholder="Insira o telefone"
                        value="<?=$result->telefone?>">
                </div>

                <div class="text-center mt-3">
                    <button class="btn btn-outline-success" type="submit" value="Adicionar" name="botaoadicionar"
                        style="width:100%;"> Atualizar <i class="bi bi-person-check-fill"></i></button>
                </div>
</form>