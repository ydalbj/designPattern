<?php
namespace Simduck\factories;

use Simduck\GooseAdapter;
use Simduck\Goose;
use Simduck\factories\AbstractDuckFactory;


class GooseDuckFactory extends AbstractGooseFactory
{
    public function createGooseDuck()
    {
        return new GooseAdapter(new Goose());
    }
}