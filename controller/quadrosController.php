<?php

ini_set('display_errors', 1);

Class quadrosController Extends baseController {

    public function index() {
        if (!isset($_SESSION['usuarioAutenticado'])) {
            // -----------------------------------------------------------
            //  Variavel não existente.
            header('Location: http://198.199.71.15/login.php');
        }

        $objQuadros = new quadros(); 
                       
        $this->registry->template->quadros = $objQuadros; 
        
//        $this->registry->template->quadros_heading = 'This is the quadros Index';
        $this->registry->template->show('quadros_index');
    }
}

?>
