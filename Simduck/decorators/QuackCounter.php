<?php
namespace Simduck\decorators;

use Simduck\Quackable;


class QuackCounter implements Quackable
{
    private $duck;
    private static $count;

    public function __construct(Quackable $d)
    {
        $this->duck = $d;
        self::$count = 1;
    }

    public function quack()
    {
        $this->duck->quack();
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}