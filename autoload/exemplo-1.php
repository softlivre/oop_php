<?php

function __autoload($nomeClasse){ //not supported in php8!!!!

	var_dump($nomeClasse);

	require_once("$nomeClasse.php");

}

$carro = new DelRey();

$carro->acelerar(80);

?>