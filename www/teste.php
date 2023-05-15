<?php
$login = @$_REQUEST['login'];
$senha = @$_REQUEST['senha'];
$enviar = @$_REQUEST['enviar'];

$user = 'usuario';
$password = '123456';

if ($enviar) {

    if ($login == "")
    {
        echo "<script>alert('Por favor, preencha todos os campos!');</script>";
    }
    else 
    {
        if (($login == $usuario && $senha == $password)) 
        {
            session_start();
            $_SESSION['usuario'] = $login;
            $_SESSION['senha'] = $password;
           header("Location: seu-arquivo.php");
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
    <title>Teste</title>
</head>
<body>
    <form method="post">
    <input type="text" name="login"><br>
    <input type="password" name="senha"><br>
    <input type="submit" value="Entrar" name="enviar">
    </form>
</body>
</html>