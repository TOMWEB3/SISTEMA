<?php

// Classe que declara o modelo de dados que busca os quadros clínicos
ini_set('display_errors', 1);

class quadros extends databaseclass {

    private $strQuery;
    public $statement1, $statement2, $statement3;

    private function calculaLimitador() {
        $sql = "SELECT COUNT(1)"
                . " FROM QUADROS_CLINICOS";

        try {

            $res = $this->dbh->query($sql);

            // Pega o valor do contador
            $contador = $res->fetchColumn();

            // Retorna o valor da divisao por 3 que são as colunas
            // da view de quadros clinicos
            return (intval($contador / 3) + 1);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function __construct() {
        parent::__construct();

        $contador = $this->calculaLimitador();
        $pos = 0;

        $this->strQuery = "SELECT * "
                . "  FROM QUADROS_CLINICOS QDC "
                . " ORDER BY QDC.COD_QUADRO_CLINICO";

        $this->statement1 = $this->dbh->query($this->strQuery . ' LIMIT ' . ($pos) . ', ' . $contador);
        $pos = $contador;
        $this->statement2 = $this->dbh->query($this->strQuery . ' LIMIT ' . ($pos) . ', ' . $contador);
        $pos = 2 * $contador;
        $this->statement3 = $this->dbh->query($this->strQuery . ' LIMIT ' . ($pos) . ', ' . $contador);
    }

    public function getQuadrosStatement1() {
        return $this->statement1;
    }

    public function getQuadrosStatement2() {
        return $this->statement2;
    }

    public function getQuadrosStatement3() {
        return $this->statement3;
    }   

}
