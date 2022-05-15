<?php

class Pessoa{

    public $nome; //Atributo
    
    public function falar(){ //Método
        return "O meu nome é ".$this->nome;
    }
}

$henrique = new Pessoa();
$henrique->nome = "Henrique Soares Barbosa";
echo $henrique->falar();
?>
