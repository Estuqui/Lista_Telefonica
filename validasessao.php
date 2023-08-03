<?php
    session_start();
    if (isset($_SESSION['loginuser']) && isset($_SESSION['senhauser'])) {

        $nomeuser = $_SESSION['nomeuser'];
        $loginuser = $_SESSION['loginuser'];
        $senhauser = $_SESSION['senhauser'];
        $sql = "SELECT * FROM usuarios WHERE loginuser = '{$loginuser}' and senhauser = '{$senhauser}'";

        $rs = mysqli_query($conexao, $sql);
        $dados = mysqli_fetch_assoc($rs);
        $linhas = mysqli_num_rows($rs);

        if ($linhas == 0) // Confere se a consulta retornou algum registro
        {
            session_unset();
            session_destroy();
            header("location: login.php");
            exit;
        }
    } else {
        header("location: login.php");
        exit;
    }

?>