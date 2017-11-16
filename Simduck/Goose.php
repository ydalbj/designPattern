<?php
namespace Simduck;

class Goose
{
    public function honk()
    {
        echo "Honk\n";
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