<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-1.10.1.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <img alt="Treatment of Manchester" src="img/tom_logo.png">
                    </div>
                    <div class="modal-body">
                        <form id="frmAutenticacao" class="form col-md-12 center-block" method="post">
                            <div class="form-group">
                                <input name="iptNomeUsuario" id="iptNomeUsuario" type="text" class="form-control"
                                       placeholder="login">
                            </div>
                            <div class="form-group">
                                <input name="iptSenha" id="iptSenha" type="password" class="form-control"
                                       placeholder="senha">
                            </div>
                            <div class="form-group">
                                <button type="button" id="btnEntrar" class="btn btn-primary">Entrar</button>
                                <br>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('body').on('click', '#btnEntrar', function(){
            if(validaFormulario()){
                $.post('tomapp/tentativaLogon.php', $('#frmAutenticacao').serialize())
                .done(function(data) {
                    if (data === 'conectado') {
                        window.location.replace('./inicio');
                    } else {
                        $('.form-group').addClass('has-error');
                        $('#frmAutenticacao .form-group:first-child').prepend('<div class="alert alert-danger alert-dismissable">Usuário e senha incorretos</div>');
                        $('#iptNomeUsuario').focusin(function(){
                            $('.alert').slideUp(1000);
                            $('.alert').fadeOut(1000);
                        });
                    }
                });
            }
        });
    });

function validaFormulario(){
    $('#iptNomeUsuario, #iptSenha').attr({
            'data':"tooltip",
            'data-placement': "right",
            title: "Preenchimento obrigatório"});

    var flag = true;

    if($('#iptSenha').val() == ''){
        flag = false;
        $('#frmAutenticacao .form-group:nth-child(2)').addClass('has-error');
        $('#iptSenha').focus();
        $('#iptSenha').tooltip('show');
    } else {
        $('#frmAutenticacao .form-group:nth-child(2)').removeClass('has-error');
        $('#iptSenha').tooltip('destroy');
    }

    if($('#iptNomeUsuario').val() == ''){
        flag = false;
        $('#frmAutenticacao .form-group:nth-child(1)').addClass('has-error');
        $('#iptNomeUsuario').focus();
        $('#iptNomeUsuario').tooltip('show');
    } else {
        $('#frmAutenticacao .form-group:nth-child(1)').removeClass('has-error');
        $('#iptNomeUsuario').tooltip('destroy');
    }

    return flag;
}
</script>
<style type="text/css">
img{width: 90%; height: 90%;}
#btnEntrar{float: right; width: 20%;}
.modal-dialog{width: 440px;}
.modal-footer {border-top: 0px;}
.alert{text-align: center;}
</style>
