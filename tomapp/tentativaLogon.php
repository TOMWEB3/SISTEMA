<?php

ini_set('display_errors', 1);

session_start();

//include './clsdatabase.php';

use PDO;

class ClsDatabase {

    private $dbh;
    private $dsn;
    private $b_isConnected = FALSE;

    // Declaracao do construtor da classe
    public function __construct() {
        // Inicializamos a variavel $dsn com a string de conexao
        $this->dsn = 'mysql:host=localhost;dbname=DBTOM;';
    }

    public function tryConnect($userName, $userPassword) {
        $this->b_isConnected = FALSE;
        try {
            $this->dbh = new PDO($this->dsn, $userName, $userPassword);

            define('MyConst', TRUE);

            // Salvamos o nome do usuario e a senha na variavel $_SESSION
            $_SESSION['userName'] = $userName;
            $_SESSION['userPassword'] = $userPassword;
//            $this->userName = $userName;
//            $this->userPassword = $userPassword;
            $this->b_isConnected = TRUE;
            return TRUE;
        } catch (PDOException $ex) {
            throw $ex;
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

$db = new ClsDatabase();


try {
    if ($db->tryConnect($_POST['iptNomeUsuario'], $_POST['iptSenha'])) {
        $_SESSION['usuarioAutenticado'] = TRUE;
        echo 'conectado';
    } else {
        echo 'erro ao conectar ao banco de dados';
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}