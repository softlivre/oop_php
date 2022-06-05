<?php
// show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Carro
{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo():string
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMotor(): float
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir()
    {
        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }

}


$gol = new Carro();


$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2017");

/*
echo $gol->getModelo() . "<br>";
echo $gol->getMotor() . "<br>";
echo $gol->getAno() . "<br>";
*/

var_dump($gol->exibir());



?>
