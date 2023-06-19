<?php
    header('Content-Type: text/html; charset=utf-8');

    $soma = 0;
    $numero = 0;
    $parimpar = '';
    $fator = 0;
    
    
    // Funções
    function SomaArray($array)
    {
        return $array[0] + $array[1] + $array[2] + $array[3] + $array[4];
    }

    function ParImpar($num)
    {
        if($num % 2 == 0)
        {
            return 'True!';
        }
        else 
        {
            return 'False!';
        }
    }

    function filtraPar($Array) {  
        $retorno = [];
        for($i = 0; $i < count($Array); $i++)
        {
          if ($Array[$i] % 2  == 0) 
          {
            $retorno[] = $Array[$i];
          }
        }
    
        return $retorno;
    }
    
    function fatorial($fator)
    {
        return array_product(range($fator, 1));
    }

    function contaCaractere($materias)
    {
        $tamanho = sizeof($materias);
        for($i = 0; $i < $tamanho; $i++)
        {
            if (strlen($materias[$i]) > 5)
            {
                $retornoCaractere .= $materias[$i] . " . ";
            }
        }

        return $retornoCaractere;
    }

    function Maior($num){
           
        return max($num);
    }

    // Button Clicked
    if(isset($_POST['calcular']))
    {
        $array = array(1,2,3,4,5);
        $soma = SomaArray($array);
    }

    if(isset($_POST['parimpar']))
    {
        $numero = (int)$_POST['numero'];
        $parimpar = ParImpar($numero);
    }

    if(isset($_POST['par']))
    { 
        $tarray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,20,35,202];
        $retorno = filtraPar($tarray);
    }

    if(isset($_POST['fatorial']))
    {
        $fator= (int)$_POST['fator'];
        $arrayF = fatorial($fator);
    }

    if(isset($_POST['caractere']))
    {
        $materias = ['PHP','JAVA','DELPHI','JAVASCRIPT','VISUAL BASIC','C-SHARP','C++'];
        $stringCaractere = contaCaractere($materias);
    }

    if(isset($_POST['maior']))
    {
        $numerosint = array(10,55,2,120,30,456,255,111,20,78,311);

        $maior = Maior($numerosint);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Funções em PHP</title>
</head>
<body><br>
    <h3 class="text-danger">Questão 01</h3>
    <form action="#" method="post"><br>
        <input type="submit" name="calcular" value="Calcular"><br>
        <b class="fs-1"><?php echo $soma; ?></b>
    </form><br>
    <h3 class="text-danger">Questão 02</h3>
    <form action="#" method="post"><br>
        Digite um número: <input type="text" name="numero"><br>
        <input type="submit" value="Calcular" name="parimpar"><br>
        <b class="fs-5 text-danger"><?php echo $parimpar; ?></b>
    </form><br>
    <h3 class="text-danger">Questão 03</h3>
    <form action="#" method="post"><br>
        <input type="submit" value="Calcular" name="par"><br>
        <b class="fs-5 text-danger"><?php print_r($retorno); ?></b><br>
        Ele dá um erro, devido ao fato da array de retorno estar vazia.
    </form><br>
    <h3 class="text-danger">Questão 04</h3>
    <form action="#" method="post"><br>
        <input type="text" name="fator" id="fator">
        <input type="submit" value="Calcular" name="fatorial"><br>
        <b class="fs-5 text-danger"><?php print_r($arrayF); ?></b><br>
        Ele dá um erro, devido ao fato da array de retorno estar vazia.
    </form><br>
    <h3 class="text-danger">Questão 05</h3>
    <table border="1"><br>
        <tr>
            <td>Array: |</td>
            <td>PHP |</td>
            <td>JAVA |</td>
            <td>DELPHI |</td>
            <td>JAVASCRIPT |</td>
            <td>VISUAL BASIC |</td>
            <td>C-SHARP |</td>
            <td>C++</td>
        </tr>
    </table>
    <form action="#" method="post"><br>
        <input type="submit" value="Quais tem mais de 5 caracteres?" name="caractere"><br>
        <b class="fs-5 text-danger"><?php echo $stringCaractere; ?></b><br>
        Ele dá um erro, devido ao fato da array de retorno estar vazia.<br><br>
    </form>
    <h3 class="text-danger">Questão 06</h3>
    <table border="1"><br>
        <tr>
            <td>String:</td>
            <td>10 |</td>
            <td>55 |</td>
            <td>2 |</td>
            <td>120 |</td>
            <td>30 |</td>
            <td>456 |</td>
            <td>255 |</td>
            <td>111 |</td>
            <td>20 |</td>
            <td>78 |</td>
            <td>311 </td>
        </tr>
    </table>
    <form action="#" method="post"><br>
        <input type="submit" value="Qual o maior número?" name="maior"><br>
        <b class="fs-5 text-danger">O maior número é: <?php echo $maior ?></b><br>
        Ele dá um erro, devido ao fato da array de retorno estar vazia.<br><br>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>