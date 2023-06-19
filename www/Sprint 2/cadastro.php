<?php

if(isset($_POST['cadastrar']))
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'sprint2';

        $conn = mysqli_connect($host,$user,$pass,$dbname);

        $sql = "INSERT INTO usuario values('default','$nome','$email','$senha')";
        mysqli_query($conn,$sql);

        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html';</script>";
    }

?>