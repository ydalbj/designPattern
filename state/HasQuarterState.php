<?php
namespace State;

use State\State;

class HasQuarterState implements State
{
    private $gumballMachine;

    public function __construct(GumballMachine $m)
    {
        $this->gumballMachine = $m;
    }

    public function insertQuarter()
    {
        echo "You already have a quarter\n";
    }

    public function ejectQuarter()
    {
        echo "ok,eject a quarter\n";
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        $rand = mt_rand(1,10);
        if ($rand <= 2 && $this->gumballMachine->getCount() > 1) {
            $this->gumballMachine->setState($this->gumballMachine->getWinnerState());
            return;
        }
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
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