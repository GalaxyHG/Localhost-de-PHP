<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header></header>
    <div class="border border-1">
        <div class="position-absolute top-50 start-50 translate-middle">
            <form method="post" action="login.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><b>Nome de Usuário:</b></label>
                    <input type="text" class="form-control border border-black" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><b>Senha:</b></label>
                    <input type="password" class="form-control border border-black" id="exampleInputPassword1" name="senha">
                </div>
                <input type="submit" class="btn btn-success" value="Entrar" name="entrar">
            </form><br>
            <h2>Caso seja o professor:</h2><br>
            <span class="text-danger"><b>Olá, professor! Digite "root" na caixa de login<br> e aperte ENTER para logar no localhost!</b></span>
        </div>
    </div>
        <a href="cadastro.html">Cadastre-se</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>

<?php

header('Content-Type: text/html; charset=utf-8');

?>