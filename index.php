<?php
session_start();
include '/tomapp/verificarAutenticacao.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <style type="text/css">
            .modal-footer {
                border-top: 0px;
            }
        </style>
        <script type="text/javascript" src="js/jquery-1.10.1.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#frmAutenticacao').submit(function(event) {
                    var postData = $(this).serialize();
                    $.post('tomapp/tentativaLogon.php', postData)
                            .done(function(data) {
                                //alert(data);
                                if (data === 'conectado') {
                                    window.location.replace('./inicio.php'); 
                                } else {
                                    
                                }
                            });
                    event.preventDefault();
                });
            });
        </script>
    </head>
    <body>
        <div id="loginModal" class="modal show" tabindex="-1" role="dialog"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                aria-hidden="true"></button>
                        <img alt="Treatment of Manchester" src="img/tom_logo.png" style="width: 85%; height: 90px; margin-left: 50px;">
                    </div>
                    <div class="modal-body">
                        <form id="frmAutenticacao" class="form col-md-12 center-block" method="post">
                            <div class="form-group">
                                <input name="iptNomeUsuario" id="iptNomeUsuario" type="text" class="form-control input-lg"
                                       placeholder="login">
                            </div>
                            <div class="form-group">
                                <input name="iptSenha" id="iptSenha" type="password" class="form-control input-lg"
                                       placeholder="senha">
                            </div>
                            <div class="form-group" style="float: right; width: 220px;">
                                <button type=submit class="btn btn-primary btn-lg btn-block">Entrar</button>
                                <br>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>