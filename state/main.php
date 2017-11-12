<?php
use State\GumballMachine;


spl_autoload_register(function($class) {
    $parts = explode('\\', $class);
    require end($parts) . '.php';
});
$m = new GumballMachine(3);
echo $m;
$m->insertQuarter();
$m->turnCrank();
$m->turnCrank();
$m->ejectQuarter();

$m->insertQuarter();
$m->turnCrank();
$m->insertQuarter();
$m->turnCrank();
$m->insertQuarter();
$m->turnCrank();

$m->refill(5);
$m->insertQuarter();
$m->turnCrank();