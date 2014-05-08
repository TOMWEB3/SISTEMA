<?php
include './tomapp/verificarAutenticacao.php';
include './tomapp/models/quadros_model.php';
include_once('cabecalho.php');
$quadrosClinicosDataModel = new ClsQuadrosModel($dbh->getDBH());

?>
<!----------------------------------------------------------------------
O formulario abaixo contem um campo oculto que será setado para o
valor do quadro clínico selecionado.
---------------------------------------------------------------------->
<form method="post" action="sintomas.php" id="frmQuadrosClinicos">
    <input type="hidden" name="codQuadroClinico" id="codQuadroClinico">
    <div class="jumbotron" id="quadrosConteudo">
        <h1 class="titulosSecundarios">Selecione um quadro clínico</h1>

        <div class="row">
            <div class="list-group col-lg-4">
                <?php foreach ($quadrosClinicosDataModel->statement1 as $row) { ?>
                    <a href="#" class="list-group-item" id="<?php echo $row['COD_QUADRO_CLINICO'] ?>"><?php echo utf8_encode ($row['NOM_QUADRO_CLINICO']); ?></a>
                <?php } ?>
            </div>

            <div class="list-group col-lg-4">
                <?php foreach ($quadrosClinicosDataModel->statement2 as $row) { ?>
                    <a href="#" class="list-group-item" id="<?php echo $row['COD_QUADRO_CLINICO'] ?>"><?php echo utf8_encode ($row['NOM_QUADRO_CLINICO']);?></a>
                <?php } ?>
            </div>

            <div class="list-group col-lg-4">
                <?php foreach ($quadrosClinicosDataModel->statement3 as $row) { ?>
                    <a href="#" class="list-group-item" id="<?php echo $row['COD_QUADRO_CLINICO'] ?>"><?php echo utf8_encode ($row['NOM_QUADRO_CLINICO']);?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</form>
<script type="text/javascript">
$(document).ready(function(){
    /* CORES E ÍCONES DO MENU */
    $('#inicioMenu a').append('<span id="iconOk" class="btn-lg glyphicon glyphicon-ok"></span>');
    $('#quadrosMenu a, #sintomasMenu a, #classificacaoMenu a').append('<span class="glyphicon glyphicon-flag"></span>');
    $('#quadrosMenu, #sintomasMenu, #classificacaoMenu').addClass('fluxoPendenteBorda');
    $('#sintomasMenu a, #classificacaoMenu a').addClass('fluxoPendentePreenchimento');
    $('#inicioMenu').addClass('fluxoConcluidoBorda');
    $('#inicioMenu a').addClass('fluxoConcluidoPreenchimento');

    $('#quadrosMenu').addClass('active');
});
</script>

