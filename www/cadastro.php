<?php
    if(isset($_POST['cadastrar']))
    {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'localhostphp';

        $conn = mysqli_connect($host,$user,$pass,$dbname);

        $sql = "INSERT INTO usuario values('default','$login','$senha')";
        mysqli_query($conn,$sql);

        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='index.php';</script>";
    }
?>