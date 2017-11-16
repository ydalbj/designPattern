<?php
namespace Simduck;

use Simduck\Quackable;

class RubberDuck implements Quackable
{
    private $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function quack()
    {
        echo "squeak\n";
        $this->notifyObservers();
    }

    public function registerObserver(Observer $o)
    {
        $this->observable->registerObserver($o);
    }

    public function notifyObservers()
    {
        $this->observable->notifyObservers();
    }
    
    public function __toString()
    {
        return __CLASS__;
    }
}