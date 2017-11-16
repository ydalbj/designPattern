<?php
namespace Simduck;

use Simduck\QuackObservable;


interface Quackable extends QuackObservable
{
    public function quack();
}