<?php
    $maiornum = "";
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;

    if(isset($_POST['maiornum']))
    {
        $num1 = (int)$_POST['num1'];
        $num2 = (int)$_POST['num2'];
        $num3 = (int)$_POST['num3'];

        if ($num1 > $maiornum)
        {
            $maiornum = strval($num1); 
        }
        if ($num2 > $maiornum)
        {
            $maiornum = strval($num2);
        }
        if ($num3 > $maiornum)
        {
            $maiornum = strval($num3);
        }
        if ($num2 == $num1 and $num2 == $num3)
        {
            $maiornum = "Os três valores são iguais";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Primeiro número: <br>
        <input type="number" name = "num1"<?= $num1 ?> required > <br>
        Segundo número:  <br>
        <input type="number" name = "num2" <?= $num2 ?> required> <br><br>
        Terceiro número: <br>
        <input type="number" name = "num3"<?= $num3 ?> required > <br>
        <input type="submit" name = "maiornum" value = "MAIOR">

        <p>Resultado: <b><?= $maiornum ?></b></p>
    </form>
</body>
</html>