<?php
namespace Simduck;

use Simduck\Quackable;
use Simduck\Goose;


class GooseAdapter implements Quackable
{
    private $goose;
    private $observable;

    public function __construct(Goose $g)
    {
        $this->goose = $g;
        $this->observable = new Observable($this);
    }
    public function quack()
    {
        $this->goose->honk();
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