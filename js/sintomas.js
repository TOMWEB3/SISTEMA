$(document).ready(function() {
    $("#btnCancelar").click(function() {
        $(location).attr("href", "/inicio");
    });

    $("#btnClassificar").click(function() {
        $('#frmSintomas').attr('action', '/classificacao');
        $(location).attr("href", "classificacao.html");
    });

    $('#frmSintomas').submit(function(event) {
        //$('#frmQuadrosClinicos').attr('action', '/classificacao');

        //$('#frmQuadrosClinicos').submit();
        //event.preventDefault();
    });
});
