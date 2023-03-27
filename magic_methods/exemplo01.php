<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class TestClass {

    private $attributes = [];

    public function __construct($name){
        echo "constructor function called with name argument: {$name}<br>";
        $this->name = $name;        
    }

    public function __destruct(){        
        echo "destructor function called!<br>";
    }

    public function test(){
        echo "function test called!<br>";
    }

    public function __set($name, $value){
        echo "caugth name: $name to value: $value <br>";
        $this->attributes[$name] = $value;
    }

    public function __get($name){
        echo "__get magic method called<br>";
        return $this->attributes[$name];
    }
}

$var = new TestClass('foo');

// seting methods that does not exist, handled by __set methods
$var->id = 'bar';
$var->age = 18;
$var->text = "ipsen lorun";

// getting methods that does not exist, handled by __get methods
echo $var->id;
echo $var->age;
echo $var->text;




