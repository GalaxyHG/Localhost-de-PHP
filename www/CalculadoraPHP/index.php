<?php
    header('Content-Type: text/html; charset=utf-8');

    $n1 = 0;
    $n2 = 0;
    $result = "";

    if(isset($_POST['soma'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];

        $result = $n1 + $n2;
    }
    if(isset($_POST['subtracao'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];

        $result = $n1 - $n2;
    }

    if(isset($_POST['multiplicacao'])){
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];

        $result = $n1 * $n2;
    }

    if(isset($_POST['divisao'])){

        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];

        if ($n1 == 0 or $n2 == 0)
        {
            $result = "Contas com zero dão zero!";
        }
        else {
            $result = $n1 / $n2;
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora em PHP</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <form method="post">
        Primeiro número <br>
        <input type="number" name="n1"<?= $n1 ?> required > <br>
        Segundo número  <br>
        <input type="number" name="n2" <?= $n2 ?> required  > <br><br>

            <div class="container-buttons">
                <input type="submit" name = "soma" value = "+">
                <input type="submit" name = "subtracao" value = "-"><br>
                <input type="submit" name = "multiplicacao" value = "*">
                <input type="submit" name = "divisao" value = "/">
            </div>

        <p><b>Resultado: <?= $result ?> </b></p>
    </form>
    
    <style>
        body {
            text-align: center;
            font-size: 24px;
            background-color: aquamarine;
        }

        form p {
            color: red;
        }

        form {
            text-align: center;
            margin: 15%;
            border: solid 1px black;
        }

        .container-buttons {
            width: 20%;
            margin-left: 50%;
            transform: translate(-50%);
        }

        input[type=submit] {
            width: 40px;
            height: 40px;
            text-align: center;
            margin-top: 5px;
        }
    </style>
</body>
</html>