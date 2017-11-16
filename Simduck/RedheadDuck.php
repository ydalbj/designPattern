<?php
namespace Simduck;

use Simduck\Quackable;

class RedheadDuck implements Quackable
{
    private $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }
    public function quack()
    {
        echo "Quack\n";
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