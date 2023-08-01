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
    <table class="table table-dark table-hover table-bordered table-sm">
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
                $quantidade = "";
                $pagina = (isset($_GET["$pagina"]))?(int)$_GET["pagina"]:1;
                $inicio = ($quantidade * $pagina) - $pagina;
                
                //Barra de pesquisa - validação 
                $txt_pesquisa = (isset($_POST["txt_pesquisa"])) ? $_POST["txt_pesquisa"]:"";
                //$sql = "SELECT * FROM contatos WHERE id='$txt_pesquisa' or nome LIKE '%$txt_pesquisa%' ORDER BY nome ASC LIMIT $inicio, $quantidade";
                    
                //Prepara e Executa a consulta
                $sql = "SELECT * FROM contatos";
                $rs = mysqli_query($conexao, $sql);
                    
                    if($rs){
                        die("Erro na consulta: " . mysqli_error($conexao));}
                
                //Tratamento dos dados
                    while($row = mysqli_fetch_assoc($rs)){
                        echo "nome: " . $row["nome"], $row["sobrenome"],$row["email"],$row["telefone"];}

                //Encerramento da conexão
                mysqli_close($conexao); 
            ?>
            <tr>
                <td> <?=$dados["id"]?> </td>
                <td class="text-nowrap"> <?=$dados["nome"]?> </td>
                <td class="text-nowrap"> <?php echo $dados["sobrenome"];?> </td>
                <td class="text-nowrap"> <?=$dados["email"]?> </td>
                <td class="text-nowrap"> <?=$dados["telefone"]?> </td>

                <td class="text-center">
                    <a class="btn btn-outline-warning btn-sm" href="index.php?menuop=editarcontato&id=<?=$dados["id"]?>"><iclass="bi bi-pencil-square"></i></a>
                </td>

                <td class="text-center">
                    <a class="btn btn-outline-danger btn-sm" href="index.php?menuop=excluircontato&id=<?=$dados["id"]?>"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<ul class="pagination justify-content-center">

<?php 
//LIsta de Páginas//

//Quantidade de registros//
    $sqltotal = "SELECT id FROM contatos";
//Executando no bd//
    $qrtotal = mysqli_query($conexao,$sqltotal) or die(mysqli_error($conexao)); 
//Variável que guarda o num total de registros//
    $numtotal = mysqli_num_rows($qrtotal);
//Total de páginas - ceil arredonda para cima o num de páginas//
    $totalpagina = ceil($numtotal/$quantidade);

    echo "<li class='page-item'> <span class='page-link'> Total de páginas: " . $numtotal . "</span></li>";
    echo '<li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=1">Primeira Página</a>';


//Validação 1a pagina// 
    if($pagina>6){
        ?>
            <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina-1?>">
                << </a>
            </li>
        <?php 
    }

    for($i=1;$i<= $totalpagina;$i++){

        if($i>=($pagina-5) && $i <= ($pagina+5)){
            if($i==$pagina){
                 echo "<li class='page-item active'><span class='page-link'> $i </span></li>";
            }else{
                echo "<li class='page-item'><a class= 'page-link' href=\"?menuop=contatos&pagina=%i\">$i</a></li>";
    }
}
}
//Validação última página// 
    if($pagina<($totalpagina-5)){
        ?>
            <li class="page=item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina+1?>">
                << </li></a>
        <?php 
}
    echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina=$totalpagina\">Última Página</li></a>"; //última página dinâmica //
        ?>
</ul>

