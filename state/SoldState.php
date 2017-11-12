<?php
namespace State;

use State\State;

class SoldState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $m)
    {
        $this->gumballMachine = $m;
    }

    public function insertQuarter()
    {
        echo "we are already giving you a gumball\n";
    }

    public function ejectQuarter()
    {
        echo "sorry you alread turned the crank\n";
    }

    public function turnCrank()
    {
        echo "truning twice doesnt get you another gumball\n";
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();
        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo "oops, no gumballs";
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
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