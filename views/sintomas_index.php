<?php
ini_set('display_errors', 1);

//print "<pre>";
//var_dump($this);
//print "</pre>";
$model = $this->response->sintomas;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Treatment of Manchester</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/justified-nav.css" rel="stylesheet">
        <link href="../css/tom.css" rel="stylesheet">
        <link href="../css/sintomas.css" rel="stylesheet">

        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="../js/sintomas.js"></script>
    </head>
    <body>
        <div class="container">

            <!-- Início da barra indicadora -->
            <div class="masthead">
                <ul class="nav nav-justified">
                    <li id="inicioMenu"><a>Início</a></li>
                    <li id="quadrosMenu"><a>Quadros Clínicos</a></li>
                    <li class="active" id="sintomasMenu"><a>Sintomas</a></li>
                    <li id="classificacaoMenu"><a>Classificação</a></li>
                </ul>
            </div>
            <!-- Fim da barra indicadora -->

            <!-- Início Jumbotron (conteúdo) -->
            <div class="jumbotron" id="sintomasConteudo">
                <h1 class="titulosSecundarios">Informe os sintomas</h1>

                <form class="form-horizontal" role="form" method="post" id="frmSintomas">
                    <div id="row">

                        <div class="list-group col-lg-6">

                            <?php
                            foreach ($model->statement1 as $row) {
                                ?>
                                <div class="form-group">
                                    <input type="checkbox" style="float:left;" name="<?php echo $row['COD_SINTOMA']; ?>" value="<?php echo $row['COD_SINTOMA']; ?>">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo utf8_encode($row['SINTOMA']); ?>">
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="list-group col-lg-6">

                            <?php
                            foreach ($model->statement2 as $row) {
                                ?>
                                <div class="form-group">
                                    <input type="checkbox" style="float:left;">
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Email" value="<?php echo utf8_encode($row['SINTOMA']); ?>">
                                    </div>
                                </div>
                            <?php } ?>

                        </div>                        

                    </div>
                    <div class="list-group col-lg-12">
                        <div class="list-group col-lg-6">
                            <button type="button" class="btn btn-default" id="btnCancelar">Cancelar</button>
                        </div>
                        <div class="list-group col-lg-6">
                            <button type="submit" class="btn btn-success" id="btnClassificar">Classificar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Fim Jumbotron (conteúdo) -->



            <!-- Site footer -->
            <!--<div class="footer">
              <p>&copy; Projeto Aplicado - Treatment of Manchester 2014</p>
            </div>-->

        </div> <!-- /container -->
    </body>
</html>
