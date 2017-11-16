<?php
namespace Simduck;

use Simduck\Observer;


class Quackologist implements Observer
{
    public function update(QuackObservable $duck)
    {
        echo "Quackologist:" . $duck . "just quacked.\n";
    }
}