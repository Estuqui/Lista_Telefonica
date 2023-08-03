<?php 
//ini_set('display_errors', 'on');

//Conexão com banco de dados
    include_once("db/config.php");


//Verificar no banco de dados se o usuario existe
$msg_error = "";

if( isset($_POST["loginuser"]) &&  isset($_POST["senhauser"])  ){
    $loginuser =  mysqli_real_escape_string($conexao,$_POST["loginuser"]);
    $senhauser = hash('sha256',$_POST["senhauser"]);
    
    $sql = "SELECT * FROM usuarios WHERE loginuser = '{$loginuser}' and senhauser = '{$senhauser}'";
    $rs = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($rs);
    $linha = mysqli_num_rows($rs);

    if( $linha != 0 ) {
        session_start();
        $_SESSION["loginuser"] = $loginuser;
        $_SESSION["senhauser"] = $senhauser;
        $_SESSION["nomeuser"] = $dados["nomeuser"];

        header('Location: index.php');
        

    }else{
        $msg_error = "<div class='alert alert-danger mt-3 text-center'>
                        <p>Usuário ou senha incorretos</p>
                        </div>
        ";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Login</title>
</head>

<body class="bg-secondary">

    <div class="container">
        <div class="row vh-100 align-items-center justify-content-center )">
            <div class="col-10 col-sm-8 col-md-6 col-lg-4 p-4 bg-white shadow-lg p-3 mb-5 rounded ">
                <div class="row justify-content-center mb-4">
                    <img src="#" alt="Lista Telefônica">
                </div>
                <form class="needs-validation" action="login.php" method="post" novalidate>
                    <div class="form-group mb-4">
                        <label class="form-label" for="loginuser">Login</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            <input class="form-control" type="text" name="loginuser" id="loginuser" required>
                            <div class="invalid-feedback">
                                Informe seu usuário
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label" for="senhauser">Senha</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="bi bi-key-fill"></i>
                            </span>
                            <input class="form-control" type="password" name="senhauser" id="senhauser" required>
                            <div class="invalid-feedback">
                                Informe sua senha.
                            </div>
                        </div>
                        <?php
                            echo $msg_error;
                        ?>
                    </div>
                    <button class="btn btn-success w-100"><i class="bi bi-box-arrow-in-right"></i> Entrar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="./js/validation.js">
    </script>
</body>

</html>