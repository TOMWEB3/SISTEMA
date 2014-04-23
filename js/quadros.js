// Código originalmente postado por Bruna Pimenta

$(document).ready(function(){
    $(".list-group-item").click(function(){        
//        var quadro = $(".list-group-item").attr("href");
        $('#codQuadroClinico').val($(this).attr('id'));

        $('#frmQuadrosClinicos').submit();
//        
    });
    
//    $('#frmQuadrosClinicos').submit(function(){
//       
//    });
});
