<?php
namespace Simduck;

use Simduck\Quackable;

class DuckCall implements Quackable
{
    public function quack()
    {
        echo "kwak\n";
    }
}