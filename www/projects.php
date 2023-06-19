<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

$date = date('d/m/y h:i');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Selecione seu projeto</title>
</head>

<body>
    <header class="text-center bg-success text-white shadow-lg p-3 mb-5">
        <div class="d-flex flex-row justify-content-between mb-3 align-items-center">
            <div class="d-flex flex-row align-items-center"><img src="/imagens/account-circle.png"><div class="fs-4"><?php echo '&nbspOlá, '.$_SESSION['cookie'].'!';?></div></div>&nbsp
            <div class="fs-4"><b>Horário iniciado no localhost:</b> <?php echo $date?></div>
        </div>
    </header><br>
    <main>
        <div class="container-fluid d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Calculadora em PHP</h5>
                    <p class="card-text">Calculadora simples em PHP.</p>
                    <a href="view.php?dir=CalculadoraPHP&file=index" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Primeiro Projeto</h5>
                    <p class="card-text">Primeiro projeto de PHP.</p>
                    <a href="view.php?dir=PrimeiroProjeto&file=index" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">00-NovoProjeto</h5>
                    <p class="card-text">Primeiro projeto da aula de DevWeb.</p>
                    <a href="view.php?dir=00-NovoProjeto&file=index" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Form Login</h5>
                    <p class="card-text">Login para o localhost.</p>
                    <a href="view.php?dir=FormLogin&file=index" class="btn btn-success">Abrir</a>
                </div>
            </div>
        </div><br><br><br>
        <div class="container-fluid d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maior entre dois</h5>
                    <p class="card-text">Exercicio de maior número da Lista IF.</p>
                    <a href="view.php?dir=ListaIF&file=index" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Positivo e Negativo</h5>
                    <p class="card-text">Exercicio de positivo ou negativo da Lista IF.</p>
                    <a href="view.php?dir=ListaIF&file=positivo" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Feminino e Masculino</h5>
                    <p class="card-text">Exercício de gênero da Lista IF.</p>
                    <a href="view.php?dir=ListaIF&file=FemMasc" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Avaliação </h5>
                    <p class="card-text">Exercício de provas da Lista IF.</p>
                    <a href="view.php?dir=ListaIF&file=prova" class="btn btn-success">Abrir</a>
                </div>
            </div>
        </div><br><br><br>
        <div class="container-fluid d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maior entre três</h5>
                    <p class="card-text">Exercicio de maior número da Lista IF.</p>
                    <a href="view.php?dir=ListaIF&file=maior" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Melhor valor</h5>
                    <p class="card-text">Exercicio de melhor valor da Lista IF.</p>
                    <a href="view.php?dir=ListaIF&file=valor" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Revisão de PHP</h5>
                    <p class="card-text">Revisão para a prova de PHP.</p>
                    <a href="view.php?dir=RevisaoPHP&file=index" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Prova TPA</h5>
                    <p class="card-text">Prova Prática de TPA do dia 24/04/2023.</p>
                    <a href="view.php?dir=TPA1Tri_3D2_16_HelenaRezende&file=index" class="btn btn-success">Abrir</a>
                </div>
            </div>
        </div><br><br><br>
        <div class="container-fluid d-flex justify-content-around">
        <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Funções em PHP</h5>
                    <p class="card-text">Atividade de funções em PHP.</p>
                    <a href="view.php?dir=Funcoes&file=funcoes01" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Herança</h5>
                    <p class="card-text">Atividade de Herança em TPA.</p>
                    <a href="view.php?dir=aula003_TPA&file=principal" class="btn btn-success">Abrir</a>
                </div>
            </div>
        </div><br><br><br>
        <div class="container-fluid d-flex justify-content-around text-danger fs-2">
            PROJETO DE INOVAÇÃO TECNOLÓGICA
        </div><br><br><br>
        <div class="container-fluid d-flex justify-content-around">
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">PIT</h5>
                    <p class="card-text">Projeto PIT.</p>
                    <a href="Sprint 1/index.html" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Testes PIT</h5>
                    <p class="card-text">Testes do projeto pit.</p>
                    <a href="view.php?dir=Funcoes&file=funcoes01" class="btn btn-success">Abrir</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="/imagens/pato.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sprint 2</h5>
                    <p class="card-text">Testes da sprint 2 do projeto pit.</p>
                    <a href="Sprint 2/index.html" class="btn btn-success">Abrir</a>
                </div>
            </div>
        </div>
    </main><br>
    <footer class="text-center">
        <a href="index.php" class="btn btn-danger">Log Out</a><br>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>