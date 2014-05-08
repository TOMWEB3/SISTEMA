<?php
use \PDO;

class databaseclass {

    protected $dbh;
    private $dsn;
    private $userName = 'Albert';
    private $userPassword;

    // Declaracao do construtor da classe
    public function __construct() {
        // Inicializamos a variavel $dsn com a string de conexao
        $this->dsn = 'mysql:host=localhost;dbname=DBTOM;';
        $this->b_isConnected = FALSE;
        try {
            $this->dbh = new PDO($this->dsn, $_SESSION['userName'], $_SESSION['userPassword']);
            $this->b_isConnected = TRUE;
        } catch (PDOException $ex) {
            throw $ex;
        }
    }

    public function getDBH() {
        return $this->dbh;
    }

    public function tryConnect($userName, $userPassword) {
        $this->b_isConnected = FALSE;
        try {
            $this->dbh = new PDO($this->dsn, $userName, $userPassword);
            $this->b_isConnected = TRUE;
            return TRUE;
        } catch (PDOException $ex) {
            throw $ex;
        }
    }
}
