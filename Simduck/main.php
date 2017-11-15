<?php
use Simduck\DuckSimulator;

spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require "../$class.php";
    /*
    var_dump($class);
    $parts = explode('\\', $class);
    require end($parts) . '.php';
    */
});

$sim = new DuckSimulator();
$sim->run();