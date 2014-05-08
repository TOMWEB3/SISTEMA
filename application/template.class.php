<?php

Class Template {
    /*
     * @the registry
     * @access private
     */

    private $registry;

    /*
     * @Variables array
     * @access private
     */
    private $vars = array();
    
    private $response;

    // Construtor da classe
    function __construct($registry) {
        $this->registry = $registry;
    }

    // Seta as variáveis 
    public function __set($index, $value) {
        $this->vars[$index] = $value;
        if(!is_object($this->response))
           $this->response =   new stdClass();
        $this->response->$index = $this->vars[$index];
    }

    function show($name) {
        $path = __SITE_PATH . '/views' . '/' . $name . '.php';

        if (file_exists($path) == false) {
            throw new Exception('Template not found in ' . $path);
            return false;
        }

        // Load variables
        foreach ($this->vars as $key => $value) {
            $$key = $value;
        }

        include ($path);
    }

}

?>
