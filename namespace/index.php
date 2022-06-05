<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class_name) {
    echo "try to load class: $class_name\n";
    include $class_name . '.php';
});

$obj  = new MyClass1();
$obj->test();
$obj2 = new MyClass2(); 
$obj2->test2();
