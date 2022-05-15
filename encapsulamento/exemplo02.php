<?php
// exibir erros
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Pessoa{

    public $nome = "Rasmus Lerdorf"; //Atributo
    protected $idade = 48; //Atributo
    private $senha = "123456"; //Atributo
    
    public function verDados(){ //Método
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
    }
}

class Programador extends Pessoa{

    public function verDados(){ //Método
        echo get_class($this)."<br>";
        echo $this->nome."<br>";
        echo $this->idade."<br>";
        //echo $this->senha."<br>"; // not allowed because it is private
    }
}

$mario = new Programador();

//echo $mario->nome."<br>";
//echo $mario->idade."<br>";
//echo $mario->senha."<br>";

$mario->verDados();

?>


