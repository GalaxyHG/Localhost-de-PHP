<?php
header('Content-Type: text/html; charset=utf-8');

$user = @$_REQUEST['user'];
$pass = @$_REQUEST['pass'];
$submit = @$_REQUEST['submit'];

$user1 = 'helena';
$pass1 = '123456';

$user2 = 'root';
$pass2 = '';

if ($submit) {

    if ($user == "")
    {
        echo "<script>alert('Por favor, preencha todos os campos!');</script>";
    }
    else 
    {
        if (($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)) 
        {
            session_start();
            $_SESSION['usuario'] = $user;
            $_SESSION['senha'] = $pass;
            header("Location: projects.php");
        }
        else 
        {
            echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
        }
    }
}
?>

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
            <form method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><b>Nome de Usuário:</b></label>
                    <input type="text" class="form-control border border-black" id="exampleInputEmail1" aria-describedby="emailHelp" name="user">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><b>Senha:</b></label>
                    <input type="password" class="form-control border border-black" id="exampleInputPassword1" name="pass">
                </div>
                <input type="submit" class="btn btn-success" value="Entrar" name="submit">
            </form><br>
            <h2>Caso seja o professor:</h2><br>
            <span class="text-danger"><b>Olá, professor! Digite "root" na caixa de login<br> e aperte ENTER para logar no localhost!</b></span>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>