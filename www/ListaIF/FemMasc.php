<?php
    $sexo = "";
    $resulsexo = "";

    if(isset($_POST['verifysexo']))
    {
        $sexo = (string)$_POST['sexo'];

        if ($sexo == "F" or $sexo == "f")
        {
            $resulsexo = "Sexo feminino.";
        }
        else if ($sexo == "M" or $sexo == "m")
        {
            $resulsexo = "Sexo masculino.";
        }
        else
        {
            $resulsexo = "Sexo inválido.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verifica</title>
</head>
<body>
    <form method="post">
        Sexo: <br>
        <input type="text" maxlength="1" name = "sexo"<?= $sexo ?> required> <br><br>
        <input type="submit" name = "verifysexo" value = "Verificar">

        <p>Resultado: <b><?= $resulsexo ?></b></p>
    </form>
</body>
</html>