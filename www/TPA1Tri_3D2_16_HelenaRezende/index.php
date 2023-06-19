<?php
header('Content-Type: text/html; charset=utf-8');
$user = "";
$passwd = "";
$mensagem = "";
$salario = 0.0;
$salarioAtual = 0.0;
$mensagemSalario = "";
$num = 0;
$tabuadatop = array($num * 1, $num * 2, $num * 3, $num * 4, $num * 5, $num * 6, $num * 7, $num * 8, $num * 9, $num * 10);
$nota1 = 0.0;
$nota2 = 0.0;
$nota3 = 0.0;
$media = "";
$resulmedia = "";

if (isset($_POST['submit'])) {
    $user = (string) $_POST['user'];
    $passwd = (string) $_POST['passwd'];

    if ($user == "" or $passwd == "") {
        $mensagem = "Há campos não preenchidos! Preencha todos os campos!";
    } else if ($user == "credinilson" and $passwd == "aprovado123") {
        $mensagem = "Logado com sucesso!";
    } else {
        $mensagem = "Nome de usuário ou senha incorretos! Tente novamente!";
    }
}

if (isset($_POST['salarioEntrar'])) {
    $salario = (float) $_POST['salario'];

    if ($salario > 0 and $salario <= 2000.00) {
        $salarioAtual = $salario + ($salario * 20 / 100);
        $mensagemSalario = "Salário Anterior: R$" . $salario . ". Novo salário: R$" . $salarioAtual;
    } else if ($salario > 2000.00 and $salario <= 4000.00) {
        $salarioAtual = $salario + ($salario * 15 / 100);
        $mensagemSalario = "Salário Anterior: R$" . $salario . ". Novo salário: R$" . $salarioAtual;
    } else if ($salario > 4000.00 and $salario <= 5000.00) {
        $salarioAtual = $salario + ($salario * 10 / 100);
        $mensagemSalario = "Salário Anterior: R$" . $salario . ". Novo salário: R$" . $salarioAtual;
    } else if ($salario > 5000.00) {
        $salarioAtual = $salario + ($salario * 5 / 100);
        $mensagemSalario = "Salário Anterior: R$" . $salario . ". Novo salário: R$" . $salarioAtual;
    }
}

if (isset($_POST['tabuada'])) {
    $num = (int) $_POST['num'];
    if ($num == "") {
        $num = 0;
        $tabuadatop = array($num * 1, $num * 2, $num * 3, $num * 4, $num * 5, $num * 6, $num * 7, $num * 8, $num * 9, $num * 10);
    } else {
        $tabuadatop = array($num * 1, $num * 2, $num * 3, $num * 4, $num * 5, $num * 6, $num * 7, $num * 8, $num * 9, $num * 10);
    }
}

if (isset($_POST['media'])) {
    $nota1 = (float) $_POST['nota1'];
    $nota2 = (float) $_POST['nota2'];
    $nota3 = (float) $_POST['nota3'];

    $media = $nota1 + $nota2 + $nota3;

    switch ($media) {
        case $media > 6:
            $resulmedia = "Aprovado!";
            break;
        case $media > 4 and $media < 6:
            $resulmedia = "Recuperação!";
            break;
        case $media < 4 and $media > 0:
            $resulmedia = "Reprovado!";
        break;
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

<body><br>
    <span class="text-danger fs-4"><b>Questão 01:</b></span>
    <form method="post">
        <div>
            <label><b>Usuário:</b></label><br>
            <input type="text" name="user" <?= $user ?>>
        </div>
        <div>
            <label><b>Senha:</b></label><br>
            <input type="password" name="passwd" <?= $passwd ?>>
        </div><br>
        <input type="submit" value="Entrar" name="submit">
    </form><br>
    <span><?php echo $mensagem ?></span><br><br>
    <span class="text-danger fs-4"><b>Questão 02:</b></span><br>
    <div>
        <table border="1" cellspacing="0">
            <tr>
                <td><b>Salário</b></td>
                <td><b>Aumento</b></td>
            </tr>
            <tr>
                <td>Até R$2.800,00 |</td>
                <td>20%</td>
            </tr>
            <tr>
                <td>R$2.800,01 até R$4.000,00 |</td>
                <td>15%</td>
            </tr>
            <tr>
                <td>R$4.800,01 até R$5.000,00 |</td>
                <td>10%</td>
            </tr>
            <tr>
                <td>Maior que R$5.000,00 |</td>
                <td>5%</td>
            </tr>
        </table><br>
    </div>
    <form method="post">
        <div>
            <label><b>Salário:</b></label><br>
            <input type="text" name="salario" <?= $salario ?>>
        </div><br>
        <input type="submit" value="Calcular" name="salarioEntrar"><br>
        <span class="text-danger"><?php echo $mensagemSalario ?></span><br><br>
    </form><br>
    <span class="text-danger fs-4"><b>Questão 03:</b></span><br>
    <form method="post">
        <div>
            <label><b>Número Inteiro:</b></label><br>
            <input type="text" name="num" <?= $num ?>>
        </div><br>
        <input type="submit" value="Calcular" name="tabuada"><br>
    </form><br>
    <table border="1" cellspacing="0">
        <tr>
            <td colspan="2"><b>Tabuada</b></td>
        </tr>
        <tr>
            <td>Conta:</td>
            <td>Resultado</td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 1 =</td>
            <td><?php echo $tabuadatop[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 2 =</td>
            <td><?php echo $tabuadatop[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 3 =</td>
            <td><?php echo $tabuadatop[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 4 =</td>
            <td><?php echo $tabuadatop[3]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 5 =</td>
            <td><?php echo $tabuadatop[4]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 6 =</td>
            <td><?php echo $tabuadatop[5]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 7 =</td>
            <td><?php echo $tabuadatop[6]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 8 =</td>
            <td><?php echo $tabuadatop[7]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 9 =</td>
            <td><?php echo $tabuadatop[8]; ?></td>
        </tr>
        <tr>
            <td><?php echo $num; ?> x 10 =</td>
            <td><?php echo $tabuadatop[9]; ?></td>
        </tr>
    </table><br>
    <span class="text-danger fs-4"><b>Questão 04:</b></span><br>
    <form method="post">
        Matemática: <br>
        <input type="number" name="nota1" <?= $nota1 ?> required> <br>
        Física: <br>
        <input type="number" name="nota2" <?= $nota2 ?> required> <br>
        Química: <br>
        <input type="number" name="nota3" <?= $nota3 ?> required> <br><br>
        <input type="submit" name="media" value="Média">

        <p>Resultado: <?php echo $resulmedia;?><b></b></p>
    </form><br>
    <span class="text-danger fs-4"><b>Questão 05:</b></span><br>
    <h3>Não deu tempo... <br>
Triste, Tio Sameck... =(</h3>
</body>

</html>