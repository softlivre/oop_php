<?php
//show errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Animal
{
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal
{
    public function falar()
    {
        return "Late";
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return "Mia";
    }

    public function mover()
    {
        return "se arrasta lentamente";
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return "Pia";
    }

    public function mover()
    {
        return "Voa e " . parent::mover();
    }
}


$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "<hr>";

$garfield = new Gato();
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";
echo "<hr>";

$bird = new Passaro();
echo $bird->falar() . "<br>";
echo $bird->mover() . "<br>";