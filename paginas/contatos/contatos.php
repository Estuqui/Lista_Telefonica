<header class="text-center mt-3 mb-5">
    <h3>Sua lista de contatos <i class="bi bi-person-circle"></i></h3>
</header>

<div>
    <form action="index.php?menuop=contatos" method="post">
        <div class="input-group">
            <input class="form-control" list="datalistOptions" type="text" name="txt_pesquisa" placeholder="Pesquisar">
            <button class="btn btn-outline-light btn-sm" type="submit"><i class="bi bi-search"></i> Pesquisar</button>
        </div>
    </form>
</div>

<div class="tabela">
    <table class="table table-dark table-hover table-bordered table-sm text-center" id="contatos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>

        <tbody>
            <?php 
                //Prepara e Executa a consulta
                $sql = "SELECT * FROM contatos";
                $rs = mysqli_query($conexao, $sql);

                //Tratamento dos dados
                while($dados = mysqli_fetch_assoc($rs)) {

            ?>
            <tr>
                <td class="text-nowrap text-center"> <?=$dados["id"]?> </td>
                <td class="text-nowrap text-center"> <?=$dados["nome"]?> </td>
                <td class="text-nowrap text-center"> <?php echo $dados["sobrenome"];?> </td>
                <td class="text-nowrap text-center"> <?=$dados["email"]?> </td>
                <td class="text-nowrap text-center"> <?=$dados["telefone"]?> </td>

                <td class="text-center">
                    <a class="btn btn-outline-info btn-sm" href="index.php?menuop=editarcontato&id=<?=$dados["id"]?>">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                </td>

                <td class="text-center">
                    <a class="btn btn-outline-danger btn-sm"
                        href="index.php?menuop=excluircontato&id=<?=$dados["id"]?>"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
            <?php
                }
                
                //Encerramento da conexão
                mysqli_close($conexao); 
            ?>
        </tbody>
    </table>
</div>