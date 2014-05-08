// Código originalmente postado por Bruna Pimenta

$(document).ready(function() {
    $(".list-group-item").click(function(evt) {
//        var quadro = $(".list-group-item").attr("href");
        evt.preventDefault();
        
        //var codQuadroClinico = $('#codQuadroClinico').val($(this).attr('id'));

        $('#frmQuadrosClinicos').attr('action', '/sintomas');

        $('#frmQuadrosClinicos').submit();
//
    });

    $('#frmQuadrosClinicos').submit(function(evt) {
        //evt.preventDefault();
    });

//    $('#frmQuadrosClinicos').submit(function(){
//
//    });
});
