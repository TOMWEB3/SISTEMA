<?php

// Classe que declara o modelo de dados que busca os quadros clínicos
class ClsQuadrosModel {

    private $strQuery;
    public $statement1, $statement2, $statement3;

    private function calculaLimitador(PDO $dbh) {
        $sql = "SELECT COUNT(1)"
                . " FROM QUADROS_CLINICOS";

        try {

            $res = $dbh->query($sql);

            // Pega o valor do contador
            $contador = $res->fetchColumn();

            // Retorna o valor da divisao por 3 que são as colunas
            // da view de quadros clinicos
            return (intval($contador / 3) + 1);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function __construct(PDO $dbh) {

        $contador = $this->calculaLimitador($dbh);        
        $pos = 0;

        $this->strQuery = "SELECT * "
                . "  FROM QUADROS_CLINICOS QDC "
                . " ORDER BY QDC.COD_QUADRO_CLINICO";

        $this->statement1 = $dbh->query($this->strQuery . ' LIMIT ' . ($pos) . ', ' . $contador);
        $pos = $contador;
        $this->statement2 = $dbh->query($this->strQuery . ' LIMIT ' . ($pos) . ', ' . $contador);
        $pos = 2 * $contador;
        $this->statement3 = $dbh->query($this->strQuery . ' LIMIT ' . ($pos) . ', ' . $contador);
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
