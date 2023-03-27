<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/*
* Static methods can be called directly - without creating an instance of the class first.
* Static methods are declared with the static keyword:
*/

class TestClass {

    public function __construct(){
        echo "constructor function called!<br>";
    }

    public static function test(){
        echo "static function called!<br>";
    }

    public function __destruct(){        
        echo "destructor function called!<br>";
    }

}

TestClass::test(); // did not call neither the constructor nor the destructor

// $var = new TestClass; // calls both the constructor and the destructor
// $var->test();





