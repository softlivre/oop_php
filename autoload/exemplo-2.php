<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function incluirClasses($nomeClasse){

	if (file_exists($nomeClasse.".php") === true) {
		require_once($nomeClasse.".php");
	}

}

spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){

	if (file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php") === true) {
		require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse.".php");
	}


});

$carro = new DelRey();

$carro->acelerar(80);

?>