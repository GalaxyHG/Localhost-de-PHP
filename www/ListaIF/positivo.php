<?php
    $pn = "";
    $num = 0;

    if(isset($_POST['pn']))
    {
        $num = (int)$_POST['num'];

        if ($num > 0)
        {
            $pn = "Positivo";
        }
        else if ($num < 0)
        {
            $pn = "Negativo";
        }
        else if ($num == 0)
        {
            $pn = "Zero";
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
        Número: <br>
        <input type="number" name = "num"<?= $num ?> required > <br><br>

        <input type="submit" name = "pn" value = "POSITIVO OU NEGATIVO">

        <p>Resultado: <b><?= $pn ?></b></p>
    </form>
</body>
</html>