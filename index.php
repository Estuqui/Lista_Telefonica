<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <title>Lista Telefônica</title>

    </head>
    <body>
        <header class="bg-dark">
            <div class="container-fluid"> <!-- classe container mede mais ou menos 80% da página total --> 
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
                    <a class="navbar-brand" href="#"><img src="img/logotipo.png" att="Lista Telefônica Online" width="120"></a>
                
                <div class= "collapse navbar-collapse" id="conteudonavbarsuportado">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menuop=home">Home <i class="bi bi-house-door-fill"></i></li></a>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menuop=contatos">Contatos <i class="bi bi-person-lines-fill"></i></li></a>
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?menuop=cadcontato">Novo Contato <i class="bi bi-person-fill-add"></i></a>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Sair <i class="bi bi-box-arrow-left"></i></a>
                    </ul>
                </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container">
                <?php
                
                    include_once("db/config.php");
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


        <!-- Footer para o rodapé -->
        <footer class="container-fluid fixed-bottom bg-dark">
            <div class="text-center">Lista Telefônica V1.0</div>
        </footer>


        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    </body>
</html>