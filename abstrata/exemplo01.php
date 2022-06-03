<?php
//show errors
error_reporting(E_ALL);
ini_set('display_errors', 1);


interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {
    public function acelerar($velocidade) {
        echo "O veículo acelerou até " . $velocidade . " km/h";
    }
    public function frenar($velocidade) {
        echo "O veículo frenou até " . $velocidade . " km/h";
    }
    public function trocarMarcha($marcha) {
        echo "O veículo engatou a marcha " . $marcha;
    }
}

class DelRey extends Automovel {
    public function empurrar() {
        echo "O veículo empurrou!";
    }
}

//$carro = new Automovel(); //Uncaught Error: Cannot instantiate abstract class Automovel 

$carro = new DelRey(); // ok
$carro->acelerar(200);



?>
