<?php
//print "<pre>";
//var_dump($this);
//print "</pre>";
//var_dump($_POST);
$model = $this->response->classificacao;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Treatment of Manchester</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/justified-nav.css" rel="stylesheet">
    <link href="css/tom.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="js/classificacao.js"></script>
  </head>
  <body>
    <div class="container">

      <!-- Início Menu -->
      <div class="masthead">
        <ul class="nav nav-justified">
          <li id="inicioMenu"><a href="#">Início</a></li>
          <li id="quadrosMenu"><a href="#">Quadros Clínicos</a></li>
          <li id="sintomasMenu"><a href="#">Sintomas</a></li>
          <li class="active" id="classificacaoMenu"><a href="#">Classificação</a></li>
        </ul>
      </div>
      <!-- Fim Menu -->

      <!-- Início Jumbotron (conteúdo) -->
      <div class="jumbotron" id="classificacaoConteudo">
        <h1 class="titulosSecundarios">Classificação</h1>
        <h2><?php $model->getClassificacao(); ?></h2>
        <!--<div class="classificacao" ></div>-->
        
        
        <img src="img/classificacao_risco.png">
        <!--<div class="alert alert-warning">Laranja</div>-->
        <button type="button" class="btn btn-default" id="btnFinalizar">Finalizar Triagem</button>
      </div>
      <!-- Fim Jumbotron (conteúdo) -->

      <!-- Site footer -->
      <!--<div class="footer">
        <p>&copy; Projeto Aplicado - Treatment of Manchester 2014</p>
      </div>-->

    </div> <!-- /container -->
  </body>
</html>
