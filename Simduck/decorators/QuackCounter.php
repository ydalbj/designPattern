<?php
namespace Simduck\decorators;

use Simduck\Quackable;
use Simduck\Observable;
use Simduck\Observer;


class QuackCounter implements Quackable
{
    private $duck;
    private static $count;
    private $observable;

    public function __construct(Quackable $d)
    {
        $this->duck = $d;
        self::$count = 1;
        $this->observable = new Observable($this);
    }

    public function quack()
    {
        $this->duck->quack();
        self::$count++;
        $this->notifyObservers();
    }

    public static function getCount()
    {
        return self::$count;
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
        return strval($this->duck);
    }
}