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
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login</title>
</head>

<body class="bg-black">
    <div class="box">
        <div class="img-box">
            <img src="img/cadastroLT.png">
        </div>
        <div class="form-box text-black">
            <h2>Faça seu Login</h2>
            <p> Não tem uma conta? <a href="#" class="alert-link text-white text-decoration-none">
                    Cadastre-se </a>
            </p>
            <form class=" needs-validation" method="post" novalidate>
                <div class="form-group">
                    <label class="form-label text-black mt-4" for="loginuser">
                        Usuário </label>
                    <div class="input-group">
                        <input class="form-control" type="text" name="loginuser" id="loginuser" required
                            placeholder="Digite seu Usuário">
                    </div>
                </div>
                <div class="form-group mt-4 mb-4">
                    <label class="form-label text-black" for="senhauser">Senha</label>
                    <div class="input-group">
                        <input class="form-control" type="password" name="senhauser" id="senhauser" required
                            placeholder="Digite sua Senha">
                    </div>
                    <?php
                            echo $msg_error;
                        ?>
                    <div class="input-group">
                        <button>Entrar</button>
                    </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>