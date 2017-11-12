<?php
namespace State;

use State\State;

class NoQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $m)
    {
        $this->gumballMachine = $m;
    }

    public function insertQuarter()
    {
        echo "You insert a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
    }

    public function ejectQuarter()
    {
        echo "You hava no quarter\n";
    }

    public function turnCrank()
    {
        echo "you should insert a quarter first before you turn the crank\n";
    }

    public function dispense()
    {
        echo "no gumball dispensed\n";
    }

    public function refill(int $n)
    {
        if ($n > 0) {
            echo "load $n gumballs \n";
            return true;
        } else {
            echo "input error! $n <= 0\n";
            return false;
        }
    }
}