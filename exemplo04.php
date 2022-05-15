<?php
// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Endereco{
    
        private $logradouro;
        private $numero;
        private $cidade;
        private $estado;
    
        public function __construct($logradouro, $numero, $cidade, $estado){
            $this->logradouro = $logradouro;
            $this->numero = (int) $numero;
            $this->cidade = $cidade;
            $this->estado = $estado;
        }
    
        public function __destruct(){
            //var_dump("DESTRUIR");
        }
    
        public function __toString(){
            return $this->logradouro.", ".$this->numero." - ".$this->cidade."/".$this->estado;
        }
}

$meuEndereco = new Endereco("Rua Professora Marta Waltenberg", "155", "Juiz de Fora", "MG");

/*
var_dump($meuEndereco);

unset($meuEndereco);
*/

echo $meuEndereco;
?>
