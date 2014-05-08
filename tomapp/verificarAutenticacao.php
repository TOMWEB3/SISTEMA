<?php

// O arquivo atual deve ser incluído em todas as outras páginas da apliação
// php, no inicio do arquivo, pois ele garante a autenticação do usuário
// contra o RDBMS através da classe ClsDatabase.
// -------------------------------------------------------------------------
//  Descomente a linha abaixo para ativar a exibição de erros no projeto
ini_set('display_errors', 1);

//header('Content-Type: text/html; charset=iso-8859-1');

session_start();

include 'clsdatabase.php';

$dbh;

if (!isset($_SESSION['usuarioAutenticado'])) {
    // -----------------------------------------------------------
    //  Variavel não existente.

    header('Location: http://198.199.71.15/login.php');
} else {
    // Caso a variável $_SESSION['usuarioAutenticado'] promovemos o
    // logon automatico do usuario com os dados salvos na variavel
    // de sessão no momomento da autenticação contra o RDBMS.
    $dbh = new ClsDatabase();
    $dbh->tryConnect($_SESSION['userName'], $_SESSION['userPassword']);
}
