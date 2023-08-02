<header class="text-center mt-3">
    <h3>Cadastro de Contato <i class="bi bi-person-fill-add"></i></h3>
</header>

<form action="index.php?menuop=inserircontato" method="POST">

    <div class="form-group">
        <label for="nome">Nome</label>
        <div class="input-group mb-2">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
            </div>
            <input type="text" class="form-control" name="nome" placeholder="Insira o nome">
        </div>

        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <div class="input-group mb-2">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                </div>
                <input type="text" class="form-control" name="sobrenome" placeholder="Insira o sobrenome">
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">@</div>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="Insira o E-mail">
                </div>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="bi bi-telephone-plus-fill"></i></div>
                    </div>
                    <input type="tel" class="form-control" name="telefone" placeholder="Insira o telefone">
                </div>

                <div class="text-center mt-3">
                    <button class="btn btn-outline-success" type="submit" value="Adicionar" name="botaoadicionar"
                        style="width:100%;"> Adicionar <i class="bi bi-person-fill-add"></i></button>
                </div>
</form>