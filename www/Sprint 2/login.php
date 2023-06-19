<?php
session_start();
$entrar = $_POST['entrar'];

if (isset($entrar)) {

    $login = $_POST['nome'];

    $senha = $_POST['senha'];

    $connect = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($connect,'sprint2');

    $verifica = mysqli_query($connect, "SELECT * FROM usuario WHERE nome = '$login' AND senha = '$senha'") or die("Erro ao selecionar");
    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
    } else {
        //Tentar dar um SELECT para que seja selecionado o nome do usuário e exibir na página logada pelo usuário.
        setcookie("nome", $login);
        header("Location:logado.php");

        $lcookie = $login;

        $_SESSION['cookie'] = $lcookie;
    }
}
