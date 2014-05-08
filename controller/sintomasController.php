<?php

ini_set('display_errors', 1);

Class sintomasController Extends baseController {
    
    public function index() {
        if (!isset($_SESSION['usuarioAutenticado'])) {
            // -----------------------------------------------------------
            //  Variavel não existente.
            header('Location: http://198.199.71.15/login.php');
        }
        
        $objSintomas = new sintomas($_POST['iphCodQuadroClinico']);
        $this->registry->template->sintomas = $objSintomas;        
        
        $this->registry->template->show('sintomas_index');
    }   
    
}

?>
