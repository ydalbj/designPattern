<?php
namespace Simduck\factories;

use Simduck\factories\AbstractDuckFactory;
use Simduck\MallardDuck;
use Simduck\RedheadDuck;
use Simduck\DuckCall;
use Simduck\RubberDuck;


class DuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck()
    {
        return new MallardDuck();
    }

    public function createRedheadDuck()
    {
        return new RedheadDuck();
    }

    public function createDuckCall()
    {
        return new DuckCall();
    }

    public function createRubberDuck()
    {
        return new RubberDuck();
    }
}