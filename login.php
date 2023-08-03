<?php 
ini_set('display_errors', 'on');
//Conexão com banco de dados
    include_once("db/config.php");

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $loginuser =$_POST["loginuser"];
        $senhauser =$_POST["senhauser"];

        $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE loginuser = :loginuser");
        $stmt->execute(["loginuser" => $loginuser]);
        $loginuser = $stmt->fetch();

        if($loginuser && password_verify($senhauser, $loginuser['senhauser'])){
            
        session_start();
        $_SESSION["id"] = $loginuser["id"];
        header('Location: index.php');
        exit;
        
        }else{
            $error = "Credenciais Inválidas";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="#">
    <title>Login</title>
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-10 col-sm-8 col-md-6 col-lg-4 p-4 shadow rounded"
                style="background-color: rgba(255,255,255,0.2)">
                <div class="row justify-content-center mb-3">
                    <img class="text-center" src="#" alt="Sua Lista Telefônica Online">
                </div>
                <form class="needs-validation" action="login.php" method="post" novalidate>
                    <div class="form-group mb-3">
                        <label class="form-label" for="usuario">Usuário</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></i></span>
                            <input class="form-control" type="text" name="loginuser" id="loginuser"
                                placeholder="Digite seu Usuário" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="senha">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-key-fill"></i></span>
                                <input class="form-control" type="password" name="senhauser" id="senhauser"
                                    placeholder="Digite sua Senha" required>
                            </div>

                            <?php
                            
                                if(isset($error)){
                                    echo '<p>' . $error . '</p>';
                                }
                            ?>

                        </div>
                        <button class="btn btn-success w-100"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center text-sm mt-1 text-decoration-underline" href="#">É novo por
                            aqui? Cadastre-se</a>
                        <a class="dropdown-item text-center text-sm mt-1 text-decoration-underline" href="#">Esqueceu a
                            senha?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>