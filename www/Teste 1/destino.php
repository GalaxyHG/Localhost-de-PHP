<?php
    header('Content-Type: text/html; charset=utf-8');

    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'projeto_pit';

    if ($cpf == '' or $nome == '' or $email == '' or $telefone == '' or $endereco == '' or $senha == '')
    {
        echo "<script>alert('Você não preencheu todos os campos!');</script>";
        echo "<a href='cuser.html>Voltar</a>";
    }
    else
    {
    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "INSERT INTO usuario values('$cpf','$nome','$email','$telefone','$endereco','$senha')";
    mysqli_query($conn,$sql);

    header("Location: cuser.html");
    }
?>