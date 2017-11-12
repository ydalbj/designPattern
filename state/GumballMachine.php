<?php
namespace State;

use State\NoQuarterState;
use State\HasQuarterState;
use State\SoldOutState;
use State\SoldState;
use State\WinnerState;

class GumballMachine
{
    private $noQuarterState;
    private $hasQuarterState;
    private $soldOutState;
    private $soldState;

    private $state;
    private $count = 0;

    public function __construct(int $n)
    {
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldOutState = new SoldOutState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);
        $this->state = $this->soldOutState;
        $this->count = $n;
        if ($n > 0) {
            $this->state = $this->noQuarterState;
        }
    }

    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }

    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }

    public function turnCrank()
    {
        $this->state->turnCrank();
        $this->state->dispense();
    }

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function releaseBall()
    {
        echo "a gumball is rolling out of the machine\n";
        if ($this->count > 0) {
            $this->count--;
        } else {
            $this->count = 0;
        }
    }

    public function getcount()
    {
        return $this->count;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getWinnerState()
    {
        return $this->winnerState;
    }

    public function __toString()
    {
        return "Welcomet to gumballMachine！！\n";
    }
}