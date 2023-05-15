<?php
    $nota1 = 0.0;
    $nota2 = 0.0;
    $media = "";
    
    if(isset($_POST['media']))
    {
        $nota1 = (double)$_POST['nota1'];
        $nota2 = (double)$_POST['nota2'];

        if (($nota1 + $nota2) / 2 == 10)
        {
            $media = "Aprovado com distinção";
        }
        else if (($nota1 + $nota2) / 2 >= 7)
        {
            $media = "Aprovado";
        }
        else if (($nota1 + $nota2) / 2 < 7)
        {
            $media = "Reprovado";
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
        Primeira avaliação: <br>
        <input type="number" name = "nota1"<?= $nota1 ?> required > <br><br>
        Segunda avaliação: <br>
        <input type="number" name = "nota2"<?= $nota2 ?> required > <br><br>

        <input type="submit" name = "media" value = "Média">

        <p>Resultado: <b><?= $media ?></b></p>
    </form>
</body>
</html>