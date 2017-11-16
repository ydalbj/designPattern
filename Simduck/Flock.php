<?php
namespace Simduck;

use Simduck\Quackable;
use Simduck\Observable;

class Flock implements Quackable
{
    private $quacks = [];
    private $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function add(Quackable $q)
    {
        $this->quacks[] = $q;
    }

    public function quack()
    {
        foreach ($this->quacks as $v)
        {
            $v->quack();
        }
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
        $name = '';
        foreach ($this->quacks as $q)
        {
            $name .= $q . ',';
        }
        return $name;
    }
}