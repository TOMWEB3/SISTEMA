<?php

// ============================================================== 
// =  To change this license header, choose License Headers in Project Properties.
// =  To change this template file, choose Tools | Templates
// =  and open the template in the editor.
// --------------------------------------------------------------  

include './clsdatabase.php';

$dbConn = new ClsDatabase();

if ($dbConn->tryConnect('root', '13352*')) {
    echo 'Sucesso ao conectar ao banco de dados';
}
else {
    echo 'Erro ao conectar ao banco de dados';
}
    