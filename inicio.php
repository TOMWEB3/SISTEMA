<?php
include './tomapp/verificarAutenticacao.php';
include_once 'cabecalho.php';
?>
<div class="jumbotron" id="inicioConteudo">
    <img src="img/tom_logo.png">
    <p class="lead">O objetivo da classificação de risco <strong>não é fazer um diagnóstico</strong>, mas sim definir uma <strong>prioridade clínica para o primeiro atendimento</strong> médico.</p>
    <p><button id="btnIniciarTriagem" class="btn btn-lg btn-default">Iniciar Triagem</button></p>
</div>

<script type="text/javascript">
$(document).ready(function(){
    $('#inicioMenu').addClass('active');
    $('#btnIniciarTriagem').click(function() {
        $(location).attr('href', 'quadros');
    });
});
</script>
