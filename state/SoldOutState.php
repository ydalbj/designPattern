<?php
namespace State;

use State\State;

class SoldOutState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $m)
    {
        $this->gumballMachine = $m;
    }

    public function insertQuarter()
    {
        echo "we have no gumballs now\n";
    }

    public function ejectQuarter()
    {
        echo "no quanter returns.you have no quarter inserted and we have no gumballs now\n";
    }

    public function turnCrank()
    {
        echo "turn crank no ues.you have no quarter inserted and we have no gumballs now\n";
    }

    public function dispense()
    {
        echo "no gumball dispensed\n";
    }
}