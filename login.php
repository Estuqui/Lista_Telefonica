<?php 
    //Conexão com banco de dados
    include_once("db/config.php");

    //Verificar no banco de dados se o usuario existe
    $msg_error = "";
    
    if( isset($_POST["loginuser"]) && isset($_POST["senhauser"]) ){
        $loginuser =  htmlspecialchars($_POST["loginuser"]);
        $senhauser = htmlspecialchars($_POST["senhauser"]);
        
        $stmt = $conexao->query("SELECT id, nome, usuario FROM usuarios WHERE usuario = '$loginuser' AND senha='$senhauser' LIMIT 1");
        $result = $stmt->fetch_object();
    
        if( $result->id !== null ) {
            session_start();
            $_SESSION["usuario"] = $result->usuario;
            $_SESSION["nome"] = $result->nome;
            header('Location: index.php');
        }else{
            $msg_error = "<div class='alert alert-danger mt-3 text-center'> <i class='bi bi-exclamation-triangle-fill'></i> Usuário ou senha incorretos </div>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilologin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login</title>
</head>

<body class="bg-dark bg-gradient">

    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center )">
            <div class="col-10 col-sm-8 col-md-6 col-lg-4 p-4 bg-dark shadow-lg p-4 mb-3 rounded ">
                <div class="row justify-content-center">
                    <img src=" img/logotipo.png" alt="Lista Telefônica">
                </div>
                <h5 class="text-white text-center mb-2"><i class="bi bi-arrow-down-right"></i> Faça seu Login <i
                        class="bi bi-arrow-down-left"></i></h5>
                <form class=" needs-validation" method="post" novalidate>
                    <div class="form-group">
                        <label class="form-label text-white" for="loginuser">
                        </label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input class="form-control" type="text" name="loginuser" id="loginuser" required
                                placeholder="Digite seu Usuário">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label text-white" for="senhauser"></label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class=" bi bi-lock-fill"></i> </span>
                            <input class="form-control" type="password" name="senhauser" id="senhauser" required
                                placeholder="Digite sua Senha">
                        </div>

                        <?php
                            echo $msg_error;
                        ?>
                    </div>
                    <button class="btn btn-outline-light w-100"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>