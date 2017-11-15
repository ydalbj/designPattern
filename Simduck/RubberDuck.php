<?php
namespace Simduck;

use Simduck\Quackable;

class RubberDuck implements Quackable
{
    public function quack()
    {
        echo "squeak\n";
    }
}