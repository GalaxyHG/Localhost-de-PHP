<?php

include_once "veiculo.php";
include_once "carro.php";
include_once "moto.php";
include_once "onibus.php";
include_once "caminhao.php";

$car = new Carro();
$mot = new Moto();
$oni = new Onibus();
$cam = new Caminhao();

$car ->setId(1);
$car ->setMarca("Chevrolet");
$car ->setModelo("Chevette");
$car ->setCor("Branco");
$car ->setAno("1980");
$car ->setValor("R$50.000,00");

$mot ->setId(2);
$mot ->setMarca("Lambretta");
$mot ->setModelo("LI - Série 2");
$mot ->setCor("Branco");
$mot ->setAno("1960");
$mot ->setValor("R$25.000,00");

$oni ->setId(3);
$oni ->setMarca("Mercedes Benz");
$oni ->setModelo("eO500U");
$oni ->setCor("Preto");
$oni ->setAno("2021");
$oni ->setValor("R$2.000.000,00");

$cam ->setId(4);
$cam ->setMarca("Volkswagem");
$cam ->setModelo("Meteor");
$cam ->setCor("Vermelho");
$cam ->setAno("2021");
$cam ->setValor("R$672.556,00");
?>


<!DOCTYPE HTML>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Aula PHP - Orientado a Objetos</title>
</head>

<body>
  <main>
    <div class="container-md">
      <div class="row ">
        <div class="col">
          <h5>Card BootStrap</h5>
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Aula3_PHPOO</h5>
              <ol class="card-text">
                <li> Foi criada a classe Principal.php
                <li> Nesta classe instanciamos os objetos de todas as classes que criamos : <strong> Veiculo,carro,moto,onibus,caminhao</strong>
                <li> Em seguida inserimos os dados com o metodo de acesso <strong>set</strong>
                <li> Em seguida utilizamos uma tabela<strong>(BootStrap)</strong> para inserir os dados nas linhas com o metodo <strong>get</strong>
                <li> Para cada linha da tabela foi inserido os dados de um objeto diferente.
              </ol>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Id_Veiculo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Valor</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><?php echo $car->getId() ?></td>
                    <td><?php echo $car->getMarca(); ?></td>
                    <td><?php echo $car->getModelo(); ?></td>
                    <td><?php echo $car->getCor(); ?></td>
                    <td><?php echo $car->getAno(); ?></td>
                    <td><?php echo $car->getValor(); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><?php echo $mot->getId() ?></td>
                    <td><?php echo $mot->getMarca(); ?></td>
                    <td><?php echo $mot->getModelo(); ?></td>
                    <td><?php echo $mot->getCor(); ?></td>
                    <td><?php echo $mot->getAno(); ?></td>
                    <td><?php echo $mot->getValor(); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><?php echo $oni->getId() ?></td>
                    <td><?php echo $oni->getMarca(); ?></td>
                    <td><?php echo $oni->getModelo(); ?></td>
                    <td><?php echo $oni->getCor(); ?></td>
                    <td><?php echo $oni->getAno(); ?></td>
                    <td><?php echo $oni->getValor(); ?></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                      <td><?php echo $cam->getId() ?></td>
                      <td><?php echo $cam->getMarca(); ?></td>
                      <td><?php echo $cam->getModelo(); ?></td>
                      <td><?php echo $cam->getCor(); ?></td>
                      <td><?php echo $cam->getAno(); ?></td>
                      <td><?php echo $cam->getValor(); ?></td>
                  </tr>
                </tbody>
              </table><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main><br>
</body>

</html>