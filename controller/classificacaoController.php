<?php

//print "<pre>";
//var_dump($_POST);
//print "</pre>";

ini_set('display_errors', 1);

Class classificacaoController Extends baseController {

    public function index() {
        if (!isset($_SESSION['usuarioAutenticado'])) {
            // -----------------------------------------------------------
            //  Variavel não existente.
            header('Location: http://198.199.71.15/login.php');
        }
        
        $lista = '';
        foreach ($_POST as $val) {
            if ($lista != '')
                $lista .= ', ';
            $lista = $lista . $val;
        }
        
        echo $lista;

        $objClassificacao = new classificacao($lista); 
                       
        $this->registry->template->classificacao = $objClassificacao; 
        
//        $this->registry->template->quadros_heading = 'This is the quadros Index';
        $this->registry->template->show('classificacao_index');
    }
}

?>
