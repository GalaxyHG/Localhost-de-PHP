<?php
    $valor1 = 0.0;
    $valor2 = 0.0;
    $valor3 = 0.0;
    $menorvalor = "";
    $menor = 0.0;

    if(isset($_POST['melhorp']))
    {
        $valor1 = (double)$_POST['valor1'];
        $valor2 = (double)$_POST['valor2'];
        $valor3 = (double)$_POST['valor3'];

        if ($valor1 < $valor2)
        {
            $menor = $valor1;
        }
        else
        {
            $menor = $valor2;
        }

        if ($valor3 < $menor)
        {
            $menor = $valor3;
        }
        if ($valor2 == $valor1 and $valor2 == $valor3)
        {
            $menorvalor = "Os três valores são iguais, sendo assim, leve qualquer um!";
        }
        $menorvalor = "Compre o de valor: ".strval($menor); 

        
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
        Primeiro preço: <br>
        <input type="text" name = "valor1"<?= $valor1 ?> required > <br>
        Segundo preço:  <br>
        <input type="text" name = "valor2" <?= $valor2 ?> required> <br>
        Terceiro preço: <br>
        <input type="text" name = "valor3"<?= $valor3 ?> required > <br><br>
        <input type="submit" name = "melhorp" value = "Melhor Preço">

        <p>Resultado: <b><?= $menorvalor ?></b></p>
    </form>
</body>
</html>