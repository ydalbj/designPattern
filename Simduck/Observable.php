<?php
namespace Simduck;

use Simduck\QuackObservable;
use Simduck\Observer;


class Observable implements QuackObservable
{
    private $observers = [];
    private $duck;

    public function __construct(QuackObservable $duck)
    {
        $this->duck = $duck;
    }

    public function registerObserver(Observer $o)
    {
        $this->observers[] = $o;
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $o) {
            $o->update($this->duck);
        }
    }
}