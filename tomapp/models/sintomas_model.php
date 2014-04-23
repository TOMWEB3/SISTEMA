<?php

// Classe que declara o modelo de dados que busca os sintomas
// vinculados ao quadro clinico informado

class ClsSintomasModel {

    private $strQuery;
    public $statement1, $statement2, $statement3;

    private function calculaLimitador(PDO $dbh, $codQuadroClinico) {
        $sql = "SELECT COUNT(1)"
                . " FROM SINTOMAS_QUADROS_CLINICOS "
                . "WHERE COD_QUADRO_CLINICO = " . $codQuadroClinico;

        try {

            $res = $dbh->query($sql);

            // Pega o valor do contador
            $contador = $res->fetchColumn();

            // Retorna o valor da divisao por 2 que são as colunas
            // da view de sintomas
            echo $contador;
            return (intval($contador / 2) + 1);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function __construct(PDO $dbh, $codQuadroClinico) {

        $contador = $this->calculaLimitador($dbh, $codQuadroClinico);
        $pos = 0;
        
        //echo '<br>contador: ' . $contador;

        $this->strQuery = "SELECT * "
                . "  FROM SINTOMAS SNT "
                . "         INNER JOIN SINTOMAS_QUADROS_CLINICOS SQC ON SQC.COD_SINTOMA = SNT.COD_SINTOMA"
                . " WHERE SQC.COD_QUADRO_CLINICO = " . $codQuadroClinico
                . " ORDER BY SNT.SINTOMA";

        $this->statement1 = $dbh->query($this->strQuery . ' LIMIT ' . $pos . ', ' . $contador);
        $pos = $contador;
        $this->statement2 = $dbh->query($this->strQuery . ' LIMIT ' . $pos . ', ' . $contador);        
    }

    // Retorna os sintomas da primeira coluna da view
    public function getSintomasStatement1() {
        return $this->statement1;
    }

    // Retorna os sintomas da segunda coluna da view
    public function getSintomasStatement2() {
        return $this->statement2;
    }
}