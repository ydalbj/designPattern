<?php
namespace Simduck\factories;

use Simduck\decorators\QuackCounter;
use Simduck\MallardDuck;
use Simduck\RedheadDuck;
use Simduck\DuckCall;
use Simduck\RubberDuck;


class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck()
    {
        return new QuackCounter(new MallardDuck());
    }

    public function createRedheadDuck()
    {
        return new QuackCounter(new RedheadDuck());
    }

    public function createDuckCall()
    {
        return new QuackCounter(new DuckCall());
    }

    public function createRubberDuck()
    {
        return new QuackCounter(new RubberDuck());
    }
}