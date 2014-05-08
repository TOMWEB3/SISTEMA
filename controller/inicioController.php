<?php

ini_set('display_errors', 1);

Class inicioController Extends baseController {

    public function index() {
        if (!isset($_SESSION['usuarioAutenticado'])) {
            // -----------------------------------------------------------
            //  Variavel não existente.
            header('Location: http://198.199.71.15/login.php');
        }
        $this->registry->template->show('inicio_index');       
    }
}

?>
