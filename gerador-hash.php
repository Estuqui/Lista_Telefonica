<?php 
    $senha = "123456";
    $senhaCriptografada = hash('sha256', $senha);

    var_dump($senha);
    var_dump($senhaCriptografada);
?>