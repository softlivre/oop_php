<?php

class Documento {
    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }
}

class CPF extends Documento {
    public function validar(): bool {
        $numeroCPF = $this->getNumero();
        // validação do CPF
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("123.456.789-10");
var_dump($doc->validar());
echo $doc->getNumero();



?>
