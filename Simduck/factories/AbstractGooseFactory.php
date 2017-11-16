<?php
namespace Simduck\factories;

use Simduck\GooseAdapter;
use Simduck\Goose;


abstract class AbstractGooseFactory
{
    abstract public function createGooseDuck();
}