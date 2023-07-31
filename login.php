<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Login</title>
</head>

<body class="bg-secondary">


<form action="#" method="POST">

<div class="d-grid gap-2 col-6 mx-auto">
      <label for="email">E-mail</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="email" placeholder="Digite seu E-mail">
      </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
      <label for="senha">Senha</label>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
        </div>
        <input type="password" class="form-control" id="senha" placeholder="Digite sua senha">
      </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto">
<button type="submit" class="btn btn-dark mb-3">Entrar</button>
</div>

</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>