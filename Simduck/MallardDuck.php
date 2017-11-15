<?php
namespace Simduck;

use Simduck\Quackable;

class MallardDuck implements Quackable
{
    public function quack()
    {
        echo "Quack\n";
    }
}