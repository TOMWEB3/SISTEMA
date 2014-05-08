<?php

// Classe que declara o modelo de dados que busca a classificacao

class classificacao extends databaseclass {

    private $strQuery;
    private $statement1;
    private $classificacao;    

    function __construct($listaCodigosSintomas) {

        parent::__construct();

        echo 'Contrutor';

        $this->strQuery = "SELECT MAX(VAL_SINTOMA)"
                . "  FROM SINTOMAS "
                . " WHERE COD_SINTOMA IN (" . $listaCodigosSintomas . ")";

        $this->statement1 = $this->dbh->prepare($this->strQuery);

        $this->statement1->execute();
        //$this->classificacao = $this->statement1->fetchColumn();
    }

    // Retorna o valor da classificação
    public function getClassificacao() {
        return $this->statement1->fetchColumn();        
    }
    
    public function getCor() {
        $str = "SELECT DISTINCT HEX_COLOR"
                . "  FROM SINTOMAS "
                . " WHERE VAL_SINTOMA = " . $this->classificacao;

        $stmt = $this->dbh->prepare($this->strQuery);

        $stmt->execute();
        
        return $stmt->fetchColumn();
    }

}
