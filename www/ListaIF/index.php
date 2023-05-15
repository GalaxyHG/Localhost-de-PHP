<?php
    header('Content-Type: text/html; charset=utf-8');
    $n1 = 0;
    $n2 = 0;
    $maior = "";
    
    if(isset($_POST['maior']))
    {
        $n1 = (int)$_POST['n1'];
        $n2 = (int)$_POST['n2'];

        if ($n1 > $n2)
        {
            $maior = $n1;
        }
        else if ($n2 > $n1)
        {
            $maior = $n2;
        }
        else if ($n2 == $n1)
        {
            $maior = "Os dois valores são iguais";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>O maior número</title>
</head>
<body>
    <form method="post">
        Primeiro número: <br>
        <input type="number" name = "n1"<?= $n1 ?> required > <br>
        Segundo número:  <br>
        <input type="number" name = "n2" <?= $n2 ?> required> <br><br>
        <input type="submit" name = "maior" value = "MAIOR">

        <p>Resultado: <b><?= $maior ?></b></p>
    </form>
</body>
</html>