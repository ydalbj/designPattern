<?php
use State\GumballMachine;


spl_autoload_register(function($class) {
    $parts = explode('\\', $class);
    require end($parts) . '.php';
});
$m = new GumballMachine(15);
echo $m;
$m->insertQuarter();
$m->turnCrank();
$m->turnCrank();
$m->ejectQuarter();

$m->insertQuarter();
$m->ejectQuarter();
$m->turnCrank();
$m->ejectQuarter();
