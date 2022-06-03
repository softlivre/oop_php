<?php
//show errors
error_reporting(E_ALL);
ini_set('display_errors', 1);


interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {
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

$carro = new Civic();
$carro->trocarMarcha(2);
$carro->frenar(50);

?>
