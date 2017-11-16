<?php
namespace Simduck;

use Simduck\QuackObservable;


interface Observer
{
    public function update(QuackObservable $duck);
}