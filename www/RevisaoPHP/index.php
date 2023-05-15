<?php
    $fruits = array("Apple", "Banana", "Orange");

    $colors = array("red", "green", "blue", "yellow"); 

    foreach ($colors as $value) {
    if ($value == "blue")
    {
    echo "Sheesh";
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
    <h2>Arrays:</h2> <br>
    <!--count() = Conta o tamanho da ARRAY.-->
    <span class="format">Count() = Conta o tamanho da array. <br>
    Sintaxe: echo count($array);</span><br>
    <?php echo count($fruits); ?><br><br>
    <!--$array[0] = mostra o conteúdo da casa 0 na ARRAY.-->
    <span class="format">$array[0] = mostra o contéudo da casa 0 da array.
    Sintaxe: echo $array[0];</span><br>
    <span class="format important">Pode ser usado qualquer valor no lugar de 0, desde que o esteja dentro do tamanho da array. Exemplo: <br>
    Se uma array for te tamanho 26, é possivel que eu escolha do número 0 ao 26.</span><br>
    <?php echo $fruits[0]; ?><br>
    <?php echo $fruits[1]; ?><br>
    <?php echo $fruits[2]; ?><br><br>
    <h2>Foreach:</h2> <br>
</body>

<style>
    .format {
        font-size: 20px;
    }
    
    .important {
        color: red;
        font-weight: bold;
    }
</style>
</html>