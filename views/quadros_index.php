
<?php
//print "<pre>";
//var_dump($this);
//print "</pre>";
$quadrosClinicosDataModel = $this->response->quadros;

?>

<!DOCTYPE html>
<html lang="pt-">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Treatment of Manchester</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/justified-nav.css" rel="stylesheet">
        <link href="css/tom.css" rel="stylesheet">
        <link href="css/quadros.css" rel="stylesheet">

        <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
        <script src="../js/quadros.js"></script>
    </head>
    <body>
        <div class="container">

            <!-- Início Menu -->
            <div class="masthead">
                <ul class="nav nav-justified">
                    <li id="inicioMenu"><a>Início</a></li>
                    <li class="active" id="quadrosMenu"><a>Quadros Clínicos</a></li>
                    <li id="sintomasMenu"><a>Sintomas</a></li>
                    <li id="classificacaoMenu"><a>Classificação</a></li>
                </ul>
            </div>
            <!-- Fim Menu -->

            <!----------------------------------------------------------------------
            O formulario abaixo contem um campo oculto que será setado para o
            valor do quadro clínico selecionado.
            ---------------------------------------------------------------------->
            <form method="post" id="frmQuadrosClinicos">
                <input type="hidden" name="iphCodQuadroClinico" id="codQuadroClinico">
                <!-- Início Jumbotron (conteúdo) -->
                <div class="jumbotron" id="quadrosConteudo">
                    <h1 class="titulosSecundarios">Selecione um quadro clínico</h1>

                    <div class="row">
                        <div class="list-group col-lg-4">
                            <?php
                            foreach ($quadrosClinicosDataModel->statement1 as $row) {
                                ?>
                                <a href="#" class="list-group-item" id="<?php echo $row['COD_QUADRO_CLINICO'] ?>"><?php echo utf8_encode ($row['NOM_QUADRO_CLINICO']); ?></a>
                            <?php } ?>
                        </div>

                        <div class="list-group col-lg-4">
                            <?php
                            foreach ($quadrosClinicosDataModel->statement2 as $row) {
                                ?>
                                <a href="#" class="list-group-item" id="<?php echo $row['COD_QUADRO_CLINICO'] ?>"><?php echo utf8_encode ($row['NOM_QUADRO_CLINICO']);?></a>
                            <?php } ?>
                        </div>

                        <div class="list-group col-lg-4">
                            <?php
                            foreach ($quadrosClinicosDataModel->statement3 as $row) {
                                ?>
                                <a href="#" class="list-group-item" id="<?php echo $row['COD_QUADRO_CLINICO'] ?>"><?php echo utf8_encode ($row['NOM_QUADRO_CLINICO']);?></a>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </form>
            <!-- Fim Jumbotron (conteúdo) -->

            <!--<button type="button" class="btn btn-default" id="btnCancelar">
                Cancelar
            </button>-->

            <!-- Site footer -->
            <!--<div class="footer">
              <p>&copy; Projeto Aplicado - Treatment of Manchester 2014</p>
            </div>-->

        </div> <!-- /container -->
    </body>
</html>
