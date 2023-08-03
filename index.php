<?php
    include("./db/conexao.php");
    session_start();

    if(isset($_SESSION["loginuser"]) and isset($_SESSION["senhauser"]) ){
        $loginuser = $_SESSION["loginuser"];
        $senhauser = $_SESSION["senhauser"];
        $nomeuser = $_SESSION["nomeuser"];

        $sql = "SELECT * FROM usuarios WHERE loginuser = '{$loginuser}' and senhauser = '{$senhauser}'";
        $rs = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($rs);
        $linha = mysqli_num_rows($rs);

        if( $linha == 0 ) {
            session_unset();
            session_destroy();
            header('Location: login.php');
            exit();
        }
    }else{
        header('Location: login.php');
        exit(); 
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <title>Lista Telefônica</title>

</head>

<body>
    <header class="bg-dark">
        <div class="container-fluid">
            <!-- classe container mede mais ou menos 80% da página total -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"><img src="img/logotipo.png" att="Lista Telefônica Online"
                        width="120"></a>

                <div class="collapse navbar-collapse" id="conteudonavbarsuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menuop=home">Home <i class="bi bi-house-door-fill"></i>
                        </li></a>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menuop=contatos">Contatos <i
                                    class="bi bi-person-lines-fill"></i>
                        </li></a>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menuop=cadcontato">Novo Contato <i
                                    class="bi bi-person-fill-add"></i></a>

                        <li class="nav-item active">
                            <a class="nav-link" href="logout.php">Sair <i class="bi bi-box-arrow-right"></i></a>
                    </ul>
                </div>
        </div>
        </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <?php
                   // include_once("db/config.php");

                    //valida com método GET/ ? - ternário, if em uma linha só
                    $menuop=(isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
                    //aqui as abas home e contatos não abrem outra guia em razão do Include adc na index
                    switch($menuop){
                        case "home";
                            include("paginas/home/home.php");
                            break;

                        case "contatos";
                            include("paginas/contatos/contatos.php");
                            break;

                        case "cadcontato";
                            include("paginas/contatos/cadcontato.php");
                            break;

                        case "inserircontato";
                            include("paginas/contatos/inserircontato.php");
                            break;

                        case "editarcontato";
                            include("paginas/contatos/editarcontato.php");
                            break;

                        case "excluircontato";
                            include("paginas/contatos/excluircontato.php");
                            break;

                        case "atualizarcontato";
                            include("paginas/contatos/atualizarcontato.php");
                            break;


                        default:
                            include("paginas/home/home.php");
                            break;
                    }
                ?>
        </div>
    </main>
    <footer class="container-fluid bg-dark text-light">
        <div class="text-center">SIS Agendador v 1.0</div>
    </footer>
    <script src="./js/jquery.js"></script>
    <script src="./js/jquery.form.js"></script>
    <script src="./js/upload.js"></script>
    <script src="./js/javascript-agendador.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
</body>

</html>