<?php

include '../tomapp/verificarAutenticacao.php';

Class indexController Extends baseController {

    public function __construct($registry) {
        
        session_start();
        
        parent::__construct($registry);
        if (!isset($_SESSION['usuarioAutenticado'])) {
            // -----------------------------------------------------------
            //  Variavel não existente.
            header('Location: http://198.199.71.15/login.php');
        }
    }

    public function index() {
        /*         * * set a template variable ** */
        header('Location: /inicio');
        $this->registry->template->welcome = 'Welcome to PHPRO MVC';
        /*         * * load the index template ** */
        $this->registry->template->show('index');
    }

}

?>
