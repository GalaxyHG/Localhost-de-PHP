<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    header('Content-Type: text/html; charset=utf-8');
        echo "<h1>Olá, mundo!</h1>";
		echo "<br><h2>Ham-burguer</h2>";

        function soma($a, $b) 
        {
            return $a + $b;
        }

        function subtracao($a, $b) 
        {
            return $a - $b;
        }

        function multiplicacao($a, $b) 
        {
            return $a * $b;
        }

        function divisao($a, $b) 
        {
            return $a / $b;
        }

            $numero1 = 10;
            $numero2 = 10;
            echo "<h2>",soma($numero1, $numero2), "</h2>", "<br>";
            echo "<h2>",subtracao($numero1, $numero2), "</h2>", "<br>";
            echo "<h2>",multiplicacao($numero1, $numero2), "</h2>", "<br>";
            echo "<h2>",divisao($numero1, $numero2), "</h2>", "<br>";
    ?>
    <style>
        h2 {
            color: green;
        }
    </style>  
</body>
</html>