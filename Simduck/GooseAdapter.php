<?php
namespace Simduck;

use Simduck\Quackable;
use Simduck\Goose;


class GooseAdapter implements Quackable
{
    private $goose;

    public function __construct(Goose $g)
    {
        $this->goose = $g;
    }
    public function quack()
    {
        $this->goose->honk();
    }
}