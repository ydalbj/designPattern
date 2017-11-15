<?php
namespace Simduck;

use Simduck\MallardDuck;
use Simduck\RedheadDuck;
use Simduck\DuckCall;
use Simduck\RubberDuck;
use Simduck\Quackable;
use Simduck\GooseAdapter;
use Simduck\Goose;
use Simduck\decorators\QuackCounter;

class DuckSimulator
{
    public function run()
    {
        $mallard = new QuackCounter(new MallardDuck());
        $redhead = new QuackCounter(new RedheadDuck());
        $duckCall =  new QuackCounter(new DuckCall());
        $rubber = new QuackCounter(new RubberDuck());
        $g = new Goose();
        $goose = new GooseAdapter($g);

        echo "Duck Simulator start:\n";
        $this->simulate($mallard);
        $this->simulate($redhead);
        $this->simulate($duckCall);
        $this->simulate($rubber);
        $this->simulate($goose);
        echo "The ducks quacked " . QuackCounter::getCount() . " times.\n";
    }

    public function simulate(Quackable $duck)
    {
        $duck->quack();
    }
}
