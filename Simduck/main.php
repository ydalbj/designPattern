<?php
use Simduck\DuckSimulator;
use Simduck\factories\CountingDuckFactory;
use Simduck\factories\DuckFactory;

spl_autoload_register(function($class) {
    $class = str_replace('\\', '/', $class);
    require "../$class.php";
    /*
    var_dump($class);
    $parts = explode('\\', $class);
    require end($parts) . '.php';
    */
});

$f = new CountingDuckFactory();
#$f = new DuckFactory();
$sim = new DuckSimulator($f);
$sim->run();