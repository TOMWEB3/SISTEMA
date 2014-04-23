<?php

// ==============================================================
//   Arquivo: clsdatabase.php
//   Funcao: Contem o classe de conexao com o banco de dados
// --------------------------------------------------------------

use PDO;

class ClsDatabase {

    private $dbh;
    private $dsn;
    private $userName = 'Albert';
    private $userPassword;
    private $b_isConnected = FALSE;

    // Declaracao do construtor da classe
    public function __construct() {
        // Inicializamos a variavel $dsn com a string de conexao
        $this->dsn = 'mysql:host=localhost;dbname=DBTOM;';
    }

    public function getDBH() {
        $dbh = $this->dbh;
        return $this->dbh;
    }

    public function tryConnect($userName, $userPassword) {
        $this->b_isConnected = FALSE;
        try {
            $this->dbh = new PDO($this->dsn, $userName, $userPassword);
//            
//          
            $this->b_isConnected = TRUE;
            return TRUE;
        } catch (PDOException $ex) {
            return FALSE;
        }
    }

    // Funcao que retorna o status da conexao
    public function isConnected() {
        if ($this->b_isConnected) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
