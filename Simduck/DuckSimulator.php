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
use Simduck\factories\CountingDuckFactory;
use Simduck\factories\GooseDuckFactory;
use Simduck\Flock;
use Simduck\Quackologist;
use Simduck\factories\AbstractDuckFactory;

class DuckSimulator
{
    private $factory;

    public function __construct(AbstractDuckFactory $f)
    {
        $this->factory = $f;
    }
    public function run()
    {
        /*
        $mallard = new QuackCounter(new MallardDuck());
        $redhead = new QuackCounter(new RedheadDuck());
        $duckCall =  new QuackCounter(new DuckCall());
        $rubber = new QuackCounter(new RubberDuck());
        */
        $f = $this->factory;
        $mallard = $f->createMallardDuck();
        $redhead = $f->createRedheadDuck();
        $duckCall = $f->createDuckCall();
        $rubber = $f->createRubberDuck();
        /*
        $g = new Goose();
        $goose = new GooseAdapter($g);
        */

        $f = new GooseDuckFactory();
        $goose = $f->createGooseDuck();

        $flock = new Flock();
        $flock->add($mallard);
        $flock->add($redhead);
        $flock->add($duckCall);
        $flock->add($rubber);
        $flock->add($goose);
        
        $quackologist = new Quackologist();
        $flock->registerObserver($quackologist);
        echo "Duck Simulator start:\n";
        /*
        $this->simulate($mallard);
        $this->simulate($redhead);
        $this->simulate($duckCall);
        $this->simulate($rubber);
        $this->simulate($goose);
        */
        $this->simulate($flock);
        echo "The ducks quacked " . QuackCounter::getCount() . " times.\n";
    }

    public function simulate(Quackable $duck)
    {
        $duck->quack();
    }
}
